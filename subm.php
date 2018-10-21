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




if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
   }
   else{
       
     //Step 1: Delete all entries with same bride name and groom name from org table
       
     $sql5="SELECT `bride_name`, `groom_name` FROM `invyt_form` WHERE w_id= ".$_SESSION['wid'];
      
    $det = mysqli_query($con,$sql5);
    if($row = mysqli_fetch_array($det)) {
        $b_name=$row["bride_name"];
        $g_name=$row["groom_name"];
    }
    $sql4 ="delete from invyt_form_org where bride_name='".$b_name."' and groom_name= '".$g_name."'";
        $res=mysqli_query($con, $sql4);

    //Step 2 : delete the old entry from org table
    //copy the row from the dup table to org table
    $sql10 ="delete from invyt_form_org where w_id= ".$_SESSION['wid'];
    $res=mysqli_query($con, $sql10);


$sql ="INSERT INTO invyt_form_org SELECT * FROM invyt_form WHERE w_id= ".$_SESSION['wid'];
    
    if (mysqli_query($con, $sql)) {
        echo "New record created successfully";
        
    // Step 3: Add the email id from login details to the original table

        $sql2="UPDATE `invyt_form_org` SET `c_id`= '".$_SESSION['login_user']."' WHERE `w_id`=".$_SESSION['wid'];
        $res=mysqli_query($con,$sql2);
        


//Step 4: delete the last invyt from dup table        
         $sql7 ="delete from invyt_form WHERE w_id= ".$_SESSION['wid'];
        $res=mysqli_query($con, $sql7);
        
        //$uname=$_SESSION['login_user'];

//Step 5: make the link from org table    

        $sql3="SELECT `bride_name`, `groom_name`,`rand_no` FROM `invyt_form_org` WHERE w_id= ".$_SESSION['wid'];
      
        $det = mysqli_query($con,$sql3);
        if($row = mysqli_fetch_array($det)) {
            $b_name2=$row["bride_name"];
            $g_name2=$row["groom_name"];
            $r2=$row["rand_no"];
        }
        $iurl="https://www.invyt.in/".$g_name2."weds".$b_name2."_".$r2.".html";
       

//Step 7: clear dup table  
$sql0 ="delete from invyt_form where c_id='".$_SESSION['login_user']."'";
$res=mysqli_query($con, $sql0);


       //Step 6: delete the  invyt html page created by dup table entries     
        $sql6="SELECT `bride_name`, `groom_name`,`rand_no` FROM `invyt_form`";
        $det2 = mysqli_query($con,$sql6);
       // array_pop($det2)
        while($row = mysqli_fetch_array($det2)) {
            $b_name=$row["bride_name"];
            $g_name=$row["groom_name"];
            $r=$row["rand_no"];
            
            if($b_name==$b_name2 and $g_name==$g_name2 and $r==$r2 ){
            $aurl=$g_name."weds".$b_name."_".$r.".html";
            $burl="del949596/".$g_name."weds".$b_name."_".$r.".html";
            //unlink($aurl);
            rename($aurl,$burl);
            }
        }
       
        $sql11="SELECT `pay_suc` FROM `invyt_form_org` WHERE w_id= ".$_SESSION['wid'];
      
        $det = mysqli_query($con,$sql11);
        if($row = mysqli_fetch_array($det)) {
            $ps=$row["pay_suc"];
        }
        if($ps==0){
            header("Location: paym.php");
            exit;
        }
       else{
        header("Location: finish.php");
        exit;
       }

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
}
?>