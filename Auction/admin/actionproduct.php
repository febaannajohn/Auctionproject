<?php
include("config.php");
if(isset($_POST['submit']))
{    
$subname = $_POST['subname'];
$desc = $_POST['descption'];
$price = $_POST['price'];
$sdate = $_POST['sdate'];
$edate = $_POST['edate'];
$image = $_FILES['image']['name'];
$tmp_image = $_FILES['image']['tmp_name'];

  move_uploaded_file($_FILES["image"]["tmp_name"],"img/".$image);
 $catid = $_POST['catid'];

$sql = "INSERT INTO `tbl_product`(`subname`,`descption`,`price`,`sdate`,`edate`,`image`,`catid`) VALUES ('$subname','$desc','$price','$sdate','$edate','$image','$catid')";
if(mysqli_query($conn,$sql)){
    header("location:viewproduct.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>