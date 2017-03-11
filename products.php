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
      <form>
          <div class="row">
            <div class="col-sm-4">
            <b>Gender</b>
              <ul>
                <li><input type="checkbox" class="chkFilter" name="gender" value="male" checked>Male</li>
                <li><input type="checkbox" class="chkFilter" name="gender" value="female" checked>Female</li>
              </ul>
            </div>
            <div class="col-sm-4 divide-bars">
              <div class="row">
                <div class="col-sm-2"><b>Colour</b></div>
              </div>
              <div class="col-sm-6" style="padding: 0">
                <ul>
                  <li><input type="checkbox" class="chkFilter" name="colour" value="red" checked>Red</li>
                  <li><input type="checkbox" class="chkFilter" name="colour" value="blue" checked>Blue</li>
                  <li><input type="checkbox" class="chkFilter" name="colour" value="white" checked>White</li>
                </ul>
              </div>
              <div class="col-sm-6" style="padding: 0">
                <ul>
                  <li><input type="checkbox" class="chkFilter" name="colour" value="grey" checked>Grey</li>
                  <li><input type="checkbox" class="chkFilter" name="colour" value="black" checked>Black</li>
                  <li><input type="checkbox" class="chkFilter" name="colour" value="pattern" checked>Pattern</li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4">
            <b>Availability</b>
              <ul>
                <li><input type="checkbox" class="chkFilter" name="stock" value="inStock" checked>In Stock</li>
              </ul>
            </div>
          </div>
          <br>
          <div class="row justify-content-center">
            <div class="col-12" align="center">
              <input type='Button' id="btnCheck" value="Uncheck All">
            </div>
          </div>
      </form>
    </div>
  </div>
<!-- UNEM RETLIF -->









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