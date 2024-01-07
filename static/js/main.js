$(document).ready(function() {
	// Header Scroll
	$(window).on('scroll', function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 50) {
			$('#header').addClass('fixed');
		} else {
			$('#header').removeClass('fixed');
		}
	});

	// Waypoints
	$('.work').waypoint(function() {
		$('.work').addClass('animated fadeIn');
	}, {
		offset: '75%'
	});
	$('.download').waypoint(function() {
		$('.download .btn').addClass('animated tada');
	}, {
		offset: '75%'
	});

	// Fancybox
	$('.work-box').fancybox();

	
	// Page Scroll
	var sections = $('section')
		nav = $('nav[role="navigation"]');

	$(window).on('scroll', function () {
	  	var cur_pos = $(this).scrollTop();
	  	sections.each(function() {
	    	var top = $(this).offset().top - 76
	        	bottom = top + $(this).outerHeight();
	    	if (cur_pos >= top && cur_pos <= bottom) {
	      		nav.find('a').removeClass('active');
	      		nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
	    	}
	  	});
	});
	nav.find('a').on('click', function () {
	  	var $el = $(this)
	    	id = $el.attr('href');
		$('html, body').animate({
			scrollTop: $(id).offset().top - 75
		}, 500);
	  return false;
	});

	// Mobile Navigation
	$('.nav-toggle').on('click', function() {
		$(this).toggleClass('close-nav');
		nav.toggleClass('open');
		return false;
	});	
	nav.find('a').on('click', function() {
		$('.nav-toggle').toggleClass('close-nav');
		nav.toggleClass('open');
	});

	$('.fancybox').fancybox({
		openEffect: "none",
		closeEffect: "none"
	});

});



function show_info(text){
		   jQuery('#helpDiv0').removeClass('opacity0_tran').addClass('opacity1_tran');
		   jQuery("#help1").html(text);
		   jQuery("#help_buttons").html('');
		   setTimeout(function(){ 
			 jQuery('#helpDiv0').removeClass('opacity1_tran').addClass('opacity0_tran');
		   }, 3000);
	};

function helper(text){ 
				jQuery("#helpDiv0").removeClass( "opacity0_tran" ).addClass( "opacity1_tran" );
				jQuery("#help1").html(text);
				jQuery("#help_buttons").html('<button id="but_help2" class="centered button_green but_help1" onclick=" jQuery(\'#helpDiv0\').removeClass(\'opacity1_tran\').addClass(\'opacity0_tran\')" >Ok</button>');
		 };












































