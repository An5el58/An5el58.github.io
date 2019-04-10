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
					<h1><a href="elements.php">Classroom Deals</a></h1>
					<nav id="nav">
						<ul>
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
						</ul>
					</nav>
				</header>
<center>
	<br>
<h2></h2>
<form class="box special" style="margin-left: 20em; margin-right: 20em; background-color: #86bd53;">
<h2 style="color: #fffeff;">Thank you for posting your Ad!</h2>
</form>

</center>
<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>

<?php
//include 'assets/php/DBConnect.php';
	//session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="classroomdeals";
$conn=mysqli_connect($servername,$username,$password,$dbname); //or die(mysql_error()) ;
/*if($conn)
	echo "Chhaa gya guruu.....";
else echo "Tumse na ho payega";*/


/*$title=$_SESSION['title'];
$mobileno=$_SESSION['mobileno'];
$description=$_SESSION['description'];
$image=$_SESSION['image'];
$price=$_SESSION['price'];
$DDCategory=$_SESSION['DDCategory'];
$DDCollege=$_SESSION['DDCollege'];*/


//$conn = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
//$db = mysql_select_db("classroomdeals", $connection); // Selecting Database from Server


//if(isset($_POST['Submit'])){ // Fetching variables of the form which travels in URL
//$userid=$_SESSION['userid'];
$userid=rand(10000000000,99999999999);
$title = $_GET['title'];
$mobno = $_GET['mobileno'];
$description = $_GET['description'];
$image = $_GET['image'];
$storeimg="uploads/".$image."";
$price = $_GET['price'];
$DDCategory = $_GET['DDCategory'];
$DDCollege = $_GET['DDCollege'];	
$itemid=rand(1000,9999);//uniqid();
//if($name !=''||$email !=''){
//Insert Query of SQL
$query = "INSERT INTO item VALUES ('$itemid', '$userid', '$DDCategory', '$title', '$description', '$price', '$storeimg', '$mobno', '$DDCollege')";
$result=mysqli_query($conn,$query);
//echo "<br/><br/><span>Data Inserted successfully...!!</span>";

/*echo '<script language="javascript">';
echo 'alert("Data inserted successfully")';
echo '</script>';*/

//}
//else{
//echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
//}
//}
//mysql_close($connection); // Closing Connection with Server
?>
