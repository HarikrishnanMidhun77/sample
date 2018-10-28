<!DOCTYPE html>
<html lang="en" >
<?php

session_start(); 
if(isset($_SESSION['login_user'])){ 
if (!(is_numeric($_SESSION['login_user'])))
{  //header("Location: dash.php"); 
 // exit; 
}
  
}  
?>


    <script type="text/javascript">
      function myFunction() {
    var x = document.getElementById("signup1");
    var y=document.getElementById("logout1");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
    } else {
        x.style.display = "none";
        y.style.display = "block";
    }
}
    </script>
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
  <meta name="viewport" content="user-scalable=yes, initial-scale=1.0, width=device-width" />
  <link href='https://fonts.googleapis.com/css?family=Montserrat&subset=latin' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Kirang+Haerang&subset=latin' rel='stylesheet' type='text/css'>
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <style type="text/css">

@-webkit-keyframes pulse {
            0% { -webkit-transform: scale(1); }
            50% { -webkit-transform: scale(1.1); }
            100% { -webkit-transform: scale(1); }
         }
         
         @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
         }
         
         .pulse {
            -webkit-animation-name: pulse;
            animation-name: pulse;
         }
    #work {
        padding-bottom: 0;
    }
      </style>
    
      
</head>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4970911.js"></script>
<!-- End of HubSpot Embed Code -->
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
     <button  type="button" class="navbar-toggle collapsed" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="padding-top: 4px;">
              <a class="btn btn--revert btn--width" href="#price" style="background: #8a3aff; color:white;border-radius: 5px; width: 170px;">Start Now for Free</a>
     </button>
  
  <div class="header__menu">
    <nav id="navbar" class="header__nav collapse">
      <ul class="header__elenco">
        <li class="header__el" style="padding-top: 20px;"><a href="<?php  if(session_status() == PHP_SESSION_ACTIVE){try{if(isset($_SESSION['login_user']) ){if(!(is_numeric($_SESSION['login_user']))){echo("dash.php") ;}else{echo("#home");}}else{ echo("#home"); }}catch(Exception $e){echo("#home"); }}?>" class="header__link"><?php if(isset($_SESSION['login_user'])){if(!(is_numeric($_SESSION['login_user']))){echo "Dashboard";}else{echo "Home";}}else{echo "Home";}?></a></li>
     
        <li class="header__el" style="padding-top: 20px;"><a href="#features" class="header__link">Features</a></li>
        <li class="header__el" style="padding-top: 20px;"><a href="#work" class="header__link">How it Works?</a></li>
        <li class="header__el" style="padding-top: 20px;"><a href="#price" class="header__link">Pricing</a></li>
        <li class="header__el" style="padding-top: 20px;"><a href="#contact" class="header__link">Contact us</a></li>
       <li class="header__el header__el--blue"><a href=<?php  if(session_status() == PHP_SESSION_ACTIVE){try{if(isset($_SESSION['login_user'])){ if(!(is_numeric($_SESSION['login_user']))){ echo("logout.php") ;}else{ echo("login.php"); }} else{ echo("login.php"); }}catch(Exception $e){echo("login.php"); }}?> id="logout1" class="btn btn--white"><?php   if(session_status() == PHP_SESSION_ACTIVE){try{if(isset($_SESSION['login_user'])){if(!(is_numeric($_SESSION['login_user']))){ echo("Logout →") ;}else{ echo("Sign In →"); }}else{echo ("Sign In →");}}catch(Exception $e){echo("Sign In →");}}?></a></li>
      <!--  <li class="header__el header__el--blue"><a href="http://localhost/login/login.html" id="signup1" class="btn btn--white">Sign In →</a></li>-->
     <!---->
      </ul>
    </nav>
  </div>
    </div>
</header>
    
 <section class="features landing-web-stories" id="home">
    <div class="features-container-shell clearfix">
        <div class="features-content-container features-content-container-left web-stories">
            <div class="features-content">
                <h2 class="features-content-title">Inviting has never been this fun! </h2>
                <h2 class="features-content-subtitle">whatever be the occasion, invyt is here to invite your loved ones</h2>
                <div class="site__box-link">
                <a class="btn btn--purple btn--width" href="#price">Get Started</a>
                <a class="btn btn--revert btn--width" href="#design">Samples</a>
                </div><br><br>
                <b style="font-size: 0.9em;">Already have an account? <a href="login.php">Log In Here</a></b>
            </div>
        </div>
        <div class="device features-device-right web-stories">
            <div class="site">
            <img class="site__img" src="img/pic.svg">
            </div>
        </div> 
    </div>
</section>   

    
<section class="features landing-web-stories">
    <div class="features-container-shell clearfix">
        <div class="features-content-container features-content-container-left web-stories">
            <div class="features-content">
                <h2 class="features-content-title">What is invyt?</h2>
                <h2 class="features-content-subtitle">Invyt lets you create stunning website-like invitations that you can use to invite guests to your celebrations in minutes</h2>
            </div>
        </div>
        <div class="device features-device-right web-stories" id="video_player">
            <video poster="img/base.png" loop="" muted="" class="static-device web-stories" controls autoplay>
                <source src="video.mp4" type="video/mp4">
            </video>
        </div> 
    </div>
</section>
  
