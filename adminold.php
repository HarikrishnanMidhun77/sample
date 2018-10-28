<?php
include 'config.php';

$con = mysqli_connect($host, $user, $password,$dbname);



$dir = "../public_html/";
$cnt=0;
$a = array();
$gr='';
$br='';
$r='';
function getKeys($fname) {
   global $a,$con,$gr,$br,$r;
   
   include 'config.php';

$con = mysqli_connect($host, $user, $password,$dbname);
   
   $s=explode("weds",$fname);
  // echo  $s[0] . "<br>";
   $gr=$s[0];
   $s2=$s[1]; 
   $s3=explode(".",$s2);
   $br=$s3[0];
  // echo  $br . "<br>";
  /* $s2=$s3[1]; 
   $s3=explode(".",$s2);
   $r=$s3[0];
  // echo  $r . "<br>";*/

$sql="SELECT w_id,c_id,bride_name,groom_name,w_date,w_place,w_phno_1 FROM `invyt_form_org` WHERE groom_name='".$gr."' and bride_name='".$br."'";
//echo $sql;
$det = mysqli_query($con,$sql);
$row = mysqli_fetch_array($det);
//print_r($row);
array_push($a,$row);

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
            if(strpos($file,"404")!==false){
                continue;
            }
             if(strpos($file,"google")!==false){
                continue;
            }
            $cnt2=$cnt+1;
            echo $cnt2.".    ". $file . "<br>";
            echo "https://www.invyt.in/".$file . "<br><br>";
            $cnt=$cnt+1;
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
						    <td><a class='btn btn--revert btn--width' href='http://invyt.in/".$v["groom_name"]."weds". $v["bride_name"].".html' target='_blank'>Visit Invyt</a></td>
						    <td><a class='btn btn--purple btn--width' href='del2old.php?row_id=".$v["w_id"]."' onclick='return confirm(";echo '"Are you sure?")';echo "'>Delete</a></td>
						    
						    
						  </tr>";
						  $no++;
    }?>
 			</table>	
</html>