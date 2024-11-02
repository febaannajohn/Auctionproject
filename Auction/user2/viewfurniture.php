<?php
include("header.php");
include("../admin/config.php");
?>
    <div class="hero-wrap hero-bread" style="background-image: url('images/fur.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="shop1.php#popular-courses1">Vechicles</a></li>
    					<li><a href="viewlap.php#popular-courses1">Electronics</a></li>
    					<li><a href="viewfurniture.php#popular-courses1" class="active">Furniture</a></li>
   
    				</ul>
    			</div>
    		</div>
</div>
</section>



<section id="popular-courses1" class="courses">
    


   
        <div class="row mt-2"  style="margin-left:87px; margin-top:8px;">  
    
    
    
        <?php
    
    $sql = "SELECT tbl_product.*, categories.catname
    from tbl_product
    inner join categories on categories.catid = tbl_product.catid
    where tbl_product.catid = 3";
    $res  = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) > 0){
      while($data = mysqli_fetch_array($res)){
       ?>
            

            <div class="col-md-3 mt-5 ml-5 mr-3">
        <div class="card" p-3 style="width: 15rem;">
           
        
     <img src="../admin/img/<?= $data['image']?>" width="230" height="90" align="center">
                                  
           <div class="card-body">
              <h3 align ="center"class="card-title"><?php  echo $data['subname'];?> </h3>
              <!-- <h5 align="center" class="card-title"><?php  echo $data['descption'];?></h5> -->
              <h5 align="center" class="card-title">Amount: <?php  echo $data['price'];?></h5>
             
              <!-- <a href="cricketdeatails.php?pid=<?=$data['subid'];?>" target="_blank" class="btn btn-primary"> Place Bid</a>
                                                            -->
          
              <?php
                                        if(isset($_SESSION['id'])){
                                        echo "<a class='btn btn-primary btn-outline-primary' href='productdeatails.php?pid=".$data['subid']."'>Place Bid</a>";
                                        }
                                        else{
                                        echo "<a class='btn btn-primary btn-outline-primary' href='login.php'>Place Bid</a>";
                                        }                    
                                        ?>                                                


</div>
   </div>
      </div>
   <?php
            
          }
}
      
       ?>
  </div>
  </div>
  </section>


<section>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>