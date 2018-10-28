<!DOCTYPE html>
<html>
<?php
include '../config.php';

$con = mysqli_connect($host, $user, $password,$dbname);
session_start();
?>
<!--<div class="col-md-6 article-pre__col">
        <a  class="article-pre ">
        <img src="uploads/<?php echo $main_img; ?>" style="height: 100%; width: 100%;border-radius: 6px; box-shadow: 0 4px 10px 2px rgba(0,0,0,0.3);">
        </a> 
        <h2 class="article-pre__info">
          <center><span class="article-pre__cat"></span><span class="article-pre__aut"><?php echo $g_name." weds ".$b_name; ?></span></center>
        </h2>
        <center>        
        <br>-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>invyt-inviting has never been this fun!</title>
        <link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="dist/imageuploadify.min.css" rel="stylesheet">
         <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
          <link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
          <meta name="theme-color" content="#3a9fff">
          <link rel='stylesheet prefetch' href='css/bootstrap.min.css'>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="css/style.css">
        
        <style>
            
        .percent-counter {
          width: 450px;
          height: 50px;
          margin: 100px auto;
          font-size: 50px;
          text-align: center;
          color: #8a3aff;

        }

        .progress-bar {
          width: 506px;
          height: 26px;
          background-color: #bbb;
          border-radius: 15px;
          padding: 3px;
          margin: 50px auto;

        }

        .progress-loader {
          width: 20px;
          height: 20px;
          border-radius: 10px;
          background-color: #8a3aff;
        }
        
        </style>
        
    </head>

    <body>
        

        <script>   
              function show()
    {
        var myDiv = document.getElementById("myDiv");
        myDiv.style.display = "block";
        //setTimeout(hide, 5000);//
    }

            var myDiv = document.getElementById("myDiv");
            myDiv.style.display = "none";
        </script>
        
        <script type="text/javascript">
  
/*  (function(){


      show = function(){
              var myDiv = document.getElementById("myDiv"),
        myDiv.style.display = "block";
        setTimeout(hide, 5000); // 5 seconds
      },

      hide = function(){
    
      };

    show();
  })();*/

</script>
        
        
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
        <li class="header__el header__el--blue"><a href="p2_prev.php" class="btn btn--white">← Back</a></li>
      </ul>
    </nav>
  </div>
    </div>
</header>

        <div class="container">
        <div class="row row--margin">
        <div class="col-md-12">
            <h1 class="row__title">Add photos to your Album</h1><br><br><br>
            <form method="POST" onsubmit="show();" action="p2_galupld.php">
                <input type="file" name="files[]" id="inputAlbum" accept="image/*" multiple>
                <center>
            <div class="site__box-link">
                <button type="submit" class="btn btn--purple btn--width" >Next</button>
                <div id="myDiv" style="display: none; position:relative; z-index:10;"><img id="myImage" src="img/tenor.gif"></div>
            </div>
            <br><br>
            </center>
            </form>
            </div>
            </div>
        </div>
        <?php

$w_id=$_SESSION['wid'];
              $sql5="SELECT img_name FROM `invyt_gal` WHERE w_id= ".$w_id;
      
              $det = mysqli_query($con,$sql5);
              while($row = mysqli_fetch_array($det)) {
                  $i_n=$row["img_name"];
  
            echo'
            <div class="col-md-3 article-pre__col" style="margin-bottom: 5px;">
            <a  class="article-pre ">
            <img src="uploads/gal/'.$i_n.'" style="object-fit: cover; object-position: 0px 0px; height: 200px; width: 100%; border-radius: 6px; box-shadow: 0 4px 10px 2px rgba(0,0,0,0.3);">
            </a> <br><br>
            <center>
            <a href="p2_galdel.php?pn='.$i_n.'" onclick="return confirm(';echo "'Are you sure?')"; echo '"  class="btn btn--white" data-toggle="tooltip" data-placement="bottom">Remove</a></center>        
            <br>
            </div>
            ';
              }
            ?>
    

        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="dist/imageuploadify.min.js"></script>
         <script  src="js/index.js"></script>
        
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('input[type="file"]').imageuploadify();
            })
        </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </body>
</html>