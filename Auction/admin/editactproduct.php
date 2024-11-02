<?php



include("config.php");
if(isset($_POST['submit']))
{   
$subid = $_GET['subid']; 
$subname = $_POST['subname'];
$descption = $_POST['descption'];
$price = $_POST['price'];
$sdate = $_POST['sdate'];
$edate = $_POST['edate'];
$image = $_FILES['image']['name'];

if($image != NULL)
{
    
    move_uploaded_file($_FILES["image"]["tmp_name"],"img/".$image);
    $sql = "UPDATE tbl_product SET subname='$subname',descption='$descption',price='$price',sdate='$sdate',edate='$edate',image='$image' WHERE subid='$subid'";
    }
    else{
        $sql = "UPDATE tbl_product SET subname='$subname',descption='$descption',price='$price',sdate='$sdate',edate='$edate' WHERE subid='$subid'";
    }
    if(mysqli_query($conn,$sql)){
        header("location:viewproduct.php");
    }else{
        echo "Error".$sql."<br>".mysqli_error($conn);
    }
}
?>
