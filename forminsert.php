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
$price = $_GET['price'];
$DDCategory = $_GET['DDCategory'];
$DDCollege = $_GET['DDCollege'];
$itemid=rand(1000,9999);//uniqid();
//if($name !=''||$email !=''){
//Insert Query of SQL
$query = "INSERT INTO item VALUES ('$itemid', '$userid', '$DDCategory', '$title', '$description', '$price', '$image', '$mobno', '$DDCollege')";
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