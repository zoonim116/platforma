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
		  ]
	});

	$('.cat-news-real .row').slick({
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 3,
	  adaptiveHeight: true,
	  prevArrow: $('.cat-news-real .slide-control .control-prev'),
	  nextArrow: $('.cat-news-real .slide-control .control-next'),
	   responsive: [
		    {
		      breakpoint: 992,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
	});

	$('.cat-news-social-items').slick({
	  infinite: true,
	  slidesToShow: 2,
	  slidesToScroll: 1,
  	  variableWidth: true,
	  prevArrow: $('.cat-news-social .slide-control .control-prev'),
	  nextArrow: $('.cat-news-social .slide-control .control-next')
	});

	$('.cat-news-educate-items').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  prevArrow: $('.cat-news-educate .slide-control .control-prev'),
	  nextArrow: $('.cat-news-educate .slide-control .control-next')
	});

	$('.cat-news-life-items').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  prevArrow: $('.cat-news-life .slide-control .control-prev'),
	  nextArrow: $('.cat-news-life .slide-control .control-next')
	});

	/*end gallery*/

	carouselNormalization();


	/*tabs*/

	//Default Action
	$(".tabs-item").hide();
	$("ul.tabs li:first").addClass("active").show();
	$(".tabs-item:first").show();

	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tabs-item").hide();
		var activeTab = $(this).find("a").attr("href");
		$(activeTab).fadeIn();
		return false;
	});

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

