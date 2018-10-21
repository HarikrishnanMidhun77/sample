<?php
include 'config.php';
$con = mysqli_connect($host, $user, $password,$dbname);
 if(isset($_GET['del'])){
    $sql4 ="DELETE FROM invyt_greetings WHERE g_id=". $_GET['g_id'];
    $res=mysqli_query($con, $sql4);
 }
 if(isset($_POST['g_id'])){
 $sql3="UPDATE`invyt_greetings` SET `is_rev`=".$_POST['rev']." WHERE g_id= ".$_POST['g_id'];
 $det = mysqli_query($con,$sql3);
 header("Location:p2/p2_preview_flash.php"); 
 exit;
 }
 header("Location:notifications.php"); 
         exit;
?>