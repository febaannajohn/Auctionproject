<?php
include('config.php');
$catid=$_GET['catid'];
$sql="DELETE FROM `categories` WHERE `catid`='$catid'";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:viewcategory.php");
    
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?>