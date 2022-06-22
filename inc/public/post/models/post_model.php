<?php
class post_model extends MY_Model
{
	public $tb_account_manager = "sp_account_manager";
	public $tb_posts = "sp_posts";

	public function __construct()
	{
		parent::__construct();
		$module_path = get_module_directory(__DIR__);

		//
		$this->module_name = get_module_config($module_path, 'name');
		$this->module_icon = get_module_config($module_path, 'icon');
		$this->module_color = get_module_config($module_path, 'color');
		//
		$this->module_img = get_module_config($module_path, 'img');
	}

	public function block_permissions($path = "")
	{
		$dir = get_directory_block(__DIR__, get_class($this));
		return [
			'position' => 10000,
			'name' => $this->module_name,
			'color' => $this->module_color,
			'icon' => $this->module_icon,
			'img' => $this->module_img,
			'id' => str_replace("_model", "", get_class($this)),
			'html' => view($dir . 'pages/block_permissions', ['path' => $path], true, $this),
		];
	}

	public function block_report($path = "")
	{
		$dir = get_directory_block(__DIR__, get_class($this));
		return [
			'tab' => 'all',
			'position' => 100,
			'name' => "All report",
			'color' => "#fa7070",
			'img' => $this->module_img,
			'icon' => "far fa-chart-bar",
			'id' => str_replace("_model", "", get_class($this)),
			'html' => view($dir . 'pages/block_report', ['path' => $path], true, $this),
		];
	}

	public function block_cronjobs($path = "")
	{
		$dir = get_directory_block(__DIR__, get_class($this));
		return [
			'position' => 10000,
			'name' => $this->module_name,
			'color' => $this->module_color,
			'img' => $this->module_img,
			'icon' => $this->module_icon,
			'id' => str_replace("_model", "", get_class($this)),
			'cronjobs' => [
				[
					"name" => __("Post & Schedules"),
					"time" => __("Once/minute"),
					"command_line" => "curl " . get_url(str_replace("_model", "", get_class($this)) . "/cron?key=" . get_option("cron_key", uniqid())) . " >/dev/null 2>&1"
				]
			]
		];
	}

	public function post_validator($data)
	{

		$accounts = $data["accounts"];
		$errors = [];
		$social_post = [];
		$have_errors = false;
		$can_post = false;
		$html_errors = "";
		$count_errors = 0;
		$social_can_posts = [];

		foreach ($accounts as $key => $account) {
			$account_arr = explode("__", $account);
			if (count($account_arr) == 2) {
				$social_network = $account_arr[0];
				$ids = $account_arr[1];

				$model_name = $social_network . "_post/" . $social_network . "_post_model";
				$model_key = ids();


				try {
					$this->load->model($model_name, $model_key);
					$methods = get_class_methods($this->$model_key);

					if (in_array("post_validator", $methods, true)) {
						$result = $this->$model_key->post_validator($data);

						if (!empty($result)) {
							$errors[$social_network] = $result;
							$social_post[] = ucfirst(str_replace("_", " ", $social_network));
						} else {
							$errors[$social_network] = [];
							$social_post[] = ucfirst(str_replace("_", " ", $social_network));
						}
					} else {
						$errors[$social_network] = [];
						$social_post[] = ucfirst(str_replace("_", " ", $social_network));
					}
				} catch (Exception $e) {
				}
			}
		}

		if (!empty($errors)) {
			foreach ($errors as $social => $sub_errors) {
				if (empty($sub_errors)) {
					$can_post = true;
					$social_can_posts[] = $social;
				} else {
					$have_errors = true;

					foreach ($sub_errors as $key => $error) {
						$html_errors .= "<li>{$error}</li>";
					}
					$count_errors++;
				}
			}
		}

		$html_errors = "<p>" . sprintf(__("%d profiles will be excluded from your publication in next step due to errors"),  $count_errors) . " </p><ul>" . $html_errors . "</ul>";

		$message = "";
		$status = "";
		if (!$have_errors) {
			$status = "success";
		} else {
			if ($can_post) {
				$status = "warning";
			} else {
				$social_post = array_unique($social_post);
				$status = "error";
				$message = sprintf(__("Missing content on the following social networks: %s"),  implode(", ", $social_post));
			}
		}

		return array(
			"status"   => $status,
			"errors"   => $html_errors,
			"message"  => $message,
			"can_post" => json_encode($social_can_posts)
		);
	}
	public function idea($topic)
	{

		$getkey = $this->db->select('apikey')->from('apikeys')->where('id', '1')->limit(1)->get()->row();
		$apikey =  $getkey->key;
		$url = "https://api.openai.com/v1/engines/text-davinci-002/completions";

		$data = array(
			"prompt" => "Write a post for" + $topic,
			"temperature" => 0.83,
			"max_tokens" => 483,
			"top_p" => 1,
			"frequency_penalty" => 0,
			"presence_penalty" => 2
		);
		$data_string = json_encode($data);

		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt(
			$curl,
			CURLOPT_HTTPHEADER,
			array("Content-type: application/json", $apikey)
		);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

		$json_response = curl_exec($curl);

		$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

		if (
			$status != 201
		) {
			die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
		}


		curl_close($curl);

		$response = json_decode($json_response, true);
		return $response;
	}

