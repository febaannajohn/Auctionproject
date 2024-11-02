



<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    -->


    <?php include('config.php')?>

       
<body>
<div class="content">
        <div class="container-fluid">
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
          <div class="row">
          
                
  

<div class="content" style="margin-left :5px; margin-top: 100px;">
        <div class="container-fluid">
        
        
         <div class="col-md-16">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Products List</h4>
                
              </div>
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

$sql = "select bidding.biddingid, bidding.amt, tbl_cricket.subname,tbl_cricket.image, tbl_userregister.name as 'username',
bidding.status
from bidding
inner join tbl_cricket on tbl_cricket.subid= bidding.subid
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
  echo "<a href='#' class='btn btn-warning'> Pending </a>";
}else{
  echo "<a href='#' class='btn btn-success'> Approved </a>";
}

?>

</td>

<td>
<?php

if($data['status'] == 1){
  echo "<button type='button' class='btn btn-dark' disabled> Completed </button>";
}else{
  echo "<a href='viewallbidding.php?bidding=".$data['biddingid']."' class='btn btn-primary'> Approve</a>";
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

if(mysqli_query($con,$sql)){
echo "<script> alert('booking approved successfully!!') </script>";
echo "<script> window.location.href='viewallbidding.php';  </script>";
}else{
echo "<script> alert('not approved successfully!!') </script>";
}
}
?>


<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   -->
</body>
</html>