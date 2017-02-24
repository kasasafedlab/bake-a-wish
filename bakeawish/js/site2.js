
$(document).ready(function() { 

       carouselStyles();

    });

function carouselStyles() {
	//$(".cycle-carousel-wrap").css("white-space", "normal");
	$(".recent-posts-container").css("white-space", "normal");
	console.log("hey!");

 	// $(window).resize(function(){location.reload();});

	//Desktop Version
	//if ($(window).width() > 800){    
      
		$('#mySlideshow').cycle({
			    speed: 600,
			    manualSpeed: 200,
			   	fx: "carousel",
			   	carouselVisible: 3,
			   	prev: "#prev",
			   	next: "#next",
			   	slides: "> div",
			   	carouselFluid: true,
			   	pager: "#pager"
			});
	// }

	// //Mobile Version
	// if ($(window).width() <= 800){    
      
		$('#mySlideshowMobile').cycle({
			    speed: 600,
			    manualSpeed: 200,
			   	fx: "carousel",
			   	carouselVisible: 1,
			   	prev: "#prevM",
			   	next: "#nextM",
			   	slides: "> div",
			   	carouselFluid: true,
			   	pager: "#pageM"
			});
	 //}


		
	
}
// data-cycle-fx="carousel" 
// 		 		data-cycle-slides="> div"
// 		    	data-cycle-timeout=0
// 		    	data-cycle-carousel-visible=3
// 				data-cycle-carousel-fluid=true
// 				data-cycle-next="#next"
// 				data-cycle-prev="#prev"
// 				data-cycle-pager="#pager"