	public function list($time)
	{
		$time_check = explode("-", $time);

		$category = "all";

		$status = 1;

		$team_id = _t("id");
		$timezone = _u('timezone');
		$timezone_number =  tz_list_number($timezone);

		$date_start = $time . " 00:00:00";
		$date_end = $time . " 23:59:59";
		$this->db->query(" SET time_zone = '{$timezone_number}' ");
		$this->db->select("
			from_unixtime(a.time_post,'%m/%d/%Y %H:%i') as time_posts, 
			from_unixtime(a.repost_until,'%Y-%m-%d %H:%i:%s') as repost_untils, 
			a.time_post, 
			a.repost_until, 
			a.team_id, 
			a.social_network, 
			a.category,
			a.type,
			a.id,
			a.ids,
			a.data,
			a.status,
			a.result,
			b.name,
			b.username,
			b.url
		");
		$this->db->from($this->tb_posts . " as a");
		$this->db->join($this->tb_account_manager . " as b", "a.account_id = b.id");

		$cate = "";
		if (strip_tags($category) != "all") {
			$cate = " a.category = '{$category}' AND ";
		}

		$this->db->having(" ( {$cate} a.status = '{$status}' AND from_unixtime(a.time_post,'%Y-%m-%d %H:%i:%s') >= '{$date_start}' AND from_unixtime(a.time_post,'%Y-%m-%d %H:%i:%s') <= '{$date_end}' AND a.repost_until IS NULL AND a.team_id = '{$team_id}' ) ");
		$this->db->or_having(" ( {$cate} a.status = '{$status}' AND from_unixtime(a.time_post,'%Y-%m-%d 00:00:00') <= '{$date_end}' AND from_unixtime(a.repost_until,'%Y-%m-%d 23:59:59') >= '{$date_start}' AND a.team_id = '{$team_id}' ) ");

		$this->db->order_by("a.time_post ASC");
		$query = $this->db->get();

		if ($query->result()) {

			$result = $query->result();
			foreach ($result as $key => $row) {

				$module_path = find_modules($row->category);

				if (!_p($row->category . "_enable")) {
					unset($result[$key]);
					continue;
				}

				if ($module_path) {
					$result[$key]->module_name = get_module_config($module_path, 'name');
					$result[$key]->module_icon = get_module_config($module_path, 'icon');
					$result[$key]->module_color = get_module_config($module_path, 'color');
					$result[$key]->module_img = get_module_config($module_path, 'img');
				} else {
					$result[$key]->module_img = "";

					$result[$key]->module_name = "";
					$result[$key]->module_icon = "";
					$result[$key]->module_color = "";
				}
			}
			return $result;
		}

		return false;
	}
	public function post($data, $social_can_post = false)
	{
		$team_id = _t("id");
		if (isset($data["team_id"])) {
			$team_id = $data["team_id"];
		}
		$post_id = isset($data["id"]) ? $data["id"] : 0;
		$post_type = $data["post_type"];
		$accounts = $data["accounts"];
		$medias = $data["medias"];
		$link = $data["link"];
		$caption = $data["caption"];
		$time_post = $data["time_post"];
		$is_schedule = $data["is_schedule"];
		$interval_per_post = $data["interval_per_post"];
		$repost_frequency = $data["repost_frequency"];
		$repost_until = $data["repost_until"];
		$advance = $data["advance"];

		$count_error = 0;
		$count_success = 0;
		$count_schedule = 0;
		$message = "";
		foreach ($accounts as $key => $account) {
			$result = [];
			$account_arr = explode("__", $account);
			if (count($account_arr) == 2) {
				$social_network = $account_arr[0];
				$ids = $account_arr[1];

				$model_name = $social_network . "_post/" . $social_network . "_post_model";
				$model_key = ids();
				try {

					$this->load->model($model_name, $model_key);
					$methods = get_class_methods($this->$model_key);

					if ((is_array($social_can_post) && in_array($social_network, $social_can_post)) || !$social_can_post) {

						if (in_array("post", $methods, true)) {
							if (!post("ids")) {


								$item = $this->model->get("*", $this->tb_account_manager, "ids = '" . $ids . "' AND status = 1");
								if ($item) {
									$data['account'] = $item;
									$response = $this->$model_key->post($data);

									if (!$post_id) {
										$result = [
											"ids" => ids(),
											"team_id" => $team_id,
											"account_id" => $item->id,
											"social_network" => $social_network,
											"category" => $social_network . "_post",
											"type" => $response["type"],
											"data" => json_encode([
												"caption" => $caption,
												"link" => $link,
												"medias" => $medias,
												"advance" => json_encode($advance)
											]),
											"time_post" => $time_post,
											"time_delete" => NULL,
											"delay" => 0,
											"repost_frequency" => $repost_frequency,
											"repost_until" => $repost_frequency ? $repost_until : NULL,
											"status" => 1,
											"changed" => now(),
											"created" => now()
										];
									}

									if (!$is_schedule) {
										if ($response['status'] == "success") {
											$count_success++;
											$message = $response["message"];
											$result['status'] = 3;
											$result['result'] = json_encode([
												"id" => $response["id"],
												"url" => $response["url"],
												"message" => $response["message"]
											]);

											_ut($social_network . "_post_success_count", _gt($social_network . "_post_success_count", 0, $team_id) + 1, $team_id);
											_ut($social_network . "_post_count", _gt($social_network . "_post_count", 0, $team_id) + 1, $team_id);
											_ut($social_network . "_post_" . $response["type"] . "_count", _gt($social_network . "_post_" . $response["type"] . "_count", 0, $team_id) + 1, $team_id);
										} else {
											$count_error++;
											$message = $response["message"];

											$result['status'] = 4;
											$result['result'] = json_encode([
												"message" => $response["message"]
											]);

											_ut($social_network . "_post_error_count", _gt($social_network . "_post_error_count", 0, $team_id) + 1, $team_id);
											_ut($social_network . "_post_count", _gt($social_network . "_post_count", 0, $team_id) + 1, $team_id);
										}
									} else {
										$count_schedule++;
									}

									if ($post_id) {
										$this->db->update($this->tb_posts, $result, ["id" => $post_id]);
									} else {
										$this->db->insert($this->tb_posts, $result);
									}
								} else {
									$count_error++;
									$message = __("This profile not exist");

									//Update
									if ($post_id) {
										$result['status'] = 4;
										$result['result'] = json_encode([
											"message" => $message
										]);
										$this->db->update($this->tb_posts, $result, ["id" => $post_id]);
									}
								}
							} else {
								$ids = addslashes(post("ids"));
								$item = $this->model->get("*", $this->tb_posts, "ids = '" . $ids . "'");

								if ($item) {
									$account = $this->model->get("*", $this->tb_account_manager, "id = '" . $item->account_id . "'");
									$data['account'] = $account;
									$data['is_schedule'] = 1;
									$response = $this->$model_key->post($data);

									$result = [
										"type" => $response["type"],
										"data" => json_encode([
											"caption" => $caption,
											"link" => $link,
											"medias" => $medias,
											"advance" => json_encode($advance)
										]),
										"time_post" => $time_post,
										"time_delete" => NULL,
										"delay" => 0,
										"repost_frequency" => $repost_frequency,
										"repost_until" => $repost_frequency ? $repost_until : NULL,
										"changed" => now()
									];

									$this->db->update($this->tb_posts, $result, ["id" => $item->id]);
									ms([
										"status" => "success",
										"message" => __("Success")
									]);
								} else {
									ms([
										"status" => "error",
										"message" => __("Can't update this post")
									]);
								}
							}
						} else {
							$count_error++;
							$message = __("Can't post to this social network");

							//Update
							if ($post_id) {
								$result['status'] = 4;
								$result['result'] = json_encode([
									"message" => $message
								]);
								$this->db->update($this->tb_posts, $result, ["id" => $post_id]);
							}
						}
					}
				} catch (Exception $e) {
				}
			} else {
				$count_error++;
				$message = __("This profile not exist");

				//Update
				if ($post_id) {
					$result['status'] = 4;
					$result['result'] = json_encode([
						"message" => $message
					]);
					$this->db->update($this->tb_posts, $result, ["id" => $post_id]);
				}
			}
		}

		if (!$is_schedule) {
			if ($count_error == 0) {
				return [
					"status"  => "success",
					"message" => sprintf(__("Content is being published on %d profiles"), $count_success)
				];
			} else {
				if ($count_error == 1 && $count_success == 0) {
					return [
						"status"  => "error",
						"message" => $message
					];
				} else {
					return [
						"status"  => "error",
						"message" => sprintf(__("Content is being published on %d profiles and %d profiles unpublished"), $count_success, $count_error)
					];
				}
			}
		} else {
			return [
				"status"  => "success",
				"message" => __("Content successfully scheduled")
			];
		}
	}

	
}
