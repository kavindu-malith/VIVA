<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "foodweb";

$con = new mysqli($hostname,$username,$password,$db);
if(!$con)
{
    die('database connection faild ');
}
if(isset($_POST["submit"]))
{   
    $quantity = 1;
    // $_GET['quantity']
    $name = $_POST['name'];
    $Email = $_POST['email'];
    $Address = $_POST['address'];
    $Phone = $_POST['phone'];

    $sql = "INSERT INTO foodweb_table (CName,CEmail,address_line,quantity,phone_no)VALUES('{$name}','{$Email}','{$Address}','{$quantity}','{$Phone}')";

    if(mysqli_query($con,$sql))
    {
        echo "Action Complited !";
    }
    else
    {
        echo "Error" . $sql . " " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

  <title>Food Fantasy PVT LTD</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
   <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">FOOD FANTACY<em> PVT LTD</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html" class="active">Home</a></li>
                            
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="Pizza.html">Pizza</a>
                                    <a class="dropdown-item" href="Burger.html">Burger</a>
                                    <a class="dropdown-item" href="Pudding.html">Pudding</a>
                                </div>


                           
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li> 
                            <li><a href="Log.html">Login</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/Payment.jpg)">
        <form action="odernow.php" method="POST"></form>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Easy <em>Payment</em></h2>
                        <p>FIVE STAR QUALITY.WE ALLWAYS GIVE OUR CUSTOMERS THE BEST SERVICE</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="checkout.php" method="post">
                           <div class="row">
                                
                                <div class="col-sm-6 col-xs-12">
                                     <label>Name:</label>
                                     <input type="text" name="name">
                                </div>
                                 <div class="col-sm-6 col-xs-12">
                                      <label>Phone:</label>
                                     <input type="text" name="phone">
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <label>Email:</label>
                                     <input type="text" name="email">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <label>Address:</label>
                                     <input type="text" name="address">
                                </div>
                                
                           </div>
                          
                           

                           <div class="row">
                               
                                <div class="col-sm-6 col-xs-12">
                                  
                                </div>
                                </div>
                            </div>  
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-button">
                                       

                                        <div class="float-right">
                                            <button type="submit" id="form-submit" class="main-button" name="submit">ORDER NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <br>
                </div>

            </div>
        </div>
    </section>

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2021 Food Fantacy || All Rights Reserved  <br>
                        Design by: <a href="#">Food Fantacy Team</a> <br>
                        <a href="Privacy.html">Privacy Policy</a> || <a href="Term.html">Terms Conditions</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>