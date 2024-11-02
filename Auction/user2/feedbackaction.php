<?php

include('../admin/config.php');

$name = $_POST['name'];
$rating = $_POST['rating'];

$comments= $_POST['comments'];
$sql = "INSERT INTO `tbl_rating`(`name`,`rating`,`comment`)VALUES('$name','$rating','$comments')";
if (mysqli_query($conn, $sql)) {
    // echo "<script>alert('Added to cart');window.location='view-rating.php'</script>";
header("location:feedback.php");
} else {
    echo "<script>alert('Somthing went wrong')</script>";
}
?>