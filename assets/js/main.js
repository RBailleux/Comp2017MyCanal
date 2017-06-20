jQuery(document).ready(function(){
	//Slider
	$('#exclu-slider').slick({
	  dots: false,
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 3,
	  centerMode: true,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	    	centerMode: false,
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	  ]
	});
	//PRICING
	jQuery('.pricing-container').click(function(){
		pricingShadow(this);
	});
	jQuery('.pricing-container').hover(function(){
		pricingShadow(this);
	});
	jQuery('.pricing-container').focus(function(){
		pricingShadow(this);
	});

	//GAME
	var topHeight = jQuery('#customPoster h1').outerHeight()+'px';
	jQuery('#customPoster .custom-right .examples-main.images').each(function(){
		jQuery(this).css('top', topHeight);
	});
	jQuery('#customPoster .custom-left').css('padding-top', topHeight);
	jQuery('#customPoster .examples-main img').each(function(){
		jQuery(this).hide();
	});
	jQuery('#customPoster .diamond').each(function(){
		jQuery(this).css('width',jQuery(this).outerWidth()+100+'px')
	})
	
	fadeInExamples();
	
	
		
	//jQuery('#customPoster').load('./game/userPoster.php');
});
function fadeInExamples(){
	var durationAnimation = 1500;
	
	jQuery('#customPoster .examples-main.images img').each(function(){
		jQuery(this).hide();
	});
	jQuery('#customPoster .examples-main.words .word').each(function(){
		jQuery(this).hide();
	});
	
	jQuery('[data-serie="guyane"] img[data-step="1"]').fadeIn(durationAnimation, function(){ //1500
		jQuery('[data-serie="guyane"] img[data-step="2"]').fadeIn(durationAnimation, function(){ //1500
			jQuery('[data-serie="guyane"] img[data-step="3"]').fadeIn(durationAnimation, function(){ //1500
				setTimeout(function(){ //3500
					jQuery('[data-serie="guyane"] img').each(function(){
						jQuery(this).hide();
					});
					jQuery('[data-serie="borgia"] img[data-step="1"]').fadeIn(durationAnimation, function(){ //1500
						jQuery('[data-serie="borgia"] img[data-step="2"]').fadeIn(durationAnimation, function(){ //1500
							jQuery('[data-serie="borgia"] img[data-step="3"]').fadeIn(durationAnimation, function(){ //1500
								setTimeout(function(){ //3500
									jQuery('[data-serie="borgia"] img').each(function(){
										jQuery(this).hide();
									});
									jQuery('[data-serie="revenants"] img[data-step="1"]').fadeIn(durationAnimation, function(){ //1500
										jQuery('[data-serie="revenants"] img[data-step="2"]').fadeIn(durationAnimation, function(){ //1500
											jQuery('[data-serie="revenants"] img[data-step="3"]').fadeIn(durationAnimation, function(){ //1500
												setTimeout(function(){ //3500
													fadeInExamples();
												}, durationAnimation+2000);
											})
										})
									});
								},durationAnimation+2000)
							})
						})
					});
				},durationAnimation+2000)
			})
		})
	});
	
	jQuery('[data-serie="guyane"] .word[data-step="1"]').fadeIn(durationAnimation, function(){ //1500
		jQuery('[data-serie="guyane"] .word[data-step="2"]').fadeIn(durationAnimation/2, function(){ //750
			jQuery('[data-serie="guyane"] .word[data-step="3"]').fadeIn(durationAnimation/2, function(){ //750
				jQuery('[data-serie="guyane"] .word[data-step="4"]').fadeIn(durationAnimation); //1500
				setTimeout(function(){	//3500
					jQuery('[data-serie="guyane"] .word').each(function(){
						jQuery(this).hide();
					});
					jQuery('[data-serie="borgia"] .word[data-step="1"]').fadeIn(durationAnimation, function(){
						jQuery('[data-serie="borgia"] .word[data-step="2"]').fadeIn(durationAnimation/2, function(){
							jQuery('[data-serie="borgia"] .word[data-step="3"]').fadeIn(durationAnimation/2, function(){
								jQuery('[data-serie="borgia"] .word[data-step="4"]').fadeIn(durationAnimation);
								setTimeout(function(){
									jQuery('[data-serie="borgia"] .word').each(function(){
										jQuery(this).hide();
									});
									jQuery('[data-serie="revenants"] .word[data-step="1"]').fadeIn(durationAnimation, function(){
										jQuery('[data-serie="revenants"] .word[data-step="2"]').fadeIn(durationAnimation/2, function(){
											jQuery('[data-serie="revenants"] .word[data-step="3"]').fadeIn(durationAnimation/2, function(){
												jQuery('[data-serie="revenants"] .word[data-step="4"]').fadeIn(durationAnimation);
											})
										})
									});
								},durationAnimation*2+2000)
							})
						})
					});
				},durationAnimation*2+2000)
			})
		})
	});
}

function pricingShadow(element){
	jQuery('.pricing-container').each(function(){
		jQuery(this).removeClass('active');
	})
	jQuery(element).addClass('active');
}

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}