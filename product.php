	<?php 
		$title = "Product";
		$date = "2017-03-13";
		$filename = "product.php";
		$description = "A page to display the info for an individual product.";
	?>

	<?php include 'header.php'; ?>

	<?php  
		if (isset($_GET['id'])) {
			$sql = "SELECT * FROM tblProducts WHERE itemID = " . $_GET['id'];
			$result = pg_query(db_connect(), $sql);
			$arrInfo = pg_fetch_assoc($result);

			//TODO vv remove dubug output lines here vv
			// foreach ($arrInfo as $key => $value)
			// 	echo "<b>" . $key . "</b><br>" . $value . "<br><br>";
			//TODO ^^ remove dubug output lines here ^^

			if ($arrInfo == Array())
				header('location:products.php');

		}
		else {
			header('location:products.php');
		}

		if ($arrInfo['stockamount'] > 5000) {
			$inStock = "<p>In stock... way too may!</p>";
		}
		else if ($arrInfo['stockamount'] > 20) {
			$inStock = "<p>In stock</p>";
		}
		else if ($arrInfo['stockamount'] > 0) {
			$inStock = "<p>Limited supply</p>";
		}
		else{
			$inStock = "<p>Out of stock</p>";
		}
		

	?>




  <div class="row">
    <div class="col-sm">
      <img src="images/products/<?php echo $arrInfo['itemimage']; ?>" width="100%">
    </div>
    <div class="col col-sm-6">
      <h3 style="margin: 0 0; line-height: 1;"><?php echo "<br>".$arrInfo['itemname']; ?></h3>
			<p><?php echo "<br>" . $arrInfo['itemdescription']; ?></p>
			<p><?php echo "<br>$" . $arrInfo['itemprice']; ?></p>

			<?php echo $inStock; ?>
    </div>
    <div class="col-12 col-md-auto" style="height: 150px;">
      <div align="center">buy it now</div>
    </div>
  </div>






	<?php include 'footer.php'; ?>