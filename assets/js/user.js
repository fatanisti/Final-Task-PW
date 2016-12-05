$(document).ready(function() {
	$('.dropdown-toggle').click(function() {
		$('.dropdown-menu').slideDown('fast');
	});
	$('.dropdown-toggle').blur(function () {
		$('.dropdown-menu')slideUp('fast')
	});
})