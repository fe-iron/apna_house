<?php

    include 'admin/connection.php';

    $con = openCon();

    if(empty($_GET)) {
        $msg = " ";
    }else{
        $msg = $_GET['result'];
    }

    session_start();
    // If form submitted, insert values into the database.
if (isset($_POST['email'])){
    // removes backslashes
        $username = stripslashes($_REQUEST['email']);
            //escapes special characters in a string
        $username = mysqli_real_escape_string($con,$username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
    
    //Checking is user existing in the database or not
    $query = "SELECT * FROM `users` WHERE email='$username'
        and password='".md5($password)."'";
        $result = mysqli_query($con,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        
    if($rows==1){

            $row = $result->fetch_assoc();
            $_SESSION['username'] =  $row['name'];
            $_SESSION['email'] =  $row['email'];
            $msg = "Login Successfully!";
            header("Location: index.php?result=".$msg);
    }else{
        $msg = "Wrong Credentials!";   
    }
}

?>



<?php  include_once 'inc/head.php'; ?>
<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Apna House Designs || login</title>

   <!-- style CSS -->
   <link rel="stylesheet" href="css/style.css">
   <style type="text/css">
        .card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
   background-image: linear-gradient( 
90deg, rgb(61 85 117) 0%, rgb(107 142 187) 35%, rgb(71 97 130) 100%);
    border-bottom: 1px solid rgba(0,0,0,.125);
    color: white;
   }
    </style>

</head>

<body>

   <?php include_once 'inc/header.php';  ?>



   <section class="garphics_content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 py-5" style = "margin-top:50px">
                    <?php 
                    if($msg == "Registered Successfully!"){
                        print '<h2 class="text-success" style="text-align: center">'.$msg.'</h2>';
                    }else{
                        print '<h2 class="text-danger" style="text-align: center">'.$msg.'</h2>';
                    }
                    ?>
                    <div class="card" id="form">
                        <div class="card-header">
                            <h3 class="mb-0 text-center">Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">

                                <div class="form-row">
                                    <div class="col-md mb-3">
                                        <label>Email*</label>
                                        <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md mb-3">
                                        <label>password*</label>
                                        <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                                    </div>
                                </div>

                                
                        
                                <div class="form-row">
                                    <div class="col-md mb-3">

                                        <button type="submit" name="submit" class="btn btn-info float-right">SUBMIT</button>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <!-- <div class="col-md">
                                        <button type="submit" name="submit" class="btn btn-dark float-right">SUBMIT</button>
                                    </div> -->
                                    <div class="col-md">
                                        Register Now!! <a href="signup.php" class="ml-2 btn btn-info">Sign Up</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   <footer class="footer_part">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="footer_logo">
                  <a href="index.html" class="footer_logo_iner"> <img src="img/websitelogo.png" alt="#"> </a>
               </div>
            </div>
            
            <div class="col-sm-6 col-lg-6">
               <div class="single_footer_part">
                  <h4>About Us</h4>
                  <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open</p>
                  <div class="footer_icon social_icon">
                     <ul class="list-unstyled">
                        <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                        <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-6">
               <div class="single_footer_part">
                  <h4>Contact Info</h4>
                  <p>Address : B1/H3 Mohan Co-Operative Industrial Area, Block B Mathura Road, Near to  Mohan Estate Metro Station, Audi Showroom, <br> New Delhi -110044.</p>
                  <p>landline : 01141051722</p>
                  <p>Phone : +91 9958003087</p>
                  <p>Email : info@apnahousedesigns.com</p>
               </div>
            </div>
            </div>
            <hr>
            <div class="row">
               <div class="col-lg-12">
                  <div class="copyright_text text-center">
                     <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Apna Prachar
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!--::footer_part end::-->
         
         <!-- jquery -->
         <script src="js/jquery-1.12.1.min.js"></script>
         <!-- popper js -->
         <script src="js/popper.min.js"></script>
         <!-- bootstrap js -->
         <script src="js/bootstrap.min.js"></script>
         <!-- easing js -->
         <script src="js/jquery.magnific-popup.min.js"></script>
         <!-- owl carousel js -->
         <script src="js/owl.carousel.min.js"></script>
         <script src="js/slick.min.js"></script>
         <!-- easing js -->
         <script src="js/jquery.easing.min.js"></script>
         <!--masonry js-->
         <script src="js/masonry.pkgd.min.js"></script>
         <script src="js/masonry.pkgd.js"></script>
         <!--form validation js-->
         <script src="js/jquery.nice-select.min.js"></script>
         <script src="js/contact.js"></script>
         <script src="js/jquery.ajaxchimp.min.js"></script>
         <script src="js/jquery.form.js"></script>
         <script src="js/jquery.validate.min.js"></script>
         <script src="js/mail-script.js"></script>
         <!-- counter js -->
         <script src="js/jquery.counterup.min.js"></script>
         <script src="js/waypoints.min.js"></script>
         <!-- custom js -->
         <script src="js/custom.js"></script>
      </body>

      </html>