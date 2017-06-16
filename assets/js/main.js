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
	//Game
	//jQuery('#customPoster').load('./game/userPoster.php');
});
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