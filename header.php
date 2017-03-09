<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<!-- ICON -->
	<link rel="shortcut icon" type="image/x-icon" href="./images/BIGfoot.ico" /> 

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- jQUERY -->
	<!-- not sure if i need this as well as bootstrap jQuery -->
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

	<!-- PAGINATION -->
	<script src="js/pagination/paginga.jquery.js"></script>
	
	<!-- LOCAL CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/buttons.css"/>


	<!-- JAVASCRIPT -->
	<script src="js/functions.js"></script>

	<!-- TITLE -->
	<title>BIGfoot Sock Co.</title>

	<!-- METADATA -->
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="Author"      content="Kelley Scales, Ryan Ramkalawan, Joey Lees and Daniel Labonte">
	<meta name="Filename"    content="<?php echo $filename; ?>">
	<meta name="Date"        content="<?php echo $date; ?>">
	<meta name="Description" content="<?php echo $description; ?>"> 
</head>
<body>

	<?php 
	//require_once './includes/constants.php';
	//require_once './includes/db.php';

	//session_start();
	//ob_start();
	?>

	
	<div id="wrap"> <!-- Entire site in id=wrap -->
		<div id="main"> <!-- Header and body in id=main -->
			<div class="container">

				<header>
<!-- ######## NAVBAR ######## -->
					<div class="hideBig"><center><h1 class="logoBig">BIGfoot</h1></center></div>
					<nav class="navbar navbar-default" role="navigation">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand logoSmall hideSmall " href="javascript:void(0)">BIGfoot</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-center" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-center">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="products.php">Products</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="who-we-are.php">Who We Are</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</header>