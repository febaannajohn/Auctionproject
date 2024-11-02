<?php
include('config.php');
$subid=$_GET['subid'];
$sql="DELETE FROM `tbl_product` WHERE `subid`='$subid'";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:viewproduct.php");
    
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?>