<!DOCTYPE html>
<html lang="en" >
<?php
$w_id=$_GET["rid"];
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
  <meta property="fb:app_id" content="221821261776525" />
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
<link rel="stylesheet" href="cropcss/style.css">

<link rel='stylesheet' href='https://unpkg.com/flatpickr/dist/flatpickr.min.css'>
  
</head>

<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '221821261776525',
      cookie     : true,
      xfbml      : true,
      version    : '3.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<header class="header">
  <div class="container header__container">
<div class="header__logo"><b style="font-family: 'Baloo'; color:#8a3aff; font-size:30px; font-weight:900;">invyt.</b></div> 
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
  
  <div class="header__menu">
    <nav id="navbar" class="header__nav collapse">
      <ul class="header__elenco">
        <li class="header__el header__el--blue"><a href="index.html" class="btn btn--white">Back →</a></li>
      </ul>
    </nav>
  </div>
    </div>
</header>
    
<div class="container">
    <h1 class="row__title">Let's wish your loved ones..</h1>
    <form method="POST" action="p2_testi_up.php" enctype="multipart/form-data">
    <div class="row row--margin">
      <div class="col-md-6">
           <div class="form-group">
           <input type="hidden" name="w_id"  value="<?php echo $w_id; ?>"></input>
           <!--<input type="hidden" id="cr_img" name="cr_img" ></input>-->
            <input type="text" name="g_name"  placeholder="Name*" class="form__field form__text" required></input>
          </div>
          <div class="form-group">
            <textarea type="text" name="g_msg" placeholder="Your messsage*" class="form__field form__textarea" required></textarea>
          </div>
       <center><br><br>
        <div class="site__box-link">
      
                <button type="submit" class="btn btn--purple btn--width">Post</button>
        </div>
        </center>
        <br><br><br>
    </div>   
    
    <div class="col-md-6">
        <div class="form-group">
               <div class="containerx">
                   <center>
                <div class="imageBox">
                    <div class="thumbBox"></div>
                    <div class="spinner" style="display: none; color: #ffffff;">Loading...</div>
                </div>
                <div class="action">
                <input type="file" id="file" name="file" style="float:left; width: 100px;">
                    <input type="button" id="btnCrop" value="Crop" style="float: right; padding: 15px; margin-left: 10px;">
                    <input type="button" id="btnZoomIn" value="+" style="float: right; padding: 15px;">
                    <input type="button" id="btnZoomOut" value="-" style="float: right; padding: 15px;">
                </div>
               <div class="cropped">
            
                </div>
                       </center>
            </div>   
          </div>
    </div>
    
 
  </div>
   
  </div><br><br><br>
  </form>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://unpkg.com/flatpickr'></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

 <script  src="cropjs/index.js"></script> 
<script  src="js/index.js"></script>




</body>

</html>
