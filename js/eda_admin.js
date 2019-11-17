jQuery(document).ready(function($) {

	var mediaUploader;

	$('#upload_button').on('click',function(e) {
		e.preventDefault();
		if (mediaUploader) {
			mediaUploader.open();
			return;
		}
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose a profile picture from your computer',
			button: {
				text: 'Choose picture'
			},
			multiple: false
		});

		mediaUploader.on('select', function() {
			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#profile_pic_input').val(attachment.url);
			$('#profile_picture_preview').css('background-image','url('+attachment.url+')');
		});
		mediaUploader.open();

	});

	$('#remove_picture').on('click',function(e) {
		//e.preventDefault();
		var answer = confirm("Are you sure you want to remove Profile Picture");
		if (answer == true) {
			$('#profile_pic_input').val('');
			$('.eda-general-form').submit();
		}
		return;
	});
	

});