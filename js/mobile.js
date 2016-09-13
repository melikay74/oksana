$(document).ready(function() {

	isMobile = false;
	if ( $(".topnav ul").css("display")=="none") {
	  isMobile = true;
	}

	if (isMobile == true) {

		$(".has-sub").click(function() {
			$(this).toggleClass("subactive");
		});

		$( ".toggle" ).on( "click", function() {
  			$(".topnav ul").slideToggle();
  			$(".topnav ul ul").hide();
		});

		$( "#navbar li.products.has-sub a" ).on( "click", function() {
			$(".topnav ul li.products ul").toggle();
		});

		$( "#navbar li.about.has-sub a" ).on( "click", function() {
			$(".topnav ul li.about ul").toggle();
		});

		$( "#navbar li.treatments.has-sub a" ).on( "click", function() {
			$(".topnav ul li.treatments ul").toggle();
		});
		
	}
});  //end ready





