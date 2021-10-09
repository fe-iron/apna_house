<?php

include 'admin/connection.php';

$con = openCon();
$error = "";
if(empty($_GET)) {
	$msg = " ";
}else{
	$msg = $_GET['result'];
}

     // If form submitted, insert values into the database.
if (isset($_POST['phone'])){
        // removes backslashes
	$name = $_POST['fname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM `users` WHERE mobile='$phone'";
	$result = $con->query($sql);


	if ($result->num_rows > 0) {
		$error = "Mobile Number already Exists!";
	}else{
		$sql = "SELECT * FROM `users` WHERE email='$email'";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
			$error = "Email already Exists!";
		}else{

			$query = "INSERT into `users` (name, mobile, email, password) 
			VALUES ('$name', '$phone', '$email', '".md5($password)."')";

			if($con->query($query) === TRUE){
				$_SESSION['username'] = $row['name'];

				$_SESSION['phone'] = $row['mobile'];


				header("Location: login.php?result=Registered Successfully!");
			}else{
					// echo "Error: " . $query . "<br>" . $con->error;
				$error = "Something Went! Try Again";
			}
		}
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
   <title>Apna House Designs || About</title>

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
				<div class="col-md-5 py-5" style="margin-top:50px">
					<?php 
					if($msg == "Successfully saved!"){
						print '<h2 class="text-success" style="text-align: center">'.$msg.'</h2>';
					}else{
						print '<h2 class="text-danger" style="text-align: center">'.$msg.'</h2>';
					}
					print '<h3 class="text-danger" style="text-align: center">'.$error.'</h3>';
					?>
					<div class="card" id="form">
						<div class="card-header">
							<h3 class="mb-0 text-center">Sign Up</h3>
						</div>
						<div class="card-body">
							<form action="" method="post">
								<div class="form-row">
									<div class="col-md mb-3">
										<label>Name*</label>
										<input type="text" class="form-control" placeholder="Enter Full Name" name="fname" required>
									</div>
								</div>

								<div class="form-row">
									<div class="col-md mb-3">
										<label>Mobile*</label>
										<input type="tel" class="form-control" placeholder="Enter Mobile Number" name="phone" required>
									</div>
								</div>

								<div class="form-row">
									<div class="col-md mb-3">
										<label>Email*</label>
										<input type="text" class="form-control" placeholder="Enter Email" name="email" required>
									</div>
								</div>

								<div class="form-row">
									<div class="col-md mb-3">
										<label>Create Password*</label>
										<input type="password" class="form-control" placeholder="Enter Password" name="password" required>
									</div>
								</div>

								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
									<label class="form-check-label" for="defaultCheck1">
										I Agree terms & Conditions
									</label>
								</div>
						
								<div class="form-row">
									<div class="col-md mb-3">
										<button type="submit" name="submit" class="btn btn-dark float-right">SUBMIT</button>
									</div>
								</div>

								<div class="form-row">
									<!-- <div class="col-md">
										<button type="submit" name="submit" class="btn btn-dark float-right">SUBMIT</button>
									</div> -->
									Already a Member? <a href="login.php" class="ml-2">Click Here to login</a>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	



   <!--::footer_part start::-->
   <footer class="footer_part">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="footer_logo">
                  <a href="index.html" class="footer_logo_iner"> <img src="img/footer_logo.png" alt="#"> </a>
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
               <!-- <div class="col-sm-6 col-lg-3">
                  <div class="single_footer_part">
                     <h4>Important Link</h4>
                     <ul class="list-unstyled">
                        <li><a href=""> WHMCS-bridge</a></li>
                        <li><a href="">Search Domain</a></li>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Shopping Cart</a></li>
                        <li><a href="">Our Shop</a></li>
                     </ul>
                  </div>
               </div> -->
               
               <!-- <div class="col-sm-6 col-lg-4">
                  <div class="single_footer_part">
                     <h4>Newsletter</h4>
                     <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days open
                     </p>
                     <div id="mc_embed_signup">
                        <form target="_blank"
                           action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                           method="get" class="subscribe_form relative mail_part" required>
                           <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                              class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '"
                              required="" type="email">
                           <button type="submit" name="submit" id="newsletter-submit"
                              class="email_icon newsletter-submit button-contactForm"><i
                                 class="far fa-paper-plane"></i></button>
                           <div class="mt-10 info"></div>
                        </form>
                     </div>
                  </div>
               </div> -->
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