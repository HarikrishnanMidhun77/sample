<!DOCTYPE html>
<html lang="en" >
    <?php
    session_start(); 
    if(isset($_SESSION['login_user'])){ 
     if (!(is_numeric($_SESSION['login_user'])))
      {
         header("Location:form.php"); 
        exit; }
      }
        
        ?>
<head>
    <meta charset="UTF-8">
    <title>invyt-inviting has never been this fun!</title>
  <meta name="description" content="Invite your friends and family to your celebration by creating an invyt - a classy, elegant and efficient site to deliver an unforgettable digital experience">
  <meta property="og:title" content="invyt - inviting has never been this fun" />
<meta property="og:url" content="https://www.invyt.in/index.html" />
  <meta property="og:description" content="Create a unique experience for your friends and family by inviting them to your celebration using invyt">
  <meta property="og:image" content="https://invyt.in/img/pic.png">
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
    
    
    
<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=193567074664788&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->

    
    

<header class="header">
  <div class="container header__container">
      <a class="header__logo"  href="index.php">
        <img class="header__img" src="img/logo.png">
      </a>
      <li class="header__el header__el--blue" style="float:right; height: 66px;">
          <a href="index.php" class="btn btn--white" id="back_button" style="padding-top: 10px;">← Back</a>
      </li>
    </div>
</header>
    
 <section class="features landing-web-stories">
    <div class="features-container-shell clearfix">
        <div class="features-content-container features-content-container-left web-stories">
            <br>
            <div class="features-content">
            <h1 class="row__title">Happier guests, Happier celebrations!</h1><br><br><br>
            <form method="POST" action="log.php">
            <div class="form-group">
             
                <input type="email" name="c_email"  placeholder="Enter Email ID" class="form__field form__text" required></input>
            </div>
            <div class="form-group">
               <input type="password" name="c_password"  placeholder="Enter Password" class="form__field form__text" required></input>
            </div>
            <br>
            <center>
            <div class="site__box-link">
                <button class="btn btn--purple btn--width" type="submit">Signin</button>
            </div>
            <br>
            <!-- <div class="site__box-link">
               <div class="fb-login-button" data-width="" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>
            </div>-->
            
          </form>
            <br><br>
            <a href="signup.html"><b>New to invyt? Signup here!</b></a>
            </center>
            </div>
        </div>
        <div class="device features-device-right web-stories">
            <div class="site">
            <img class="site__img" src="img/signin.svg">
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
