<?php

include '../config.php';
$con = mysqli_connect($host, $user, $password,$dbname);


function compress($source, $destination, $quality) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);

    return $destination;
}

date_default_timezone_set('Asia/Calcutta');
session_start();
$uname=$_SESSION['login_user'];
if(isset($_POST["theme"])){
$_SESSION['theme']=$_POST["theme"];
}
if(isset($_COOKIE["one"])){
    setcookie("one", "0:0");
}
if(isset($_COOKIE["two"])){
    setcookie("two", "0:0");
}
if(isset($_FILES["file"]))
//if(($_FILES["file"])='')
{
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    //if(isset($_POST["submit"])) {
       // $check = getimagesize($_FILES["file"]["tmp_name"]);
       $check=true;
        $filename =  basename( $_FILES["file"]["name"]);
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
        $uploadOk = 0;
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
    $filename=$_POST["old_image"];
}
/*$filename = str_replace(" ", "-", $filename);
$filename = str_replace("(", "-", $filename);
$filename = str_replace(")", "-", $filename);
$filename = str_replace("_", "-", $filename);*/
$bd=$_POST["b_det"];
$gd=$_POST["g_det"];
$bd=str_replace("'","",$bd);
$gd=str_replace("'","",$gd);

$filename2 = str_replace(" ", "-", $filename);
rename("uploads/".$filename, "uploads/".$filename2) ;



$filename=utf8_encode($filename);
$sql = "INSERT INTO invyt_form (c_id,main_pic_path,w_date,bride_name,groom_name,b_det,g_det,muhoo_1,muhoo_2,w_place,w_venue,w_phno_1,w_email,rand_no,cr_date,r_place,r_date,r_t1,r_t2,w_plan)
VALUES ('".$uname."','".$filename2."','".$_POST["w_date"]."','".$_POST["bride_name"]."','".$_POST["groom_name"]."','".$bd."','".$gd."','".$_POST["muhoo_1"]."','".$_POST["muhoo_2"]."','".$_POST["w_place"]."','".$_POST["w_venue"]."','".$_POST["w_phno_1"]."','".$_POST["w_email"]."',".$_POST["rand_no"].",'".date("d/m/Y H:i:s")."','".$_POST["r_place"]."','".$_POST["r_date"]."','".$_POST["r_t1"]."','".$_POST["r_t2"]."',2)";
}
else{
    $sql = "INSERT INTO invyt_form (c_id,main_pic_path,w_date,bride_name,groom_name,b_det,g_det,muhoo_1,muhoo_2,w_place,w_venue,w_phno_1,w_email,rand_no,cr_date,r_place,r_date,r_t1,r_t2,w_plan)
    VALUES ('".$uname."','".$_POST["old_image"]."','".$_POST["w_date"]."','".$_POST["bride_name"]."','".$_POST["groom_name"]."','".$bd."','".$gd."','".$_POST["muhoo_1"]."','".$_POST["muhoo_2"]."','".$_POST["w_place"]."','".$_POST["w_venue"]."','".$_POST["w_phno_1"]."','".$_POST["w_email"]."',".$_POST["rand_no"].",'".date("d/m/Y H:i:s")."','".$_POST["r_place"]."','".$_POST["r_date"]."','".$_POST["r_t1"]."','".$_POST["r_t2"]."',2)";
}
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
   }
   else{
// echo $sql;
// echo $_POST["old_image"];
      // if(isset($_POST["submit-button"]))
      // {
   
  
   // VALUES ('$filename'+',')";
    
    if (mysqli_query($con, $sql)) {
       // echo "New record created successfully";
        //$uname=$_SESSION['login_user'];
        $sql5="SELECT max(w_id) as mwid FROM `invyt_form`";
      
        $det = mysqli_query($con,$sql5);
        if($row = mysqli_fetch_array($det)) {
            $wid=$row["mwid"];
        }
        $_SESSION['wid']=$wid;
        header("Location:p2_prev.php");
        exit;

    } else {
       // echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
//}
    mysqli_close($con);
   }   




?>