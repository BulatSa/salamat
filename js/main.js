/***********************
 отправка формы в php BEGIN
***********************/
$(document).ready(function(){

	$(".ajax-form").on("submit", function(event) {
		var form = $(this);
		var send = true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function(){
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
			if ($(this).is('select')){
				if ($(this).val() === null) {
					$(this).addClass('error');
					send = false;
				}
			}
			if ($(this).is('input[type="checkbox"]')){
				if ($(this).prop('checked') !== true) {
					$(this).addClass('error');
					send = false;
				}
			}
		});

		$(this).find("[data-req='true']").on('focus', function(){
			$(this).removeClass('error');
		});

		var form_data = new FormData(this);

		$("[data-label]").each(function () {
			var input_name = $(this).attr('name');
			var input_label__name = input_name + '_label';
			var input_label__value = $(this).data('label');
			form_data.append(input_label__name,input_label__value)
		});

		if (send === true) {
			$.ajax({
				type: "POST",
				async: true,
				url: "/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				success: (function(result) {
					console.log(result);
					$.fancybox.close();
					$.fancybox.open({src  : '#modal-thanks'});
					setTimeout(function() {$.fancybox.close();},4500);
					form[0].reset();
				})
			});
		}
	});
});
/***********************
 отправка формы в php END
***********************/


/***********************
 Header Menu BEGIN
 ***********************/

var headerSubMenuWrap = $('.header__submenu-wrap');
var headerMenu = $('.header__menu');
var headerSubMenu = $('.header__submenu');

function subMenuPosition() {
	headerSubMenuWrap.each(function (index) {
		//console.log($('body').width());
		var menuWidth = $('.header-bottom').outerWidth();
		$(this).outerWidth($('body').width());
		$(this).offset({left:0});
		$(this).find('.header__submenu').outerWidth(menuWidth);
	});
}


$(document).ready(function(){
	subMenuPosition();
	setTimeout(function(){
		subMenuPosition();
	}, 500);
});

$(window).on('resize', function(){
	subMenuPosition();
	setTimeout(function(){
		subMenuPosition();
	}, 100);
});


/***********************
 Header Menu END
 ***********************/


/***********************
Basket Transition BEGIN
***********************/
function basketTransition() {
	if($(window).width() > 770) {
		var $header = $('.header-sec');
		var $basket = $('.header__basket');
		var headerHeight = $header.innerHeight();
		//console.log($(document).scrollTop());
		if($(document).scrollTop() > headerHeight) {
			$basket.addClass('fixed');
		} else {
			$basket.removeClass('fixed');
		}
		window.requestAnimationFrame(basketTransition);
	}

}
if($(window).width() > 770) {
	basketTransition();
}
$(window).on('resize', function(){
	basketTransition();
});
/***********************
Basket Transition END
***********************/


/***********************
Mobile Menu BEGIN
***********************/
function openMenu($menuLink, $menu) {
	$menuLink.toggleClass('active');
	$menu.toggleClass('active');
}
$('.header-mobile__menu-link').on('click', function(event){
	event.preventDefault();
	openMenu($(this),$('.header-mobile__menu'));
});

function openSubMenu($menuLink) {
	$('.header-mobile__sub-catalog-link').not($menuLink).removeClass('active');
	$('.header-mobile__sub-catalog-link').not($menuLink).next('.header-mobile__sub-catalog').slideUp();
	$menuLink.toggleClass('active');
	$menuLink.next('.header-mobile__sub-catalog').slideToggle();
}

$('.header-mobile__sub-catalog-link').on('click', function (event) {
	event.preventDefault();
	openSubMenu($(this));
});
/***********************
Mobile Menu END
***********************/


/***********************
Slick BEGIN
***********************/
$('#big-slider').on('init', function(){
	$('.big-slider-dots').wrap("<div class='big-slider-dots-wrap container'></div>");
});

$('#big-slider').slick({
	adaptiveHeight: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	//autoplay: true,
	infinite: false,
	nextArrow: '.big-slider-nav .i-nav-right',
	prevArrow: '.big-slider-nav .i-nav-left',
	dots: true,
	dotsClass: 'big-slider-dots'
});