<div id="features" class="files-cont">
  <div class="row row--no-right">
        <div class="row__title-box">
           <h2 class="row__title">Features</h2><br>
            <h1 class="row__sub">Make Your Celebration Memorable</h1>
        </div>
  </div>
  <div class="row row--no-right">
    
    <div class="containernew">   
    <div class="file file-6">
      <div class="file__img"></div>
      <div class="file__info">
        <center>
        <h2 class="file__title">
          Be Cooler! 
        </h2>
        </center>
        <span class="file__date autohide"><p> Sending a pic of your invitation card is so yesterday. Invyts look great on mobiles,laptops and tablets. </p></span>
        <div class="overlay">
   <div class="texty">Sending a pic of your invitation card is so yesterday. Invyts look great on mobiles,laptops and tablets. </div>
    </div>

  </div>  
</div>
</div>
<div class="containernew">
    <div class="file file-10">
      <div class="file__img"></div>
      <div class="file__info">
        <h2 class="file__title">
          Save The Date
        </h2>
        <span class="file__date autohide"><p> Never let the dear ones miss your special day. Invyt lets guests add your celebration to their calendar with one click.</p></span>
        <div class="overlay">
          <div class="texty">Never let the dear ones miss your special day. Invyt lets guests add your celebration to their calendar with one click.
      </div>  
    </div>
  </div>
</div>
</div>

<div class="containernew">
    <div class="file file-7">
      <div class="file__img"></div>
      <div class="file__info">
        <h2 class="file__title">
          Never miss a shot!  
        </h2>
        <span class="file__date autohide"><p>Invyt makes it easy and secure for all your guests to share the pics they take at your celebration, with you.</p></span>
        <div class="overlay">
          <div class="texty">Invyt makes it easy and secure for all your guests to share the pics they take at your celebration, with you.
      </div>  
    </div>
  </div> 
</div>  
</div>

<div class="containernew">
    <div class="file file-5">
      <div class="file__img"></div>
      <div class="file__info">
        <center>
          <h2 class="file__title">
            RSVP
          </h2>
        </center>
        <span class="file__date autohide"><p>Know how many guests are coming to your celebration and what their preferences are, at a glance.</p></span>
          <div class="overlay">
          <div class="texty">Know how many guests are coming to your celebration and what their preferences are, at a glance.
      </div>  
    </div>
  </div>
</div>  
</div>

<div class="containernew">
    <div class="file file-8">
      <div class="file__img"></div>
      <div class="file__info">
        <h2 class="file__title">
          Tell your Tale
        </h2>
        <span class="file__date autohide"><p>Behind every celebration, there is a story to tell. With invyt, tell your tale beautifully to connect with the guests.</p></span>
        <div class="overlay">
          <div class="texty">Behind every celebration, there is a story to tell. With invyt, tell your tale beautifully to connect with the guests.
          </div>
        </div>  
      </div>  
    </div>
  </div>

  <div class="containernew">
    <div class="file file-9">
      <div class="file__img"></div>
      <div class="file__info">
         <h2 class="file__title">
           More Social!
          </h2>
          <span class="file__date autohide"><p>Invyt makes it fun and easy for your friends to keep up the festive spirit by posting comments on your page.</p></span>
          <div class="overlay">
          <div class="texty">Invyt makes it fun and easy for your friends to keep up the festive spirit by posting comments on your page.
      </div>  
    </div>
  </div>
</div>  
</div>
  
<div class="containernew">  
     <div class="file file-11">
      <div class="file__img"></div>
      <div class="file__info">
        <h2 class="file__title">
          Multiple Events
        </h2>
        <span class="file__date autohide"><p>Include multiple events in a single invyt(say wedding and reception) so its easy for your guests to keep track of them.</p></span>
        <div class="overlay">
          <div class="texty">Include multiple events in a single invyt(say wedding and reception) so its easy for your guests to keep track of them.
      </div>  
    </div>
  </div>
</div>  
</div>

<div class="containernew">       
    <div class="file file-12">
      <div class="file__img"></div>
      <div class="file__info">
          <h2 class="file__title">
            Location Sharing 
          </h2>
          <span class="file__date autohide"><p> It's easy for your guests to reach the venue, thanks to the location sharing right within your Invyt.</p></span>
          <div class="overlay">
          <div class="texty">It's easy for your guests to reach the venue, thanks to the location sharing right within your Invyt.
          </div>
        </div>  
      </div>
      </div>  
    </div>
  </div>
</div>
 
 
    
<div id="work" class="sect">
<div class="container">
<div class="row row--center">
  <h1 class="row__title">
    How it works?
  </h1><br>
  <h2 class="row__sub">The Three Step Process</h2>
</div>
<div class="cards">
  <div class="card">
    <div class="card__image card__image--1"></div>
    <img class="site__img2" src="img/2.png">
    <div class="file__info">
    <center>
    <h2 class="file__title">
    Pick a Plan
    </h2>
    Select one of the plans below to get started.
    </center>
  </div>  
  </div>
  <div class="card">
    <div class="card__image card__image--2"></div>
    <img class="site__img2" src="img/1.png">
    <div class="file__info">
    <center>
    <h2 class="file__title">
    Enter Details
    </h2>
    Choose a design and fill up a form. 
    </center>
  </div>  
  </div>
  <div class="card">
    <div class="card__image card__image--3"></div>
    <img class="site__img2" src="img/3.png">
    <div class="file__info">
    <center>
    <h2 class="file__title">
      Sign Up & Share
    </h2>
    Start inviting your guests right away!
    </center>
  </div>  
  </div>
