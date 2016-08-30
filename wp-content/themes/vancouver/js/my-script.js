// JavaScript Document

jQuery(document).ready(function(){
	 jQuery('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
	
/************************OWL____________*/	
 
  jQuery('.sposer').owlCarousel({
    loop:false,
    margin:0,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:true
        },
        600:{
            items:4,
			nav:true
        },
        1000:{
            items:5,
            nav:false,
            loop:false
        }
      }
   });
   
 /*****************LOADER***////
 
 
jQuery(window).load(function () {
            // Animate loader off screen
            jQuery(".se-pre-con").fadeOut("slow");;
        });	   
 
 
 
 });