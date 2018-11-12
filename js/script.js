$(function(){
	
//slick slider

$('.slider').slick({
        dots: true,
        infinite: true,
        speed: 800,
        arrows: true,
		nextArrow: ".nxtbtn",
        prevArrow: ".prevbtn",
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade:true
    });

	//counter
	$('.counter').counterUp({
		delay: 1,
		time: 1000
	});
	
//Initialize filterizr with default options**//

    $('.filtr-container').filterizr();
	
 //Simple filter controls
    $('.simplefilter li').click(function() {
        $('.simplefilter li').removeClass('active');
        $(this).addClass('active');
    });
	
//animation scroll js
    $('#header_menu ul li a').on('click', function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 50
                }, 800);
                return false;
            }
        }
    });
//**scroll top button**//

$(window).on('scroll',function(){
	var winscroll = $(window).scrollTop();
	if(winscroll > 120 ){
		$(".scroll_top").fadeIn(1000);
	}else{
		$(".scroll_top").fadeOut(1000);
	}
});

 $(".scroll_top").on('click',function(){
         $('html, body').animate({
             scrollTop:0
         },800)
     });
//**PROGRESS bars**//
var lang = {
  "html": "100%",
  "css": "90%",
  "javascript": "70%",
  "php": "55%",
  "angular": "65%"
};

var multiply = 4;

$.each( lang, function( language, pourcent) {

  var delay = 700;
  
  setTimeout(function() {
    $('#'+language+'-pourcent').html(pourcent);
  },delay*multiply);
  
  multiply++;

});	

//**team area**//

//**team slider**//


$('.team').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.tean_talk',
  dots: false,
  arrows: false,
  centerMode: true,
  focusOnSelect: true,
  centerPadding:'0px',
	autoplay: true,
	autoplaySpeed: 2000,
});

 $('.tean_talk').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.team',
  autoplay: true,
  autoplaySpeed: 3000,
  responsive: [
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 479,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
			},
		  ]
});






	
//**feedback**//

$('.bottom_text').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  nextArrow:false,
  prevArrow:false ,
});
	
	

	
//blog area**//

$('.blog_slide').slick({
  slidesToShow: 3,
  slidesToScroll: 2,
  autoplay: true,
  autoplaySpeed: 2000,
  nextArrow:false,
  prevArrow:false ,
  responsive: [
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 479,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			  ]
});

//modal//
// // var options = {
		// // videoId: 'avP5d16wEp0',
		// // start: 5
	// // };
// // $('.bs-example-modal-lg').modal(options);

//partner//

$('.partner_slider').slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  nextArrow:false,
  prevArrow:false ,
  responsive: [
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 6,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 575,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 479,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				}
			  ]
});
//** api maps **//
var googleMapSelector = $('#map'),
		myCenter = new google.maps.LatLng(23.461985,91.186698);

	function initialize() {
		var mapProp = {
			center: myCenter,
			zoom: 17,
			scrollwheel: false,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("map"), mapProp);
		var marker = new google.maps.Marker({
			position: myCenter,
			animation: google.maps.Animation.BOUNCE,
			icon: 'img/location.png'
		});
		marker.setMap(map);
	}
	if (googleMapSelector.length) {
		google.maps.event.addDomListener(window, 'load', initialize);
	}
//** pre loader**//

 
 $(window).on('load',function(){
        $('.preloader_min').delay(800).fadeOut(1000);
        $('.preloader').delay(800).fadeOut(1000);
});

	
	
	
	
	
		
});



	




	