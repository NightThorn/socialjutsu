<?php
class wimax_model extends MY_Model {

	public function __construct(){
		parent::__construct();
	}
	public function insertfeedback($email, $business, $query)
	{
		$insert = $this->db->query(
			'INSERT INTO contact (email, business, query) VALUES (?, ?, ?)',
			array($email, $business, $query)
		);
		return $insert;
	}
}
