<?php
include '../config.php';

$con = mysqli_connect($host, $user, $password,$dbname);
$pn=$_GET['pn'];
session_start(); 



 $sql0 ="delete from invyt_gal where img_name= '".$pn."'";
 $res=mysqli_query($con, $sql0);
 unlink("uploads/gal/".$pn);
 unlink("../uploads/gal/".$pn);
 header("Location:p2_gal.php");
 exit;
   
   ?>