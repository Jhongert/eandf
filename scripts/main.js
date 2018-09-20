$(document).ready(function() {
    //$(() => { // Advanced shortcut

    // MENU NAVIGATION ************************************************
    
    // Main Menu click function
    $('#hbMenu').click(function() {
        $('.menu').fadeIn( "fast" )
        $('#closeMenu').css({'display' : 'none'})
    })
    
    $('#closeMenu').click(function() {
        $('.menu').fadeOut( "fast" )
        $('#hbMenu').css({'display' : 'block'})
        $('#closeMenu').css({'display' : 'none'})
	})

    $('#hbMenu').click(function() {
        $('#closeMenu').css({'display' : 'block'})
        $('#hbMenu').css({'display' : 'none'})
    })

    // Hover to reveal menu 2
    $('.menu li').mouseenter(function() {
        $(this).find('.menu2').fadeIn( "fast" )
    })

    // Hover to hide menu 2
    $('.menu li').mouseleave(function() {
        $(this).find('.menu2').fadeOut( "fast" )
    })

    // Hover to reveal menu 3
    $('.menu .menu2 li').mouseenter(function() {
        $(this).find('.menu3').fadeIn( "fast" )
    })

    // Hover to hide menu 3
    $('.menu .menu2 li').mouseleave(function() {
        $(this).find('.menu3').fadeOut( "fast" )
    })

     // SIDEBAR MENU ************************************************
     $('.sidebarMenu2').hide()

     // Hover to reveal menu 2
    $('.menuSidebar li').click(function() {
        $(this).find('.sidebarMenu2').slideToggle( "slow" )
    })

    // BACK TO TOP FUNCTIONALITY ************************************************

    $('#backToTop').hide()

    $(window).scroll(function(){
		// Toggles the back to top button on scroll position
		if ($(this).scrollTop() > 450  && $(window).width() > 767){
			$('#backToTop').fadeIn()
		} else {
			$('#backToTop').fadeOut()
		}
	}); // end of function

	// click function to animate to the top
	$('#backToTop').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 800)
		return false;
    })

    

    // HERO SERVICES FUNCTIONALITY ************************************************

    $('.serviceBox').css({'bottom' : '-205px'})
    $('.serviceContent').css({'opacity' : '0'})
    $( '.service' ).css("width", "33%")

    $( '.service' ).hover(
        function() {
            $( '.service' ).css("width", "30%")
            $( this ).css("width", "39%")
            //animates the box up, fades the text in and swaps the arrow image
            $(this).find('.serviceBox').animate({'bottom' : '0'})
            $(this).find('.serviceContent').delay(300).animate({opacity: '1'})
            $(this).find('.triangleIcon').attr('src', 'images/tri-orange.svg')
        }, function() {
            $( '.service' ).css("width", "33%")
            //animates the box down, fades the text out and swaps the arrow image
            $(this).find('.serviceBox').delay(100).animate({'bottom' : '-205px'})
            $(this).find('.serviceContent').animate({opacity: '0'})
            $(this).find('.triangleIcon').attr('src', 'images/tri.svg')
        }
    )

    // LOCATION DROPDOWNS ************************************************

    $('.locationAddress').hide()
    $('#cityMap2, #cityMap3, #cityMap4, #cityMap5').hide()

    // Click function for address dropdowns
    $('.locationCity').click(function() {
        $(this).find('.locationAddress').slideToggle( "slow" )
        $('.locationCity').not($(this)).find('.locationAddress').slideUp( "slow" )
        $(this).find('h4').toggleClass("activeCity")
        $('.locationCity').not($(this)).find('h4').removeClass("activeCity")
    })

    // Click functions to show maps
    $('#city1').click(function() {
        $('#cityMap1').show()
        $('#cityMap2, #cityMap3, #cityMap4, #cityMap5').hide()
    })

    $('#city2').click(function() {
        $('#cityMap2').show()
        $('#cityMap1, #cityMap3, #cityMap4, #cityMap5').hide()
    })

    $('#city3').click(function() {
        $('#cityMap3').show()
        $('#cityMap1, #cityMap2, #cityMap4, #cityMap5').hide()
    })

    $('#city4').click(function() {
        $('#cityMap4').show()
        $('#cityMap1, #cityMap3, #cityMap2, #cityMap5').hide()
    })

    $('#city5').click(function() {
        $('#cityMap5').show()
        $('#cityMap1, #cityMap3, #cityMap4, #cityMap2').hide()
    })

    // SERVICE PROBLEM DROPDOWNS ************************************************

    $('.problemInfo').hide()

    $('.problem').click(function() {
        $(this).find('.problemInfo').slideToggle( "slow" )
        $(this).find('.infoArrowRotate').toggleClass('rotate')
        $(this).find('.infoArrowRotate').toggleClass('rotate-reset')
    })

    
   
})