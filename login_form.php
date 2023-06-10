<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
if (isset($_SESSION["uid"])) {
	header("location:mindex.php");
}
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Elyon Multimedia</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="foot.css">	
	</head>
	<body>
		<div class="wait overlay">
			<div class="loader"></div>
		</div>

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">	
				<div class="navbar-header">
					<a href="#" class="navbar-brand">El-Elyon</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="mindex.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="profile.php"><span class="glyphicon glyphicon-modal-window"></span> Products</a></li>
					<li><a href="service.php"><span class="glyphicon glyphicon-modal-window"></span> Service</a></li>
					<li><a href="contact.php"><span class="glyphicon glyphicon-modal-window"></span> Contact Us</a></li>
				</ul>
			</div>
		</div>

		<p><br/></p>
		<p><br/></p>
		<p><br/></p>
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8" id="signup_msg">
					<!--Alert from signup form-->
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">Customer Login Form</div>
						<div class="panel-body">
							<!--User Login Form-->
							<form onsubmit="return false" id="login">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" required/>
								<label for="email">Password</label>
								<input type="password" class="form-control" name="password" id="password" required/>
								<p><br/></p>
								<a href="#" style="color:#333; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;" Value="Login">
								<!--If user dont have an account then he/she will click on create account button-->
								<div><a href="customer_registration.php?register=1">Create a new account?</a></div>						
							</form>
						</div>
					</div>
					<div class="panel-footer">
						<div id="e_msg"></div>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>

		<!-------footer------->
		<div class="footer">
			<div class="container"><!-- it will follow same styling as of header-->
				<div class="row">
					
					<!--it contains 4 columns col1 contains text and col2 contain image col3 contains useful links and col4 contains social media links-->
					<div class="footer-col-1">
						<h3>Download Our App</h3>
						<p>Download App for Android and Ios mobile phone.</p>
					
						<!---add images of play store and appstore in 1st column-->
						<div class="app-logo">
							<img src="images/play-store.png">
							<img src="images/app-store.png">
						</div>
					</div>

					<div class="footer-col-2">
						<img src="IMAGES/logo-white.png">
						<h5>Our purpose is To Bringing Your Vision to Life with Creativity and Technology and Transforming your ideas into stunning visual experiences</h4>
					</div>

					<div class="footer-col-3">
						<h3>Follow Us</h3>
						<ul>
							<li>Facebook</li>
							<li>Twitter</li>
							<li>Instagram</li>
							<li>Youtube</li> 
						</ul>
					</div>

				</div>
				<!--add horizontal line and copyright text along with clickable link-->
				<hr>
				<a href="" class="copyright">&copy; Elyon Multimedia, Get the right services and buy the quality products</a>
			</div>
		</div>
	</body>
</html>






















