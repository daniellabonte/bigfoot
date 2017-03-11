





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

		/**
		 * ToggleFilters - 
		 *
		 * Opens or closes the filters menu depending on menu's current visibility
		 */
		function ToggleFilters() {
			if ( $('.hide-filters').is(":hidden")) {
				$('.hide-filters').slideDown( "slow" );
			} else {
				HideOptions();
			}
		}

		/**
		 * HideOptions - 
		 *
		 * Hides the filters menu
		 */
		function HideOptions() {
			$('.hide-filters').slideUp("fast");
		}

		/**
		 * CheckChecks
		 *
		 * Compares checked checkboxes to unchecked and sets the button to 
		 * whichever functionality is most appropriate
		 */
		function CheckChecks(){
			//counter for chkboxes
			var count = 0;
			//loop through all chkboxes
			$('.chkFilter').each(function(){
				//increase counter for chkd, decrease for unchkd
				(this.checked) ? count++ : count--;
			});

			//more chkd: button unchecks all, more unchkd: button checks all
			(count >= 0) ? $('#btnCheck').attr('value', 'Uncheck All') : $('#btnCheck').attr('value', 'Check All');
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




		/**
		 * When chkbx is toggle, this finds ratio of chkd to non chkd
		 */
		$('.chkFilter').change(function(){
			CheckChecks()
		});


		/**
		 * Button click to either check or uncheck all boxes
		 */
		$('#btnCheck').click(function(){
			//button is set to uncheck
			if (this.value == "Uncheck All"){
				//loop through all chkboxes and uncheck them
				$('.chkFilter').each(function(){
					this.checked = false;
				});
			}
			//button is set to check
			else {
				//loop through all chkboxes and check them
				$('.chkFilter').each(function(){
					this.checked = true;
				});
			}

			//get the check ratio to set button
			CheckChecks();
		});

	/*****************************************************************FILTERS*/

	});