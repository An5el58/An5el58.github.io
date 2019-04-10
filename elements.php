
<?php 
	include 'assets/php/DBConnect.php';
	/*session_start();
	$ddcollege = 0;
	//$ddcollege=$_SESSION['college'];
	$_SESSION["Google_ProfileIMG"] = $_GET["pfl"];
 	$_SESSION["Google_ProfileNAME"] = $_GET["pfl1"];
 	$_SESSION["Google_ProfileId"] = $_GET["pfl2"];
 	
 	$proimg=$_SESSION["Google_ProfileIMG"];
 	$email=$_GET["pfl3"];
 	$proname=$_SESSION["Google_ProfileNAME"];
 	$proid=$_SESSION["Google_ProfileId"];

 	$_SESSION['userid'] = $proid;-*/
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Classroom Deals</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="">
					<h1><a href="index.php">Classroom Deals</a></h1>
					<nav id="nav">
						<ul>
							<!--<li><a href="#" style="padding-right: 2em;">Sign In</a></li>-->
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Menu</a>
								<ul>
									<li><a href="index.php#features">Features</a></li>
									<!--<li><a href="#">Support</a></li>
									<li><a href="#">Subscriptions</a></li>-->
									<li><a href="#footer">Share</a></li>
								</ul>
							</li>
					</nav>
				</header>
				
			<!-- Main -->
				<section id="main" class="container">
					<header>
				    <h2>
					<form action="" method="GET">
					<div class="actions" style="padding: 0 0.5em 0 0;">	
							<select class="dropdown" style="width: 29em;" name="DDCollege" id="DDCollege" >
								<option value="1">K J Somaiya Institue of Engineering and IT</option>
								<!--<option value="2">K J Somaiya College of Engineering</option>-->
								<option value="3">K J Somaiya College of Science</option>
								<option value="4">K J Somaiya College of Arts and Commerce</option>
								<option value="5">K J Somaiya Institute of Management and Research Studies</option>
								<option value="6">K J Somaiya Polytechnic</option>
								<option value="7">Entrepreneurship and Startups</option>
								<option value="8">S K Somaiya College of Commerce and Arts</option>
							</select>
							<input type="Submit" name="Go" value="Go!" style="border-top-right-radius: 1em;width: 3em;padding:0.7em 0 0.7em 0;">
					</div>		
					
					</form>
					</h2>
					
						<p>
							<a href="form2.php" class="button special" onclick="checkSignIn()">Place a free Ad</a>
							<a href="index.php#main" id="sign-in-button" class="button special">Sign-In</a>
							<!--<input type="Submit" name="Submit" class="button special" onclick="checkSignIn()" value="">
							<button class="button special" id="sign-in-button">Sign-In</button>-->
						</p>
						<!--Search Bar-->
						<form action="" method="GET">
							<!--<i class="fa fa-search" aria-hidden="true" style="padding-right: 0.5em; color: #646464;"></i>-->
  							<input type="text" name="search" placeholder="Search.....eg.Engineering,Commerce,etc" style=" border-bottom-left-radius: 1em;">
  							<input type="Submit" value="Go!" style="border-top-right-radius: 1em;width: 3em;padding:0.7em 0 0.7em 0;">
						</form>
					</header>


<!--**********************************************PHP Start***********************************************************-->					
<!-- Dynamic Display New One Search Bar-->
<?php
	$ddcollege = '1';
	if (isset($_GET['search'])) {
			$searchq=$_GET['search'];
			//$query = "SELECT * FROM item WHERE category_id IN (SELECT category_id FROM category WHERE category_name LIKE '%$searchq%')";
		}

	else if (isset($_GET['Go'])){
				$ddcollege=$_GET['DDCollege'];
				//$query = "SELECT * FROM item WHERE item_college = '".$ddcollege."'";
			}
		//$searchq=preg_replace("#[^0-9a-z]#i", "", $searchq);
		//$query="SELECT * FROM `item` WHERE `category_id` IN (SELECT `category_id` FROM `category` WHERE `category_name` LIKE '%$searchq%') AND `item_college` LIKE '".$ddcollege."' ";// or die(mysql_error()); 
		//$query="SELECT * FROM item WHERE item_college = '".$ddcollege."'";
		$query = "SELECT * FROM item WHERE item_college = '".$ddcollege."'";
		$result=mysqli_query($conn,$query);
		$count=mysqli_num_rows($result);
		/*$sth = $db->query($query);
		$result2=mysqli_fetch_array($sth);*/
		//$r=mysqli_fetch_array($result);
		$i=0;
		if ($count==0) {
			print("Sorry the item is unavailable");
		} 
		else {
			while ($row=mysqli_fetch_assoc($result)) {
				$title[$i]=$row["item_title"];
				$itemid[$i]=$row["item_id"];
				$description[$i]=$row["item_description"];
				$image[$i]=$row["item_image"];
				//$category[$i]=$row["category_name"];
				$category[$i]="Books";
				$price[$i]=$row["item_price"];
				
				echo
			'<div id="listing" name="listing" class="box">
						<table class="table-wrapper">
							<tr>
								<td width="" rowspan="2" class="listing-image">
									<div>
										<span><img src="'.$image[$i].'" class="listing-image"></span>
									</div>
								</td>
								<td>
									<a href="item.php?itemid='.$itemid[$i].'"><h2 class="listing-title" style="position: relative;">'.$title[$i].'</h2></a>
									<br>
									<h3 style="display: inline-block;">'.$category[$i].'</h3>
								</td>
								<td>
									<h2 class="listing-price" style="position: relative; float: right; margin-right: 3em;">&#8377; '.$price[$i].'</h2>
								</td>
								<td><h2></h2></td>
							</tr>
						</table>
					</div>';
			}
		}

?>
<!--*****************************************PHP End***********************************************************************-->
				</section>

			<!--Pending!! Pending!! Pending!! Pending!! Pending!! Pending!! Pending!! Pending!! Pending!! Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<script type="text/javascript">
				function checkSignIn(){ 
					if (mGoogleApiClient != null && mGoogleApiClient.isConnected()){
						//allow to place the ad
						document.getElementById("sign-in-button").innerHTML="Sign-Out";
					}
					else{
						alert("Please Sign-In first");
					}
					
				}
			</script>

			<!--Search bar code OLD ONE-->
<!--<script type="text/javascript">
	function loadItem(){
		var div=createElement('div');//creating div
		document.body.appendChild(div);//adding div
		div.className = 'row box';//styling div
	}

<?php

	if (isset($_POST['search'])) {
		$searchq=$_POST['search'];
		$searchq=preg_replace("#[^0-9a-z]#i", "", $searchq);
		$query=mysql_query("SELECT * FROM item_details WHERE item_category LIKE '%$searchq%'");// or die(mysql_error());
		$count=mysql_num_rows($query);
		if ($count==0) {
			print("Sorry the item is unavailable");
		} else {
			while ($row=mysqli_fetch_assoc($query)) {

				echo "loadItem();";
			}
		}

	}
?>
</script>-->


	</body>
</html>

