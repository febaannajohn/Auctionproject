<?php

include("config.php");
if (isset($_POST['submit'])) 
$catid=$_GET['catid'];


    $catname = $_POST['catname'];

        $sql = "UPDATE `categories` SET `catname`='$catname' WHERE `catid`='$catid'";
        if (mysqli_query($conn, $sql)) {
            header("location:viewcategory.php");
        

        } else {
            echo "error".$sql." <br>".mysqli_error($conn);
        }
    
 
?>

