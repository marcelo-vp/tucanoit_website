/******************************************************************************************

............................BASE SCRIPTS FOR TUCANO TECNOLOGIA............................

******************************************************************************************/

// Global variables
let windowWidth = window.innerWidth;
let windowHeight = window.innerHeight;
let navSlideWidth;
const $closeNavButton = $('<div id="close-nav"><svg class="icon"><use xlink:href="#close"/></svg></div>');
const $openNavButton = $('<div id="open-nav"><div>menu</div><svg class="icon"><use xlink:href="#menu"/></svg></div>');
const backToTopButton = document.getElementById("back-to-top");


// Inserting open-nav button in the DOM
$("#home-link").before($openNavButton);



/************************ TOGGLE SLIDING NAV FOR SMALL SCREENS **************************/

// Function to hide #main-nav and show body's scrollbar
const hideMainNav = () => {
	$("#main-nav").hide();
	$("body").css("overflow-y","scroll");
}

// Function to hide body's scrollbar
const hideBodyScroll = () => {
	$("body").css("overflow","hidden");
}

// When the #open-nav button is clicked
$($openNavButton).click(function(){
	$(this).after($closeNavButton);
	$(this).detach();
	// Assign window's width and #main-nav initial left position to variables
	windowWidth = $(window).width();
	navSlideWidth = -windowWidth + "px";
	// Set #main-nav left position and display properties before animation
	$("#main-nav").css({
		"left":navSlideWidth,
		"display":"block"
	});
	// Show #main-nav using slide animation
	$("#main-nav").animate(
		{left:0},
		300,
		hideBodyScroll
	);
});

// When the #close-nav button is clicked
$($closeNavButton).click(function(){
	$(this).after($openNavButton);
	$(this).detach();
	// Assign window's width and #main-nav final left position to variables
	windowWidth = $(window).width();
	navSlideWidth = -windowWidth + "px";
	// Hide #main-nav using slide animation
	$("#main-nav").animate(
		{left:navSlideWidth},
		300,
		hideMainNav
	);
});



/************************** NAVIGATION WITH SCROLLBAR ADJUSTMENT **************************/

// Navigate to #services section from #to-services link on header
const linkToServices = document.getElementById("to-services");
const sectionsWrapper = document.getElementsByClassName("sections-wrapper")[0];
const topbarHeight = document.getElementsByClassName("top-bar")[0].clientHeight;

linkToServices.addEventListener('click', () => {
	const servicesPositionY = sectionsWrapper.offsetTop - topbarHeight;
	$('html,body').animate({
		scrollTop:servicesPositionY
	},600);
});



/*********************************** SCROLL BACK TO TOP ***********************************/

// Scroll page back to top with animate
const scrollToTop = () => {
	$('html,body').animate({
		scrollTop:0
	},400);
}

// Add click listener to back-to-top button
backToTopButton.addEventListener("click",scrollToTop);

// Check window scrollTop value on scroll event
$(window).scroll(function(){
	const scrollValue = $(this).scrollTop();
	// if scroll is bigger than desired value, show the button
	if (scrollValue>600) {
		$(backToTopButton).css("display","inline-block");
	}
	// else hide the button
	else {
		$(backToTopButton).css("display","none");
	}
});



/********************************** INITIALIZE CAROUSELS **********************************/

// Portfolio
$(".portfolio-carousel").slick({
	adaptiveHeight:true,
	dots:true,
	slidesToShow:3,
	responsive: [
		{
			breakpoint:701,
			settings: {
				slidesToShow:2
			}
		},
		{
			breakpoint:601,
			settings: {
				slidesToShow:1
			}
		},
		{
			breakpoint:471,
			settings: {
				slidesToShow:1,
				arrows:false
			}
		}
	]
});

// Testimonials
$(".testimonials-carousel").slick({
	adaptiveHeight:true,
	dots:true,
	slidesToShow:2,
	responsive: [
		{
			breakpoint:800,
			settings: {
				slidesToShow:1
			}
		},
		{
			breakpoint:471,
			settings: {
				slidesToShow:1,
				arrows:false
			}
		}
	]
});



/***************************** STICKS HEADER TO TOP ON PAGE SCROLL *****************************/

// Sticks top-bar on scroll
$('.top-bar').sticky({
	responsiveWidth: true,
	zIndex: 1000
});

// Behaviour when top-bar sticks and unsticks
$('.top-bar').on('sticky-start', function () {
	// Gets window inner width when top bar sticks
	const windowWidth = window.innerWidth;
	$(this).css({
		'background-color':'rgba(38,50,56,0.95)', /*blue-grey 900*/
		'width':'100%'
	});
	if (windowWidth > 600) {
		$(this).css({
			'padding-top':'8px',
			'padding-bottom':'5px'
		});
		$('#home-link').css({
			'position':'relative',
			'top':'2px'
		});
	}
}).on('sticky-end', function (){
	$(this).css({
		'background-color':'transparent',
		'padding-top':'13px',
		'padding-bottom':'0'
	});
	$('#home-link').css('top','0');
});