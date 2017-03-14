	<?php 
		$title = "Product";
		$date = "2017-03-13";
		$filename = "product.php";
		$description = "A page to display the info for an individual product.";
	?>

	<?php include 'header.php'; ?>

	<?php  
		$sql = "SELECT * FROM tblProducts WHERE itemID = " . $_GET['id'];
		$result = pg_query(db_connect(), $sql);
		$arrInfo = pg_fetch_all($result);

		print_r($arrInfo);

	?>

	<?php include 'footer.php'; ?>