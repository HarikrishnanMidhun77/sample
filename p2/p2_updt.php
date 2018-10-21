<html>
    <head>

</head>
</html>

<?php
include '../config.php';
date_default_timezone_set('Asia/Calcutta');
$con = mysqli_connect($host, $user, $password,$dbname);
$wid=$_GET['row_id'];
$r_place="";
$r_date="";
$r_t1="";
$r_t2="";


if(isset($_COOKIE["one"])){
    setcookie("one", "0:0");
}
if(isset($_COOKIE["two"])){
    setcookie("two", "0:0");
}


if(isset($_POST["r_place"])){
    $r_place=$_POST["r_place"];
}
if(isset($_POST["r_date"])){
    $r_date=$_POST["r_date"];
}
if(isset($_POST["r_t1"])){
    $r_t1=$_POST["r_t1"];
}
if(isset($_POST["r_t2"])){
    $r_t2=$_POST["r_t2"];
}


if(isset($_FILES["file"])==true)
{
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    $filename =  basename( $_FILES["file"]["name"]);
   // echo $filename;
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
    $sql="UPDATE `invyt_form_org` SET 
    `w_date`='".$_POST["w_date"]."',
    `bride_name`='".$_POST["bride_name"]."',
    `groom_name`='".$_POST["groom_name"]."',
    `b_det`='".$_POST["b_det"]."',
    `g_det`='".$_POST["g_det"]."',
    `muhoo_1`='".$_POST["muhoo_1"]."',
    `muhoo_2`='".$_POST["muhoo_2"]."',
    `w_place`='".$_POST["w_place"]."',
    `w_venue`='".$_POST["w_venue"]."',
    `w_phno_1`='".$_POST["w_phno_1"]."',
    `w_phno_2`='".$_POST["w_phno_2"]."',
    `w_email`='".$_POST["w_email"]."',
    `r_place`='".$r_place."',
    `r_date`='".$r_date."',
    `r_t1`='".$r_t1."',
    `r_t2`='".$r_t2."',
    `cr_date`='".date("d/m/Y H:i:s")."' WHERE w_id=".$wid;//,strtotime('+5.30 hours')
}


else{
   /* $filename = str_replace(" ", "-", $filename);
    $filename = str_replace("(", "-", $filename);
    $filename = str_replace(")", "-", $filename);
    $filename = str_replace("_", "-", $filename);*/
$filename2 = str_replace(" ", "-", $filename);
rename("uploads/".$filename, "uploads/".$filename2) ;

    $filename=utf8_encode($filename);
$sql="UPDATE `invyt_form_org` SET `main_pic_path`='".$filename2."',
`w_date`='".$_POST["w_date"]."',
`bride_name`='".$_POST["bride_name"]."',
`groom_name`='".$_POST["groom_name"]."',
`b_det`='".$_POST["b_det"]."',
`g_det`='".$_POST["g_det"]."',
`muhoo_1`='".$_POST["muhoo_1"]."',
`muhoo_2`='".$_POST["muhoo_2"]."',
`w_place`='".$_POST["w_place"]."',
`w_venue`='".$_POST["w_venue"]."',
`w_phno_1`='".$_POST["w_phno_1"]."',
`w_phno_2`='".$_POST["w_phno_2"]."',
`w_email`='".$_POST["w_email"]."',
`r_place`='".$r_place."',
    `r_date`='".$r_date."',
    `r_t1`='".$r_t1."',
    `r_t2`='".$r_t2."',
`cr_date`='".date("d/m/Y H:i:s")."' WHERE w_id=".$wid;
}

}  

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
   }
   else{
    session_start();
       $uname=$_SESSION['login_user'];
       $_SESSION['theme']=$_POST["theme"];

   
   
    
    if (mysqli_query($con, $sql)) {
      //  echo "New record created successfully";
        //$uname=$_SESSION['login_user'];
        $sql1 ="INSERT INTO invyt_form SELECT * FROM invyt_form_org WHERE w_id= ".$wid;
       $r= mysqli_query($con, $sql1);
      
            
        header("Location: p2_preview_site.php");
        exit;

    } else {
      //  echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
//}
    mysqli_close($con);
   }   




?>