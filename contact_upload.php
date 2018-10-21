<?php
$host = "mysql.hostinger.in"; /* Host name */
$user = "u857308499_invyt"; /* User */
$password = "invyt949596"; /* Password */
$dbname = "u857308499_invyt"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);

$mail=filter_input(INPUT_POST,"c_email");
$number=filter_input(INPUT_POST,"c_phone");
$name=filter_input(INPUT_POST,"c_name");
$location=filter_input(INPUT_POST,"c_place");
$message=filter_input(INPUT_POST,"c_message");
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
$from="info@invyt.in";
$headers = "From:". $from;
$to="invytonline@gmail.com";
$subject="New Invyt Customer";
$subject2="Hello from the invyt team";
$message1="Dear Admin,\r\n".$name." has sent you a query.\r\n Ph:".$number."\r\n Location: ".$location."\r\n message: ".$message."\r\n e-mail: ".$mail;
$message2="Dear ".$name.",\r\n \r\nThank you for getting in touch with the invyt team.\r\n We are happy that you want to take your friends' and families' experience with invitations to the next level !\r\n One of our professionals will get back to you soon.\r\n In the meantime, you can check the designs section of the site(http://invyt.in/index.html#design) to figure out the kind of invyt you want.\r\n 
Have a great day!\r\nRegards,\r\nTeam invyt\r\n(If you want to reach us immediately, call or whatsapp +918943551467)";
mail($to,$subject,$message1,$headers);
mail($mail,$subject2,$message2,$headers);


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
   }
   else{
      // if(isset($_POST["submit-button"]))
      // {
    $sql = "INSERT INTO contact_info (c_name,c_place,c_email,c_phone,c_message)
     VALUES ('".$_POST["c_name"]."','".$_POST["c_place"]."','".$_POST["c_email"]."','".$_POST["c_phone"]."','".$_POST["c_message"]."')";
     
   // VALUES ('$filename'+',')";
    
    if (mysqli_query($con, $sql)) {
        echo "<h1 style='color:#a700ff;'>Thank you for getting in touch, ".$name."!<h1>
<br/>We are happy that you want to take your friends' and families' experience with invitations to the next level ! One of our professionals will get back to you soon.<br/>
In the meantime, you can check the <a href='http://www.invyt.in/#design'>Example</a> sections of the site to figure out the kind of invyt you want.
<br/>Have a great day!";

        header( "refresh:8;url=index.html" );

        exit;

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
//}
    mysqli_close($con);
   }   

?>