</div>
</div>
</div>
    
    
<div id="price" class="sect" style="padding: 10px 0px;">
<div class="container">
<div class="row row--center">
  <h1 class="row__title">
    Pricing
  </h1><br>
  <h2 class="row__sub">Choose one of the plans to get started.</h2><br/>
  <h1 class="row__sub">Pay only if you are SATISFIED after trying</h1>
</div>
</div>
</div>
<div class="scrolling-wrapper entry-content">
<div class="row row--center row--margin">
    <div class="cardo">
  <div class="col-md-4 col-sm-4 price-box price-box--purple">
    <a href="form.php" style="text-decoration: none;">
    <div class="price-box__wrap"><br>
      <div class="price-box__img"></div>
      <h1 class="price-box__title">
        Basic
      </h1>
       <h2 class="price-box__discount">
          <span class="price-box__dollar"></span>Free<span class="price-box__discount--light"></span>
      </h2><br>
       <ul class="price-box__list">
        <li class="price-box__list-el">3+ Templates</li>
        <li class="price-box__list-el">Event Date+1 Week Support</li>
        <li class="price-box__list-el">Location Map</li>
        <li class="price-box__list-el">Unlimited Sharing</li>
        <li class="price-box__list-elf"><del>Wishes from Guests</del></li>
        <li class="price-box__list-elf"><del>Wedding and Reception</del></li>
        <li class="price-box__list-elf"><del>Gallery</del></li>
        <li class="price-box__list-elf"><del>Song Playback</del></li>
        <li class="price-box__list-elf"><del>Accept Gifts Online</del></li>
        <li class="price-box__list-elf"><del>RSVP</del></li>
        <li class="price-box__list-elf"><del>Reminder</del></li>
        <li class="price-box__list-elf"><del>Save the date</del></li>
        <li class="price-box__list-elf"><del>Upload Pics After Event</del></li>
        <li class="price-box__list-elf"><del>Tell your tale (Timeline style)</del></li>
        <li class="price-box__list-elf"><del>Recepient Name Inside Invyt</del></li>
      </ul>
       <div class="price-box__btn">
      <a class="btn btn--purple btn--width" href="form.php">Start now</a>
      </div>
  </div>
  </a>
  </div>
</div>
  <!-- second -->
  <div class="cardo">
  <div class="col-md-4 col-sm-4 price-box price-box--violet">
  <a href="p2/p2_form.php" style="text-decoration: none;">
  <div class="price-box__wrap pulse" style="background: url(https://image.ibb.co/bRNde9/11111.png) no-repeat center center;background-color: white; background-position: 0px 0px; -webkit-animation-duration: 5s; animation-duration: 5s; -webkit-animation-fill-mode: both; animation-fill-mode: both; animation-iteration-count:infinite;">
      <br>
      <div class="price-box__img"></div>
      <h1 class="price-box__title">
        Standard
      </h1>
      <h2 class="price-box__discount">
      <span class="price-box__dollar" style="font-weight: bold; color: #8198ae;">&#x20B9;</span>999<span class="price-box__discount--light"></span>
      </h2><br>
      <ul class="price-box__list">
        <li class="price-box__list-el">3+ Templates</li>
        <li class="price-box__list-el">Event Date+1 Week Support</li>
        <li class="price-box__list-el">Location Map</li>
        <li class="price-box__list-el">Unlimited Sharing</li>
        <li class="price-box__list-el">Wishes from Guests </li>
        <li class="price-box__list-el">Wedding and Reception</li>
        <li class="price-box__list-el">Gallery</li>
        <li class="price-box__list-el">Song Playback</li>
        <li class="price-box__list-el">Accept Gifts Online </li>
        <li class="price-box__list-elf"><del>RSVP</del></li>
        <li class="price-box__list-elf"><del>Reminder</del></li>
        <li class="price-box__list-elf"><del>Save the date</del></li>
        <li class="price-box__list-elf"><del>Upload Pics After Event</del></li>
        <li class="price-box__list-elf"><del>Tell your tale (Timeline style)</del></li>
        <li class="price-box__list-elf"><del>Recepient Name Inside Invyt</del></li>
      </ul>
      <div class="price-box__btn">
      <a class="btn btn--purple btn--width" href="p2/p2_form.php">Start now</a>
      </div>
  </div>
  </a>
  </div>
</div>

<!-- terzo -->
<div class="cardo">
  <div class="col-md-4 col-sm-4 price-box price-box--blue">
  <a href="#contact" style="text-decoration: none;">
  <div class="price-box__wrap"><br>
      <div class="price-box__img"></div> 
      <h1 class="price-box__title">
        Premium
      </h1>
      <h2 class="price-box__discount">
      <span class="price-box__dollar" style="font-weight: bold; color: #8198ae;">Starts at &#x20B9;</span>4999<span class="price-box__discount--light"></span>
      </h2><br>
      <ul class="price-box__list">
        <li class="price-box__list-el">Unlimited Customisation </li>
        <li class="price-box__list-el">Flexible Support</li>
        <li class="price-box__list-el">Location Map</li>
        <li class="price-box__list-el">Unlimited Sharing</li>
        <li class="price-box__list-el">Wishes from Guests </li>
        <li class="price-box__list-el">Wedding and Reception</li>
        <li class="price-box__list-el">Gallery</li>
        <li class="price-box__list-el">Song Playback</li>
        <li class="price-box__list-el">Accept Gifts Online </li>
        <li class="price-box__list-el">RSVP</li>
        <li class="price-box__list-el">Reminder</li>
        <li class="price-box__list-el">Save the date</li>
        <li class="price-box__list-el">Upload Pics After Event</li>
        <li class="price-box__list-el">Tell your tale (Timeline style)</li>
        <li class="price-box__list-el">Recepient Name Inside Invyt</li>
      </ul>
    <div class="price-box__btn">
      <a class="btn btn--purple btn--width" href="#contact">Start now</a>
    </div>
  </div>
  </a>
  </div>
