 <!--::menu part start::-->
   <header class="main_menu home_menu">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand" href="index.php"> <img src="img/websitelogo.png" alt="logo"> </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse main-menu-item" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">about</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                     </li>

                        <!-- <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              pages
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="project.php">Project</a>
                              <a class="dropdown-item" href="apartment.php">Apartment</a>
                           </div>
                        </li> -->
                        <li class="nav-item">
                           <a class="nav-link" href="contact.php">Contact us</a>
                        </li>

                        <!-- <li class="nav-item">
                           <a class="nav-link text-danger" href="contact.php">Get Quote</a>
                        </li> -->
                     </ul>

                     <span class="navbar-text">
                       <a class="btn btn-danger text-white" href="contact.php" data-toggle="modal" data-target="#exampleModal">Get Quote</a>
                     </span>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </header>
   <!--::menu part end::-->







  <!--  modal -->

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get Quote</h5>
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
                     <button type="submit" class="btn btn-danger float-right">SUBMIT</button>
                  </div>
               </div>
            </form>

      </div>
    </div>
  </div>
</div>