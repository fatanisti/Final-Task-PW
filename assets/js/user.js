$(document).ready(function() {
	$('.dropdown-toggle').click(function() {
		$('.dropdown-menu').slideToggle('fast');
	});
	$('.dropdown-toggle').blur(function () {
		$('.dropdown-menu').slideUp('fast')
	});
})