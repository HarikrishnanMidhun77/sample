<?php
//$blob = $_POST['croppedImage'];
//$r=
$target_file="../uploads/wishes/abc123.png"
//return $blob;
echo "hello";
$myfile = fopen("testfile.txt", "w")
move_uploaded_file(
    $_FILES['croppedImage']['tmp_name'], 
    $target_file
); 
header("refresh:5;Location:../p2_testi_suc.php?rid=".$_POST["w_id"]);
exit;
?>

