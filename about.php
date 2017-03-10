<?php include 'header.php'; ?>
</div><!-- Close container from header to get full page width -->

	<div class="target-ratio-resize"></div>
		
	
<center><p class="titleOverlay">about</p></center>
	
<div class="container"><!-- Open container for page content -->

<!-- CONTENT HERE -->

<?php include 'footer.php'; ?>



<style type="text/css">
	
	.target-ratio-resize {
		max-width: 3840px; 	/* actual img width */
		max-height: 1280px;	/* actual img height */
		background-image: url('images/slide-07.jpg');
		background-size: cover;
		background-position: center;
	} .target-ratio-resize:after {
		content: " ";
		display: block; 
		width: 100%; 
		padding-top: 33.333%; /* 3:1 ratio */
		min-height: 256px;
	}

	.titleOverlay {
		font-family: "Montserrat Light";
		color: white;
		padding-left: 3em;
		padding-right: 3em;
		padding-top: 1em;
		padding-bottom: 1em;
		text-align: center;
		display: inline-block;
		font-size: 1.5em;
		border-width: 5px;
		border: solid;
		border-color: white;

		position: relative;
		/*margin-top: -4em;*/

		transform: translate(0,-5em);
	}

</style>