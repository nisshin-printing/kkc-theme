jQuery(document).ready(function($) {
	// JAVASCRIPT FOR THE PICKER FUNCTION
	$('.js-color-pickme').each(function() {
		var identifier = $(this).attr('rel');
		$(identifier).wpColorPicker();
	});



	// MANAGE CLEAR THE IMAGE INPUT ON CLICK
	$('.js-clear-input').click(function() {
		$(this).parents('.nis-table_data').find('input').val('');
	});
	
	
	// INSERT MEDIA
	var _dtdsh_custom_media = true,
			_orig_send_attachment = wp.media.editor.send.attachment;
	// open the media manager on click
	$(document.body).on('click.tgmOpenMediaManager', '.js-toggle-imgmng', function(){
		// set the variables
		var el = $(this),
				insertinto = el.attr('rel'),
				send_attachment_bkp = wp.media.editor.send.attachment,
				_dtdsh_custom_media = true;
		// send the needed info to the media editor
		wp.media.editor.send.attachment = function(props, attachment){
			if (_dtdsh_custom_media) {
				el.val(attachment.url);
			} else {
				return _orig_send_attachment.apply( el, [props, attachment] );
			}
		}
		// open the media editor
		wp.media.editor.open(el);
		return false;

	});
});

