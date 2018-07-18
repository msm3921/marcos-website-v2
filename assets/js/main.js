jQuery(document).ready(function(){

	jQuery(function() {
	
	// Cache the Window object
	var jQuerywindow = jQuery(window);
	
	// Parallax Backgrounds
	// Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641
	
	jQuery('section[data-type="background"]').each(function(){
		var jQuerybgobj = jQuery(this); // assigning the object
		
		jQuery(window).scroll(function() {
		
			// Scroll the background at var speed
			// the yPos is a negative value because we're scrolling it UP!								
			var yPos = -(jQuerywindow.scrollTop() / jQuerybgobj.data('speed'));
			
			// Put together our final background position
			var coords = '50% '+ yPos + 'px';
			
			// Move the background
			jQuerybgobj.css({ backgroundPosition: coords });
			
		}); // end window scroll
	});
	
});

     // jQuery('.marcos-dropdown').hover(
     //     //function(){ jQuery('.sub-menu').addClass('drop-ul')},
     //     function(){ jQuery(this).addClass('open')},
     //     //function(){ jQuery('.sub-menu').removeClass('drop-ul')},
     //     function(){ jQuery(this).removeClass('open')}
     //      )

// run test on initial page load
    checkSize();

// run test on resize of the window
    jQuery(window).resize(checkSize);
});

//Function to the css rule
function checkSize(){
    if (jQuery(".navbar-toggle").css("display") != "none" ){
         jQuery('.marcos-dropdown').click(
         function(){ jQuery('.sub-menu').toggleClass('drop-ul')}
         //function(){ jQuery('.sub-menu').removeClass('drop-ul')},         
          )
    }
///IF I WANT IF BACK TO HOW IT WAS COPY MAIN.JS FROM STAGING
    else if (jQuery('ul').hasClass('drop-ul')){
         jQuery('.marcos-dropdown').click(
         //function(){ jQuery('.sub-menu').toggleClass('drop-ul')},
         function(){ jQuery('.drop-ul').toggleClass('hideMe')}        
          )
    }








};





