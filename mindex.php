<?php
require "config/constants.php";
?>
<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--we have added this view port tag and set initial scale to 1 so that our side shoudl be adjustable according to different devices especially for mobile devices-->
        <title>Elyon Multimedia shop</title>
        <link rel="stylesheet" href="CSS/style.css"> 
      
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"><!--poppins font from google fonts website then select popping select some types and then embed-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--link to connect to font awesome 4 to use different icons, just type font awesome 4 cdn and click on first link and copy the url and past it here with rel="stylesheet"-->
        <style>
    /* CSS for the dropdown menu */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>
    </head>

    <body>

        <!--making header-->
    <div class="header">
        <div class="container">

            <!--making navigation bar consist of logo and menu links-->
            <div class="navbar">
                <div class="logo">
                    <a href="mindex.php"><img src="IMAGES/logo.png" alt="Elyon Multimedia logo" width=125px></a>
                </div>
    
                <!--menu-->
                 <nav> 
                    <ul id="MenuItems"><!--use this id in js-->                   
                        <li><a href="mindex.php"><span class="glyphicon glyphicon-modal-window"></span>Home</a></li>
                        <li><a href="profile.php"><span class="glyphicon glyphicon-modal-window"></span>Products</a></li>
                        <li><a href="service.php"><span class="glyphicon glyphicon-modal-window"></span> Service</a></li>
                        <li><a href="contact.php"><span class="glyphicon glyphicon-modal-window"></span>Contact</a></li>
                        <li><a href="login_form.php"><span class="glyphicon glyphicon-modal-window"></span>Account</a></li>
                        <!-- <input type="text" class="form-control" placeholder="Search" id="search"> -->
                        
                    </ul>
                </nav>
                <a href="cart.php"><img src="images/cart.png" alt="cart" width=30px height=30px></a><!--adding cart image in navigation section -->
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()"><!--this is the menu icon which  will be displayed on smaller screens with 3 lines, and when we click on it, it will open upside down or like dropdown menu, to open like this we have pass one menutoggle function to it which we have written in the end in js-->
            </div>

        
            <!--making another section in header class container-->
            <div class="row">

                <!--dividing this section into 2 columns-->
                <!--1st column for heading button and text-->
                <div class="col-2">
                    <h1>Get your perfect design from Elyon Multimedia!</h1>
                    <p>Designing the future with creativity and innovation. Transforming your ideas into stunning visual experiences 
                        <br>Bringing Your Vision to Life with Creativity and Technology<br>We offer the Best.
                    </p>
                    <a href="service.php" class="btn">Explore Now &#8594;</a><!--where &#8594 is the code of arrow icon in explore now button-->
                </div>

                <!--2nd for image-->
                <div class="col-2">
                    <img src="main/images/image 1.png" alt="header image">
                </div>

            </div>
        </div>
    </div>

    <!--Featured categories-->
    <!--categores class to edit whole section, then small container class to edit whole row, then row class to edit area surrounding images, then col-3 class to edit col of each image then col-3 img used in css to edit image -->
    <div class="categories">

        <!--we will create 3 column for 3 images at a time in single row like we did above by making 2 columns-->

        <!--small container class contains row which consist of whole columns sections then col-3 which consist of col of images-->
        <div class="small container"><!--container class to edit images section-->
        <h2 class="title">Work Samples</h2>
            <div class="row">

                <!--3 columns for 3 images-->
                <div class="col-3">
                    <img src="main/images/category-1.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="main/images/category.png" alt=""> 
                </div>
                <div class="col-3">
                    <img src="main/images/category3.png" alt="">
                </div>
                <div class="col-3">
                    <img src="main/images/category4.png" alt="">
                </div>
                <div class="col-3">
                    <img src="main/images/category5.png" alt=""> 
                </div>
                <div class="col-3">
                    <img src="main/images/category6.png" alt="">
                </div>
    
            </div>
        </div>

    </div>

     <!--Featured Products-->
     <!--using same class small container to maintain same styling-->
     
     <div class="small container">
         <!--using again same row class to maintain same styling -->
        <h2 class="title">Featured Products</h2>
         <div class="row">
             <!--this time we will make 4 columns-->
     
             <!--it contains 4 different products with heading h4, image, price <p> and rating star-->
             <div class="col-4">
                 <a href="profile.php"><img src="main/images/product-1.jpg"></a><!--product img-->
                 <a href="profile.php"><h4><b>Drawing pad for Laptops</b></h4></a><!--product title-->
                 <!-- <div class="rating">add stars for rating of product from font awesome 4 -->
                    <!-- <i class="fa fa-star" aria-hidden="true"></i>add 4 black start and one transparent star to show 4 out of 5 rating -->
                    <!-- <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                 </div> -->
                 <!-- <p>$50.00</p>product price -->
             </div>

             <div class="col-4">
                <a href="index.php"><img src="main/images/product-2.jpg"></a><!--product img-->
                <a href="index.php"><h4><b>Canon 5D MARK IV DSLR Camera, with 70-200mm F2.8L IS II Lens</b></h4></a><!--product title-->
                    <!-- <div class="rating">add stars for rating of product from font awesome 4 -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>add 4 black start and one transparent star to show 4 out of 5 rating -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-o" aria-hidden="true"></i>
                </div> -->
                <!-- <p>$50.00</p>product price -->
            </div>

            <div class="col-4">
                <a href="index.php"><img src="main/images/product-3.jpg"></a> <!--product img-->
                <a href="index.php"><h4><b>Sony Wireless Headphones</b></h4></a><!--product title-->
                <!-- <div class="rating">add stars for rating of product from font awesome 4 -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>add 4 black start and one transparent star to show 4 out of 5 rating -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-half-o" aria-hidden="true"></i>
                   <i class="fa fa-star-o" aria-hidden="true"></i>
                </div> -->
                <!-- <p>$50.00</p>product price -->
            </div>

            <div class="col-4">
                <img src="main/images/product-4.jpg"><!--product img-->
                <h4><b>Canon printer 32/45r, Advanced</b></h4><!--product title-->
                <!-- <div class="rating">add stars for rating of product from font awesome 4 -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>add 4 black start and one transparent star to show 4 out of 5 rating -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-half-o" aria-hidden="true"></i> -->

                </div>
                <!-- <p>$50.00</p>product price -->
            </div>
         </div>


        </div>

    </div>

    <!--offer-->
    <div class="offer">
        <div class="container">
            <div class="row">
                
                <div class="col-2">
                   <img src="main/images/exclusive copy.png" class="offer-img"> 
                </div>

                <div class="col-2">
                    <p>Exclusively available on Elyon Multimedia</p>
                    <h1>Iphone 12 Pro Max</h1>
                    <small>
                    Top affordable smartphone with lasting battery, clear selfie and fast gaming processor.Best Affordable Phones for gaming and expandable memory, good camera and battery life. Best Selfie Phone Here.
                    </small>
                    <a href="profile.php" class="btn">Start shopping &#8594;</a><!--where &#8594 is the code of arrow icon in explore now button-->
                    
                </div>
            </div>
        </div>
    </div>
    <div class="small container">
         <!--using again same row class to maintain same styling -->
        <h2 class="title">Photography and Videography sections</h2>
         <div class="row">
             <!--this time we will make 4 columns-->
     
             <!--it contains 4 different products with heading h4, image, price <p> and rating star-->
             <div class="col-4">
                 <a href="service.php"><img src="main/images/product-5.jpg"></a><!--product img-->
                 <a href="service.php"><h4><b>Birthday Package</b></h4></a><!--product title-->
                 <a href="#"><b>GH¢1,500.00</b></a>
                 <!-- <div class="dropdown">
                        <button>Birthday package</button>
                        <div class="dropdown-content">
                        <a href="service.php">Unlimited soft copies</a>
                        <a href="service.php">Online images</a>
                        <a href="service.php">Image on flash drive</a>
                        <a href="service.php">2photographers</a>
                        <a href="service.php">Invitation Design</a>
                    </div>
                    <a href="#"><b>GH¢1,500.00</b></a> -->
                 <!-- <div class="rating">add stars for rating of product from font awesome 4 -->
                    <!-- <i class="fa fa-star" aria-hidden="true"></i>add 4 black start and one transparent star to show 4 out of 5 rating -->
                    <!-- <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                 </div> -->
                 <!-- <p>$50.00</p>product price -->
             </div>

             <div class="col-4">
                <a href="service.php"><img src="main/images/product-6.jpg"></a><!--product img-->
                <a href="service.php"><h4><b>Platinum package</b></h4></a> <!--product title-->
                <a href="#"><b>GH¢6,500.00</b></a>
                <!-- <div class="dropdown">
                        <button>platinum package</button>
                        <div class="dropdown-content">
                        <a href="service.php">Unlimited soft copies</a>
                        <a href="service.php">Online images</a>
                        <a href="service.php">Image on flash drive</a>
                        <a href="service.php">2photographers</a>
                        <a href="service.php">hightlight</a>
                        <a href="service.php">Drone</a>
                        <a href="service.php">Invitation Design</a>
                    </div>
                    <a href="#"><b>GH¢6,500.00</b></a> -->
                    <!-- <div class="rating">add stars for rating of product from font awesome 4 -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>add 4 black start and one transparent star to show 4 out of 5 rating -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-o" aria-hidden="true"></i>
                </div> -->
                <!-- <p>$50.00</p>product price -->
            </div>

            <div class="col-4">
                <a href="service.php"><img src="main/images/product-7.jpg"></a> <!--product img-->
                <a href="service.php"><h4><b>Naming ceremony package</b></h4></a> <!--product title-->
                <a href="#"><b>GH¢2,500.00</b></a>
                <!-- <div class="dropdown">
                        <button>Naming ceremony package</button>
                        <div class="dropdown-content">
                        <a href="service.php">Unlimited soft copies</a>
                        <a href="service.php">Online images</a>
                        <a href="service.php">Image on flash drive</a>
                        <a href="service.php">2photographers</a>
                        <a href="service.php">hightlight</a>
                        <a href="service.php">Drone</a>
                        <a href="service.php">Invitation Design</a>
                    </div>
                    <a href="#"><b>GH¢2,500.00</b></a> -->
                <!-- <div class="rating">add stars for rating of product from font awesome 4 -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>add 4 black start and one transparent star to show 4 out of 5 rating -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-half-o" aria-hidden="true"></i>
                   <i class="fa fa-star-o" aria-hidden="true"></i>
                </div> -->
                <!-- <p>$50.00</p>product price -->
            </div>

            <div class="col-4">
                <a href="service.php"><img src="main/images/product-8.jpg"></a><!--product img-->
                <a href="service.php"><h4><b>Silver package</b></h4></a> <!--product title-->
                <a href="#"><b>GH¢3,500.00</b></a>
                <!-- <div class="dropdown">
                        <button>Silver package</button>
                        <div class="dropdown-content">
                        <a href="service.php">Unlimited soft copies</a>
                        <a href="service.php">Online images</a>
                        <a href="service.php">Image on flash drive</a>
                        <a href="service.php">2photographers</a>
                        <a href="service.php">hightlight</a>
                        <a href="service.php">Drone</a>
                        <a href="service.php">Invitation Design</a>
                    </div>
                    <a href="#"><b>GH¢2,500.00</b></a> -->
                <!-- <div class="rating">add stars for rating of product from font awesome 4 -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>add 4 black start and one transparent star to show 4 out of 5 rating -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-half-o" aria-hidden="true"></i> -->

                </div>
                <!-- <p>$50.00</p>product price -->
            </div>
         </div>


        </div>

    </div>
    <div class="small container">
         <!--using again same row class to maintain same styling -->
        <h2 class="title">Work Samples</h2>
         <div class="row">
             <!--this time we will make 4 columns-->
     
             <!--it contains 4 different products with heading h4, image, price <p> and rating star-->
             <div class="col-4">
                 <a href="service.php"><img src="main/images/product-9.jpg"></a><!--product img-->
                 <a href="service.php"><h4><b>Funeral Package</b></h4></a> <!--product title-->
                 <!-- <a href="#"><b>GH¢3,500.00</b></a> -->
                 <div class="dropdown">
                        <!-- <button>Funeral package</button> -->
                        <div class="dropdown-content">
                        <a href="service.php">Unlimited soft copies</a>
                        <a href="service.php">Online images</a>
                        <a href="service.php">Image on flash drive</a>
                        <a href="service.php">4 photographers</a>
                        <a href="service.php">funeral hightlight</a>
                        <a href="service.php">Drone</a>
                        <a href="service.php">Invitation Design</a>
                        <a href="service.php">and many more</a>
                    </div>
                    <a href="#"><b>GH¢6,500.00</b></a>
                </div>
                 <!-- <div class="rating">add stars for rating of product from font awesome 4 -->
                    <!-- <i class="fa fa-star" aria-hidden="true"></i>add 4 black start and one transparent star to show 4 out of 5 rating -->
                    <!-- <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                 </div> -->
                 <!-- <p>$50.00</p>product price -->
             </div>

             <div class="col-4">
                <a href="service.php"><img src="main/images/product-10.jpg"></a><!--product img-->
                <a href="service.php"><h4><b>Digital Artwork</b></h4></a><!--product title-->
                <a href="#"><b>GH¢100.00 For soft copy</b></a>
                    <!-- <div class="rating">add stars for rating of product from font awesome 4 -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>add 4 black start and one transparent star to show 4 out of 5 rating -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-o" aria-hidden="true"></i>
                </div> -->
                <!-- <p>$50.00</p>product price -->
            </div>

            <div class="col-4">
                <a href="service.php"><img src="main/images/product-11.jpg"></a> <!--product img-->
                <a href="service.php"><h4><b>Event Flyers</b></h4></a><!--product title-->
                <a href="#"><b>GH¢100.00</b></a>
                
                <!-- <div class="rating">add stars for rating of product from font awesome 4 -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>add 4 black start and one transparent star to show 4 out of 5 rating -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-half-o" aria-hidden="true"></i>
                   <i class="fa fa-star-o" aria-hidden="true"></i>
                </div> -->
                <!-- <p>$50.00</p>product price -->
            </div>

            <div class="col-4">
                <a href="service.php"><img src="main/images/product-12.jpg"></a><!--product img-->
                <a href="service.php"><h4><b>funeral Posters</b></h4></a><!--product title-->
                <a href="#"><b>GH¢100.00<b></a>
                <!-- <div class="rating">add stars for rating of product from font awesome 4 -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>add 4 black start and one transparent star to show 4 out of 5 rating -->
                   <!-- <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-half-o" aria-hidden="true"></i> -->

                </div>
                <!-- <p>$50.00</p>product price -->
            </div>
         </div>


        </div>

    </div>

    <!----------------testimonials-------------->

    <div class="testimonial">
        <div class="small container"><!--section-->
            <div class="row"><!--row-->
                
                <!--3 comments-->
                <div class="col-3"><!--3 columns-->

                    <!--add " or left quote before comment-->
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>
                         I've been using this Elyon Mutimedia web application for my online store for a few months now, and it has been fantastic. The user interface is clean and easy to navigate, and the product management tools are powerful and flexible. The built-in marketing features have helped me grow my business, and the customer support team has been responsive and helpful whenever I've needed assistance. Highly recommend!
                    </p>
                    <div class="rating"><!--add stars for rating of product from font awesome 4-->
                        <i class="fa fa-star" aria-hidden="true"></i><!--add 4 black start and one transparent star to show 4 out of 5 rating-->
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                     </div>
                     <img src="main/images/user-1.png"><!--image of person-->
                     <h3>Douglas Konadu</h3><!--name of person-->
   
                </div>

                <div class="col-3"><!--3 columns-->

                    <!--add " or left quote before comment-->
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>
                        I was hesitant to try out this Elyon Multimedia at first, but I'm so glad I did. It has made managing my personal finances so much easier and more organized. I love the visual dashboard that gives me a quick overview of my accounts, and the budgeting tools are incredibly helpful. The only downside is that it doesn't yet support integration with my bank, but I've heard that feature is coming soon.
                    </p>
                    <div class="rating"><!--add stars for rating of product from font awesome 4-->
                        <i class="fa fa-star" aria-hidden="true"></i><!--add 4 black start and one transparent star to show 4 out of 5 rating-->
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                     </div>
                     <img src="main/images/user-2.png"><!--image of person-->
                     <h3>Beatrice Obeng Bona</h3><!--name of person-->
   
                </div>

                <div class="col-3"><!--3 columns-->

                    <!--add " or left quote before comment-->
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>
                        I've been shopping from Elyon Multimedia for several months now and it has been a game-changer. The inventory management system is intuitive and efficient, and the payment processing integration has been flawless. The customer support team is also fantastic - they are always available to answer my questions and help me troubleshoot any issues that arise.
                    </p>
                    <div class="rating"><!--add stars for rating of product from font awesome 4-->
                        <i class="fa fa-star" aria-hidden="true"></i><!--add 4 black start and one transparent star to show 4 out of 5 rating-->
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                     </div>
                     <img src="main/images/user-3.png"><!--image of person-->
                     <h3>Joyce Osei</h3><!--name of person-->
   
                </div>

            </div>
        </div>
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
                    <p>Our purpose is To Bringing Your Vision to Life with Creativity and Technology and Transforming your ideas into stunning visual experiences</p>
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

    <!-----------------JS----------------------->
    <script>
    // JavaScript to handle the dropdown functionality
    window.addEventListener('DOMContentLoaded', function() {
      const dropdowns = document.getElementsByClassName('dropdown');

      for (let i = 0; i < dropdowns.length; i++) {
        const dropdown = dropdowns[i];
        const button = dropdown.querySelector('button');
        const dropdownContent = dropdown.querySelector('.dropdown-content');

        button.addEventListener('click', function() {
          dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
        });
      }
    });
  </script>
    <script>
        //declare variable MenuItems which take ul having id "MenuItems"
        
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";//by default, we have set menu or dropdown menu height to 0px, means it is close by default
        
        function menutoggle()//this is the function which we have called above in nav which works on small devices and users click on it
        {
            if (MenuItems.style.maxHeight =="0px")//when user click on it and if it is closed or its height is 0px, then it will open or it should have heigt of 200px upon clicking
            {
                MenuItems.style.maxHeight = "200px"
            }
            else//if user not clicked or it has already opened, then it will upon clicking again closed
            {
                MenuItems.style.maxHeight = "0px" 
            }
        
        }
    </script>    
    
    </body>

</html>