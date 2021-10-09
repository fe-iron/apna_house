<<?php include_once 'inc/head.php'; 
   session_start();
?>

<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Apna House Designs || Home</title>
 
   <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <?php  include_once 'inc/header.php'; ?>

   <!--::banner part start::-->
   <section class="banner_part">
      <div class="container">
         <div class="row">
         <?php 
            if(isset($_SESSION['message'])){
               echo "<p class='text-primary'>".$_SESSION['message']."</p>";
               unset($_SESSION['message']);
            }
            ?>
         
            <div class="col-lg-5 offset-lg-1 col-sm-8 offset-sm-2">
               <div class="banner_text aling-items-center">
                  <div class="banner_text_iner">
                     <h5>Dream</h5>
                     <h2>Proparties <br>
                     Now In City</h2>
                     <p>Building upon experience and expertise Apna House Design is constantly looking for ways to improve. </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--::banner part end::-->

   <!--::team part end::-->
   <section class="about_part section-padding">
      <div class="container">
         <div class="row">
            <div class="section_tittle">
               <h2><span>about</span> us</h2>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6 col-md-6">
               <div class="about_img">
                  <img src="img/about.png" alt="">
               </div>
            </div>
            <div class="offset-lg-1 col-lg-5 col-sm-8 col-md-6">
               <div class="about_text">
                  <h2>Hello City We are <br>
                     <span>Apna House Designs.</span></h2>
                     <p> Apna House Designs has an in depth
                        understanding of needs of its customers; and that's where their vision is fixed today with its sights
                     firmly set on the future</p>
                     <a href="#" class="btn_1">learn More</a>
                     <div class="about_part_counter">
                     <!-- <div class="single_counter">
                        <span class="counter">10</span>
                        <p>project</p>
                     </div>
                     <div class="single_counter">
                        <span class="counter">30</span>
                        <p>clients</p>
                     </div>
                     <div class="single_counter">
                        <span class="counter">50</span>
                        <p>member</p>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--::team part end::-->

   <!--::project part start::-->
   <section class="portfolio_area pt_30 padding_bottom">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section_tittle">
                  <h2><span>our</span> project</h2>
               </div>
               <div class="portfolio-filter">
                  <h2>Hello City We are <br>
                    <span>Apna House Designs .</span></h2>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li>
                        <a class="active" id="Architecture-tab" data-toggle="tab" href="#Architecture" role="tab"
                        aria-controls="Architecture" aria-selected="true">
                        Architecture
                     </a>
                  </li>
                  <li>
                     <a id="Interior-tab" data-toggle="tab" href="#Interior" role="tab" aria-controls="Interior"
                     aria-selected="false">
                     Interior
                  </a>
               </li>
               <li>
                  <a id="Exterior-tab" data-toggle="tab" href="#Exterior" role="tab" aria-controls="Exterior"
                  aria-selected="false">
                  Exterior
               </a>
            </li>
            <li>
               <a id="Landing-tab" data-toggle="tab" href="#Landing" role="tab" aria-controls="Landing"
               aria-selected="false">
               Drafting Landing
            </a>
         </li>
      </ul>
   </div>
   <div class="portfolio_item tab-content" id="myTabContent">
      <div class="row align-items-center justify-content-between tab-pane fade show active"
      id="Architecture" role="tabpanel" aria-labelledby="Architecture-tab">
      <div class="col-lg-6 col-sm-12 col-md-6">
         <div class="portfolio_box">
            <a href="img/project-1.png" class="img-gal">
               <div class="single_portfolio">
                  <img class="img-fluid w-100" src="img/project-1.png" alt="">
               </div>
            </a>
            <div class="short_info">
               <p>Exclusive Project</p>
               <h4><a href="#">Img1<br>
               Title1</a></h4>
            </div>
         </div>
      </div>
      <div class="col-lg-5 col-md-6">
         <div class="row">
            <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
               <div class="portfolio_box">
                  <a href="img/project-2.png" class="img-gal">
                     <div class="single_portfolio">
                        <img class="img-fluid w-100" src="img/project-2.png" alt="">
                     </div>
                  </a>
                  <div class="short_info">
                     <p>new Project</p>
                     <h4><a href="#">Img2<br>
                     title2</a></h4>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
               <div class="portfolio_box">
                  <a href="img/project-3.png" class="img-gal">
                     <div class="single_portfolio">
                        <img class="img-fluid w-100" src="img/project-3.png" alt="">
                     </div>
                  </a>
                  <div class="short_info">
                     <p>Exclusive Project</p>
                     <h4><a href="#">Img3<br>
                     Title3</a></h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row align-items-center justify-content-between tab-pane fade" id="Interior" role="tabpanel"
   aria-labelledby="Interior-tab">
   <div class="col-lg-6 col-sm-12 col-md-6">
      <div class="portfolio_box">
         <a href="img/project-2.png" class="img-gal">
            <div class="single_portfolio">
               <img class="img-fluid w-100" src="img/project-2.png" alt="">
            </div>
         </a>
         <div class="short_info">
            <p>new Project</p>
            <h4><a href="#">Img4<br>
            Title4</a></h4>
         </div>
      </div>
   </div>
   <div class="col-lg-5 col-md-6">
      <div class="row">
         <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
            <div class="portfolio_box">
               <a href="img/project-1.png" class="img-gal">
                  <div class="single_portfolio">
                     <img class="img-fluid w-100" src="img/project-1.png" alt="">
                  </div>
               </a>
               <div class="short_info">
                  <p>new Project</p>
                  <h4><a href="#">Img5<br>
                  Title5</a></h4>
               </div>
            </div>
         </div>
         <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
            <div class="portfolio_box">
               <a href="img/project-3.png" class="img-gal">
                  <div class="single_portfolio">
                     <img class="img-fluid w-100" src="img/project-3.png" alt="">
                  </div>
               </a>
               <div class="short_info">
                  <p>new Project</p>
                  <h4><a href="#">Img6 <br>
                  Title6</a></h4>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row align-items-center justify-content-between tab-pane fade" id="Exterior" role="tabpanel"
