
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <style>
        .rating {
  --dir: right;
  --fill: gold;
  --fillbg: rgba(100, 100, 100, 0.15);
  --heart: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.328l-1.453-1.313q-2.484-2.25-3.609-3.328t-2.508-2.672-1.898-2.883-0.516-2.648q0-2.297 1.57-3.891t3.914-1.594q2.719 0 4.5 2.109 1.781-2.109 4.5-2.109 2.344 0 3.914 1.594t1.57 3.891q0 1.828-1.219 3.797t-2.648 3.422-4.664 4.359z"/></svg>');
  --star: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.25l-6.188 3.75 1.641-7.031-5.438-4.734 7.172-0.609 2.813-6.609 2.813 6.609 7.172 0.609-5.438 4.734 1.641 7.031z"/></svg>');
  --stars: 5;
  --starsize: 3rem;
  --symbol: var(--star);
  --value: 1;
  --w: calc(var(--stars) * var(--starsize));
  --x: calc(100% * (var(--value) / var(--stars)));
  block-size: var(--starsize);
  inline-size: var(--w);
  position: relative;
  touch-action: manipulation;
  -webkit-appearance: none;
}

.rating::-webkit-slider-runnable-track {
  background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
  block-size: 100%;
  mask: repeat left center/var(--starsize) var(--symbol);
  -webkit-mask: repeat left center/var(--starsize) var(--symbol);
}

.rating::-webkit-slider-thumb {
  height: var(--starsize);
  opacity: 0;
  width: var(--starsize);
  -webkit-appearance: none;
}


/* NO JS */

.rating--nojs::-webkit-slider-thumb {
  background-color: var(--fill);
  box-shadow: calc(0rem - var(--w)) 0 0 var(--w) var(--fill);
  opacity: 1;
  width: 1px;
}
    </style>


</head>
<body>

  <!-- Sidebar Start -->
  <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <h5 style="margin-left:38px; margin-top:28px;"> <i class="fa fa-tachometer-alt me-2"></i>Forms</h5>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Forms</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="category.php" class="dropdown-item">Category</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a> 
                         </div>
                    </div> -->
                    <a href="category.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Category</a>
                    <a href="cricket.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Cricket</a>
                    <a href="addlap.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Laptop Mobiles</a>
                    <a href="addfood.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Food</a>
                    <!-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> -->
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Tables</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="viewcategory.php" class="dropdown-item">View Category</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div> -->

                    <h5 style="margin-left:38px; margin-top:28px;"> <i class="fa fa-tachometer-alt me-2"></i>Tables</h5>
               
                    <a href="viewuser.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>View User</a>
                    <a href="viewcategory.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>View Category</a>

                    <a href="viewcricket.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>View Cricket</a>
                    
                    <!-- <a href="viewlap.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>View LapMobile</a>
                    <a href="viewfood.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>View Food</a> -->
                    <!-- <a href="viewbooking.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>View Booking</a> -->

                
                    <a href="viewallbidding.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>View Bidding</a>
                         
                    <a href="viewfeedback.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>View FeedBack</a>

                    <a href="../user2/login.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Log Out</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
       
        

<?php


include("config.php");
?>






<div class="content" style="margin-left :360px; margin-top: 100px;">
        <div class="container-fluid">
        
        
         <div class="col-md-6 pt-5 pl-5">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Students  FeedBack </h4>
</div>
</div>


                
                    

                    <div class="row ">
                    <div class="col-md-12">
                        <table class="table">
                        
                            <thead class="grey">
                            
                                <tr class="">
                                
                                    <th scope="col">Name</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                       
                                    $sql2 = "SELECT * FROM `tbl_rating`";
                                    $res2 = mysqli_query($conn, $sql2);
                                    while($row2 = mysqli_fetch_array($res2)){
                            ?>
                                <tr>
                                    
                                    <td><?php echo $row2['name'];?></td>
                                    <td><input type="range" name="rating" max="5" value="<?php echo $row2['rating'];?>" class="rating rating--nojs" disabled></td>
                                  
                                    <td><?php echo $row2['comment'];?></td>
                                </tr>
                                <?php
                                    }
                              
                                ?>
                            


                            </tbody>
                        </table>
                        </div>
                       

                                 
                
    </header>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 

</body>

</html>