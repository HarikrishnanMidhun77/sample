<?php
include 'config.php';

$con = mysqli_connect($host,$user,$password,$dbname);




$dir = "../public_html/";
$cnt=0;
$a = array();
$gr='';
$br='';
$r='';
function getKeys($fname) {
   global $a,$con,$gr,$br,$r;
   include 'config.php';
    $con = mysqli_connect($host,$user,$password,$dbname);
   
   $s=explode("weds",$fname);
 // echo  $s[0] . "<br>";
   $gr=$s[0];
   $s2=$s[1]; 
   $s3=explode("_",$s2);
   $br=$s3[0];
//   echo  $br . "<br>";
   $s2=$s3[1]; 
   $s3=explode(".",$s2);
   $r=$s3[0];
$br2x=explode(".",$br);
$br2=$br2x[0];
 // echo  $r . "<br>";
if(!is_numeric($r)){
    
    $r=121;
    $sql="SELECT w_id,c_id,bride_name,groom_name,w_date,w_place,w_phno_1,rand_no FROM `invyt_form_org` WHERE groom_name='".$gr."' and bride_name='".$br2."' and rand_no=".$r;
}
else{
$sql="SELECT w_id,c_id,bride_name,groom_name,w_date,w_place,w_phno_1,rand_no FROM `invyt_form_org` WHERE groom_name='".$gr."' and bride_name='".$br."' and rand_no=".$r;
}
//echo $sql. "<br>";
$det = mysqli_query($con,$sql);
 if (mysqli_query($con, $sql)) {
     
 }
 else{
  // echo "Error: " . $sql . "<br>" . mysqli_error($con);  
 }
$row = mysqli_fetch_array($det);
//print_r($row);
//echo "<br>";
array_push($a,$row);
//print_r($a);
//echo "<br>";
mysqli_close($con);
}



// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
        if(strpos($file,"html")!==false)  {
            if(strpos($file,"failed")!==false){
                continue;
            }
            if(strpos($file,"finish")!==false){
                continue;
            }
            if(strpos($file,"signup")!==false){
                continue;
            }
          
            $cnt=$cnt+1;
              echo $cnt.". ".$file . "<br>";
            getKeys($file);
           
        }
    }
   // print_r($a);
    closedir($dh);
  }
}
?>
<html>
<body>
<table id="customers">
						<thead>
						  <tr>
						  	<th>SI NO</th>
						    <th>Name</th>
						    <th>Date</th>
						    <th>Place</th>
						    <th>Phone Number</th>
						    <th>Email</th>
						    <th>Link</th>
						    <th>Delete</th>
						    
						  </tr>
						 </thead>
                    <tbody>
                    <h3> Total count of invyts: <?php echo $cnt; ?> </h3> <br><br>
               </body     
              
<?php
	$no=1;

    foreach ($a as $v) 
    {
    					echo 
    					'<tr>
						    <td>'.$no.'</td>
						    <td>'.$v["groom_name"]." weds ".$v["bride_name"]."</td>
						    <td>".$v["w_date"]."</td>
						    <td>".$v["w_place"]."</td>
						    <td>".$v["w_phno_1"]."</td>
						    <td>".$v["c_id"]."</td>
						    <td><a class='btn btn--revert btn--width' href='https://invyt.in/".$v["groom_name"]."weds". $v["bride_name"]."_".$v["rand_no"].".html' target='_blank'>Visit Invyt</a></td>
						    <td><a class='btn btn--purple btn--width' href='del2.php?row_id=".$v["w_id"]."' onclick='return confirm(";echo '"Are you sure?")';echo "'>Delete</a></td>
						    
						    
						  </tr>";
						  $no++;
    }?>
 			</table>	
</html>