</div>
</div>
</div>



<div class="sect sect--white">
<div class="container">
<div class="row">
  <h1 class="row__title">
    Testimonials
  </h1><br>
  <h2 class="row__sub">People say about us</h2>
</div>
<div class="row row--margin row--text-center">
  <div class="col-md-8 col-sm-10 col-xs-12 row__carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <div class="item__content">
      <p class="item__description"><br><br>
       I started getting instant replies to my invitation as I expected. It's quick and easy to make one , beautiful to see and extremely convenient for the guests. Why do we even use physical cards anymore ? (laughs)
      </p>
        </div>
      <div class="item__avatar"></div>
      <p class="item__people">Sruthy Menon</p>
  <p class="item__occupation">Thrissur,<b> Kerala.</b></p>
    </div>
    
        <div class="item">
      <div class="item__content">
      <p class="item__description"><br><br>
         I had been looking for website creators to make a wedding website for me. That's when I heard about invyt. I could make an invyt all by myself, in minutes, at a fraction of the normal cost. All my friends loved it and I am really happy with the experience.
      </p>
        </div>
      <div class="item__avatar1"></div>
     <p class="item__people">Krishnachaithanya</p>
  <p class="item__occupation">Nellore,<b> Andhrapradesh.</b></a>
    </div>
    
<div class="item">
      <div class="item__content">
      <p class="item__description"><br><br> I wanted to do something different for my wedding, something that would make it memorable for my family and friends. Invyt helped me with that by allowing me to create a digital invitation with all my wedding details and favourite pictures. It was lovely to see my aunts and uncles abroad being overjoyed by the invyts.
      </p>
        </div>
      <div class="item__avatar2"></div>
      <p class="item__people">Roshan</p>
  <p class="item__occupation">Abu Dhabi,<b> UAE.</b></a>
    </div>
      
      <div class="item">
      <div class="item__content">
      <p class="item__description"><br><br> At first, I was skeptical about digital invitations. I wondered if people would click on the link to see my invyt. I couldn't believe it when the views on my page went beyond 500 in just 2 days. It worked like a charm. 
      </p>
        </div>
      <div class="item__avatar3"></div>
      <p class="item__people">Muthukumar</p>
  <p class="item__occupation">Cumbum, <b> Tamil Nadu.</b></a>
    </div>

  </div>

 
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
<img class="carousel-control__img" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjQ5NCAzMS40OTQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxLjQ5NCAzMS40OTQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPHBhdGggZD0iTTEwLjI3Myw1LjAwOWMwLjQ0NC0wLjQ0NCwxLjE0My0wLjQ0NCwxLjU4NywwYzAuNDI5LDAuNDI5LDAuNDI5LDEuMTQzLDAsMS41NzFsLTguMDQ3LDguMDQ3aDI2LjU1NCAgYzAuNjE5LDAsMS4xMjcsMC40OTIsMS4xMjcsMS4xMTFjMCwwLjYxOS0wLjUwOCwxLjEyNy0xLjEyNywxLjEyN0gzLjgxM2w4LjA0Nyw4LjAzMmMwLjQyOSwwLjQ0NCwwLjQyOSwxLjE1OSwwLDEuNTg3ICBjLTAuNDQ0LDAuNDQ0LTEuMTQzLDAuNDQ0LTEuNTg3LDBsLTkuOTUyLTkuOTUyYy0wLjQyOS0wLjQyOS0wLjQyOS0xLjE0MywwLTEuNTcxTDEwLjI3Myw1LjAwOXoiIGZpbGw9IiM2Zjc5ZmYiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />

  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <img class="carousel-control__img" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjQ5IDMxLjQ5IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMS40OSAzMS40OTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8cGF0aCBkPSJNMjEuMjA1LDUuMDA3Yy0wLjQyOS0wLjQ0NC0xLjE0My0wLjQ0NC0xLjU4NywwYy0wLjQyOSwwLjQyOS0wLjQyOSwxLjE0MywwLDEuNTcxbDguMDQ3LDguMDQ3SDEuMTExICBDMC40OTIsMTQuNjI2LDAsMTUuMTE4LDAsMTUuNzM3YzAsMC42MTksMC40OTIsMS4xMjcsMS4xMTEsMS4xMjdoMjYuNTU0bC04LjA0Nyw4LjAzMmMtMC40MjksMC40NDQtMC40MjksMS4xNTksMCwxLjU4NyAgYzAuNDQ0LDAuNDQ0LDEuMTU5LDAuNDQ0LDEuNTg3LDBsOS45NTItOS45NTJjMC40NDQtMC40MjksMC40NDQtMS4xNDMsMC0xLjU3MUwyMS4yMDUsNS4wMDd6IiBmaWxsPSIjNmY3OWZmIi8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
 
  </a>
