<?php
include("config.php");
if(isset($_POST['submit']))
{    
$catname = $_POST['catname'];



$sql = "INSERT INTO `categories`(`catname`) VALUES ('$catname')";

if(mysqli_query($conn,$sql)){
    header("location:viewcategory.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($conn);
}
}
?>