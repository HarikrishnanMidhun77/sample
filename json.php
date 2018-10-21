<?php
/*php_flag display_startup_errors off
php_flag display_errors off
php_flag html_errors off
php_value docref_root 0
php_value docref_ext 0*/
error_reporting(0);
$response ={ "success": true, "payment_request": { "id": "79c6a318a46041aeb247791d2ea89054", "phone": "+919495971412", "email": "harikrishnanthrippekulam@gmail.com", "buyer_name": "Hari", "amount": "10.00", "purpose": "invyt", "expires_at": null, "status": "Pending", "send_sms": true, "send_email": true, "sms_status": "Pending", "email_status": "Pending", "shorturl": null, "longurl": "https://www.instamojo.com/@invytin/79c6a318a46041aeb247791d2ea89054", "redirect_url": "http://invyt.esy.es/paym.php", "webhook": "http://invyt.esy.es/paydb.php", "allow_repeated_payments": false, "customer_id": null, "created_at": "2018-09-13T10:47:38.234436Z", "modified_at": "2018-09-13T10:47:38.234448Z" } }';
$data = json_decode($response, TRUE);
echo '<br>';
//printr($data);
$suc=$data["success"];
$txnid=$data["payment_request"]["id"];
$pphno=$data['payment_request']['phone'];
$pemail=$data['payment_request']['email'];
$pname=$data['payment_request']['email'];
$pstat=$data['payment_request']['status'];
$purl=$data['payment_request']['longurl'];
$pdate=$data['payment_request']['created_at'];

echo $response;

echo '<br><br><br>';

echo $txnid;
echo '<br>';
echo $pphno;
echo '<br>';
echo $suc;

?>