</div>
</div>
</div>
</div>
</div>


<div  id="design" class="sect sect--white">
<div class="container">
  <div class="row">
   <h1 class="row__title">
    Our Designs
  </h1><br>
  <h2 class="row__sub">Choose from wonderful templates</h2>
  </div>
  
  <div class="row row--margin">
        <div class="col-md-6 article-pre__col">
      <a href="templates/index-beach.html" class="article-pre ">
        <div class="article-pre__img article-pre__img--second"></div>
        <h2 class="article-pre__info">
          <span class="article-pre__cat">Beach • </span><span class="article-pre__aut"> Wedding Template</span>
        </h2>
      </a>
      <a href="form.php?thm=beach" class="article-pre ">
      <h1 class="article-pre__title">Start Customizing Now<span class="article-pre__arrow--purple">→</span></h1>
      </a>
    </div> 
    <div class="col-md-6 article-pre__col">
      <a href="templates/index-tree.html" class="article-pre ">
        <div class="article-pre__img article-pre__img--first"></div>
        <h2 class="article-pre__info">
          <span class="article-pre__cat">Pinetrees flat • </span><span class="article-pre__aut"> Wedding Template</span>
        </h2>
      
      </a>

      <a href="form.php?thm=pinetrees-flat" class="article-pre ">
      <h1 class="article-pre__title">Start Customizing Now<span class="article-pre__arrow--purple">→</span></h1>
      </a>
    </div>
    
 </div>
  <div class="row">
     <div class="col-md-6 article-pre__col">
      <a href="templates/index-pinetrees.html" class="article-pre ">
        <div class="article-pre__img article-pre__img--fourth"></div>
        <h2 class="article-pre__info">
          <span class="article-pre__cat">Pinetrees Cloudy • </span><span class="article-pre__aut"> Wedding Template</span>
        </h2>
       
      </a>
      <a href="form.php?thm=pinetrees-cloudy" class="article-pre ">
      <h1 class="article-pre__title">Start Customizing Now<span class="article-pre__arrow--purple">→</span></h1>
      </a>
    </div>
    
        <div class="col-md-6 article-pre__col">
      <a href="templates/index-mountain.html" class="article-pre ">
        <div class="article-pre__img article-pre__img--third"></div>
        <h2 class="article-pre__info">
          <span class="article-pre__cat">Mountain • </span><span class="article-pre__aut"> Wedding Template</span>
        </h2>
       
      </a>
      </a>
      <a href="form.php?thm=mountain" class="article-pre ">
      <h1 class="article-pre__title">Start Customizing Now<span class="article-pre__arrow--purple">→</span></h1>
      </a>
    </div>     
  </div>
</div>
</div>

<div  id="contact" class="sect sect--padding-bottom">
  <div class="container">
    <div class="row">
     <h1 class="row__title">
    Contact Us</h1><br>
    </div>
    <div class="row row--margin">
      <div class="col-md-1"></div>
      <div class="col-md-4">
        <div class="contacts">
          <a href="#" class="contacts__link"><h1 class="contacts_title-ag"><b style="font-family: 'Baloo';font-size:30px;">invyt.</b><span class="contacts--light"> </span></h1></a>
          <p class="contacts__address">
            Kakkanad, Cochin<br>
            Kerala, India.<br>
          </p>
          <p class="contacts__info">
            <i class="fa fa-phone" aria-hidden="true"><b> +91-9495971412</b></i>
          </p>
          <p class="contacts__info">
            <i class="fa fa-phone" aria-hidden="true"><b> +91-8943551467</b></i>
          </p>
          <p class="contacts__info">
            <i class="fa fa-envelope"><b>info@invyt.in</b></i>
          </p>
          <br>
        </div>
      </div>
      <div class="col-md-6">
        <form id="contact" method="post" action="contact_upload.php" class="form">
           <div class="form-group">
             <div class="form__field--half">
            <input type="text" name="c_name"  placeholder="Name*" class="form__field form__text"></input>
             </div>
          <div class="form__field--half">
          <input type="text" name="c_place" placeholder="Place" class="form__field form__text"></input>
          </div>
          </div>
      
        <div class="form-group">
          <div class="form__field--half">
            <input type="text" name="c_email" placeholder="Email address*" class="form__field form__text"></input>
          </div>
         <div class="form__field--half">
          <input type="text" name="c_phone" placeholder="Phone number" class="form__field form__text"></input>
    </div>
          </div>
  
          <div class="form-group">
            <textarea type="text" name="c_message" placeholder="Your messsage*" class="form__field form__textarea"></textarea>
            <button class="btn btn--up btn--width" type="submit">Submit</button>
          </div>
        </form>
      </div>   
<div class="col-md-1"></div>
    </div>
  </div>
</div>

<div id="calltoaction">
  <div id="invytctaresponsive_hype_container" style="margin:auto;position:relative;width:100%;height:500px;overflow:hidden;">
    <script type="text/javascript" charset="utf-8" src="invyt_cta_responsive.hyperesources/invytctaresponsive_hype_generated_script.js?22140"></script>
  </div>  
