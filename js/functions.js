





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
		$('#filterButton').click(function() { ShowFilters() });
		
		$('#filterButton').hover(function() {
			$(this).css('cursor','pointer');
    });

		function ShowFilters() {
			console.log("Clicked yo");
		};
	/*****************************************************************FILTERS*/

	});