$('#offers-special').slick({
	adaptiveHeight: true,
	slidesToShow: 4,
	slidesToScroll: 4,
	lazyLoad: 'progressive',
	infinite: false,
	prevArrow: "<button type='button' class='slick-prev'></button>",
	nextArrow: "<button type='button' class='slick-next'></button>",
	responsive: [
		{
			breakpoint: 1040,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		},
		{
			breakpoint: 780,
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

$('#offers-new').slick({
	adaptiveHeight: true,
	slidesToShow: 4,
	slidesToScroll: 4,
	infinite: false,
	lazyLoad: 'progressive',
	prevArrow: "<button type='button' class='slick-prev'></button>",
	nextArrow: "<button type='button' class='slick-next'></button>",
	responsive: [
		{
			breakpoint: 1040,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3
			}
		},
		{
			breakpoint: 780,
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

$('.detail__gallery').slick({
	adaptiveHeight: true,
	slidesToShow: 3,
	slidesToScroll: 3,
	infinite: false,
	lazyLoad: 'progressive',
	initialSlide: 1,
	prevArrow: "<button type='button' class='slick-prev'></button>",
	nextArrow: "<button type='button' class='slick-next'></button>",
	responsive: [
		{
			breakpoint: 680,
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

$('.sertificats__list').slick({
	adaptiveHeight: true,
	slidesToShow: 6,
	slidesToScroll: 6,
	infinite: false,
	lazyLoad: 'progressive',
	prevArrow: "<button type='button' class='slick-prev'></button>",
	nextArrow: "<button type='button' class='slick-next'></button>",
	responsive: [
		{
			breakpoint: 1040,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 5
			}
		},
		{
			breakpoint: 680,
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
/***********************
 Slick END
***********************/


/***********************
Masonry BEGIN
***********************/
$(document).ready(function(){
	var $masonryGrid = $('.masonry-grid').masonry({
		// options...
	});
	// layout Masonry after each image loads
	$masonryGrid.imagesLoaded().progress(function(){
		$masonryGrid.masonry('layout');
	});
});
/***********************
Masonry END
***********************/


/***********************
Faq BEGIN
***********************/
$(document).ready(function(){
	$('.faq__item-questions').slideUp();
	$('.faq__item-question-link').next('.user-content').slideUp();
	$('.faq__item-title').on('click', function(){
		$('.faq__item-title').not($(this)).closest('.faq__item').removeClass('active');
		$('.faq__item-title').not($(this)).next('.faq__item-questions').slideUp();
		$('.faq__item-title').not($(this)).removeClass('active');

		$(this).closest('.faq__item').toggleClass('active');
		$(this).toggleClass('active');
		$(this).next('.faq__item-questions').slideToggle();
	});
	$('.faq__item-question-link').on('click', function (e) {
		e.preventDefault();
		$('.faq__item-question-link').not($(this)).next('.user-content').slideUp();
		$('.faq__item-question-link').not($(this)).removeClass('active');

		$(this).next('.user-content').slideToggle();
		$(this).toggleClass('active');
	});
});
/***********************
Faq END
***********************/


/***********************
FitVid BEGIN
***********************/
$(document).ready(function(){
	// Target your .container, .wrapper, .post, etc.
	$(".user-content").fitVids();
});
/***********************
FitVid END
***********************/


/***********************
Input mask BEGIN
***********************/
$(function($){
	$("input[type='tel']").mask("+7 (999) 999-99-99");
});
/***********************
Input mask END
***********************/


/***********************
 fancybox BEGIN
 ***********************/
function init_fancy() {
	$('.fancy').fancybox({
		fullScreen: false,
		slideShow: false,
		thumbs: false,
		transitionEffect : "slide",
		autoFocus : false,
		backFocus : false,
		animationDuration : 400
	});
	$('.fancy-map').fancybox({
		toolbar: false,
		smallBtn : true,
		transitionEffect : "slide",
		autoFocus : false,
		backFocus : false,
		animationDuration : 400
	});
}
function init_fancy__video() {
	$('.fancy-video').fancybox({
		toolbar: false,
		smallBtn : true,
		fullScreen: false,
		thumbs: false,
		youtube: {
			controls : 1,
			showinfo : 0,
			autoplay: 1
		},
		onUpdate : function( instance, current ) {
			var width,
				height,
				ratio = 16 / 9,
				video = current.$content;
			if ( video ) {
				video.hide();
				width  = current.$slide.width() - 30;
				height = current.$slide.height() - 100;
				if ( height * ratio > width ) {
					height = width / ratio;
				} else {
					width = height * ratio;
				}
				video.css({
					width  : width,
					height : height
				}).show();
			}
		}
	});
}
$(document).ready(function(){
	init_fancy();
	init_fancy__video();
});
/***********************
 fancybox END
 ***********************/


/***********************
 Прокрутка к секциям BEGIN
 ***********************/
$(document).ready(function(){
	$('.scrollto').click(function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top;
		$('html,body').stop().animate({scrollTop:destination}, 1000);
		return false;
	});
});
/***********************
 Прокрутка к секциям END
 ***********************/