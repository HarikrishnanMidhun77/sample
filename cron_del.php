<?php
include 'config.php';
$con = mysqli_connect($host, $user, $password,$dbname);
session_start(); 
$sql0 ="delete from invyt_form";
$res=mysqli_query($con, $sql0);
?>