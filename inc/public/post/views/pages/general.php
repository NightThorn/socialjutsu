<script>
	$('#idea').submit(function() {
		$(this).ajaxSubmit({
			type: "POST",
			//set the data type
			dataType: 'json',
			data: {
				topic: topic
			},
			url: 'inc/public/post/controllers/idea.php', // target element(s) to be updated with server response 
			cache: false,
			//check this in Firefox browser
			success: function(response) {
				console.log(response);
				document.getElementById("ideagenerator").innerHTML = response;

			},
			error: onFailRegistered
		});
		return false;
	});
</script>
<div class="post post-create">

	<?php _e($block_post_type, false) ?>

	<div class="post-content m-b-15">

		<div class="item-post-type" data-type="photo">
			<?php _e($file_manager_photo, false) ?>
		</div>

		<div class="item-post-type" data-type="video">
			<?php _e($file_manager_video, false) ?>
		</div>

		<div class="item-post-type" data-type="link">
			<label class="text-uppercase"><?php _e('Link url') ?></label>
			<?php _e($block_link, false) ?>
			<label class="text-uppercase"><?php _e('Thumbnail') ?></label>
			<?php _e($file_manager_link, false) ?>
		</div>

		<?php _e($block_caption, false) ?>

	</div>

	<?php _e($block_schedule, false) ?>
	<div>
		<form class="actionLogin" action="">
			<div class="form-group">
				<input class="form-control" type="text" name="topic" placeholder="<?php _e("Enter a topic") ?>">
			</div>

			<button class="btn wimax-btn w-100" id="idea" type="submit"><?php _e("Get Post Idea") ?></button>
		</form>
		<div class="caption m-t-15">
			<textarea id="ideagenerator" disabled="true" class="form-control post-message"></textarea>
			<div class="caption-toolbar">
				<div class="item">
					<div class="count-word"><i class="fas fa-text-width"></i> <span>0</span></div>
				</div>
			</div>
		</div>
	</div>
</div>