<?php

include 'config.php';
$con = mysqli_connect($host, $user, $password,$dbname);
$wid = $_POST['wid'];
$sql3="SELECT w_cnt FROM `invyt_form_org` WHERE w_id= ".$wid;
      
$det = mysqli_query($con,$sql3);
if($row = mysqli_fetch_array($det)) {
   $wc=$row["w_cnt"];
}
$wc=$wc+1;
$sql="update invyt_form_org set w_cnt= ".$wc." where w_id= ".$wid;
$det = mysqli_query($con,$sql);

?>