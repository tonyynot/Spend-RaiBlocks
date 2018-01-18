<!DOCTYPE html>
<html>
<head >
	<link rel="shortcut icon" type="image/x-icon" href="raiblocks.png" />
	<title class="Title">Spend RaiBlocks</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">

	<!-- Bootstrap JS CDN -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js">
</head>

<body>
	<!-- Navbar container -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<!-- Title -->
		<a class="navbar-brand" href="#">Spend RaiBlocks</a>
			<!-- Menu icon & toggle -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
	      	</button>

	    <!-- Menu list items -->
		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item active">
	            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">Map</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link disabled" href="#">Directory</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link disabled" href="#">Submit</a>
	          </li>
	        </ul>
      	</div>
    </nav>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Join the RaiBlocks revolution!</h1>
		<div class="col-sm-12 text-center">
			<img class ="infoImage" src="raiblocks.png" alt="Raiblocks" width="180" height="180"">
		</div>
		<p> RaiBlocks is a global currency and should therefore be used as one. You can pay with Rai at any of the websites below.</p>
		
		<p> Don't know what RaiBlocks is? Visit the <a class = "link" href="https://www.raiblocks.net"> Official Raiblocks Website</a> and the <a class="link" href="https://www.reddit.com/r/RaiBlocks"> RaiBlocks Subreddit</a> to learn more about the currency!</p>
		<p> Want to accept RaiBlocks on your own website but don't know how? Check out <a class = "link" href=https://raipay.io/>RaiPay</a>, <a class = "link" href=https://www.getxrb.com/>GetXRB</a> and <a class = "link" href=https://brainblocks.io/>brainblocks</a>!</p>
		<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
	</div>

<!-- Map button -->
<!-- <p><a class= "btn btn-primary btn-lg" href="map.html">Map</a></p> -->
  
</div>
</div>


<div class = "infoBox">
	
	<table>
	<tr>
		<th>Website</th>
		<th>Category</th>
	</tr>
	<?php include "database.php";?>
	</table>
	
	<div class = "email">
		<p> Do you know a website that accepts RaiBlocks but isn't listed here? Fill out this <a href= https://goo.gl/forms/0QoUhojEWuetMzbn1>listing form</a>.</p>
		
		<p> Want to get in touch? Send an e-mail to <a href= mailto:lillejohs@spendraiblocks.com>lillejohs@spendraiblocks.com</a>.</p>
	</div>
</body>
</html>
