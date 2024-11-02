<?php 
include("../admin/config.php");
include("header.php");

// if(!isset($_SESSION['id'])){
//   echo "<script> window.location.href='login.php';  </script>";
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Booking</title>
</head>
<body>





<div class="container">
   
<div class="row">
 
  <div class="col-lg-12">
  
     <table class="table">
      <tr>
        <th>#</th>
        <th>Auction Name</th>
        <th>Product Image</th>
        <th>Bidding Amount</th>
      
        
        <th>User Name</th> 
        
        
      
        <th>Status</th>
      </tr>
      
      <?php
      
      $u_id=$_SESSION['id'];
    //   $uid = $_SESSION['uid'];

      $sql = "select bidding.biddingid, bidding.amt, tbl_cricket.subname,tbl_cricket.image, tbl_userregister.name as 'username',
      bidding.status
      from bidding
      inner join tbl_cricket on tbl_cricket.subid= bidding.subid
      inner join tbl_userregister on tbl_userregister.id  = bidding.userid 
      
      where bidding.userid = '$u_id'
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


<?php include('footer.php')  ?>

</body>
</html>
