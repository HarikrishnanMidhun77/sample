<?php
include 'config.php';

$con = mysqli_connect($host, $user, $password,$dbname);
session_start(); 



if(isset($_POST["opswd"]))
{
    $sqlt="SELECT cust_id,c_email,c_password FROM invyt_login WHERE c_email='".$_SESSION['login_user']."' and c_password='".$_POST["opswd"]."'";
    $res1=mysqli_query($con, $sqlt);
    $noRows=0;
    if(isset($res1))
    {
        $noRows = mysqli_num_rows($res1);
    }
    if($noRows>0)
    {
        if($row = mysqli_fetch_array($res1)) {
            $cid=$row["cust_id"];
        }

        $sql="UPDATE `invyt_login` SET 
        `c_phno`='".$_POST["pphno"]."'
         WHERE cust_id=".$cid;
          $r=mysqli_query($con, $sql);
          if(isset($_POST["npswd"])){
            $sql2="UPDATE `invyt_login` SET 
            `c_password`='".$_POST["npswd"]."'
             WHERE cust_id=".$cid;
              $r=mysqli_query($con, $sql2);
          }
          header("Location:edit_prof.php?suc=1"); 
        exit; 
    }
    else{
        header("Location:edit_prof.php?fail=1"); 
        exit;
    }
}

// Check connectio

?>