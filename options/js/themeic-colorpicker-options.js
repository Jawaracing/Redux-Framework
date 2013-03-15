// as the page loads, call these scripts
jQuery(document).ready(function() {
	jQuery('.color').colorpicker();
	jQuery('.add-on').click(function() {
		jQuery('.color').css({opacity: 1});
	});
}); /* end of as page load scripts */