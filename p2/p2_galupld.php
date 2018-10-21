<?php
include '../config.php';
$con = mysqli_connect($host, $user, $password,$dbname);
session_start();
$wid=$_SESSION['wid'];
echo "hello";
if(isset($_FILES["files"])==true)
      
{
$errors = array();
         
        $extension = array("jpeg","jpg","png","gif");
         
        $bytes = 1024;
        $allowedKB = 10000;
        $totalBytes = $allowedKB * $bytes;
        $fl=false;
foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
{
    echo "hello";
    $uploadThisFile = true;
     
    $file_name=$_FILES["files"]["name"][$key];
    $file_tmp=$_FILES["files"]["tmp_name"][$key];
     
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

    if(!in_array(strtolower($ext),$extension))
    {
        array_push($errors, "File type is invalid. Name:- ".$file_name);
        $uploadThisFile = false;
    }               
     
   // if($_FILES["files"]["size"][$key] > $totalBytes){
    //    array_push($errors, "File size must be less than 100KB. Name:- ".$file_name);
    //    $uploadThisFile = false;
   // }
     
    if(file_exists("uploads/gal/".$_FILES["files"]["name"][$key]))
    {
        echo("File is already exist. Name:- ". $file_name);
        array_push($errors, "File is already exist. Name:- ". $file_name);
        $uploadThisFile = false;
    }
     
    if($uploadThisFile){
        $filename2=basename($file_name,$ext);
        $newFileName=$filename2.$ext;    
        $newFileName = str_replace(" ", "-", $newFileName);
       // echo $newFileName;
        rename("uploads/gal/".$newFileName, "uploads/gal/".$newFileName) ;            
        move_uploaded_file($_FILES["files"]["tmp_name"][$key],"uploads/gal/".$newFileName);
          move_uploaded_file($_FILES["files"]["tmp_name"][$key],"../uploads/gal/".$newFileName);
         copy("uploads/gal/".$newFileName, "../uploads/gal/".$newFileName) ; 
        $sql2 ="INSERT INTO invyt_gal(w_id, img_name) VALUES(".$wid.",'".$newFileName."')";
        //echo($sql2);
                 
        if (mysqli_query($con, $sql2)) {
           // echo "New record created successfully";
           $fl=true;

    }
    
}

}
}
header("Location:p2_preview_site.php");
exit;
?>