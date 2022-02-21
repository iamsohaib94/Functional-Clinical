<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BOOKING</title>

<!--BootStrap CDN-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	
	
<!--JQuery CDN	-->
	
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>	

<!--Font Awesome	-->
	
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
<!--Style Sheets-->
<link rel="stylesheet" href="CSS/Header.css">
<link rel="stylesheet" href="CSS/Booking.css">
<link rel="stylesheet" href="CSS/Footer.css">

</head>

<body>
	
	<?php include 'Header.php' ?>
		
	<!----------------------  body start  ---------------------->
	
		<section>
			<div class="container">
			<div class="row"> 
				<div class="col-sm-12">
					<h2 class="one"> FCA </h2>
					<div class="two"><a class="three" href="#"> HOME </a> / <a class="three" href="#"> BOOKING </a></div>
			</div>
			</div>
			</div>
			
			<div class="container" style="padding: 60px;">
			<div class="row"> 
				<div class="col-sm-5">
					<img src="Images/Image_9a.jpg">
			</div>
			<div class="col-sm-7 book1">
				<div class="book2">
					<h2 class="book3"> Get<br> Free Shipping </h2>
					<p class="book4"> On Your First Order. Offer Ends Soon</p><br>
				<form>
					<div class="row">
					<div class="col-75">
						<input class="inp1" type="text" placeholder="Name">
					</div>
					</div><br>
					<div class="row">
					<div class="col-75">
						<input class="inp1" type="email" placeholder="Email*">
					</div>
					</div><br>
					<div class="row">
					<div class="col-75">
						<select class="inp1" id="country" name="country">
							<option>Service</option>
							<option>Product</option>
							<option>Video Consultunt</option>
						</select>
					</div>
					</div><br>
					<!-- <p class="book4">Meeting Integration Credentials: </p>
					<p class="book4">For Bookeo: <a href="https://bookeo.com/bookingsection" target="_blank">Join Meeting</a></p>
					<p class="book4">For Zoom: <a href="https://zoom.us/signin">Join Meeting</a></p>
					<div class="row"> --><br><br>
					<input class="inp1" type="submit" value="Submit">
					</div>
				</form>
			</div>
			</div>
			</div>
			</div>
			
			
			
		</section>	
	
	<!----------------------  body end  ---------------------->

	<?php 

		include 'Footer.php';

	?>

<!--BooStrap Scripts	-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>	


<!--Scripts	-->
<script type="text/javascript" src="JS/Header.js"></script>
<script type="text/javascript" src="JS/Booking.js"></script>	
<script src="JS/Language.js"></script>

</body>
</html>