jQuery(document).ready(function() {

console.log("we are in custom scripts")

	jQuery(".res-btn").click(function(){
		jQuery(".booking-widget").slideToggle(100);
	});

	jQuery(".res-btn-close").click(function(){
		jQuery(".booking-widget").slideToggle(100);
	});



	jQuery(".mobile-nav-trigger").click(function(){
		jQuery(".mobile-nav-frame").slideToggle();
	});



	jQuery(".more-toggle").click(function(){
		jQuery(".more-frame").toggle(100);
		jQuery(".more-toggle .plus").toggle();
		jQuery(".more-toggle .minus").toggle();
	});



	// jQuery("#check-in").datepicker({
	// 	minDate: 0,
	// 	showAnim: 'fadeIn',
	// 	dateFormat: 'mm/dd/yy',
	// 	onSelect: function(dateStr) {
	// 		var date = jQuery(this).datepicker('getDate');
	// 		if (date) {
	// 			date.setDate(date.getDate() + 1);
	// 			jQuery("#check-out").datepicker("option", "minDate", date);
	// 		}
	// 	}
	// });
	// jQuery("#check-out").datepicker({
	// 	showAnim: 'fadeIn',
	// 	dateFormat: 'mm/dd/yy'
	// });
	// jQuery(".datepicker").datepicker({
	// 	minDate: 0,
	// 	showAnim: 'fadeIn',
	// 	dateFormat: 'mm/dd/yy',
	// });



	function sticky_menu(){
		if(jQuery(window).scrollTop() > 10){
			jQuery('body').addClass('nav-fixed');
		}else{
			jQuery('body').removeClass('nav-fixed');
		}
	}

	sticky_menu();
	jQuery(window).scroll(function(){
		sticky_menu();
	});

	function moveTranslate(){
		if(jQuery(window).width() < 901){
		var translateBlocks = jQuery('li.translate').detach();
		          jQuery('ul.mobile-nav li:first').before(translateBlocks);
		} else if(jQuery(window).width() > 901){
		var translateBlocks = jQuery('li.translate').detach();
		          jQuery('ul.top-nav li:last').after(translateBlocks);
		}

	}

		moveTranslate();



		jQuery(window).resize(function() {
		moveTranslate();
		});


	jQuery(".reservations-toggle").click(function(){
		if(jQuery(window).width() > 1000){
			jQuery(".reservations-frame").slideDown();
			return false;
		}
	});

	jQuery(".reservations-close").click(function(){
		jQuery(".reservations-frame").slideUp();
	});

	// jQuery("#check-in-datepicker").datepicker({
	// 	minDate: 0,
	// 	showAnim: 'fadeIn',
	// 	dateFormat: 'mm/dd/yy',
	// 	onSelect: function(dateStr) {
	// 		var date = jQuery(this).datepicker('getDate');
	// 		if (date) {
	// 			date.setDate(date.getDate() + 1);
	// 			jQuery("#check-out-datepicker").datepicker("option", "minDate", date);
	// 		}
	// 	}
	// });

	// jQuery("#check-out-datepicker").datepicker({
	// 	showAnim: 'fadeIn',
	// 	dateFormat: 'mm/dd/yy'
	// });

});