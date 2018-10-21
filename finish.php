<!DOCTYPE html>
<html lang="en" >
<?php
include 'config.php';
$con = mysqli_connect($host, $user, $password,$dbname);
session_start(); 


if(isset($_GET['i_url'])){
  $i_url=$_GET['i_url'];
}
/*if($_SESSION['suc']==0){
  header("Location:pay_failed.html");
    exit;
}*/
//$i_url=$_GET['i_url'];
/*$sql0="SELECT `pay_suc` FROM `invyt_form_org` WHERE w_id= ".$_SESSION['wid'];
$det = mysqli_query($con,$sql0);

if($row = mysqli_fetch_array($det)) {
 $ps=$row["pay_suc"];
}
if($ps==0){
  header("Location:pay_failed.html");
  exit;
}*/
$sql5="SELECT `main_pic_path`,`bride_name`, `groom_name`,`rand_no` FROM `invyt_form_org` WHERE w_id= ".$_SESSION['wid'];
      
    $det = mysqli_query($con,$sql5);
    if($row = mysqli_fetch_array($det)) {
      $mp=$row["main_pic_path"];
        $b_name=$row["bride_name"];
        $g_name=$row["groom_name"];
        $r=$row["rand_no"];
    }
    if(!(isset($_GET['i_url']))){
      $i_url="https://www.invyt.in/".$g_name."weds".$b_name."_".$r.".html";
    }


?>
<head>
    <meta charset="UTF-8">
    <title>invyt-sharing invites has never been this joyful!</title>
    
      <meta property="og:url"           content="<?php echo $i_url; ?>"/>
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Here is our invyt !!" />
  <meta property="og:description"   content="We are getting married." />
  <meta property="og:image"         content="https://www.invyt.in/uploads/<?php echo $mp; ?>" />
    
    
  <meta name="description" content="Invite your friends and family to your celebration by creating an invyt - a classy, elegant and efficient site to deliver an unforgettable digital experience">
 <!-- <meta property="og:title" content="invyt - inviting has never been this fun" />
  <meta property="og:url" content="http://www.invyt.in/finish.php" />
  <meta property="og:description" content="Create a unique experience for your friends and family by inviting them to your celebration using invyt">
  <meta property="og:image" content="http://invyt.in/img/pic.png">
  <meta property="og:type" content="website" />-->


  <meta name="twitter:card" content="Create a unique experience for your friends and family by inviting them to your celebration using invyt"></meta>
  <meta name="twitter:site" content="@invyt"></meta>
<meta name="twitter:creator" content="@rsuraj38 @harikrishnanmid @indikon_me"></meta>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121991542-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121991542-1');
  </script>
  <meta charset="UTF-8">
  <title>invyt</title>



  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  <meta name="theme-color" content="#3a9fff">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=172440203444134&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 <!--Start of Tawk.to Script-->
 <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b571e8edf040c3e9e0be875/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<header class="header">
  <div class="container header__container">
  <a class="header__logo"  href="index.php"><img class="header__img" src="img/logo.png"></a> 
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
  
  <div class="header__menu">
    <nav id="navbar" class="header__nav collapse">
      <ul class="header__elenco">
      <li class="header__el header__el--blue"><a href="dash.php" class="btn btn--white">← Dashboard</a></li>
      </ul>
    </nav>
  </div>
    </div>
</header>
    
    
    
    
    
 <section class="features landing-web-stories">
    <div class="features-container-shell clearfix">
        <div class="features-content-container features-content-container-left web-stories">
            
            <div class="form-group">
            <img src="img/linktext.svg">
    
            <h2 class="row__title">Now share it with your friends</h2><br><br>
            <center>
              <div class="copy-link-inner">
                  <form data-copy=true>
                    <input type="text" value="<?php $i_url = str_replace(' ', '%20', $i_url); echo $i_url; ?>" data-click-select-all />
                    <input type="submit" value="Copy" />

                  <div class="fb-share-button" style="background: #4267b2; font-size: 20px; height:35px;border-radius: 6px;" data-href="<?php echo $i_url; ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                  <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>


                  </form>
                </div>
                <div class="site__box-link"><br>
                <a  href="<?php echo $i_url;?>" target="_blank" id="submit" class="btn btn--purple btn--width">View Invyt</a>
            </div>
            </center>
            </div>
        </div>
        <div class="device features-device-right web-stories">
            <div class="site">
            <img class="site__img" src="img/linkpic.svg">
            </div>
        </div> 
    </div>
</section>   

</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
