<?php include 'header.php'; ?>
</div>

<div class="w3-display-container w3-content w3-center" style="max-width:3840px">
  <div class="img-center">
  	<img class="w3-image" src="images/slide-07.jpg" alt="Me" width="3840" height="1280">
  </div>
  <div class="w3-display-middle w3-padding-xlarge w3-border w3-wide w3-text-white w3-center">
    <h1 class="myFont">who we are</h1>
    <!-- <h5 class="w3-hide-large myFont" style="white-space:nowrap">who we are</h5> -->
  </div>
</div>

<style type="text/css">
	.myFont {
		font-family: "Montserrat Light";
		color: white;
	}

/*W3 STUFF*/

.w3-display-container{
	position:relative
}
.w3-display-container:hover .w3-display-hover{
	display:block
}
.w3-display-container:hover span.w3-display-hover{
	display:inline-block
}

.w3-content{
	max-width:980px;
	margin:auto
}

.img-center{
	display:inline-block;
	margin:auto;
}

.w3-center{
	text-align:center!important
}

.w3-image{
	max-width:100%;
	height:auto;
	min-width: 768px;
	min-height: 256px;
}

.w3-display-middle{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	-ms-transform:translate(-50%,-50%)
}

.w3-padding-xlarge{
	padding:16px 32px!important
}

.w3-border{
	border:1px solid #ccc!important
}

.w3-wide{
	letter-spacing:4px
}

.w3-center .w3-bar{
	display:inline-block;
width:auto
}
.w3-center{
	text-align:center!important
}

@media (max-width:992px) and (min-width:601px){
	.w3-hide-medium{
	display:none!important
}

@media (max-width:600px){
	.w3-hide-small{
		display:none!important
	}
}

.w3-xxxlarge{
	font-size:48px!important
}

@media (min-width:993px){
	.w3-hide-large{
		display:none!important
	}
}









</style>

<div class="container">
<?php include 'footer.php'; ?>