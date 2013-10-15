$(document).ready(function() {
	$('#facebook').click(function () {
		$('.facebook-column').toggleClass('visible');
		$('#facebook-bubble').toggleClass('facebook-bubble-on');		
		if ($('.twitter-column').hasClass('visible')) {
			$('.twitter-column').removeClass('visible');
		}
		if ($('.instagram-column').hasClass('visible')) {
			$('.instagram-column').removeClass('visible');
		}
		if (!$('.facebook-column').hasClass('visible')) {
			$('#facebook-bubble').removeClass('facebook-bubble-on');
		}
		if ($('#twitter-bubble').hasClass('twitter-bubble-on')) {
			$('#twitter-bubble').removeClass('twitter-bubble-on');
		}	
		if ($('#instagram-bubble').hasClass('instagram-bubble-on')) {
			$('#instagram-bubble').removeClass('instagram-bubble-on');
		}
		if ($('.facebook-column').not('visible')) {
			// figure out the position of "#panel-wrapper" minus 890px
			var catTopPosition = jQuery('.facebook-column').offset().top - 0;
			// scroll to that position
			jQuery('html, body').animate({scrollTop:catTopPosition}, 'slow');
			// stop the link from acting like a normal anchor link
			return false;
		}
    });
	$('#twitter').click(function () {
		$('.twitter-column').toggleClass('visible');
		$('#twitter-bubble').toggleClass('twitter-bubble-on');		
		if ($('.facebook-column').hasClass('visible')) {
			$('.facebook-column').removeClass('visible');
		}
		if ($('.instagram-column').hasClass('visible')) {
			$('.instagram-column').removeClass('visible');
		}
		if (!$('.twitter-column').hasClass('visible')) {
			$('#twitter-bubble').removeClass('twitter-bubble-on');
		}		
		if ($('#facebook-bubble').hasClass('facebook-bubble-on')) {
			$('#facebook-bubble').removeClass('facebook-bubble-on');
		}
		if ($('#instagram-bubble').hasClass('instagram-bubble-on')) {
			$('#instagram-bubble').removeClass('instagram-bubble-on');
		}
		if ($('.twitter-column').not('visible')) {
			// figure out the position of "#panel-wrapper" minus 890px
			var catTopPosition = jQuery('.twitter-column').offset().top - 0;
			// scroll to that position
			jQuery('html, body').animate({scrollTop:catTopPosition}, 'slow');
			// stop the link from acting like a normal anchor link
			return false;
		}		
    });
	$('#instagram').click(function () {
		$('.instagram-column').toggleClass('visible');
		$('#instagram-bubble').toggleClass('instagram-bubble-on');		
		if ($('.twitter-column').hasClass('visible')) {
			$('.twitter-column').removeClass('visible');
		}
		if ($('.facebook-column').hasClass('visible')) {
			$('.facebook-column').removeClass('visible');
		}
		if (!$('.instagram-column').hasClass('visible')) {
			$('#instagram-bubble').removeClass('instagram-bubble-on');
		}		
		if ($('#facebook-bubble').hasClass('facebook-bubble-on')) {
			$('#facebook-bubble').removeClass('facebook-bubble-on');
		}
		if ($('#twitter-bubble').hasClass('twitter-bubble-on')) {
			$('#twitter-bubble').removeClass('twitter-bubble-on');
		}
		if ($('.instagram-column').not('visible')) {
			// figure out the position of "#panel-wrapper" minus 890px
			var catTopPosition = jQuery('.instagram-column').offset().top - 0;
			// scroll to that position
			jQuery('html, body').animate({scrollTop:catTopPosition}, 'slow');
			// stop the link from acting like a normal anchor link
			return false;
		}		
    });
	$('.info-button').click(function () {	
		$('.info').toggleClass('visible');
		$('.info-button').toggleClass('info-button-active');
	});
});