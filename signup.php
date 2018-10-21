<?php
include 'config.php';
$con = mysqli_connect($host, $user, $password,$dbname);
//$sqlt="SELECT (c_email,c_password) FROM invyt_login WHERE c_email='".$_POST["c_email"]."' and c_password='".$_POST["c_password"]."'";

$sqlt="SELECT c_email,c_password FROM invyt_login WHERE c_email='".$_POST["c_email"]."'";
//echo($sqlt);
$res1=mysqli_query($con, $sqlt);
$noRows=0;
$user_email=$_POST["c_email"];
if(isset($res1))
{
    $noRows = mysqli_num_rows($res1);
}
//echo($res1);
if($noRows>0)
{
    header("Location: failed2.html");
        exit;
}
else{
    $sql = "INSERT INTO invyt_login (c_email,c_phno,c_password) VALUES ('".$_POST["c_email"]."','".$_POST["c_phno"]."','".$_POST["c_password"]."')";
    if(mysqli_query($con, $sql)){
        session_start();
        // Store Session Data
        $_SESSION['login_user']= $user_email;
        //echo($_SESSION['login_user']);
        header("Location: form.php");
        exit;
    }

}



?>