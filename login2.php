<!DOCTYPE html>
<html lang="en" >
<?php
include 'config.php';

$con = mysqli_connect($host, $user, $password,$dbname);
session_start(); 
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
   }
   else{
$sql3="SELECT `w_email`, `w_phno_1` FROM `invyt_form` WHERE w_id= ".$_SESSION['wid'];
      
      $det = mysqli_query($con,$sql3);
      if($row = mysqli_fetch_array($det)) {
          $ema=$row["w_email"];
          $ph=$row["w_phno_1"];
      }
    }
      ?>
<head>
    <meta charset="UTF-8">
    <title>invyt-inviting has never been this fun!</title>
  <meta name="description" content="Invite your friends and family to your celebration by creating an invyt - a classy, elegant and efficient site to deliver an unforgettable digital experience">
  <meta property="og:title" content="invyt - inviting has never been this fun" />
<meta property="og:url" content="http://www.invyt.in/signup.html" />
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
        <li class="header__el header__el--blue"><a href="index.php" class="btn btn--white">← Back</a></li>
      </ul>
    </nav>
  </div>
    </div>
</header>
    
 <section class="features landing-web-stories">
    <div class="features-container-shell clearfix">
        <div class="features-content-container features-content-container-left web-stories">
            <br>
            <form method="POST" action="signup2.php">
            <div class="features-content">
            <h1 class="row__title">Sign Up to View and Share your invyt</h1><br><br><br>
            <div class="form-group">
                <input type="email" name="c_email" value="<?php echo $ema; ?>" placeholder="Email address" class="form__field form__text" required></input>
            </div>
            <div class="form-group">
                <input type="text" name="c_phno" value="<?php echo $ph; ?>"  pattern="[789][0-9]{9}" placeholder="Phone Number"  oninvalid="this.setCustomValidity('Enter 10 digit phone number')"
    oninput="this.setCustomValidity('')" class="form__field form__text" required></input>
            </div>
            <div class="form-group">
               <input type="password" name="c_password"  placeholder="Password" class="form__field form__text" required></input>
            </div>
            <br>
            <center>
            <div class="site__box-link">
                <button class="btn btn--purple btn--width" type="submit">Signup</button>
            </div>
          </form>
            <br><br>
            Already on Invyt ? <a href="login2.php" style="color:blue;"><b>Sign in</b></a>
            </center>
            </div>
        </div>
        <div class="device features-device-right web-stories">
            <div class="site">
            <img class="site__img" src="img/signup.svg">
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
