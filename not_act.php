<?php
include 'config.php';
ob_start();
header('Access-Control-Allow-Origin: *'); 
$con = mysqli_connect($host, $user, $password,$dbname);
 if(isset($_GET['del'])){
    $sql4 ="DELETE FROM invyt_greetings WHERE g_id=". $_GET['g_id'];
    $res=mysqli_query($con, $sql4);
 }
 if(isset($_GET['g_id'])){
 $sql3="UPDATE`invyt_greetings` SET `is_rev`=".$_GET['rev']." WHERE g_id= ".$_GET['g_id'];
 $det = mysqli_query($con,$sql3);
 header("Location:p2/p2_preview_flash.php?wid=".$_GET['wid']); 
 exit;
 }
 header("Location:notifications.php"); 
         exit;
?>