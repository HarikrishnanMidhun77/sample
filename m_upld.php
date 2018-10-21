<?php

if(isset($_POST["submit"])){     
        $errors = array();
         
        $extension = array("jpeg","jpg","png","gif");
         
        $bytes = 1024;
        $allowedKB = 10000;
        $totalBytes = $allowedKB * $bytes;
         
        if(isset($_FILES["files"])==false)
        {
            echo "<b>Please, Select the files to upload!!!</b>";
            return;
        }
       // echo "<b>files selected</b>";
        $conn = mysqli_connect("localhost","root","","invyt_db");   
         $fl=false;
        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
        {
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
                $filename=basename($file_name,$ext);
                $newFileName=$filename.$ext;                
                move_uploaded_file($_FILES["files"]["tmp_name"][$key],"uploads/gal/".$newFileName);
                 
                $sql = "INSERT INTO gallery(w_id, pic_path) VALUES(1".",'".$newFileName."')";
                 
                if (mysqli_query($conn, $sql)) {
                    //echo "New record created successfully";
                   $fl=true;

                   
            
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }        
            }
            
        }
        if($fl){
            header("Location: preview_site.php");
            exit;
        }
        else{
            echo("Error in uploading files...");
        }
        mysqli_close($conn);
         
        $count = count($errors);
    }
        ?>