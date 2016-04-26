
var j = jQuery.noConflict();

(function($){
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
	j(document).on('ready',function(){

		/*|----------------------------------------------------------------------|*/
		/*|-----  CAROUSEL HOME -----|*/
		/*|----------------------------------------------------------------------|*/
		j("#carousel-home").carousel({
			interval : 3000,
		});

		/*|----------------------------------------------------------------------|*/
		/*|-----  CAROUSEL SERVICIOS - PORTADA   ------|*/
		/*|----------------------------------------------------------------------|*/
		var carousel_servicios = j("#owl-carousel-servicios").owlCarousel({
			items          : 4,
			lazyLoad       : false,
			loop           : true,
			margin         : 12,
			nav            : false,
			autoplay       : true,
			responsiveClass: true,
			mouseDrag      : false,
			autoplayTimeout: 2500,
			fluidSpeed     : 250,
			smartSpeed     : 250,
			responsive:{
		        320:{
		            items:1
		        },
		      	1024:{
		            items:4
		        },
	    	}
		});


		/*|°°------------- Flechas del carousel ---------------°°|*/
		j(".arrow-service-carousel").on('click',function(e){ e.preventDefault(); });
		//prev carousel
		j("#arrow-service-carousel--prev").on('click',function(e){ 
			carousel_servicios.trigger('prev.owl.carousel' , [500] );
		});
		//next carousel
		j("#arrow-service-carousel--next").on('click',function(e){ 
			carousel_servicios.trigger('next.owl.carousel' , [500] );
		});

		/*|----------------------------------------------------------------------|*/
		/*|-----  CAROUSEL ARTICULOS - SECCIONES GENERALES  ------|*/
		/*|----------------------------------------------------------------------|*/
		j("#carousel-articles").jCarouselLite({
			vertical: true,
			auto    : 2500,
			speed   : 1500,
			visible : 3,	
  	});



	});
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
})(jQuery);