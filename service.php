<?php
require "config/constants.php";
session_start();
// if(isset($_SESSION["uid"])){
// 	header("location:service.php");
// }
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
    <link rel="stylesheet" href="/css/contstyle.css">
		
	</head>
<style>

         /* Add the CSS code here */
		 .form-container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input, select, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  font-size: 16px;
  font-family: Arial, sans-serif;
  color: #333;
  margin-top: 5px;
}

button[type="submit"] {
  background-color: #007bff;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

button[type="submit"]:hover {
  background-color: #3A3B3C;
}

@media screen and (max-width: 600px) {
  .form-container {
    max-width: 100%;
    margin: 10px;
    border: none;
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
				<li><a href="sevice.php"><span class="glyphicon glyphicon-modal-window"></span> Service</a></li>
				<li><a href="contact.php"><span class="glyphicon glyphicon-modal-window"></span> Contact Us</a></li>
			</ul>
			<!-- <form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form> -->
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
<div class="form-container">
<h2><center><b><u>Put in your service Info.</u></b></center></h2>
  <div class="margin-box">
  <form id='request-service' method="post" enctype="multipart/form-data">
    <div class="alert" role="alert" id="info"></div>
    <!-- form elements -->
	<label for="worktype">Work Type:</label>
        <select id="worktype" name="worktype">
          <option value=""></option>
          <option value="E-flyer">E-flyer</option>
          <option value="Weddin Invitation">Wedding Invite</option>
          <option value="Digital Artwork">Digital Artwork</option>
          <option value="Funeral Poster">Funeral poster</option>
          <option value="Bill Board dsignning">Bill board designing</option>
          <option value="Church flyers">Church Flyers</option>
          <option value="Banners">Banners</option>
          <option value="Labels">labels</option>
          <option value="Stickers">stickers</option>
          <option value="Photography and Videography">Photoshoot</option>
          <option value="video animations">video animations</option>
          <option value="Video Production">Video Production</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="description">Work Description:</label>
        <textarea id="description" name="description"></textarea>
      </div>
	  <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">

		<label for="s_image">Image:</label>
        <input type="file" id="s_image" name="s_image">
      </div>
      <div class="form-group">
        <label for="phone">WhatsApp_No.:</label>
        <input type="tel" id="phone" name="phone">
      </div>
      
      <button type="submit">Submit your work</button>
    </form>
			</main>
		</div>
	</div> 
  </form>
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
<script src="js_packages/jquery-3.6.4.js"></script>
    <script>
        // document.getElementById("delete").addEventListener("click", ()=>{
        //     alert("Delete button is clicked!");
        // })

        $(document).ready(function(){

            $("#request-service").on("submit", function(event){
              
               event.preventDefault();

               $.ajax({
                type: "POST",
                url: "./api/service",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,

                success: function(res){
                    console.log(res);
                    result = JSON.parse(res);
                      alert(result.message)
                      window.location.reload();
                },
                error: function (err){
                    console.log(err);
                }
               });
            });

            // $(".delete").on("click", function(){
                
            //     let service_id = $(this).attr("id");
            //     alert(service_id);
            // });

        })

    </script>
</body>
</html> 