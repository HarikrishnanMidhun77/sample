<?php
include 'config.php';

$con = mysqli_connect($host, $user, $password,$dbname);
$wid=$_GET['row_id'];
session_start(); 


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
   }
   else{
         $sql5="SELECT `bride_name`, `groom_name`,`rand_no` FROM `invyt_form_org` WHERE w_id= ".$wid;
      
    $det = mysqli_query($con,$sql5);
    if($row = mysqli_fetch_array($det)) {
        $b_name=$row["bride_name"];
        $g_name=$row["groom_name"];
        $r=$row["rand_no"];
    }

 $iurl=$g_name."weds".$b_name."_".$r.".html";
 $sql0 ="delete from invyt_form_org where w_id= ".$wid;
 $res=mysqli_query($con, $sql0);
 unlink($iurl);

 header("Location:dash.php");
 exit;
   }
   ?>