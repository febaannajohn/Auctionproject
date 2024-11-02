<?php
include("header.php");
include("../admin/config.php");
?>

    




      

<div class="container-fluid pt-4 ">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Category</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
         
          <th scope="col">User Name</th>
          <th scope="col">Product Name</th>
          <th scope="col">Price</th>
          <th scope="col">User Name</th>
          <!-- <th scope="col">Image </th> -->
        
                                    </tr>
                                </thead>
                                <tbody>
      
      
        
        <?php
        $sql = "select bidding.biddingid, bidding.amt, tbl_product.subname,tbl_product.image, tbl_userregister.name as 'username',
      bidding.status
      from bidding
      inner join tbl_product on tbl_product.subid= bidding.subid
      inner join tbl_userregister on tbl_userregister.id  = bidding.userid 
      
      
      ";
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
include("footer.php");
?>