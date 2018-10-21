<!DOCTYPE html>
<html lang="en" >
      <?php
       session_start(); 
       // if(!$_SESSION['login_user']){ 
           // header("Location:form.php"); 
          //  exit; }

$r=rand(100,999);
if(isset($_SESSION['login_user'])){

 }
 else{
  $_SESSION['login_user']=$r;
 }

            ?>
<head>
    <meta charset="UTF-8">
    <title>invyt-inviting has never been this fun!</title>
  <meta name="description" content="Invite your friends and family to your celebration by creating an invyt - a classy, elegant and efficient site to deliver an unforgettable digital experience">
  <meta property="og:title" content="invyt - inviting has never been this fun" />
  <meta property="og:url" content="http://www.invyt.in/form.php" />
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
  
  <link rel='stylesheet' href='https://unpkg.com/flatpickr/dist/flatpickr.min.css'>

  
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
  <a class="header__logo"  href="../index.php"><img class="header__img" src="img/logo.png"></a> 
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
  
  <div class="header__menu">
    <nav id="navbar" class="header__nav collapse">
      <ul class="header__elenco">
        <li class="header__el header__el--blue"><a href="../index.php" class="btn btn--white">← Back</a></li>
      </ul>
    </nav>
  </div>
    </div>
</header>

<div class="container">
    <h1 class="row__title">Create Your Own Invyt!</h1>
    <div class="row row--margin">
    <div class="col-md-1"></div>
      <div class="col-md-10">
        <form action="p2_upld.php" method="post" name="f1" id="f1" enctype="multipart/form-data" class="form">
        <br>
      Select Theme :<br><br>
        
        <fieldset id="group1">
               <div class="col-md-6 article-pre__col">
                <div class="tile_wrapper">
                  <input type="radio" name="theme" id="a" value="pinetrees-flat" <?php if(isset($_SESSION['theme'])){if(strcmp($_SESSION['theme'],"pinetrees-flat")==0){echo("checked");}else{echo "";}} else{echo"";} ?>>
                  <label class="tile" for="a">
                    <div class="preview" style="background-image:url(https://image.ibb.co/nH1KAU/demo_pinetrees_flat.png)"></div>
                  </label>
                </div>
              </div>

            <div class="col-md-6 article-pre__col">
                <div class="tile_wrapper">
                  <input type="radio" name="theme" id="b" value="pinetrees-cloudy" <?php if(isset($_SESSION['theme'])){if(strcmp($_SESSION['theme'],"pinetrees-cloudy")==0){echo("checked");}else{echo "";}} else{echo"";} ?>>
                  <label class="tile" for="b">
                    <div class="preview" style="background-image:url(https://image.ibb.co/eLs9AU/demo_pinetrees_cloudy.png)"></div>
                  </label>
                </div>
            </div>

            <div class="col-md-6 article-pre__col">
                <div class="tile_wrapper">
                  <input type="radio" name="theme" id="c" value="mountain" <?php if(isset($_SESSION['theme'])){if(strcmp($_SESSION['theme'],"mountain")==0){echo("checked");}else{echo "";}} else{echo"";} ?>>
                  <label class="tile" for="c">
                    <div class="preview" style="background-image:url(https://image.ibb.co/dv8MPp/demo_mountain.png)"></div>
                  </label>
                </div>
            </div>

             <div class="col-md-6 article-pre__col">
                <div class="tile_wrapper">
                  <input type="radio" name="theme" id="d" value="beach" <?php if(isset($_SESSION['theme'])){if(strcmp($_SESSION['theme'],"beach")==0){echo("checked");}else{echo "";}} else{echo"";} ?>>
                  <label class="tile" for="d">
                    <div class="preview" style="background-image:url(https://image.ibb.co/kjwfH9/demo_beach.png)"></div>
                  </label>
                </div> 
             </div>

        </fieldset>










            
           <div class="form-group">
                <div class="form__field--half">
                    Name of Bride<br><br>
                    <input type="text" name="bride_name" class="form__field form__text" required></input>
                </div>
                <div class="form__field--half">
                    Name of Groom<br><br>
                    <input type="text" name="groom_name" class="form__field form__text" required></input>
                </div>
            </div>
            <input type="hidden" id="custId" name="rand_no" value="<?php echo $r; ?>">
            <div class="form-group">
                <div class="form__field--half">
                    Bride's Family Details <br><br>
                    <input type="text" name="b_det" class="form__field form__text" required></input>
                </div>
                <div class="form__field--half">
                    Groom's Family Details<br><br>
                    <input type="text" name="g_det" class="form__field form__text" required></input>
                </div>
            </div> 
         
            <div class="form-group">
                <div class="form__field--half">
                    Date of Wedding<br><br>
                    <input type="date" name="w_date" class="form__field form__text" required></input>
                </div>
                <div class="form__field--half">
                    Place<br><br>
                    <input type="text" name="w_place" class="form__field form__text" required></input>
                </div>
            </div>

            <div class="form-group">
                <div class="form__field--half">
                    Starting Time<br><br>
                    <input type="time" name="muhoo_1" class="form-control clock" style="background: #ffffff; border-radius: 6px; box-shadow: 0 4px 10px 2px rgba(0,0,0,0.1); height: 50px;" required></input>
                </div>
                <div class="form__field--half">
                    Ending Time<br><br>
                    <input type="time" name="muhoo_2" class="form-control clock" style="background: #ffffff; border-radius: 6px; box-shadow: 0 4px 10px 2px rgba(0,0,0,0.1); height: 50px;" required></input>
                </div>
            </div>

            <div class="form-group">
                <div class="form__field--half">
                    Venue<br><br>
                    <input type="text" name="w_venue" class="form__field form__text" required></input>
                </div>
                <div class="form__field--half">
                    Email<br><br>
                    <input type="email" name="w_email" class="form__field form__text" required></input>
                </div>
            </div>

         
         <div class="form-group">
                <div class="form__field--half" style="margin:0 auto; float:none; padding-bottom:20px;padding-top:20px;">
                Contact Number (displayed to guests)<br><br>
                    <input type="text" pattern="[789][0-9]{9}" name="w_phno_1" class="form__field form__text" ></input>
                </div>
            </div>
          <br>
          <center>
          <strong> <h1>Reception Details</h1></strong>
          </center>
          <br><br>
            <div class="form-group">
                <div class="form__field--half">
                    Place <br><br>
                    <input type="text" name="r_place" class="form__field form__text"></input>
                </div>
                <div class="form__field--half">
                    Date <br><br>
                    <input type="date" name="r_date" class="form__field form__text" ></input>
                </div>
            </div>


             <div class="form-group">
                <div class="form__field--half">
                    Starting Time<br><br>
                    <input type="time" name="r_t1" class="form-control clock" style="background: #ffffff; border-radius: 6px; box-shadow: 0 4px 10px 2px rgba(0,0,0,0.1); height: 50px;" required></input>
                </div>
                <div class="form__field--half">
                    Ending Time<br><br>
                    <input type="time" name="r_t2" class="form-control clock" style="background: #ffffff; border-radius: 6px; box-shadow: 0 4px 10px 2px rgba(0,0,0,0.1); height: 50px;" required></input>
                </div>
            </div>

            
                    <p>Upload image</p>
                    <label for="file-input">File upload</label>
                    <input type="file" name="file" id="file-input"  required>
            <br><br>  
            <center>
            <div class="site__box-link">
                <button type="submit"  name="submit"  id="submit" class="btn btn--purple btn--width">Submit</button>
            </div>
            <br><br>
            </center>

        </form>
      </div>   
    <div class="col-md-1"></div>
  </div>
  </div><br><br><br>
