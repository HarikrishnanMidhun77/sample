<!DOCTYPE html>
<html lang="en" >
<?php
include 'config.php';
$con = mysqli_connect($host, $user, $password,$dbname);
$w_id=$_GET["rid"];


 $sql3="SELECT `bride_name`, `groom_name`,`rand_no` FROM `invyt_form_org` WHERE w_id= ".$w_id;
      
 $det = mysqli_query($con,$sql3);
 if($row = mysqli_fetch_array($det)) {
     $b_name2=$row["bride_name"];
     $g_name2=$row["groom_name"];
     $r2=$row["rand_no"];
 }
 $iurl="https://www.invyt.in/".$g_name2."weds".$b_name2."_".$r2.".html";
?>
<head>
    <meta charset="UTF-8">
    <title>invyt-inviting has never been this fun!</title>
  <meta name="description" content="Invite your friends and family to your celebration by creating an invyt - a classy, elegant and efficient site to deliver an unforgettable digital experience">
  <meta property="og:title" content="invyt - inviting has never been this fun" />
<meta property="og:url" content="http://www.invyt.in/index.html" />
  <meta property="og:description" content="Create a unique experience for your friends and family by inviting them to your celebration using invyt">
  <meta property="og:image" content="http://invyt.in/img/pic.png">
  <meta property="og:type" content="website" />
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
        <li class="header__el header__el--blue"><a href="<?php echo $iurl; ?>" class="btn btn--white">← Back</a></li>
      </ul>
    </nav>
  </div>
    </div>
</header>
<script type="text/javascript">
function myFunction() {
  window.history.back();

}
</script>

 <section class="features landing-web-stories">
    <div class="features-container-shell clearfix">
        <div class="features-content-container features-content-container-left web-stories">
            <img src="img/postedtext.png">
            <div class="features-content">
            <h1 class="row__title">Your wish is successfully submitted for review!</h1><br><br>
            <center>
            <div class="site__box-link">
                <a class="btn btn--purple btn--width" href="index.php">Take a tour</a>
            </div>
            <br><br>
            </center>
            </div>
        </div>
        <div class="device features-device-right web-stories">
            <div class="site">
            <img class="site__img" src="img/posted.png">
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
