<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Navigation Lists</title>
	<link rel="stylesheet" href="https://use.typekit.net/qkx2kkx.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<style>

a{
	text-decoration: none;
	color: #ffffff;
	font-family: "skolar-sans-latin",sans-serif;
}
a:active { 
	text-decoration: none; 
}

a:focus { 
	text-decoration: none; 
}

a:hover{
	text-decoration: none;
}

a:visited { 
	text-decoration: none;
}


body{
	background-color: #efefef;
	margin-top: 0px;
	padding-top: 0px;
}


h1{
	padding-left: 5px;

}

h1:hover{
	text-decoration: none no-underline;
}

header{
	width: 220px;
	background: #009fd4;
}

.list-item-alert{
	list-style-type: none;
	text-align: left;
	padding: 15px;
	padding-left: 0px;
	margin-left: -25px;
	font-size: 20px;
	color: #ffffff;
}	



</style>
<body>
	<?php include 'partials/side-nav.php';?>
	<div class="container">
			<h2>Navigation Lists</h2>
			<hr>
			<p></p>
		<footer class="nav-list-footer">
			<div class="nav-lists">
				<ul class="nav-list-col-one">
				  <li class="nav-list-link"><a href="#">Home</a></li>
				  <li class="nav-list-link"><a href="#">News</a></li>
				  <li class="nav-list-link"><a href="#">Contact</a></li>
				  <li class="nav-list-link"><a href="#">About</a></li>
				</ul>
			</div>
				<!-- <div class="vl"></div> -->
			<div class="nav-lists">
				<ul class="nav-list-col-two">
				  <li class="nav-list-link"><a href="#">Careers</a></li>
				  <li class="nav-list-link"><a href="#">Blog</a></li>
				  <li class="nav-list-link"><a href="#">Support</a></li>
				  <li class="nav-list-link"><a href="#">Terms</a></li>
				</ul>
			</div>
			<h5 class="footer-license">&copy 2018 HTML/CSS Library. All rights reserved.</h5>
		</footer>
	</div>
</body>
</html>