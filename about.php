<?php include 'header.php'; ?>
</div><!-- Close container from header to get full page width -->

	<div class="target-ratio-resize">
	<div class="center-div">
		<p class="titleOverlay">About</p>
		</div>
	</div>

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
	}
	.target-ratio-resize:after {
		content: " ";
		display: block; 
		width: 100%; 
		padding-top: 33.333%; /* 3:1 ratio */
		min-height: 256px;
	}

	.center-div
	{
	  position: absolute;
	  margin: auto;
	  top: 0;
	  right: 0;
	  bottom: 0;
	  left: 0;
	}

	.titleOverlay {
		font-family: "Montserrat Light";
		color: white;
		padding: 10%;
		text-align: center;
		display: inline-block;
		font-size: 1.5em;
		border-width: 5px;
		border: solid;
		border-color: white;


    margin: auto;
	}

</style>