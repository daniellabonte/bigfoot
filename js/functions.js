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

		/**
		 * CheckboxChange - 
		 * Saves the chaeckboxes in localcStorage any time they are changed
		 */
		function CheckboxChange(){
			// Empty object to store checkboxes states
			var arrCheckState = {};

			// Loop through checkboxes and store their state
			for (var i = 0; i < chkbx.length; i++)
				arrCheckState[i] = chkbx[i].checked;

			// Save the checkbox state in localStorage
			localStorage.setItem("arrCheckState", JSON.stringify(arrCheckState));
		}

		/**
		 * SetCheckBoxes
		 * Gets the checkboxes states from local storage and sets them accordingly
		 */
		function SetCheckboxes(){
			// Get their checked state from the localStorage
			var arrCheckState = JSON.parse(localStorage.getItem("arrCheckState"));

			// Set each checkbox to the appropriate state
			if (arrCheckState != null)
				for (var i = 0; i < chkbx.length; i++)
					chkbx[i].checked = arrCheckState[i];			
		}

		// Array of filter checkboxes 
		var chkbx = document.getElementsByClassName("chkFilter");
		// Set the checked properties from SetCheckBox function (uses localStorage)
		SetCheckboxes();

		// Button Hover
		$('#filter-button').hover(function(){
			$(this).css('cursor','pointer');
		});

		// Button Click
		$('#filter-button').click(function(){
			ToggleFilters();
			CheckboxChange();
		});

		// Calls HideOptions when any part of the page is clicked
		$(document).click(function(){
		  HideOptions();
		});

		// Safe to click inside the dropdown filter options
		$("#filter-div, #filter-button").click(function(e){
		  e.stopPropagation();
		});

		// Call this to load the button
		CheckChecks();

		/**
		 * When chkbx is toggle, this finds ratio of chkd to non chkd
		 */
		$('.chkFilter').change(function(){
			CheckChecks()
			CheckboxChange();
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
			CheckboxChange();
		});
	/*****************************************************************FILTERS*/


	/*PRODUCT DISPLAYS**********************************************************/
		$('.div-click').hover(function() {
			$(this).css('cursor','pointer');
		});

		$('.div-click').click(function(){window.open("product.php?id=" + this.id, "_self");});
	/**********************************************************PRODUCT DISPLAYS*/


	});











