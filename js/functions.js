





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
		/*This is for the filters dropdown menu on products.php*/
		
		// Show/Hide the filter options
		function ToggleFilters() {
			if ( $('.hide-filters').is(":hidden")) {
				$('.hide-filters').slideDown( "slow" );
			} else {
				HideOptions();
			}
		}

		// Hides the dropdown filter options
		function HideOptions() {
			$('.hide-filters').slideUp("fast");
		}

		// Button Hover
		$('#filter-button').hover(function() {
			$(this).css('cursor','pointer');
		});

		// Button Click
		$('#filter-button').click(function(){
			ToggleFilters();
		});

		// Calls HideOptions when any part of the page is clicked
		$(document).click(function(){
		  HideOptions();
		});

		// Safe to click inside the dropdown filter options
		$("#filter-div, #filter-button").click(function(e){
		  e.stopPropagation();
		});
	/*****************************************************************FILTERS*/

	});