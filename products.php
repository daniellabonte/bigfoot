	<?php 
		$title = "Products";
		$date = "2017-03-10";
		$filename = "products.php";
		$description = "A page to filter and display all the products.";
	?>

	<?php include 'header.php'; ?>
	<br>

<!-- FILTER MENU -->
	<!-- Filter Button -->
	<div class="row justify-content-start">
		<!-- <div  class="col-sm-3"></div> -->
		<div id="filter-button" class="col-sm-2 push-sm-2 filter-shadow" align="center">Filter</div>
	</div>

	<!-- Filter Options -->
	<div class="row justify-content-center">
		<div class="col-sm-3"></div>
		<div id="filter-div" class="col-sm-9 filter-shadow hide-filters">
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="row">
						<div class="col-sm-4">
						<b>Gender</b>
							<ul>
								<li><input type="checkbox" class="chkFilter" name="gender[]" value="male">Male</li>
								<li><input type="checkbox" class="chkFilter" name="gender[]" value="female">Female</li>
								<li><input type="checkbox" class="chkFilter" name="gender[]" value="children">Children</li>
							</ul>
						</div>
						<div class="col-sm-4 divide-bars">
							<div class="row">
								<div class="col-sm-2"><b>Colour</b></div>
							</div>
							<div class="col-sm-6" style="padding: 0">
								<ul>
									<li><input type="checkbox" class="chkFilter" name="colour[]" value="red">Red</li>
									<li><input type="checkbox" class="chkFilter" name="colour[]" value="blue">Blue</li>
									<li><input type="checkbox" class="chkFilter" name="colour[]" value="white">White</li>
								</ul>
							</div>
							<div class="col-sm-6" style="padding: 0">
								<ul>
									<li><input type="checkbox" class="chkFilter" name="colour[]" value="grey">Grey</li>
									<li><input type="checkbox" class="chkFilter" name="colour[]" value="black">Black</li>
									<li><input type="checkbox" class="chkFilter" name="colour[]" value="pattern">Pattern</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
						<b>Availability</b>
							<ul>
								<li><input type="checkbox" class="chkFilter" name="stock[]" value="inStock">In Stock</li>
							</ul>
						</div>
					</div>
					<br>
					<div class="row justify-content-center">
						<div class="col-12" align="center">
							<input type='button' id="btnCheck" class="ghost-button btn-black" value="null">
							<input type='submit' id="btnApply" class="ghost-button btn-black" value="Apply">
						</div>
					</div>
			</form>
		</div>
	</div>
<!-- UNEM RETLIF -->





















<!-- TESTING AREA ################################################### -->

<?php 

	if (isset($_POST)) {
		//Start the sql select statement
		$sql = "SELECT * FROM tblProducts";

		//No checkboxes, get all the products from the database
		if(!isset($_POST['gender']) && !isset($_POST['colour']) && !isset($_POST['stock'])){
			echo "NO CHECKBOXES SELECTED";
			$sql .= ";";
		}
		//Otherwise, build sql for selected items
		else{
			$sql .= " WHERE ";                //Add where statement
			$and = false;                     //Flag that tells whether to add "AND" to the sql

			//Add gender selection
			if (isset($_POST['gender']))
			{
				if ($and) { $sql .= " AND "; }  //If this is first in the WHERE, dont add "AND" in the sql
				else      { $and = true; }      //But add "AND" to all the following
				$sql .= "(";                    //Open bracket for all the OR's per category of filter
				$or = false;                    //Set flag for adding "OR's" into the statement
				//Loop through all the checkboxes options 
				foreach ($_POST['gender'] as $key => $value) {
					if ($or) { $sql .= " OR "; }  //If this is first in the brackets, dont add "OR" in the sql
					else     { $or = true; }      //But add "OR" to all the following
					$sql .= "categoryID = '" . substr($value, 0, 3) . "'";	//Add the actual test statement	
				}
				$sql .= ")";                    //Close the bracket
			}
			if (isset($_POST['colour']))
			{				
				if ($and) { $sql .= " AND "; }
				else      { $and = true; }
				$sql .= "(";
				$or = false;
				foreach ($_POST['colour'] as $key => $value) {
					if ($or) { $sql .= " OR "; }
					else     { $or = true; }
					$sql .= "colourID = '" . substr($value, 0, 3) . "'";		
				}
				$sql .= ")";
			}
			if (isset($_POST['stock']))
			{				
				if ($and) { $sql .= " AND "; }
				else      { $and = true; }
				$sql .= "(";
				$or = false;
				foreach ($_POST['stock'] as $key => $value) {
					if ($or) { $sql .= " OR "; }
					else     { $or = true; }
					$sql .= "stockAmount > 0";		
				}
				$sql .= ")";
			}
		}
	}

