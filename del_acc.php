<?php
include 'config.php';

$con = mysqli_connect($host, $user, $password,$dbname);

session_start(); 
if(isset($_SESSION['login_user'])){ 
    if (is_numeric($_SESSION['login_user']))
    {
        header("Location:login2.php"); 
        exit;
    }

}
    else{
        header("Location:login2.php"); 
        exit;
    }


    $sqlt="SELECT cust_id,c_email,c_password FROM invyt_login WHERE c_email='".$_SESSION['login_user']."' and c_password='".$_POST["opswd"]."'";
    $res1=mysqli_query($con, $sqlt);
    $noRows=0;
    if(isset($res1))
    {
        $noRows = mysqli_num_rows($res1);
    }
    if($noRows>0)
    {

    $sql ="INSERT INTO invyt_login_backup SELECT * FROM invyt_login WHERE c_email= '".$_SESSION['login_user']."'";
   if( mysqli_query($con, $sql)){
    $sql3="SELECT `bride_name`, `groom_name`,`rand_no` FROM `invyt_form_org` WHERE c_id= '".$_SESSION['login_user']."'";
      
    $det = mysqli_query($con,$sql3);
  
    while($row = mysqli_fetch_array($det)) {
        $b_name2=$row["bride_name"];
        $g_name2=$row["groom_name"];
        $r2=$row["rand_no"];
        $aurl="https://www.invyt.in/".$g_name2."weds".$b_name2."_".$r2.".html";
        $burl="del949596/".$g_name2."weds".$b_name2."_".$r2.".html";
        rename($aurl,$burl);
    }
   
    $sql2="DELETE FROM invyt_login  WHERE c_email= '".$_SESSION['login_user']."'";
    mysqli_query($con, $sql2);

// make main back up database delete details of invyts created by the user.
   /* $sql ="INSERT INTO invyt_form_backup SELECT * FROM invyt_form_org WHERE c_email= '".$_SESSION['login_user']."'";
    if( mysqli_query($con, $sql)){
    $sql2="delete from invyt_form_org where WHERE c_email= '".$_SESSION['login_user']."'";
    mysqli_query($con, $sql2);}*/

    
    header("Location:logout.php"); 
        exit;
    }
   }
   else{
    header("Location:edit_prof.php?fail=1"); 
    exit;
   }

?>