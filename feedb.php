<?php
ob_start();
include 'config.php';
$con = mysqli_connect($host, $user, $password,$dbname);
session_start(); 
$pid=$_POST["payment_id"];


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payments/'.$pid);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_141bb4325d8619726c3219b08d9",
                  "X-Auth-Token:test_b0a4c32f3206d6faa563647f3af"));

$response = curl_exec($ch);
curl_close($ch); 

//echo $response;
$data = json_decode($response, TRUE);
$stat=$data["payments"][0]["status"];
//echo $stat;
$suc=0;
if($stat=="Credit"){
    $suc=1;
 $sql0="UPDATE `invyt_form_org` SET `pay_suc`= ".$suc." WHERE `w_id`= ".$_SESSION['wid'];
 //echo $sql0;
$res=mysqli_query($con, $sql0);
if ($res) {
    echo "New record created successfully 1";
    header("Location:finish.php");
    exit;
  
}
$sql1="UPDATE `pay_tbl` SET `t_suc`= ".$suc." WHERE `w_id`= ".$_SESSION['wid'];
 //echo $sql1;

if (mysqli_query($con, $sql1)) {
    echo "New record created successfully";
    header("Location:finish.php");
    exit;
}

}
else{
    header("Location:pay_failed.html");
    exit;
}


?>