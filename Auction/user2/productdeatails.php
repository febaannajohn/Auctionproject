







<?php

include("../admin/config.php");
include("header.php");
?>
    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Product Details</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="single-product.html">Product Details</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->



    
<?php


$subid = $_GET['pid'];




?>
    <?php
    if (isset($_GET['pid'])!=null) 
{
  $esel="SELECT * FROM tbl_product WHERE subid=".$_GET['pid'];
  $eres=mysqli_query($conn,$esel);
  while($edata=mysqli_fetch_array($eres))
  {
  
   $eimage=$edata['image'];
   
  $esubname=$edata['subname'];
   $edescription=$edata['descption'];

   $eprice=$edata['price'];

   $sdate=$edata['sdate'];
   $edate=$edata['edate'];
  }
}
?>





      
    
     
       

    

    <!--================Single Product Area =================-->
    <div class="product_image_area">
      <div class="container">
        <div class="row s_product_inner">
          <div class="col-lg-6">
            <div class="s_product_img">
              <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-ride="carousel"
              >
                <!-- <ol class="carousel-indicators">
                  <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="0"
                    class="active"
                  >
                    <img
                    src="../admin/img/<?php echo $eimage;?>" 
                      alt=""
                    />
                  </li>
                  <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="1"
                  >
                    <img
                      src="img/product/single-product/s-product-s-3.jpg"
                      alt=""
                    />
                  </li>
                  <li
                    data-target="#carouselExampleIndicators"
                    data-slide-to="2"
                  >
                    <img
                      src="img/product/single-product/s-product-s-4.jpg"
                      alt=""
                    />
                  </li>
                </ol> -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      class="d-block w-100"
                      src="../admin/img/<?php echo $eimage;?>" 
                      alt="First slide"
                    />
                    
                  </div>
                  <div class="carousel-item">
                    <img
                      class="d-block w-100"
                      src="../admin/img/<?php echo $eimage;?>" 
                      alt="Second slide"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      class="d-block w-100"
                      src="../admin/img/<?php echo $eimage;?>" 
                      alt="Third slide"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
            <h3 class="card-title pt-3">MOVIE : <b><?php  echo $esubname;?></b>  </h3>
           
          
             
              <ul class="list"> </h4>
                <li>
                  <a class="active" href="#">
                    <span>Category</span> : Household</a
                  >
                </li>
                <li>
                  <a href="#"> <span>Availibility</span> : In Stock</a>
                </li>


             
             
               
            <p class="card-title"> ABOUT MOVIE  <?php echo $edescription;?> 
              </p>


              <li>
                  <b>Auction Starting Date :<?php echo $sdate;?> </b>
                </li>
</br>
                <li>
                <b>Auction Starting Date :<?php echo $edate;?> </b>
                </li>
                <h4 class="card-title"> Starting Bid:  RS. <?php echo $eprice;?> </h4>
                </ul>  
<form action = "#" method ="post" name = "myform">  
<input type="hidden" name="subid" value="<?=$subid?>">
           <input type="text" name="amt"> <b>Enter Your Bid</b>
<div class="text-center">
            <button type="submit" class="btn btn-primary" name="submit" >Place Bid</button></div></a>
</form>
              
             

              <div class="card_area">
        
                          
                
                <a class="icon_btn" href="#">
                  <i class="lnr lnr lnr-diamond"></i>
                </a>
                <a class="icon_btn" href="#">
                  <i class="lnr lnr lnr-heart"></i>
                </a>
              </div>
              
             

            </div>
          </div>
        </div>
      </div>
    </div>
    


    <?php

if(isset($_POST['submit'])){

  $amount     = $_POST['amt'];



  $subid = $_POST['subid'];

  //  $uid = $_SESSION['uid'];
   $u_id=$_SESSION['id'];
  //print_r($_POST);

  $sql = "INSERT INTO `bidding`(`subid`,`amt`,`userid`) VALUES ('$subid','$amount','$u_id')";

  if(mysqli_query($conn, $sql)){
     echo "<script> alert('Auction book successfully!!') </script>";
     echo "<script> window.location.href='viewauctionbidding.php';  </script>";

  }else{
    echo "<script> alert('ticket not book')";
  }

}

?>



    <!--================End Single Product Area =================-->








   


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>

    
<?php

include("footer.php");
?>