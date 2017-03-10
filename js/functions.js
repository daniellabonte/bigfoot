/*HEADER.PHP******************************************************************/	
	/*dynamic navbar**********************************************************/
		//TODO This is not yet functional, i just found this code for future use
		$(".nav a").on("click", function(){
		   $(".nav").find(".active").removeClass("active");
		   $(this).parent().addClass("active");
		});

/*INDEX.PHP*******************************************************************/
	
/**/
$('window').click(console.log("hi"));
