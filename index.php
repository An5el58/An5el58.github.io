<?php 
	include 'assets/php/DBConnect.php';
	session_start();
 	$_SESSION["main_url"] = 'elements.php?pfl=No&pfl1=No&pfl2=0&pfl3=No';
 	//$ddcollege=$_POST['DDCollege'];
	//$_SESSION['college']=$ddcollege;
 ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Classroom Deals</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
		<!--<script src="https://apis.google.com/js/platform.js" async defer></script>-->
		<meta name="google-signin-client_id" content="713605189356-gfksaf25ta4l6pasvftakvui88ibgdgs.apps.googleusercontent.com">
	</head>





	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.php">Classroom Deals</a></h1>
			
					<nav id="nav">
						<ul>
							<li><a href="#main" id="sign-in-button" style="padding-right: 2em;">Sign In</a></li>
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
			






			<!-- **************************************************** Banner ******************************-->


            <section id="banner">
            	<section id="suggestions" align="left">
                       <p>Suggestions: <span id="txtHint"></span></p> 

                        <p>Search a book title: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

                <script>
                    function showHint(str) {
                     var xhttp;
                    if (str.length == 0) { 
                    document.getElementById("txtHint").innerHTML = "";
                     return;
                     }
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                    };
                     xhttp.open("GET", "gethint.php?q="+str, true);
                     xhttp.send();   
                      }
                 </script>
            </section>


					<h2>Classroom Deals</h2>
					<p>Your college's own marketplace for trading college stuff</p>
					
				
					<ul class="actions">
						<!--<li><a href="elements.php" class="button">Start Now</a></li>-->
					<li><a href="elements.php?pfl='+profile.getImageUrl()+'&pfl1='+profile.getName()+'&pfl2='+profile.getId()+'&pfl3='+profile.getEmail()+" class="button">Start Now</a></li>
					<!--<li><a href="javascript:void(0);" onclick="signIn();" class="button">Start Now</a></li>-->
					</ul>
</section>


			<!-- **************************************************** First Box ****************************-->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Buy from your college seniors.
							<br>
							Sell to your college juniors.</h2>
							<p>No need to carry your books to the bookstore,<br>
							sell them directly to your college juniors.</p>
						</header>
					
					<ul class="actions">
					<p style="margin-bottom: 0.7em; margin-top: 1em; font-size: 1.4em;">Sign-In using</p>
						<!--<li><div id="sign-in-button" class="button special">Google</div></li>-->
							<li><div class="g-signin2" data-onsuccess="onSignIn"></div></li>
					</ul>
						<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
					</section>
     		<!-- ****************************************************** 4 Features Box*************************-->
					<section id="features" class="box special features">
						<div class="features-row">
							<section>
								<span class="icon major fa-graduation-cap accent2"></span>
								<h3>College Marketplace</h3>
								<p>Connect with students of your college as well as surrounding colleges through this website and trade your college stuff directly with them.</p>
							</section>
							<section>
								<span class="icon major fa-balance-scale accent3"></span>
								<h3>Fair Price</h3>
								<p>Get the item at a cheaper rate than the bookstore. Get fair price for your item by selling directly to your college junior, without involving the bookstore.</p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<span class="icon major fa-book accent4"></span>
								<h3>Rent Books</h3>
								<p>Buy or rent competitive entrance exam books directly from your college seniors who haved cleared the exam and save the headache of finding the right books for the exam.</p>
							</section>
							<section>
								<span class="icon major fa-shopping-cart accent5"></span>
								<h3>Trade Everything</h3>
								<p>Buy or sell competitive entrance exam books, reference books, drafters, technical instruments, handwritten notes and many more, through this website.</p>
							</section>
						</div>
					</section>

				</section>
				<section align="center">
				<h1 align="center"> Learn and keep up to date with JAVA youtube channel with below RSS Feed</h1>
				<!-- start sw-rss-feed code --> 
<script type="text/javascript"> 
<!-- 
rssfeed_url = new Array(); 
rssfeed_url[0]="https://www.youtube.com/feeds/videos.xml?channel_id=UCs6nmQViDpUw0nuIx9c_WvA";  
rssfeed_frame_width="500"; 
rssfeed_frame_height="260"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url="https://feed.surfing-waves.com/css/style6.css"; 
rssfeed_title="on"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage=""; 
rssfeed_footer="on"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage=""; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage=""; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "446099bf14e7a052ce7cf5faf30cedc3"; 
//--> 
</script> 
<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- end sw-rss-feed code -->
</section>


			<!--Pending!! Pending!! Pending!! Pending!! Pending!! Pending!! Pending!! Pending!! Pending!! Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						<?xml version='1.0' encoding='UTF-8'?>
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

		<!--	<script type="text/javascript">
				function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}

		/*Google sign button */
			function onLoad(googleuser){
 		gapi.load('auth2',function(){
		gapi.auth2.init();
		});

 		//var img = document.getElementById("HeaderImg");
 		//var profile_img = <?php echo json_encode($_SESSION["Google_ProfileIMG"]); ?>;
 		//img.src=profile_img;
 	}

 	function logout(){
 		var auth2 = gapi.auth2.getAuthInstance();
 		auth2.signOut().then(function(){
 			var profile_name = '<?php echo $_SESSION["Google_ProfileNAME"] ?>'
 			console.log('User '+profile_name+' signed out.');

 		});
 		window.location='index.php';
 	}
			</script>-->
			<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
			<script type="text/javascript">
				var googleUser = {};
				function renderButton() {
      gapi.signin2.render('my-signin', {
        'scope': 'profile email',
        'width': 270,
        'height': 50,
        'margin-left' : 120,
        'margin-top' : 80,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure,
        'onclick':signIn,

      });
    }

	function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
      var profile = googleUser.getBasicProfile();
	  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
	  console.log('Name: ' + profile.getName());
	  console.log('Image URL: ' + profile.getImageUrl());
	   var id_token = googleUser.getAuthResponse().id_token;
	   console.log('ID Token:'+id_token);

	   var id= profile.getId();
	   var name= profile.getName();
	   var emailId=profile.getEmail();
	   localStorage.setItem("userid",id);
	   //var img= profile.getImageUrl();
	  
	  var uri = 'elements.php?pfl='+profile.getImageUrl()+'&pfl1='+profile.getName()+'&pfl2='+profile.getId()+'&pfl3='+profile.getEmail()+'';
	  window.location = uri;
    }

    function onFailure(error) {
      console.log(error);
      var uri = 'elements.php?pfl=No&pfl1=No&pfl2=0&pfl3=No';
	  window.location = uri;
	  alert("Not Signed in");
    }


	  /*
    	gapi.load('auth2',function(){
		gapi.auth2.init();
	});
	*/
	

    function signIn(googleUser) {
    //console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
	var profile = googleUser.getBasicProfile();
	console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID tokeninstead.
	console.log('Name: ' + profile.getName());
	console.log('Image URL: ' + profile.getImageUrl());
	var uri = 'elements.php?pfl='+profile.getImageUrl()+'&pfl1='+profile.getName()+'&pfl2='+profile.getId()+'&pfl3='+profile.getEmail()+'';
	  window.location = uri;
	//document.getElementById("txt").value = profile;
   } 

   
			</script>
	</body>
</html>