</div>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-xs-6">
      <a class="header__logo"  href="../index.php"><img class="header__img" src="https://image.ibb.co/fd2dsK/logo2_1.png"></a>
      </div>
      <!--<div class="col-md-10 col-xs-6">
        <div class="footer__social">
          <a href="#" class="footer__social-l">
            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYxMiA2MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDYxMiA2MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNjEyLDExNi4yNThjLTIyLjUyNSw5Ljk4MS00Ni42OTQsMTYuNzUtNzIuMDg4LDE5Ljc3MmMyNS45MjktMTUuNTI3LDQ1Ljc3Ny00MC4xNTUsNTUuMTg0LTY5LjQxMSAgICBjLTI0LjMyMiwxNC4zNzktNTEuMTY5LDI0LjgyLTc5Ljc3NSwzMC40OGMtMjIuOTA3LTI0LjQzNy01NS40OS0zOS42NTgtOTEuNjMtMzkuNjU4Yy02OS4zMzQsMC0xMjUuNTUxLDU2LjIxNy0xMjUuNTUxLDEyNS41MTMgICAgYzAsOS44MjgsMS4xMDksMTkuNDI3LDMuMjUxLDI4LjYwNkMxOTcuMDY1LDIwNi4zMiwxMDQuNTU2LDE1Ni4zMzcsNDIuNjQxLDgwLjM4NmMtMTAuODIzLDE4LjUxLTE2Ljk4LDQwLjA3OC0xNi45OCw2My4xMDEgICAgYzAsNDMuNTU5LDIyLjE4MSw4MS45OTMsNTUuODM1LDEwNC40NzljLTIwLjU3NS0wLjY4OC0zOS45MjYtNi4zNDgtNTYuODY3LTE1Ljc1NnYxLjU2OGMwLDYwLjgwNiw0My4yOTEsMTExLjU1NCwxMDAuNjkzLDEyMy4xMDQgICAgYy0xMC41MTcsMi44My0yMS42MDcsNC4zOTgtMzMuMDgsNC4zOThjLTguMTA3LDAtMTUuOTQ3LTAuODAzLTIzLjYzNC0yLjMzM2MxNS45ODUsNDkuOTA3LDYyLjMzNiw4Ni4xOTksMTE3LjI1Myw4Ny4xOTQgICAgYy00Mi45NDcsMzMuNjU0LTk3LjA5OSw1My42NTUtMTU1LjkxNiw1My42NTVjLTEwLjEzNCwwLTIwLjExNi0wLjYxMi0yOS45NDQtMS43MjFjNTUuNTY3LDM1LjY4MSwxMjEuNTM2LDU2LjQ4NSwxOTIuNDM4LDU2LjQ4NSAgICBjMjMwLjk0OCwwLDM1Ny4xODgtMTkxLjI5MSwzNTcuMTg4LTM1Ny4xODhsLTAuNDIxLTE2LjI1M0M1NzMuODcyLDE2My41MjYsNTk1LjIxMSwxNDEuNDIyLDYxMiwxMTYuMjU4eiIgZmlsbD0iIzcyOTNiMyIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
          </a>
          <a href="#" class="footer__social-l">
            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDk2LjEyNCA5Ni4xMjMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDk2LjEyNCA5Ni4xMjM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNNzIuMDg5LDAuMDJMNTkuNjI0LDBDNDUuNjIsMCwzNi41Nyw5LjI4NSwzNi41NywyMy42NTZ2MTAuOTA3SDI0LjAzN2MtMS4wODMsMC0xLjk2LDAuODc4LTEuOTYsMS45NjF2MTUuODAzICAgYzAsMS4wODMsMC44NzgsMS45NiwxLjk2LDEuOTZoMTIuNTMzdjM5Ljg3NmMwLDEuMDgzLDAuODc3LDEuOTYsMS45NiwxLjk2aDE2LjM1MmMxLjA4MywwLDEuOTYtMC44NzgsMS45Ni0xLjk2VjU0LjI4N2gxNC42NTQgICBjMS4wODMsMCwxLjk2LTAuODc3LDEuOTYtMS45NmwwLjAwNi0xNS44MDNjMC0wLjUyLTAuMjA3LTEuMDE4LTAuNTc0LTEuMzg2Yy0wLjM2Ny0wLjM2OC0wLjg2Ny0wLjU3NS0xLjM4Ny0wLjU3NUg1Ni44NDJ2LTkuMjQ2ICAgYzAtNC40NDQsMS4wNTktNi43LDYuODQ4LTYuN2w4LjM5Ny0wLjAwM2MxLjA4MiwwLDEuOTU5LTAuODc4LDEuOTU5LTEuOTZWMS45OEM3NC4wNDYsMC44OTksNzMuMTcsMC4wMjIsNzIuMDg5LDAuMDJ6IiBmaWxsPSIjNzI5M2IzIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
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
<script src='https://unpkg.com/flatpickr'></script>
  
<script  src="js/index.js"></script>




</body>

</html>
