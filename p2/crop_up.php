<?php
$blob = $_POST['form']['croppedImage'];
$blob2 = $_POST['croppedImage'];
echo $blob;
$r= $_POST['rname'];
$target_file="uploads/wishes/".$r.".png";
$target_file2="../uploads/wishes/".$r.".png";//abc123.png";
//return $blob;
echo "hello";
$ab= $_FILES['croppedImage']['tmp_name'];
$filename2=$_FILES['rname']['name'];
$ab=$_FILES['rname']['name'];
//$ab = basename( $_FILES['croppedImage']["name"]);
file_put_contents("uploads/wishes/test12.png",$r);// base64_decode($ab));
//$myfile = fopen("http://localhost/invyt01/p2/uploads/wishes/testfile.txt", "w");
//$ab= $_FILES['form']['croppedImage']['tmp_name'];
move_uploaded_file($_FILES['croppedImage']['tmp_name'], $target_file); 
copy($target_file,$target_file2);
//move_uploaded_file($_FILES['croppedImage']['tmp_name'], $target_file2); 
//rename( "abc123.png",".png") ;
//header("refresh:5;Location:../p2_testi_suc.php?rid=".$_POST["w_id"]);
//exit;
?>

