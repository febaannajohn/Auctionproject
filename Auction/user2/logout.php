<?php 
include("../admin/config.php");
session_start();
session_destroy();
header("location:login.php");
?>