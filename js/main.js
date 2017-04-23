// Homepage Responsive Background Image

$(document).ready(function () {

	$.backstretch("http://memoriesbyjmf.com/nateshonor/wp-content/uploads/2017/04/dog_adoption.png");

});

// Homepage Hamburger Menu Hover Effect

$(document).ready(function () {

	$('#top_line, #middle_line, #bottom_line').hover(function() {
		$('#top_line').addClass('top_line_hover');
	}, function() {
		$('#top_line').removeClass('top_line_hover');
	});


	$('#top_line, #middle_line, #bottom_line').hover(function() {
		$('#middle_line').addClass('middle_line_hover');
	}, function() {
		$('#middle_line').removeClass('middle_line_hover');
	});


	$('#top_line, #middle_line, #bottom_line').hover(function() {
		$('#bottom_line').addClass('bottom_line_hover');
	}, function() {
		$('#bottom_line').removeClass('bottom_line_hover');
	});

});

// Open and Close Hamburger Menu

$(document).ready(function () {

	$('#hamburger, #top_line, #middle_line, #bottom_line').click(function() {
		$('#hidden_menu').animate({left: '50%'});
		$('#title_block').animate({top: '100%'});
	});


	$('#close_menu').click(function() {
		$('#hidden_menu').animate({left: '-50%'});
		$('#title_block').animate({top: '0%'});
	});

});

$(document).ready(function () {

	$('#close_menu').click(function() {

		$('#hidden_menu').animate({left: '-50%'});

	});

});

// Side Scroll Images Based on this Tutorial: https://css-tricks.com/how-to-create-a-horizontally-scrolling-site/

$(document).ready(function () {

	$(function() {
		$("#page-wrap").wrapInner("<table cellspacing='20'><tr>");
		$(".post").wrap("<td>");
	});

});

