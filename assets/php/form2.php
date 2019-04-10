<!DOCTYPE HTML>

<html>
	<head>
		<title>ABCD</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.html">ABCD</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="#" style="padding-right: 2em;">Sign In</a></li>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Menu</a>
								<ul>
									<li><a href="#features">Features</a></li>
									<li><a href="#">Support</a></li>
									<li><a href="#">Subscriptions</a></li>
									<li><a href="#footer">Share</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</header>
				<br>
				<center><h2>Submit a Free Classified Ad</h2></center>
				<section class="container" style="width: 60%;">
				<form name="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<section id="features" class="box special features">
					<div class="features-row">
						<div>
							<input type="text" name="title"  placeholder="Title" required>
							<input type="text" name="mobno"  placeholder="Mobile number" required>
							<span class="error">* <?php echo $nameErr;?></span>
						</div>	
						<div style="padding-top: 2em;">
							<textarea name="message" placeholder="Description" required></textarea>
						</div>
						<div style="padding-top: 1.6em;">
							<input type="file" name="image" accept="image/png,image/jpg,image/jpeg" required>
							<select>
								<option value="technology">Technology</option>
								<option value="science">Science</option>
								<option value="commerce">Commerce</option>
								<option value="arts">Arts</option>
								<option value="law">Law</option>
								<option value="management">Management</option>
							</select>
						</div>
						<div style="padding-top: 2em;">
							<input type="Submit" name="Submit" class="button special" onclick="return validateForm()">
						</div>
					</div>
				</section>
				</form>
				</section>	
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<script type="text/javascript">
				
			</script>

	</body>
</html>