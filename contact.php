<?php include 'header.php'; ?>
<form name="ContactForm">
	<center><h1>Contact</h1></center>
	<div class="col-sm-6">
		<input type="text" placeholder="Name" class="textbox" name="">
		<input type="text" placeholder="Email" class="textbox" name="">
		<center><h3>Inquery Type</h3></center>
		<ul>
		<div class="col-sm-6">
			<li><input type="radio" name="Questions" value="Questions">Question</li>
			<li><input type="radio" name="Questions" value="Comment">Comment</li>
		</div>
		<div class="col-sm-6">
			<li><input type="radio" name="Questions" value="Concern">Concern</li>
			<li><input type="radio" name="Questions" value="Shipping">Shipping</li>
			</div>
		</ul>
	</div>
	<div class="col-sm-6">
		<textarea class="Comment" placeholder="Message"></textarea>
	</div>
</form>	
<style type="text/css">
	.textbox
	{
		width:100%;
		margin: 7px;
		border-radius: 0.3em;
		max-width: 350px;
	}
	.Comment
	{
		border-radius: 0.3em;
		width:100%;
		margin: 10px;
		height: 10em;
	}

	li
	{
		list-style-type: none;
	}
</style>
<?php include 'footer.php'; ?>