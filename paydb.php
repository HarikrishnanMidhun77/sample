<?php
include 'config.php';
$con = mysqli_connect($host, $user, $password,$dbname);

$sql = "INSERT INTO pay_tbl (txnid,pphone,pemail,pname,pstat,purl,pdate)
VALUES ('".$_POST["id"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["buyer_name"]."','".$_POST["status"]."','".$_POST["longurl"]."','".$_POST["created_at"]."')";


 
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";

    header("Location: preview_site.php?user=$uname");
    exit;

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
?>