<?php

include 'config.php';
$con = mysqli_connect($host, $user, $password,$dbname);
session_start(); 
$sql3="SELECT `w_email`, `w_phno_1` FROM `invyt_form_org` WHERE w_id= ".$_SESSION['wid'];
      
$det = mysqli_query($con,$sql3);
if($row = mysqli_fetch_array($det)) {
    $em=$row["w_email"];
    $ph=$row["w_phno_1"];
  
}
$nma=explode("@",$em);
$nm=$nma[0];
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_141bb4325d8619726c3219b08d9",
                  "X-Auth-Token:test_b0a4c32f3206d6faa563647f3af"));
$payload = Array(
    'purpose' => 'invyt',
    'amount' => '799',
    'phone' => $ph,
    'buyer_name' => $em,
    'redirect_url' => 'http://invyt.esy.es/feedb.php',
    'send_email' => false,
    'webhook' => 'http://invyt.esy.es/paydb.php',
    'send_sms' => false,
    'email' => $em,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

echo $response;
$w_id=$_SESSION['wid'];
$data = json_decode($response, TRUE);
echo $data;
$suc=0;

     
$txnid=$data["payment_request"]["id"];
$pphno=$data['payment_request']['phone'];
$pemail=$data['payment_request']['email'];
$pname=$data['payment_request']['email'];
$pstat=$data['payment_request']['status'];
$purl=$data['payment_request']['longurl'];
$pdate=$data['payment_request']['created_at'];



//$sql0="UPDATE `invyt_form_org` SET `pay_suc`= ".$suc." WHERE `w_id`= ".$_SESSION['wid'];
//$res=mysqli_query($con, $sql0);

$sql = "INSERT INTO pay_tbl (w_id,t_suc,txnid,pphone,pemail,pname,pstat,purl,pdate)
VALUES (".$w_id.",".$suc.",'".$txnid."','".$ph."','".$pemail."','".$pname."','".$pstat."','".$purl."','".$pdate."')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    header("Location:".$purl);
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>