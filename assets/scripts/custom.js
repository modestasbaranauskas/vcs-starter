"use strict";
// Slider Testimonials
$(document).ready(function(){
	$('.quotes-container').owlCarousel({
		items: 1,
		margin: 0,
		loop: true,
		mouseDrag: true,
		touchDrag: true,
		autoplay: true,
		autoplayTimeout: 7000
	});
});

// Slider Hero
$(document).ready(function(){
	$('.hero-section').owlCarousel({
		items: 1,
		margin: 0,
		loop: true,
		mouseDrag: true,
		touchDrag: true,
		autoplay: true,
		autoplayTimeout: 7000
	});
});

// Gallery
$('.gallery-container .gallery-column > a').fancybox({
	loop: true,
	keyboard: true,
	protect: true,
	animationEffect: "zoom-in-out",
	transitionEffect: "zoom-in-out",
});

// Gallery filter
$(document).ready(function(){
	$('.filters').click(function(e){
		e.preventDefault();
		var category = $(this).data('rel');
		// alert(category);
		$(".gallery-column").each(function(key, gallery_item){
		if(category == 'all'){
			$(this).removeClass('hide');
		}else{
			$(this).addClass('hide');
			 if(category == $(this).data('filter')){
				$(this).removeClass('hide');
			 }
		}

		});
	});

});

// Burger menu
$(document).ready(function(){
	$(".burger").click(function(){
		$(".main-nav").toggleClass("show");
	});
});

// Burger menu off after link click
$(document).ready(function(){
	$(".js-scroll-trigger").click(function(){
		$(".main-nav").removeClass("show");
	});
});

// Active Menu
$('.nav-menu-list, .filter-nav').on('click', 'a', function(){
	$('.nav-menu-list a.active, .filter-nav a.active').removeClass('active');
	$(this).addClass('active');
});

// Smooth scrolling using jQuery easing
$(function() {
    $('.js-scroll-trigger').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
	});

});

// Back To Top Button
if ($('.back-to-top').length) {
    var scrollTrigger = 900, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('.back-to-top').addClass('show');
            } else {
                $('.back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('.back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
};	