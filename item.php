<!DOCTYPE HTML>

<html>
	<head>
		<title>Classroom Deals</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="713605189356-gfksaf25ta4l6pasvftakvui88ibgdgs.apps.googleusercontent.com">
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="">
					<h1><a href="elements.php">Classroom Deals</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Menu</a>
								<ul>
									<li><a href="#features">Features</a></li>
									<!--<li><a href="#">Support</a></li>
									<li><a href="#">Subscriptions</a></li>-->
									<li><a href="#footer">Share</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</header>

			<!--	<section id="main" class="container">
					<header>
						<h2>The Lean Startup-Eric Ries</h2>
					</header>
					<div class="box">
						<h2 style="text-align: center;">The Lean Startup-Eric Ries</h2>
						<span>
							<img src="images/leanstartup.png">
						</span>
						<h3>The Lean Startup isn't just about how to create a more successful entrepreneurial business, it's about what we can learn from those businesses to improve virtually everything we do. I imagine Lean Startup principles applied to government programs, to healthcare, and to solving the world's great problems. It's ultimately an answer to the question 'How can we learn more quickly what works, and discard what doesn't ? '</h3>
						<div>
							<h2 class="listing-title" style="color: #e89980;">Price : &#8377; 320</h2>
							<h2 style="display: inline-block; float: right;">Contact: 8879253329</h2>
						</div>
					</div>	
				</section>-->
		</div>
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="classroomdeals";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	$itemid=$_GET['itemid'];
	$query="SELECT * FROM item WHERE item_id = '".$itemid."' ";
	$result2=mysqli_query($conn,$query);
	
	$row2=mysqli_fetch_assoc($result2);
	$title=$row2["item_title"];
	$description=$row2["item_description"];
	$image=$row2["item_image"];
	//$category=$row2["category_name"];
	$price=$row2["item_price"];
	$mobile=$row2["item_mobile_number"];
	
	echo
	'<section id="main" class="container">
					<header>
						<h2>'.$title.'</h2>
					</header>
					<div class="box">
						<h2 style="text-align: center;">'.$title.'</h2>
						<span>
							<img src="'.$image.'">
						</span>
						<h3>'.$description.'</h3>
						<div>
							<h2 class="listing-title" style="color: #e89980;">Price : &#8377; '.$price.'</h2>
							<h2 style="display: inline-block; float: right;">Contact: '.$mobile.'</h2>
						</div>
					</div>	
				</section>';
?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>				