<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>GITAM TOP</title>
	<link rel="stylesheet" type="text/css"  href="cssfile/style.css">
</head>
<body>
	<table><tr><th><img src="logo1.png" width="150px" height="80px" align="left"></th>
	<th class="imgpos"><img src="logo.png" align="right" width="250px" height="80px"></th></tr></table>
	<hr>
	<div class="container">
	</div>
	<div class="b2">
	<form action="signup.php" method="POST">
		
			<div class="n2"><center>Sign up</center></div><br>
			<div class="n1">Student registration number</div>
			<input type="text" name="names" id="m124"><br>
			
			<div class="n1">Password</div><input type="password" name="pass" id="m124">
			<div class="n1">Parent registred ph.no</div>
			<input type="tel" name="phs" id="m124"><br>
			<pre>        <button name="pandu" class="n21" id="m123"><font color="white">Signup</font></button></pre>
	</form>
	<br>
	<div class="n1">For any assistance, please</div><center>contact</center><br>
	<div class="n1">Phone: 0891-2840555</div>
</svg></a></div>
</div>


<div class="b1"><div class="w3-content w3-display-container">
  <img class="mySlides" src="123\b1.jpg" width="1070px">
  <img class="mySlides" src="123\b2.jpg" width="1070px">
  <img class="mySlides" src="123\b3.jpg" width="1070px">
  <img class="mySlides" src="123\b4.jpg" width="1070px">
  <img class="mySlides" src="123\b5.jpg" width="1070px">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div></div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>