<?php
$response='{ "success": true, "payments": [ { "payment_id": "MOJO8923005A39719957", "status": "Credit", "currency": "INR", "amount": "10.00", "buyer_name": "harikrishnanthrippekulam@gmail.com", "buyer_phone": "+918129405628", "buyer_email": "harikrishnanthrippekulam@gmail.com", "shipping_address": null, "shipping_city": null, "shipping_state": null, "shipping_zip": null, "shipping_country": null, "quantity": 1, "unit_price": "10.00", "fees": "0.19", "variants": [], "custom_fields": {}, "affiliate_commission": "0", "payment_request": "https://test.instamojo.com/api/1.1/payment-requests/932d44c8658645c3ac2357e288fe0fd9/", "instrument_type": "CARD", "billing_instrument": "International Regular Credit Card (Visa/Mastercard)", "failure": null, "payout": null, "created_at": "2018-09-23T18:15:07.049522Z" }, { "payment_id": "MOJO8923005A39719953", "status": "Credit", "currency": "INR", "amount": "10.00", "buyer_name": "harikrishnanthrippekulam@gmail.com", "buyer_phone": "+918129405628", "buyer_email": "harikrishnanthrippekulam@gmail.com", "shipping_address": null, "shipping_city": null, "shipping_state": null, "shipping_zip": null, "shipping_country": null, "quantity": 1, "unit_price": "10.00", "fees": "0.19", "variants": [], "custom_fields": {}, "affiliate_commission": "0", "payment_request": "https://test.instamojo.com/api/1.1/payment-requests/b1129aef56fb40b3a024c5f6b6fee3d6/", "instrument_type": "CARD", "billing_instrument": "International Regular Credit Card (Visa/Mastercard)", "failure": null, "payout": null, "created_at": "2018-09-23T18:11:11.037207Z" }, { "payment_id": "MOJO8923005A39719950", "status": "Credit", "currency": "INR", "amount": "10.00", "buyer_name": "harikrishnanthrippekulam@gmail.com", "buyer_phone": "+918129405628", "buyer_email": "harikrishnanthrippekulam@gmail.com", "shipping_address": null, "shipping_city": null, "shipping_state": null, "shipping_zip": null, "shipping_country": null, "quantity": 1, "unit_price": "10.00", "fees": "0.19", "variants": [], "custom_fields": {}, "affiliate_commission": "0", "payment_request": "https://test.instamojo.com/api/1.1/payment-requests/20be259b24f14b80b224b2c80f24f9cb/", "instrument_type": "CARD", "billing_instrument": "International Regular Credit Card (Visa/Mastercard)", "failure": null, "payout": null, "created_at": "2018-09-23T18:08:37.906952Z" }, { "payment_id": "MOJO8923005A39719943", "status": "Credit", "currency": "INR", "amount": "10.00", "buyer_name": "harikrishnanmidhun77@gmail.com", "buyer_phone": "+918129405628", "buyer_email": "harikrishnanmidhun77@gmail.com", "shipping_address": null, "shipping_city": null, "shipping_state": null, "shipping_zip": null, "shipping_country": null, "quantity": 1, "unit_price": "10.00", "fees": "0.19", "variants": [], "custom_fields": {}, "affiliate_commission": "0", "payment_request": "https://test.instamojo.com/api/1.1/payment-requests/08f25a3599a74dce889acd19dabd78c5/", "instrument_type": "CARD", "billing_instrument": "International Regular Credit Card (Visa/Mastercard)", "failure": null, "payout": null, "created_at": "2018-09-23T17:58:22.087010Z" } ] } ';

echo $response;
$data = json_decode($response, TRUE);
$suc=$data["success"];
echo '<br><br>';
echo $data["payments"][0]["status"];
?>