</div>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-xs-6">
       <a class="header__logo"  href="index.php"><img class="header__img" src="https://image.ibb.co/fd2dsK/logo2_1.png"></a></div>
      <!--<div class="col-md-10 col-xs-6">
        <div class="footer__social">
          <a href="#" class="footer__social-l">
            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYxMiA2MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDYxMiA2MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNjEyLDExNi4yNThjLTIyLjUyNSw5Ljk4MS00Ni42OTQsMTYuNzUtNzIuMDg4LDE5Ljc3MmMyNS45MjktMTUuNTI3LDQ1Ljc3Ny00MC4xNTUsNTUuMTg0LTY5LjQxMSAgICBjLTI0LjMyMiwxNC4zNzktNTEuMTY5LDI0LjgyLTc5Ljc3NSwzMC40OGMtMjIuOTA3LTI0LjQzNy01NS40OS0zOS42NTgtOTEuNjMtMzkuNjU4Yy02OS4zMzQsMC0xMjUuNTUxLDU2LjIxNy0xMjUuNTUxLDEyNS41MTMgICAgYzAsOS44MjgsMS4xMDksMTkuNDI3LDMuMjUxLDI4LjYwNkMxOTcuMDY1LDIwNi4zMiwxMDQuNTU2LDE1Ni4zMzcsNDIuNjQxLDgwLjM4NmMtMTAuODIzLDE4LjUxLTE2Ljk4LDQwLjA3OC0xNi45OCw2My4xMDEgICAgYzAsNDMuNTU5LDIyLjE4MSw4MS45OTMsNTUuODM1LDEwNC40NzljLTIwLjU3NS0wLjY4OC0zOS45MjYtNi4zNDgtNTYuODY3LTE1Ljc1NnYxLjU2OGMwLDYwLjgwNiw0My4yOTEsMTExLjU1NCwxMDAuNjkzLDEyMy4xMDQgICAgYy0xMC41MTcsMi44My0yMS42MDcsNC4zOTgtMzMuMDgsNC4zOThjLTguMTA3LDAtMTUuOTQ3LTAuODAzLTIzLjYzNC0yLjMzM2MxNS45ODUsNDkuOTA3LDYyLjMzNiw4Ni4xOTksMTE3LjI1Myw4Ny4xOTQgICAgYy00Mi45NDcsMzMuNjU0LTk3LjA5OSw1My42NTUtMTU1LjkxNiw1My42NTVjLTEwLjEzNCwwLTIwLjExNi0wLjYxMi0yOS45NDQtMS43MjFjNTUuNTY3LDM1LjY4MSwxMjEuNTM2LDU2LjQ4NSwxOTIuNDM4LDU2LjQ4NSAgICBjMjMwLjk0OCwwLDM1Ny4xODgtMTkxLjI5MSwzNTcuMTg4LTM1Ny4xODhsLTAuNDIxLTE2LjI1M0M1NzMuODcyLDE2My41MjYsNTk1LjIxMSwxNDEuNDIyLDYxMiwxMTYuMjU4eiIgZmlsbD0iIzcyOTNiMyIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
          </a>
          <a href="#" class="footer__social-l">
            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDk2LjEyNCA5Ni4xMjMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDk2LjEyNCA5Ni4xMjM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNNzIuMDg5LDAuMDJMNTkuNjI0LDBDNDUuNjIsMCwzNi41Nyw5LjI4NSwzNi41NywyMy42NTZ2MTAuOTA3SDI0LjAzN2MtMS4wODMsMC0xLjk2LDAuODc4LTEuOTYsMS45NjF2MTUuODAzICAgYzAsMS4wODMsMC44NzgsMS45NiwxLjk2LDEuOTZoMTIuNTMzdjM5Ljg3NmMwLDEuMDgzLDAuODc3LDEuOTYsMS45NiwxLjk2aDE2LjM1MmMxLjA4MywwLDEuOTYtMC44NzgsMS45Ni0xLjk2VjU0LjI4N2gxNC42NTQgICBjMS4wODMsMCwxLjk2LTAuODc3LDEuOTYtMS45NmwwLjAwNi0xNS44MDNjMC0wLjUyLTAuMjA3LTEuMDE4LTAuNTc0LTEuMzg2Yy0wLjM2Ny0wLjM2OC0wLjg2Ny0wLjU3NS0xLjM4Ny0wLjU3NUg1Ni44NDJ2LTkuMjQ2ICAgYzAtNC40NDQsMS4wNTktNi43LDYuODQ4LTYuN2w4LjM5Ny0wLjAwM2MxLjA4MiwwLDEuOTU5LTAuODc4LDEuOTU5LTEuOTZWMS45OEM3NC4wNDYsMC44OTksNzMuMTcsMC4wMjIsNzIuMDg5LDAuMDJ6IiBmaWxsPSIjNzI5M2IzIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
          </a>
          
           <a href="#" class="footer__social-l">
          <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDQzOC41MzMgNDM4LjUzMyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDM4LjUzMyA0MzguNTMzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTQwOS4xMzMsMTA5LjIwM2MtMTkuNjA4LTMzLjU5Mi00Ni4yMDUtNjAuMTg5LTc5Ljc5OC03OS43OTZDMjk1LjczNiw5LjgwMSwyNTkuMDU4LDAsMjE5LjI3MywwICAgYy0zOS43ODEsMC03Ni40Nyw5LjgwMS0xMTAuMDYzLDI5LjQwN2MtMzMuNTk1LDE5LjYwNC02MC4xOTIsNDYuMjAxLTc5LjgsNzkuNzk2QzkuODAxLDE0Mi44LDAsMTc5LjQ4OSwwLDIxOS4yNjcgICBjMCwzOS43OCw5LjgwNCw3Ni40NjMsMjkuNDA3LDExMC4wNjJjMTkuNjA3LDMzLjU5Miw0Ni4yMDQsNjAuMTg5LDc5Ljc5OSw3OS43OThjMzMuNTk3LDE5LjYwNSw3MC4yODMsMjkuNDA3LDExMC4wNjMsMjkuNDA3ICAgczc2LjQ3LTkuODAyLDExMC4wNjUtMjkuNDA3YzMzLjU5My0xOS42MDIsNjAuMTg5LTQ2LjIwNiw3OS43OTUtNzkuNzk4YzE5LjYwMy0zMy41OTYsMjkuNDAzLTcwLjI4NCwyOS40MDMtMTEwLjA2MiAgIEM0MzguNTMzLDE3OS40ODUsNDI4LjczMiwxNDIuNzk1LDQwOS4xMzMsMTA5LjIwM3ogTTIxOS4yNywzMS45NzdjNDcuMjAxLDAsODguNDEsMTUuNjA3LDEyMy42MjEsNDYuODJsLTMuNTY5LDQuOTkzICAgYy0xLjQyNywyLjAwMi00Ljk5Niw1Ljg1Mi0xMC43MDQsMTEuNTY1Yy01LjcwOSw1LjcwOC0xMS45NDMsMTEuMTM2LTE4LjY5OSwxNi4yNzRjLTYuNzYyLDUuMTQtMTUuOTQsMTAuOTkyLTI3LjU1NSwxNy41NTkgICBjLTExLjYxMSw2LjU2Ny0yMy45ODIsMTIuMzI4LTM3LjExNywxNy4yNzZjLTIxLjg4Ny00MC4zNTUtNDUuMjk2LTc2LjcwOS03MC4yMzEtMTA5LjA2NCAgIEMxOTAuMDU1LDMzLjc4NCwyMDQuODA1LDMxLjk3NywyMTkuMjcsMzEuOTc3eiBNNzIuNTI0LDEwMy4wNmMxOC4yNzEtMjMuMDI2LDQwLjUzNy00MC43Myw2Ni44MDYtNTMuMSAgIGMyMy42MDEsMzEuNDA1LDQ2LjgyLDY3LjM4MSw2OS42NjIsMTA3LjkyMWMtNTcuODYyLDE1LjIyNy0xMTUuNTMyLDIyLjg0MS0xNzMuMDE0LDIyLjgzOCAgIEM0Mi4wNzIsMTUxLjk4LDU0LjI1MywxMjYuMDkxLDcyLjUyNCwxMDMuMDZ6IE00NC41NCwyODYuNzk0Yy04LjM3Ni0yMS40MTItMTIuNTYzLTQzLjkyMy0xMi41NjMtNjcuNTI3ICAgYzAtMi42NjYsMC4wOTgtNC42NjUsMC4yODYtNS45OTZjNjguOTA1LDAsMTMyLjk1NS04Ljg0OCwxOTIuMTQ5LTI2LjU1M2M2LjA5MiwxMS44LDExLjEzNiwyMi4zNjQsMTUuMTMzLDMxLjY5MyAgIGMtMC43NzEsMC4zOC0xLjk5OSwwLjgwNi0zLjcxMywxLjI4M2MtMS43MTksMC40NzYtMi45NTMsMC44MDYtMy43MjEsMC45OTlsLTEwLjU2MSwzLjcxMSAgIGMtNy4yMzYsMi42NjYtMTYuNzA4LDcuMjM1LTI4LjQwOSwxMy43MDNjLTExLjcwNCw2LjQ3OC0yNC4xMjMsMTQuMTgyLTM3LjI1NywyMy4xM2MtMTMuMTM0LDguOTQ5LTI2LjY5NiwyMC43OTctNDAuNjg0LDM1LjU1MyAgIGMtMTMuOTksMTQuNzUtMjUuNzQzLDMwLjU5MS0zNS4yNiw0Ny41M0M2NC43MTMsMzI3LjM4MSw1Mi45MTQsMzA4LjIsNDQuNTQsMjg2Ljc5NHogTTIxOS4yNyw0MDYuNTYgICBjLTQ0LjU0LDAtODQuMzItMTQuMjc3LTExOS4zNDMtNDIuODI1bDQuMjgzLDMuMTQyYzYuNjYxLTE0LjY2LDE2LjQ2Mi0yOC43NDYsMjkuNDA4LTQyLjI1NyAgIGMxMi45NDQtMTMuNTExLDI1LjQxLTI0LjQxMywzNy40MDEtMzIuNjk1YzExLjk5MS04LjI3NCwyNS4wMjgtMTYuMDc3LDM5LjExNS0yMy40MTRjMTQuMDg0LTcuMzIzLDIzLjY5MS0xMS45OTEsMjguODM1LTEzLjk4MyAgIGM1LjE0LTEuOTk4LDkuMjMzLTMuNTcyLDEyLjI3OC00LjcxNmwwLjU2OC0wLjI4N2gwLjU3NWMxOC42NDcsNDguOTE2LDMxLjk3Nyw5Ni4zMTMsMzkuOTY4LDE0Mi4xODQgICBDMjY4Ljc1Niw0MDEuNjExLDI0NC4zOTcsNDA2LjU1NywyMTkuMjcsNDA2LjU2eiBNMzc2Ljg3NiwzMjAuNDc5Yy0xNC4wODYsMjEuNzk2LTMxLjY5NiwzOS44MzQtNTIuODE3LDU0LjEwNCAgIGMtNy44MS00My43NzYtMTkuOTg1LTg4LjQxNS0zNi41NDktMTMzLjkwMmMzNy44NzctNS45MDcsNzYuOC0zLjE0MiwxMTYuNzcxLDguMjc0ICAgQzQwMC4wOTIsMjc0Ljg0MSwzOTAuOTU1LDI5OC42ODcsMzc2Ljg3NiwzMjAuNDc5eiBNNDAzLjcwNiwyMTYuNjk4Yy0xLjkwMy0wLjM3OC00LjI4NS0wLjgxLTcuMTM5LTEuMjgzICAgYy0yLjg1NC0wLjQ3My02LjMzMS0xLjA0Ny0xMC40MjQtMS43MTNjLTQuMDg3LTAuNjY2LTguNjYyLTEuMjgzLTEzLjcwMi0xLjg1NWMtNS4wNDUtMC41NzEtMTAuNDIxLTEuMDkzLTE2LjEzNi0xLjU2OSAgIGMtNS43MDgtMC40NzgtMTEuOC0wLjg1NS0xOC4yNjgtMS4xNDNjLTYuNDc5LTAuMjg0LTEzLjA0Mi0wLjQyOC0xOS43MDUtMC40MjhjLTYuNjU2LDAtMTMuNjU3LDAuMTkzLTIwLjk4MSwwLjU3MSAgIGMtNy4zMjYsMC4zNzUtMTQuNDE0LDEuMDQ5LTIxLjI2NSwxLjk5OWMtMC41NzUtMC45NTMtMS4yODctMi41MjQtMi4xNDMtNC43MTRjLTAuODU1LTIuMTg3LTEuNDc5LTMuODU1LTEuODQ4LTQuOTk3ICAgYy0zLjYyMS03Ljk5NC03LjgxLTE3LjAzNi0xMi41NzMtMjcuMTIxYzEzLjEzNC01LjMzMywyNS42NTItMTEuNDY5LDM3LjU1NS0xOC40MThjMTEuODkyLTYuOTQ5LDIxLjQwMi0xMy4xMzEsMjguNTQ0LTE4LjU1NSAgIGM3LjEzOS01LjQzLDEzLjg5NS0xMS4xODgsMjAuMjctMTcuMjc3YzYuMzc5LTYuMDksMTAuNTEzLTEwLjMyMywxMi40MjMtMTIuNzAzYzEuOTA2LTIuMzg0LDMuNzEzLTQuNzE0LDUuNDI0LTYuOTk1bDAuMjg3LTAuMjg4ICAgYzI3Ljc4OCwzMy44OCw0MS45NzQsNzIuODk3LDQyLjUzOCwxMTcuMDU5TDQwMy43MDYsMjE2LjY5OHoiIGZpbGw9IiM3MjkzYjMiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
          </a>
          
          <a href="" class="footer__social-l">
            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDQzMC4xMTcgNDMwLjExNyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDMwLjExNyA0MzAuMTE3OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggaWQ9IkxpbmtlZEluIiBkPSJNNDMwLjExNywyNjEuNTQzVjQyMC41NmgtOTIuMTg4VjI3Mi4xOTNjMC0zNy4yNzEtMTMuMzM0LTYyLjcwNy00Ni43MDMtNjIuNzA3ICAgYy0yNS40NzMsMC00MC42MzIsMTcuMTQyLTQ3LjMwMSwzMy43MjRjLTIuNDMyLDUuOTI4LTMuMDU4LDE0LjE3OS0zLjA1OCwyMi40NzdWNDIwLjU2aC05Mi4yMTljMCwwLDEuMjQyLTI1MS4yODUsMC0yNzcuMzJoOTIuMjEgICB2MzkuMzA5Yy0wLjE4NywwLjI5NC0wLjQzLDAuNjExLTAuNjA2LDAuODk2aDAuNjA2di0wLjg5NmMxMi4yNTEtMTguODY5LDM0LjEzLTQ1LjgyNCw4My4xMDItNDUuODI0ICAgQzM4NC42MzMsMTM2LjcyNCw0MzAuMTE3LDE3Ni4zNjEsNDMwLjExNywyNjEuNTQzeiBNNTIuMTgzLDkuNTU4QzIwLjYzNSw5LjU1OCwwLDMwLjI1MSwwLDU3LjQ2MyAgIGMwLDI2LjYxOSwyMC4wMzgsNDcuOTQsNTAuOTU5LDQ3Ljk0aDAuNjE2YzMyLjE1OSwwLDUyLjE1OS0yMS4zMTcsNTIuMTU5LTQ3Ljk0QzEwMy4xMjgsMzAuMjUxLDgzLjczNCw5LjU1OCw1Mi4xODMsOS41NTh6ICAgIE01LjQ3Nyw0MjAuNTZoOTIuMTg0di0yNzcuMzJINS40NzdWNDIwLjU2eiIgZmlsbD0iIzcyOTNiMyIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
          </a>
        </div>
      </div>-->
    </div>
  </div>
</footer>

</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script>
    var left = $('.entry-content').width();
    var left=.5*left;
  $('.entry-content').scrollLeft(left);
  </script>

  <!--Smooth scrolling-->
  <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
  

    <script  src="js/index.js"></script>

</body>

</html>
