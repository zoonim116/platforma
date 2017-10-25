$( document ).ready(function() {
	new WOW().init();

	var headerHeight = $('.header').innerHeight()+1;
	$(".header__search-form").css("top", headerHeight);

	$(".header__menu-search").click(function() {
	  $(this).toggleClass('open');
	  $('.header__search-form').toggleClass('open');
	})

	$('.nav-item.dropdown').hover(
	    function(){ $('.dropdown-menu').toggleClass('show') }
	);


	CalcDistance();
	window.addEventListener("resize", function(){
		CalcDistance();
	});

	/*add gallery*/

	$('.actualitate-slider').slick({
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 3,
	  prevArrow: $('.slide-control .control-prev'),
	  nextArrow: $('.slide-control .control-next'),
	   responsive: [
		    {
		      breakpoint: 992,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
	});

	$('.documents-slider').slick({
	  infinite: true,
	  slidesToShow: 4,
	  slidesToScroll: 4,
	   responsive: [
		    {
		      breakpoint: 992,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
	});

	carouselNormalization();
	
	
});

function CalcDistance() {
		var headerOffsetLeft = $('.header .container').offset().left + 15;
		$(".slider .carousel-caption").css("left", headerOffsetLeft);
		$(".slide__control").css("left", headerOffsetLeft);
}

function carouselNormalization() {
		var items = $('.carousel-inner .carousel-item'), //grab all slides
		    heights = [], //create empty array to store height values
		    tallest; //create variable to make note of the tallest slide

		if (items.length) {
		    function normalizeHeights() {
		        items.each(function() { //add heights to array
		            heights.push($(this).height()); 
		        });
		        tallest = Math.min.apply(null, heights); //cache largest value
		        items.each(function() {
		            $(this).css('max-height',tallest + 'px');
		        });
		    };
		    normalizeHeights();

		    $(window).on('resize orientationchange', function () {
		        tallest = 0, heights.length = 0; //reset vars
		        items.each(function() {
		            $(this).css('min-height','0'); //reset min-height
		        }); 
		        normalizeHeights(); //run it again 
		    });
		}
}