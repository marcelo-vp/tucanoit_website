/******************************************************************************************

............................BASE SCRIPTS FOR TUCANO TECNOLOGIA............................

******************************************************************************************/


// Global variables
var windowWidth = $(window).width();
var windowHeight = $(window).height();
var navSlideWidth;
var $closeNavButton = $('<div id="close-nav"><svg class="icon"><use xlink:href="#close"/></svg></div>');
var $openNavButton = $('<div id="open-nav"><div>menu</div><svg class="icon"><use xlink:href="#menu"/></svg></div>');
var backToTopButton = document.getElementById("back-to-top");


// Inserting open-nav button in the DOM
$("#home-link").before($openNavButton);



/************************ TOGGLE SLIDING NAV FOR SMALL SCREENS **************************/


// Function to hide #main-nav and show body's scrollbar
var hideMainNav = function(){
	$("#main-nav").hide();
	$("body").css("overflow-y","scroll");
}

// Function to hide body's scrollbar
var hideBodyScroll = function(){
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
var linkToServices = document.getElementById("to-services");
var sectionsWrapper = document.getElementsByClassName("sections-wrapper")[0];
var topbarHeight = document.getElementsByClassName("top-bar")[0].clientHeight;

linkToServices.onclick = function() {
	var servicesPositionY = sectionsWrapper.offsetTop - topbarHeight;
	$('html,body').animate({
		scrollTop:servicesPositionY
	},600);
}



/*********************************** SCROLL BACK TO TOP ***********************************/


// Scroll page back to top with animate
var scrollToTop = function(){
	$('html,body').animate({
		scrollTop:0
	},400);
}

// Add click listener to back-to-top button
backToTopButton.addEventListener("click",scrollToTop);

// Check window scrollTop value on scroll event
$(window).scroll(function(){
	var scrollValue = $(this).scrollTop();
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
				slidesToShow:1,
				arrows:false
			}
		}
	]
});