//Selects the listings from the database according to the dropdown


//gets the results for the listings
$result = pg_query(db_connect(), $sql);
$arrProducts = pg_fetch_all($result);
 ?>



	<div class="paginate 2">
		<div class="pager">
			<div class="previousPage">&lsaquo;</div>
			<div class="pageNumbers"></div>
			<div class="nextPage">&rsaquo;</div>
		</div>
		<div class="items">

			<?php
			if (pg_fetch_all_columns($result) == Array()) {
				echo "<center>No results</center>";
			} else {
				
			foreach ($arrProducts as $key => $value) { ?>
				
					<div id="<?php echo $value['itemid']; ?>" class="row justify-content-center div-click" style="border-color: #bbb; border-style: solid; border-width: 1px 0 0 0;">
						<div class="col-sm-4" style="padding: 0;">
							<img src="images/products/<?php echo $value['itemimage']; ?>" width="100%">
						</div>
						<div class="col-sm-4" style="padding: 0;">
							<h4 style="margin-bottom: 0;"><?php echo "<br>".$value['itemname']; ?></h4>
							<p><?php echo "<br>$".$value['itemprice']; ?></p>
						</div>
					</div>
				
			<?php }} ?>

		</div>
		<div class="pager">
			<div class="previousPage">&lsaquo;</div>
			<div class="pageNumbers"></div>
			<div class="nextPage">&rsaquo;</div>
		</div>
	</div>
	<script>
		$(function() {
			$(".paginate").paginga({ /*use default options*/ });   
			$(".paginate-page-2").paginga({ page: 2 });
			$(".paginate-no-scroll").paginga({ scrollToTop: false });
		});
	</script>

<!-- TESTING AREA ################################################### -->


















	<!-- <br>
	<div class="col-sm-12" style="background-color: lightgrey;">
		<br>
		<div class= "col-sm-6" style="max-width: 350px;">
			<img class ="icon" src="https://ae01.alicdn.com/kf/HTB17QD6JFXXXXaOXVXXq6xXFXXXc/Spring-Summer-Calcetines-3D-Printed-Low-Cut-Ped-font-b-Socks-b-font-Girls-Cute-Kawaii.jpg">
			<br>

		</div>
		<div class ="col-sm-6">
			<h3>Sockes</h3>
			<p>$12.00</p>
			<button type="button" class="btn btn-primary">Buy</button>
		</div>
		<br>
	</div>

	<br>


	<br>
	<div class="col-sm-12" style="background-color: lightgrey;">
	<br>
		<div class= "col-sm-6" style="max-width: 350px;">
			<img class ="icon" src="https://ae01.alicdn.com/kf/HTB17QD6JFXXXXaOXVXXq6xXFXXXc/Spring-Summer-Calcetines-3D-Printed-Low-Cut-Ped-font-b-Socks-b-font-Girls-Cute-Kawaii.jpg">
			<br>

		</div>
		<div class ="col-sm-6">
			<h3>Sockes</h3>
			<p>$12.00</p>
			<button type="button" class="btn btn-primary">Buy</button>
		</div>
	<br> -->


	</div>

	<br>





	<style type="text/css">

		.icon
		{
			width: 100%;
			height: auto; 
		}

	</style>

	<?php include 'footer.php'; ?>


	<script type="text/javascript">
		//alert("asdf");
	</script>