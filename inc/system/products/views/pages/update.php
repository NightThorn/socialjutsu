<div class="subheadline wrap-m">

	<div class="sh-main wrap-c">
		<div class="sh-title text-info fs-18 fw-5"><i class="far fa-edit"></i> <?php _e('Update') ?></div>
	</div>
	<div class="sh-toolbar wrap-c">
		<div class="btn-group" role="group">
			<a class="btn btn-label-info actionItem" data-result="html" data-content="column-two" data-history="<?php _e(get_module_url()) ?>" data-call-after="Layout.inactive_subsidebar();" href="<?php _e(get_module_url()) ?>">
				<i class="fas fa-chevron-left"></i> <?php _e('Back') ?>
			</a>
		</div>
	</div>

</div>

<div class="m-t-10">
	<form class="actionForm" enctype="multipart/form-data" action="<?php _e(get_module_url('save/' . segment(4))) ?>" data-redirect="<?php _e(get_module_url()) ?>">

		<div class="row">
			<div class="col-md-6">
				<form>

					<div class="form-group">
						<label for="title"><?php _e('Product Title') ?></label>
						<input type="text" class="form-control" id="title" name="title">
					</div>
					<div class="form-group">
						<label for="text"><?php _e('Text') ?></label>
						<input type="text" class="form-control" id="text" name="text">
					</div>
					<div class="form-group">
						<label for="link"><?php _e('Link') ?></label>
						<input class="form-control" id="link" name="link">
					</div>
					<div class="form-group">
						<label for="category"><?php _e('Category') ?></label>
						<select name="category">
							<option value="">Select...</option>
							<option value="home">Home</option>
							<option value="beauty">Beauty</option>
							<option value="tech">Tech</option>
							<option value="tools">Tools</option>
							<option value="pets">Pets</option>
							<option value="kids">Kids</option>
							<option value="outdoors">Sports/Outdoors</option>
							<option value="kitchen">Kitchen</option>
						</select>
					</div>
					<div class="form-group">
						<button type="button" class="btn btn-secondary fileinput-button"><i class="fas fa-upload"></i> <?php _e('Upload') ?><input id="fileupload" type="file" name="files[]" multiple=""></button>
					</div>
					<div class="input-group">
						<input type="text" class="form-control" id="image" name="image" value="<?php _e(get_data($result, 'image')) ?>">
						<div class="input-group-append">
							<button class="btn btn-info btnOpenFileManager" data-id="image" data-select="single" type="button"><i class="far fa-folder-open"></i></button>
						</div>
					</div>

					<button type="submit" name="submit" class="btn btn-primary"><?php _e('Submit') ?></button>
				</form>
			</div>
		</div>

	</form>

</div>