aria-labelledby="Exterior-tab">
<div class="col-lg-6 col-sm-12 col-md-6">
   <div class="portfolio_box">
      <a href="img/project-3.png" class="img-gal">
         <div class="single_portfolio">
            <img class="img-fluid w-100" src="img/project-3.png" alt="">
         </div>
      </a>
      <div class="short_info">
         <p>new Project</p>
         <h4><a href="#">Img7<br>
         Title7</a></h4>
      </div>
   </div>
</div>
<div class="col-lg-5 col-md-6">
   <div class="row">
      <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
         <div class="portfolio_box">
            <a href="img/project-2.png" class="img-gal">
               <div class="single_portfolio">
                  <img class="img-fluid w-100" src="img/project-2.png" alt="">
               </div>
            </a>
            <div class="short_info">
               <p>new Project</p>
               <h4><a href="#">Img8<br>
               Title8</a></h4>
            </div>
         </div>
      </div>
      <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
         <div class="portfolio_box">
            <a href="img/project-1.png" class="img-gal">
               <div class="single_portfolio">
                  <img class="img-fluid w-100" src="img/project-1.png" alt="">
               </div>
            </a>
            <div class="short_info">
               <p>new Project</p>
               <h4><a href="#">Img9<br>
               Title 10</a></h4>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<div class="row align-items-center justify-content-between tab-pane fade" id="Landing" role="tabpanel"
aria-labelledby="Landing-tab">
<div class="col-lg-6 col-sm-12 col-md-6">
   <div class="portfolio_box">
      <a href="img/project-1.png" class="img-gal">
         <div class="single_portfolio">
            <img class="img-fluid w-100" src="img/project-1.png" alt="">
         </div>
      </a>
      <div class="short_info">
         <p>new Project</p>
         <h4><a href="#">Img11<br>
         Title11</a></h4>
      </div>
   </div>
</div>
<div class="col-lg-5 col-md-6">
   <div class="row">
      <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
         <div class="portfolio_box">
            <a href="img/project-4.png" class="img-gal">
               <div class="single_portfolio">
                  <img class="img-fluid w-100" src="img/project-5.png" alt="">
               </div>
            </a>
            <div class="short_info">
               <p>new Project</p>
               <h4><a href="#">Img12<br>
               Title12</a></h4>
            </div>
         </div>
      </div>
      <div class="col-lg-12 col-sm-6 col-md-12 single_portfolio_project">
         <div class="portfolio_box">
            <a href="img/project-3.png" class="img-gal">
               <div class="single_portfolio">
                  <img class="img-fluid w-100" src="img/project-3.png" alt="">
               </div>
            </a>
            <div class="short_info">
               <p>new Project</p>
               <h4><a href="#">Img13<br>
               Title13</a></h4>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--::project part end::-->

