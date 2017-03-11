





/*HEADER.PHP******************************************************************/ 
	/*dynamic navbar**********************************************************/
		//TODO This is not yet functional, i just found this code for future use
		$(".nav a").click(function(){
			 $(".nav").find(".active").removeClass("active");
			 $(this).parent().addClass("active");
		});

/*INDEX.PHP*******************************************************************/
	
/**/

	


		

/*jQUERY**********************************************************************/
	$(document).ready(function(){

	/*FILTERS*****************************************************************/
		// Button Hover
		$('#filter-button').hover(function() {
			$(this).css('cursor','pointer');
		});

		// Button Click
		$('#filter-button').click(function(){
			ToggleFilters();
		});

		// Show/Hide the filter options
		function ToggleFilters() {
			if ( $('.hide-filters').is(":hidden")) {
				$('.hide-filters').slideDown( "slow" );
			} else {
				$('.hide-filters').slideUp("fast");
			}
		}


	/*****************************************************************FILTERS*/

	});