<?php
include 'config.php';

$con = mysqli_connect($host, $user, $password,$dbname);
$sqlt="SELECT c_email,c_password FROM invyt_login WHERE c_email='".$_POST["c_email"]."' and c_password='".$_POST["c_password"]."'";

//$sqlt="SELECT c_email,c_password FROM invyt_login WHERE c_email='".$_POST["c_email"]."'";
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
    session_start();
        // Store Session Data
        $_SESSION['login_user']= $user_email;
        echo("logged in as ". $_SESSION['login_user']);
       header("Location: subm.php");
       exit;
}
else{
   
    header("Location: failed_alt.html");
    exit;
    

}



?>