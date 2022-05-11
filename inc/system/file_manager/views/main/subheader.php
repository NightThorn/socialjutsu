<?php $media_info = get_ci_value("media_info"); ?>
<div class="fm-progress-bar"></div>

<div class="subheader-main">
	<h3 class="title"><i class="text-info <?php _e($module_icon) ?>"></i> <?php _e($module_name) ?></h3>
	<span class="separator"></span>
	<div class="small"> <?php _e(sprintf(__("%s Media Items"), $media_info->count)) ?></div>
</div>

<div class="subheader-toolbar">
	<div class="search-container" id="search-container">
		<form class="input-group" id="unsplash">
			<input type="text" placeholder="Search pics on Unsplash™" id="search" name="search">
			<button type="submit"><i class="fas fa-search"></i></button>
		</form>
		<div style="width: 210px; overflow: auto; position: absolute;" class="result" id="result"></div>

	</div>
	<div class="btn-group mr-2" role="group">

		<button type="button" class="btn btn-secondary fileinput-button"><i class="fas fa-upload"></i> <?php _e('Upload') ?><input id="fileupload" type="file" name="files[]" multiple=""></button>
		<?php if (_p('file_manager_google_drive') && get_option('file_manager_google_drive_status', 0) == 1) { ?>
			<button type="button" class="btn btn-secondary btn-google-drive" id="btn-google-drive" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="<?php _e('Google Drive') ?>"><i class="fab fa-google-drive"></i></button>
		<?php } ?>
		<?php if (_p('file_manager_dropbox') && get_option('file_manager_dropbox_status', 0) == 1) { ?>
			<button type="button" class="btn btn-secondary btn-dropbox" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="<?php _e('Dropbox') ?>"><i class="fab fa-dropbox"></i></button>
		<?php } ?>
		<?php if (_p('file_manager_onedrive') && get_option('file_manager_onedrive_status', 0) == 1) { ?>
			<button type="button" class="btn btn-secondary btn-onedrive" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="<?php _e('OneDrive') ?>"><i class="fas fa-cloud"></i></button>
		<?php } ?>
		<button type="button" class="btn btn-secondary btn-upload-from-url" data-text="<?php _e('Enter media url') ?>"><i class="fas fa-link"></i></button>
	</div>

	<div class="btn-group" role="group">
		<button type="button" class="btn btn-secondary fm-select-all" data-text="">
			<span class="check"><i class="fas fa-check"></i> <?php _e('Select All') ?> </span>
			<span class="uncheck"><i class="fas fa-times"></i> <?php _e('Deselect All') ?> </span>
		</button>
		<button type="button" class="btn btn-secondary fm-delete-all"><i class="far fa-trash-alt"></i></button>
	</div>
	<!-- <div class="btn-group" role="group">
	    <button type="button" class="btn btn-secondary"><i class="fas fa-th-large"></i></button>
	    <button type="button" class="btn btn-secondary"><i class="fas fa-list"></i></button>
	</div> -->
</div>

<script>
	$("#unsplash").submit(function(event) {
		event.preventDefault();
		$("#result").empty();
		var search = $("#search").val();
		var url = "https://api.unsplash.com/search/photos?query=" + search + "&client_id=6g3NDyeZ0vzEr2U90O8vBLORi-564yPp15vif6V8YR8";
		$.ajax({
			method: 'GET',
			url: url,
			success: function(data) {
				data.results.forEach(photo => {

					$("#result").append(`
					
					<img width="100" height="100" src="${photo.urls.regular}"/>
					
					`)
				})
			}
		})
	})

	$(document).on("click", function(event) {
		console.log("click on document");

		var $trigger = $(".search-container");
		if ($trigger !== event.target && !$trigger.has(event.target).length) {
			$(".result").hide();
		}
	});
</script>