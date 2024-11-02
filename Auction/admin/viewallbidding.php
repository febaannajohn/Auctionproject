


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
                    
                  
                    <a href="category.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Category</a>
                    <a href="cricket.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Product</a>
                   

                    <h5 style="margin-left:38px; margin-top:28px;"> <i class="fa fa-tachometer-alt me-2"></i>Tables</h5>
               
                    <a href="viewuser.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>View User</a>
                    <a href="viewcategory.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>View Category</a>

                    <a href="viewcricket.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>View Product</a>
                    
                   
                
                    <a href="viewallbidding.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>View Bidding</a>
                    
                    <a href="../user2/login.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Log Out</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

<?php


include("config.php");
?>

<body>






<!-- <div class="content">
        <div class="container-fluid">
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
          <div class="row"> -->
          
                
   
<div class="container-fluid pt-4 ">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="bg-secondary rounded h-10 p-4">    

                       

          
           
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " id="page1">
                    <thead class=" text-primary">
                    <tr>
        <th>#</th>
        <th>Auction Name</th>
        <th>Product Image</th>
        <th>Bidding Amount</th>
      
        
        <th>User Name</th> 
        
        
      
        <th>Status</th>
      </tr>
      <?php
   
//    $u_id=$_SESSION['id'];

$sql = "select bidding.biddingid, bidding.amt, tbl_product.subname,tbl_product.image, tbl_userregister.name as 'username',
bidding.status
from bidding
inner join tbl_product on tbl_product.subid= bidding.subid
inner join tbl_userregister on tbl_userregister.id  = bidding.userid";
 $res  = mysqli_query($conn, $sql);
      if(mysqli_num_rows($res) > 0){
        while($data = mysqli_fetch_array($res)){

          ?>


        
<tr>
            <td><?= $data['biddingid'] ?></td>
            <td><?= $data['subname'] ?></td>
            <td><img src="../admin/img/<?= $data['image']?>" width="230" height="90" align="center"></td>
            <td><?= $data['amt'] ?> </td>
            <td><?= $data['username']?></td>
            
      
           
       
            
            
            
            <td>

              <?php

              if($data['status'] == 0){
                echo "<a href='#' class='btn btn-warning' > Pending </a>";
              }else{
                echo "<a href='#' class='btn btn-success' > Approved </a>";
              }

              ?>

            </td>
           
            <td>
            <?php

              if($data['status'] == 1){
                echo "<button type='button' class='btn btn-info' disabled> Completed </button>";
              }else{
                echo "<a href='viewallbidding.php?biddingid=".$data['biddingid']."' class='btn btn-primary'> Approve</a>";
              }
              ?>
          </td>
          </tr>


       <?php
        }
      }else{
        echo 'no booking found';
      }

    
   

      ?>


     </table>

  </div>
</div>
  

</div>





<?php

if(isset($_GET['biddingid'])){

$biddingid  = $_GET['biddingid'];
$sql = "UPDATE `bidding` SET `status`= 1 WHERE biddingid = '$biddingid'";

if(mysqli_query($conn,$sql)){
echo "<script> alert('booking approved successfully!!') </script>";
echo "<script> window.location.href='viewallbidding.php';  </script>";
}else{
echo "<script> alert('not approved successfully!!') </script>";
}
}
?>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
</body>
</html>

