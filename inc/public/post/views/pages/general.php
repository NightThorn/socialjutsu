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
		<form class="actionLogin" action="<?php _e(get_module_url('topic', $this)) ?>" method="post">

			<div class="form-group">
				<input class="form-control" type="text" id="topic" name="topic" placeholder="<?php _e("Enter a topic") ?>">
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

			</div>
			<button class="btn wimax-btn w-100" type="submit"><?php _e("Get Post Idea") ?></button>

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