<!--::service part end::-->
<section class="service_part">
   <div class="container">
      <div class="row justify-content-between align-items-center">
         <div class="col-lg-7 col-xl-6">
            <div class="section_tittle">
               <h2>our <span>services</span></h2>
            </div>
            <div class="service_part_iner">
               <div class="row">
                  <div class="col-lg-6 col-sm-6">
                     <div class="single_service_text ">
                        <img src="img/icon/service_1.svg" alt="">
                        <h4>house Planning</h4>
                        <p>House planning . </p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                     <div class="single_service_text">
                        <img src="img/icon/service_2.svg" alt="">
                        <h4>house Build</h4>
                        <p>House Build</p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                     <div class="single_service_text">
                        <img src="img/icon/service_3.svg" alt="">
                        <h4>Design&
                        Build</h4>
                        <p>Design & Build</p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                     <div class="single_service_text">
                        <img src="img/icon/service_4.svg" alt="">
                        <h4>Support</h4>
                        <p>Maintenance & Support</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-10">
            <div class="service_text">
               <h2>Hello City We are
                  leader in <span> Services.</span></h2>
                  <p>Apna House Design, a recognized name in Real Estate Industry, has grown into a trustworthy name with a perfect record of deliverance; imparts services related to the sale purchase of properties, documentation, renting and leasing, investment advisory services, property valuation etc. </p>
                  <a href="service.html" class="btn_1">learn more</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--::service part end::-->

   <!--::team part end::-->
   <section class="project_gallery section-padding">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="project_gallery_tittle">
                  <h2><span>Luxuries</span> Apartment</h2>
               </div>
               <div class="grid">
                  <div class="grid-sizer"></div>
                  <div class="grid-item big_weight">
                     <div class="project_img">
                        <img src="img/gallery/gallery_1.png" alt="">
                        <div class="project_gallery_hover_text">
                           <p>Home Apartment</p>
                           <h3><a href="apartment.html"> Detached House For Sale</a></h3>
                           <ul>
                              <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                              <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                              <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                              <li><a href=""><span class="ti-heart"></span></a> like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="grid-item big_height">
                     <div class="project_img">
                        <img src="img/gallery/gallery_4.png" alt="">
                        <div class="project_gallery_hover_text">
                           <p>Home Apartment</p>
                           <h3><a href="apartment.html"> Detached House For Sale</a></h3>
                           <ul>
                              <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                              <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                              <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                              <li><a href=""><span class="ti-heart"></span></a> like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="grid-item">
                     <div class="project_img">
                        <img src="img/gallery/gallery_2.png" alt="">
                        <div class="project_gallery_hover_text">
                           <p>Home Apartment</p>
                           <h3><a href="apartment.html"> Detached House For Sale</a></h3>
                           <ul>
                              <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                              <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                              <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                              <li><a href=""><span class="ti-heart"></span></a> like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="grid-item">
                     <div class="project_img">
                        <img src="img/gallery/gallery_3.png" alt="">
                        <div class="project_gallery_hover_text">
                           <p>Home Apartment</p>
                           <h3><a href="apartment.html"> Detached House For Sale</a></h3>
                           <ul>
                              <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                              <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                              <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                              <li><a href=""><span class="ti-heart"></span></a> like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--::team part end::-->

   <!--::blog_part start::-->
   <div class="blog_part padding_bottom">
      <div class="container">
         <div class="row">
            <div class="col-md-7 col-lg-5">
               <div class="blog_part_tittle">
                  <h2>our <span>blog</span> </h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-7">
               <div class="single_blog">
                  <div class="appartment_img">
                     <img src="img/blog_1.png" alt="">
                  </div>
                  <div class="single_appartment_content">
                     <p><a href="#">Apartment</a> / March 20, 2019</p>
                     <a href="blog.html">
                        <h4>Doee lights without darkness that said
                        good deep years very.</h4>
                     </a>
                     <ul class="list-unstyled">
                        <li><a href=""> <span class="ti-comment"></span> </a> 2 comment</li>
                        <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="right_single_blog">
                  <div class="single_blog">
                     <div class="media">
                        <div class="media-body align-self-center">
                           <p><a href="#">Apartment</a> / March 20, 2019</p>
                           <a href="blog.html">
                              <h5 class="mt-0"> lights without darkness that said.</h5>
                           </a>
                           <ul class="list-unstyled">
                              <li><a href=""> <span class="ti-time"></span> </a> Mar 12</li>
                              <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="single_blog">
                     <div class="media">
                        <div class="media-body align-self-center">
                           <p><a href="#">Apartment</a> / March 20, 2019</p>
                           <a href="blog.html">
                              <h5 class="mt-0"> lights without darkness that said.</h5>
                           </a>
                           <ul class="list-unstyled">
                              <li><a href=""> <span class="ti-time"></span> </a> Mar 12</li>
                              <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--::blog_part end::-->

   <!--::footer_part start::-->
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







      <!-- Get Quote Modal -->

      <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title text-danger" id="exampleModalLabel">Get Quote </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form class="m-3" action="quote.php" method="post">
               <div class="form-row">
                  <div class="col-md mb-3">
                     <label>Name*</label>
                     <input type="text" class="form-control " placeholder="First name" name="name" required>
                  </div>
                  <div class="col-md mb-3">
                     <label>Mobile*</label>
                     <input type="text" class="form-control " name="mobile" placeholder="Mobile" required>
                  </div>
                  <div class="col-md mb-3">
                     <label>Email Id*</label>
                     <input type="email" class="form-control " placeholder="Email" name="email" required>
                  </div>
               </div>

               <div class="form-row">
                  <div class="col-md mb-4">
                     <label>Write Description</label>
                     <textarea class="form-control" name="desc" rows="3" required></textarea>
                  </div>
               </div>

               <div class="form-row">
                  <div class="col-md mb-2">
                     <button type="submit" name="s" class="btn btn-danger float-right">SUBMIT</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>


















      <!-- jquery plugins here-->
      <script src="js/jquery-1.12.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.min.js"></script>
      <!-- magnific js -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- carousel js -->
      <script src="js/owl.carousel.min.js"></script>
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