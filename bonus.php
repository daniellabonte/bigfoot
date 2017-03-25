<?php include 'header.php'; ?>
<br>
<h3>This is a demo of the controls found within html5.</h3>

<h4>Video Tag</h4>
<video controls>
	  <source src="mov_bbb.mp4" type="video/mp4">
	  <source src="mov_bbb.ogg" type="video/ogg">
	  Your browser does not support HTML5 video.
</video>

<h4>Audio Tag</h4>
<audio controls>
	  <source src="horse.ogg" type="audio/ogg">
	  <source src="horse.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
</audio>

<h4>Section Tag</h4>
<section>
  <p> "A section is a thematic grouping of content, typically with a heading."</p>
</section>

<h4>Article Tag</h4>
<article>
  <p>This is an article</p>
</article>
<h4>Canvas Tag</h4>
<canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>

<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.font = "30px Arial";
ctx.strokeText("Hello World",10,50);
</script>
<?php include 'footer.php'; ?>