<?php
require "config/constants.php";
session_start();
// if(isset($_SESSION["uid"])){
// 	header("location:contact.php");
// }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Elyon Multimedia</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<!-- <link rel="stylesheet" href="css/style.css"/> -->
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script> 
		<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="/css/contstyle.css">
		
	</head>
<style>

#mainBody {
  background-color: #f2f2f2;
  padding: 20px;
}

.container {
  max-width: 960px;
  margin: 0 auto;
}

.row {
  display: flex;
  flex-wrap: wrap;
}

.col-left {
  flex: 1;
  padding-right: 20px;
}

.col-right {
  flex: 1;
  padding-left: 20px;
}

.col-right h4:first-of-type {
  margin-top: 0;
}

.col-right form {
  margin-top: 20px;
}

.col-right input[type="text"],
.col-right textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.col-right textarea {
  height: 100px;
}

.col-right button {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  cursor: pointer;
  /* font-size:  */}

  #map-frame {
  margin: 0px; /* adjust as needed */
}

/*designing footer*/
.footer{
    background: #000;/*footer background color is black*/
    color: #8a8a8a;/*text color*/
    font-size: 14px;
    padding: 60px 0 20px;
}
.footer p{
    color: #8a8a8a;/*paragraphs color in class footer*/
}
.footer h3{
    color: #fff;/*heading color is white*/
    margin-bottom: 20px;
}
.footer-col-1, .footer-col-2, .footer-col-3, .footer-col-4{
    min-width: 250px;/*all columns should have a min width of 250px*/
    margin-bottom:20px;
}
.footer-col-1{
    flex-basis: 30%;
}
.footer-col-2{
    flex: 1;/*flex 1 is used to fill complete occupy given space*/
    text-align: center;
}
.footer-col-2 img{
    width: 180px;/*editing image in col2*/
    margin-bottom: 20px;
}
.footer-col-3, .footer-col-4{
    flex-basis: 12%;/*both footer col3 and col4 occupies 12% each*/
    text-align: center;
}
ul{
    list-style-type: none;/*remove bullets from links specially links which are in footer*/
}
.app-logo{
    margin-top: 20px;
}
.app-logo img{
    width: 140px;
}
.footer hr{
    border: none;
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
}
.copyright{
    display: block;
    text-align: center;
    color: #fff;
}

@media only screen and (max-width: 600px){

	.footer h3 {
  color: #fff;
  margin-bottom: 20px;
  width: auto;
  margin-left: 90px;
  font-size: 18px;
}

.footer p {
  color: #8a8a8a;
  margin-left: 70px;
  width: 250px;
}

.app-logo img {
  width: 140px;
  margin-left: 110px;
}

.footer-col-2 img {
  width: 180px;
  margin-bottom: 20px;
  margin-left: -60px;
}

ul {
  list-style-type: none;
  margin-left: 60px;
}
}


</style>

<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">El-Elyon</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="mindex.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="profile.php"><span class="glyphicon glyphicon-modal-window"></span> Products</a></li>
				<li><a href="service.php"><span class="glyphicon glyphicon-modal-window"></span> Service</a></li>
				<li><a href="pcontact.php"><span class="glyphicon glyphicon-modal-window"></span> Contact Us</a></li>
			</ul>
			<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge" >0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in GH¢</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login/Register</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<input type="submit" class="btn btn-warning" value="Login">
										<a href="customer_registration.php?register=1" style="color:white; text-decoration:none;">Create Account Now</a>
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
    <div id="mainBody">
  <div class="container">
  <h2><center><b><u>CONTACT DETAILS</u></b></center></h2>
    <div class="row">
      <div class="col-left">
        <h4><b><u>Contact Details</u></b></h4>
        <p>Effiduase-Ashanti<br/> AR-0040-3619
          <br/><br/>
          info.elyonmultimedia@gmail.com<br/>
          Tel +233(0)55 888 5754<br/>
          whatsapp +233(0) 55 633 9477<br/>
          We offer nationwide delivery. <br/>
          <br/><br/>
          <h4><b><u>For more Info. you can contact these Numbers:</u></b></h4>    <br/>
          +233(0) 55 888 5754<br/>
          +233(0) 55 633 9477<br/>
          +233(0) 50 386 5931<br/>
        </p>
		<iframe id="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.7186088238354!2d-0.06666338523383729!3d5.608514895934048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf8688ea341e25%3A0xdae24b44d8dd6c04!2sRegional%20Maritime%20University!5e0!3m2!1sen!2sgh!4v1680517783143!5m2!1sen!2sgh" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-right">
        <h4><b><u>Opening Hours</u></b></h4>
        <h5><b> Monday - Friday</b></h5>
        <p>09:00am - 09:00pm<br/><br/></p>
        <h5><b>Saturday</b></h5>
        <p>09:00am - 07:00pm<br/><br/></p>
        <h5><b>Sunday</b></h5>
        <p>12:30pm - 06:00pm<br/><br/></p>

		
        
        <h4><b><u>Email Us</u></b></h4>
        <form class="form-horizontal">
          <fieldset>
            <div class="control-group">
              <input type="text" placeholder="name" class="input-xlarge"/>
            </div>
            <div class="control-group">
              <input type="text" placeholder="email" class="input-xlarge"/>
            </div>
            <div class="control-group">
              <input type="text" placeholder="subject" class="input-xlarge"/>
            </div>
            <div class="control-group">
              <textarea rows="3" id="textarea" class="input-xlarge"></textarea>
            </div>
            <button class="btn btn-large" type="submit">Send Messages</button>
          </fieldset>
        </form>

		
      </div>
	  
    </div>
	
  </div>
  
</div>

      </form>
	  <div class="row">
  <div class="span12">
   
    <!-- <iframe id="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.7186088238354!2d-0.06666338523383729!3d5.608514895934048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf8688ea341e25%3A0xdae24b44d8dd6c04!2sRegional%20Maritime%20University!5e0!3m2!1sen!2sgh!4v1680517783143!5m2!1sen!2sgh" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
  </div>
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

                <!-- <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                    
                </div> -->

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

		</div>
	</div>
	
</div>
</div>
</body>
</html>