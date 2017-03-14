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
















<!-- <div class="container"> -->
  <div class="row justify-content-md-center">
    <div class="col col-lg-2" style="background-color: yellow; height: 150px;">
      Sock image
    </div>
    <div class="col-12 col-md-auto" style="background-color: blue; height: 150px;">
      Description
    </div>
    <div class="col col-lg-2" style="background-color: green; height: 150px;">
      Buy it now
    </div>
  </div>
  <div class="row">
    <div class="col" style="background-color: #555; height: 150px;">
      1 of 3
    </div>
    <div class="col col-md-6" style="background-color: #999; height: 150px;">
      Variable width content
    </div>
    <div class="col-12 col-md-auto" style="background-color: #ccc; height: 150px;">
      3 of 3
    </div>
  </div>
<!-- </div> -->





















	<br><br>

	<div class="row justify-content-center">
		<div class="col-sm-6" style="padding: 0;">
			<img src="images/products/<?php echo $arrInfo['itemimage']; ?>" width="100%">
		</div>
		<div class="col-sm-6" style="padding: 0; background-color: red;">
			<h3 style="margin: 0 0; line-height: 1;"><?php echo "<br>".$arrInfo['itemname']; ?></h3>
			<p><?php echo "<br>" . $arrInfo['itemdescription']; ?></p>
			<p><?php echo "<br>$" . $arrInfo['itemprice']; ?></p>

			<?php echo $inStock; ?>

		</div>
	</div>




	<?php include 'footer.php'; ?>