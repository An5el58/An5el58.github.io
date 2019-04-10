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
				<header id="header">
					<h1><a href="elements.php">Classroom Deals</a></h1>
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
						</ul>
					</nav>
				</header>
				<br>
				<center><h2>Submit a Free Classified Ad</h2></center>
				<section class="container" style="width: 60%;">
			<form name="adpostform" action="successful.php" method="GET">
				<section id="features" class="box special features">
					<div class="features-row">
						<div>
							<input type="text" autofocus="autofocus" name="title" id="title" placeholder="Title" required>
							<input id="mobileno" type="number" min="1111111111" max="9999999999" name="mobileno"  placeholder="Mobile number" required>
						</div>	
						<div style="padding-top: 2em;">
							<textarea name="description" id="description" placeholder="Description" required></textarea>
						</div>
						<div style="padding-top: 1.6em;">
							<input type="file" name="image" id="image" accept="image/png,image/jpg,image/jpeg" required>
							<input type="number" name="price" id="price" placeholder="Price" class="price-icon" required>
						</div>
						<div style="padding: 1.8em 0 1.8em 0">	
							<select style="width: 20em;" id="DDCategory" name="DDCategory">
								<option value="1001">Engineering</option>
								<option value="1002">Science</option>
								<option value="1003">Commerce</option>
								<option value="1004">Arts</option>
								<option value="1005">Law</option>
								<option value="1006">Management</option>
							</select>
							<select style="width: 20em;" id="DDCollege" name="DDCollege">
								<option value="1">K J Somaiya Institue of Engineering and IT</option>
								<!--<option value="2">K J Somaiya College of Engineering</option>-->
								<option value="3">K J Somaiya College of Science and Commerce</option>
								<option value="4">K J Somaiya College of Arts and Commerce</option>
								<option value="5">K J Somaiya Institute of Management and Research Studies</option>
								<option value="6">K J Somaiya Polytechnic</option>
								<option value="7">Entrepreneurship and Startups</option>
							</select>
						</div>	
							<!--<form method="post" action="">
					<div style="padding-top: 1.8em;">	
							<select style="margin-right: 6.7em;" name="DDCollege">
								<option value="1">K J Somaiya Institue of Engineering and IT</option>
								<option value="2">K J Somaiya College of Engineering</option>
								<option value="3">K J Somaiya College of Science and Commerce</option>
								<option value="4">K J Somaiya College of Arts and Commerce</option>
								<option value="5">K J Somaiya Institute of Management and Research Studies</option>
								<option value="6">K J Somaiya Polytechnic</option>
							</select>
					</div>		
					</form>-->
							<input type="Submit" name="Submit" class="button special" >
							<!--onclick="validateForm()"-->
						
						
					</div>
				</section>
				</form>
				</section>	
		</div>
<!--<?php
	//include 'assets/php/DBConnect.php';
	//session_start();
	$_SESSION['title']=$_POST['title'];
	$_SESSION['mobileno']=$_POST['mobileno'];
	$_SESSION['description']=$_POST['description'];
	$_SESSION['image']=$_POST['image'];
	$_SESSION['price']=$_POST['price'];
	$_SESSION['DDCategory']=$_POST['DDCategory'];
	$_SESSION['DDCollege']=$_POST['DDCollege'];
	$_SESSION["main_url"]='forminsert.php';

?>-->
<?php 
	/*if (isset($_POST['Submit'])) {
		
		$image_name = $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		echo '<script>alert("'.$image_name.' Hello '.$image_tmp.'");</script>';

		$success=0;

		$uploadedfile='';
		
		$uploadpath='uploads/';
		
		$targetpath=$uploadpath.basename($image_name);
		
		//echo is_file($targetpath);
		/*if($image_name =="")
		{
			echo('<script>console.log("file not selected");</script>');
			echo '<script>alert("Please select file to upload");</script>';
		}
		
		elseif(is_file($targetpath))
		{
			echo('<script>console.log("File already exists");</script>');
			echo '<script>alert("Post already exists ");</script>';
		}
		

		else
		{

/*			move_uploaded_file($image_tmp, $targetpath);
			//print_r($_FILES);
			$exif = exif_read_data($targetpath,0,true);
			print_r($exif);
			var_dump($exif);
*/			

//$geo5 = "SELECT past_posts FROM citizen WHERE email = '$_SESSION["Google_ProfileEmailId"]'";

			/*if (move_uploaded_file($image_tmp, $targetpath))
			{

				if(!$success) {
						echo '<script>alert("failed to add post'.mysqli_connect_error().'");</script>';
					}
					

				else
				{	
					echo '<script>alert("Successfully added Post");</script>';
					$image_name="";
					$targetpath="";
				}
			}
			else {
				echo '<script>alert("Cant enter in if event_base_loop(event_base)");</script>';
			}	
	}*/
//}
?>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<script type="text/javascript">
				/*function validateForm(){
					var mobno=document.getElementById("mobileno");
					if (mobno.checkValidity()==false) {
						alert("Please enter a valid mobile number");
						document.getElementById("mobileno").autofocus;
					} 
				}*/
			</script>
			<!--AJAX for passing values-->
			<script type="text/javascript">
				/*function pass(){
					var xmlhttp;
					xmlhttp = new XMLHttpRequest();
					xmlhttp.open("GET","forminsert.php?title="+document.getElementById("title").value+"&mobno="+document.getElementById("mobileno").value+"&description="+document.getElementById("description").value+"&image="+document.getElementById("image").value+"&price="+document.getElementById("price").value+"&DDCategory="+document.getElementById("DDCategory").value+"&DDCollege="+document.getElementById("DDCollege").value+" ",false);
					xmlhttp.send(null);
				}*/
			</script>
		<!--	<script type="text/javascript">
				$("form[name='adpostform']").submit(function(e) {
        		var formData = new FormData($(this)[0]);

        $.ajax({
            url: "forminsert.php",
            type: "POST",
            data: formData,
            async: false,
            success: function (msg) {
                alert(msg)
            },
            cache: false,
            contentType: false,
            processData: false
        });

        e.preventDefault();
    });
			</script>-->
	</body>
</html>