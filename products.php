<?php 
	$title = "Products";
	$date = "2017-03-10";
	$filename = "products.php";
	$description = "A page to filter and display all the products.";
?>

<?php include 'header.php'; ?>
<br>

<!-- Filter Button -->
<div class="row justify-content-start">
  <div  class="col-sm-3"></div>
  <div id="filter-button" class="col-sm-2" style="max-width: 120px; padding:6px 0px 6px 0px; margin: 0 50px 0 50px"><center>Filter</center></div>
</div>

<!-- Filter Options -->
<div class="row justify-content-center">
  <div class="col-sm-2"></div>
  <div id="filter-div" class="col-sm-9 hide-filters">
    <form>
        <div class="col-sm-4">
        <b>Gender</b>
          <ul>
            <li><input type="checkbox" name="gender" value="male">Male</li>
            <li><input type="checkbox" name="gender" value="female">Female</li>
          </ul>
        </div>
        <div class="col-sm-4" style="border-left: solid; border-right: solid; border-color: black; border-width: 1px">
          <div class="row">
            <div class="col-sm-2"><b>Colour</b></div>
          </div>
          <div class="col-sm-6" style="padding: 0">
            <ul>
              <li><input type="checkbox" name="colour" value="red">Red</li>
              <li><input type="checkbox" name="colour" value="blue">Blue</li>
              <li><input type="checkbox" name="colour" value="white">White</li>
            </ul>
          </div>
          <div class="col-sm-6" style="padding: 0">
            <ul>
              <li><input type="checkbox" name="colour" value="grey">Grey</li>
              <li><input type="checkbox" name="colour" value="black">Black</li>
              <li><input type="checkbox" name="colour" value="pattern">Pattern</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
        <b>Availability</b>
          <ul>
            <li><input type="checkbox" name="stock" value="inStock">In Stock</li>
          </ul>
        </div>
    </form>
  </div>
</div>

















<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>

<div class="col-sm-3"></div>
  <div id="filterButton" class="col-sm-2"><center>Filter</center>
</div>
<div class="w-100"></div>


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
<br>


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