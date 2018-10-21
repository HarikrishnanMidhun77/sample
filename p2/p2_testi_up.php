<?php

include '../config.php';
$con = mysqli_connect($host, $user, $password,$dbname);
date_default_timezone_set('Asia/Calcutta');
$oldname="abc.jpg";


session_start();
if(!(isset($_FILES["file2"])))
{
  


if(isset($_FILES["file"]))
//if(($_FILES["file"])='')
{
    $target_dir = "uploads/wishes/";
    $target_file = $target_dir .basename($_FILES["file"]["name"]);//$_POST["cr_img"];// 
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    //if(isset($_POST["submit"])) {
       // $check = getimagesize($_FILES["file"]["tmp_name"]);
       $check=true;
        $filename = basename( $_FILES["file"]["name"]);// $_POST["cr_img"]
        //echo "post:".$_POST["cr_img"]."<br>";
       echo "filename :". $filename;
       echo "filename temp :". $_FILES["file"]["tmp_name"]."<br>";
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    //}
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
       // $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["file"]["size"] > 100000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
       // $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
if($filename==''){
    $filename=$oldname;
}

//$filename=$_POST["cr_img"];
$filename2 = str_replace(" ", "-", $filename);
//rename("uploads/wishes/".$_POST["cr_img"], "uploads/wishes/abc2.jpg") ;



$filename=utf8_encode($filename);
$sql = "INSERT INTO invyt_greetings (w_id,g_name,pic_path,g_msg,g_date)
VALUES (".$_POST["w_id"].",'".$_POST["g_name"]."','".$filename2."','".$_POST["g_msg"]."','".date("d/m/Y H:i:s")."')";
 $a=mysqli_query($con, $sql);
echo "<br>1. ". $sql;
}



else{
    $sql = "INSERT INTO invyt_greetings (w_id,g_name,pic_path,g_msg,g_date)
    VALUES (".$_POST["w_id"].",'".$_POST["g_name"]."','".$oldname."','".$_POST["g_msg"]."','".date("d/m/Y H:i:s")."')";
    $a=mysqli_query($con, $sql);
}
}
else{
    $sql = "INSERT INTO invyt_greetings (w_id,g_name,pic_path,g_msg,g_date)
    VALUES (".$_POST["w_id"].",'".$_POST["g_name"]."','".$_POST["rname"].".png','".$_POST["g_msg"]."','".date("d/m/Y H:i:s")."')";
     $a=mysqli_query($con, $sql);
}

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
   }
   else{
    
      //  $sql5="SELECT `c_email` FROM `invyt_login` WHERE w_id= ".$_SESSION['login_user'];
    $sql5="SELECT `w_email` FROM `invyt_form_org` WHERE w_id= ".$_POST["w_id"];
    $det = mysqli_query($con,$sql5);
    if($row = mysqli_fetch_array($det)) {
        $ema=$row["w_email"];
    }
  

        $mailid=$ema;
		$headers = "From: info@invyt.in" . "\r\n";
		$message1=urlencode("You got a new wish in your invyt! Go to your invyt dashboard and verify the wish to make it visibile in your invyt.");
	
		mail($mailid,"Wish verification- invyt",$message1,$headers);

        header("Location:../p2_testi_suc.php?rid=".$_POST["w_id"]);
        exit;

   
//}
    mysqli_close($con);
   }   




?>