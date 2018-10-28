<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<?php
include 'config.php';

$con = mysqli_connect($host, $user, $password,$dbname);
session_start();
$usr=$_SESSION['login_user'];
//$usr=$_GET['user'];
//session_start(); 
//if(!$_SESSION['login_user']){
   // header("Location: login.php"); 
   // exit; 
//}  

//echo($usr);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
   }
   else{
    //session_start();
    $det = mysqli_query($con,"SELECT w_id, main_pic_path,w_date,bride_name,groom_name,b_det,g_det,muhoo_1,muhoo_2,w_place,w_venue,w_phno_1,w_phno_2,w_email,fb_link,yt_link,rand_no FROM invyt_form WHERE w_id=(select max(w_id) from invyt_form where c_id='".$usr."')");
    
	while($row = mysqli_fetch_array($det)) {
  
   $w_id=$row["w_id"];
    $main_img=$row["main_pic_path"];
    $w_date=$row["w_date"];
    $b_name=$row["bride_name"];
    $g_name=$row["groom_name"];
    $b_det=$row["b_det"];
    $g_det=$row["g_det"];
    $mu1=$row["muhoo_1"];
    $mu2=$row["muhoo_2"];
    $w_place=$row["w_place"];
    $w_venue=$row["w_venue"];
    if(isset($row["w_phno_1"])){
    $w_ph1=$row["w_phno_1"];}
    if(isset($row["w_phno_2"])){
    $w_ph2=$row["w_phno_2"];}
    $w_email=$row["w_email"];
    $r=$row["rand_no"];

    if(isset($row["fb_link"])){
      $fb_link=$row["fb_link"];}
    if(isset($row["yt_link"])){
      $yt_link=$row["yt_link"];}

    //$d=mysqli_query($con,"SELECT DATE_FORMAT(muhoo_1, '%k:%i') FROM invyt_form WHERE w_id=(select max(w_id) from invyt_form)");
    //$row2 = mysqli_fetch_array($d);
    // $m1=$row2["muhoo_1"];
 }
 $myDateTime = DateTime::createFromFormat('Y-m-d', $w_date);
$formattedweddingdate = $myDateTime->format('d-M-Y');
 
 

$_SESSION['wid']=$w_id;
if(!(isset($_SESSION['suc']))){
  $_SESSION['suc']=0;
}
else{
  $_SESSION['suc']=0;
}
   }



 $city =$w_venue.", ".$w_place;
  
 //$array = lookup($city);
 //print_r($array);
 //print_r("end");
 $i_url="https://www.invyt.in/".$g_name."weds".$b_name.".html";
 
 //



   ?>
<div style="background: black; margin-top: 0px;">
    <center>
    <a class="button standout" href="prev.php" style="background: black; color:white;font-size: 18px;border-radius: 25px;border:1px solid #c9d9e9; height:50px;padding-top: 13px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Adjust Image</a>
         <a class="button standout" href="update2.php?row_id=<?php echo $w_id; ?>" style="background: black; color:white;font-size: 18px;border-radius: 25px;border:1px solid #c9d9e9; height:50px;padding-top: 13px; margin-left: 15px;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Edit Form</a>
         <form class="button standout" style="background: black; color:white;" method="post" action="subm.php" >
         <input type="hidden" id="custId" name="row_id" value="<?php echo $w_id; ?>">
         <input type="hidden"  name="subd" value="<?php echo $i_url; ?>">
          <button class="button standout"  type="submit" style="background: black; color:white;border-radius: 25px;border:1px solid #c9d9e9; height:50px;width: 100px;padding-top: 10px;margin-top:30px;"><i class="fa fa-check" aria-hidden="true"></i> Done</button>
          </form>
          
    </center>
      </div>

<script type="text/javascript">
function myFunction() {
  window.history.back();

}
</script>


 <!-- <div class="header__menu">
  <nav id="navbar" class="header__nav collapse">
<ul class="header__elenco">
<li class="header__el header__el--blue"><a href="form.html" id="signup1" class="btn btn--white">→ Edit </a></li>
<li class="header__el header__el--blue"><a href="index.php" id="signup1" class="btn btn--white"> Done →</a></li>
</ul>
</nav>
</div>-->
  <?php
   // Start the buffering //
ob_start();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script type="text/javascript">
function rate()
{

   $.ajax({
      url: 'https://invyt.in/cnt.php',
      type: 'post',
      data: 'wid='+<?php echo $w_id; ?>,
      success: function(output) 
      {
        //  alert('success, server says '+output);
      }, error: function()
      {
         // alert('something went wrong, rating failed');
      }
   });

}

window.onload = rate();
function GetLatlong()
    {
      
        var geocoder = new google.maps.Geocoder();
        var address ="<?php echo $city ?>"; //document.getElementById('textboxid').value;
       // alert("<?php echo $city ?>");
        geocoder.geocode({ 'address': address }, function (results, status) {
          //alert(status);
            if (status == google.maps.GeocoderStatus.OK) {
                var latitude = results[0].geometry.location.lat();
                var longitude = results[0].geometry.location.lng();
               // alert(latitude);
                //document.getElementById('map').data-lat=latitude;
                //document.getElementById('map').data-long=longitude;
                var map = new google.maps.Map(document.getElementById('map'), {
                 zoom: 19,
                  center: {lat: latitude, lng: longitude}
                   });
                   var latlng = {lat: parseFloat(latitude), lng: parseFloat(longitude)};
                   var marker = new google.maps.Marker({
          position: latlng,
          map: map
        });
            }
        });
       
        //document.write("abc");
    }
    window.onload =GetLatlong;

</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2603374620973706",
    enable_page_level_ads: true
  });
</script>
  <head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>invyt - <?php echo $g_name; ?> weds <?php echo $b_name; ?></title>
    <meta property="og:title" content="invyt - <?php echo $g_name; ?> weds <?php echo $b_name; ?>" />
    <meta property="og:url" content="<?php echo $i_url; ?>" />
    <meta property="og:description" content="Join us digitally in celebrating our wedding">
    <meta property="og:image" content="<?php echo ("https://www.invyt.in/uploads/".$main_img); ?>">
    <meta name="twitter:card" content="Create a unique experience for your friends and family by inviting them to your celebration using invyt"></meta>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Join us digitally in celebrating our wedding(invyt.in)">
    <meta name="author" content="invyt.in">
        <!--Google Analytics Script!-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121991542-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-121991542-1');
    </script>
    <!--load google/external fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Roboto+Slab:300,400" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- main style --> 
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/responsive.css">
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <?php

     $lap="0:0";
     $mob="0:0";
     if(isset($_COOKIE["one"])){
         $lap=$_COOKIE["one"];
     }
     if(isset($_COOKIE["two"])){
         $mob=$_COOKIE["two"];
     }
     $la=explode(":",$lap);
     $ma=explode(":",$mob);

   

$isMobile=false;
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
  $isMobile=true;
}

if($isMobile){
  $l0=floatval($la[1])*4;
  $l1=floatval($la[0])*4;

  $m0=floatval($ma[1])*1.25;
  $m1=floatval($ma[0])*1.25;
  echo'
  <style type="text/css">
            @media (min-width: 1200px) {
             #top{ background-position:'.$l0.'px '.$l1.'px;}
            }
            @media (max-width: 1200px) {
             #top{ background-position:'.$l0.'px '.$l1.'px;}
            }
            @media (max-width: 480px) {
          #top {background-position:'.$m0.'px '.$m1.'px;}
  </style>';
}
else{
  $l0=floatval($la[1])*2;
  $l1=floatval($la[0])*2;

  $m0=floatval($ma[1])*1.25;
  $m1=floatval($ma[0])*1.25;
  echo'
  <style type="text/css">
            @media (min-width: 1200px) {
             #top{ background-position:'.$l0.'px '.$l1.'px;}
            }
            @media (max-width: 1200px) {
             #top{ background-position:'.$l0.'px '.$l1.'px;}
            }
            @media (max-width: 480px) {
          #top {background-position:'.$m0.'px '.$m1.'px;}
  </style>';
}

    
   
?>

  </head>
  <body>
    <div id="loader-wrapper">
			<div id="invytpreloaderresponsive_hype_container" style="margin:auto;position:relative;width:100%;height:100%;overflow:hidden;">
		<script type="text/javascript" charset="utf-8" src="invyt%20preloader_responsive.hyperesources/invytpreloaderresponsive_hype_generated_script.js?750"></script>
	</div>
		</div>
    <h1 class="show-for-sr"><?php echo $g_name; ?> & <?php echo $b_name; ?> Wedding Party Invitation</h1>
    <!-- sticky navbar -->
    <div data-sticky-container>
      <div class="title-bar ">
         <a  href="index.php" style="float: left; position: fixed; z-index: 19999;padding-top: 90px; padding-left: 30px; position: relative;"><img src="img/logowyt.png"></a> 
        <button class="hamburger hamburger--arrow align-right" type="button" data-toggle="offCanvas">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </div>

    <!-- end sticky navbar -->
    <!-- wrapping all content including off-canvas -->
    <div class="off-canvas-wrapper">
      <div class="off-canvas position-right" id="offCanvas" data-off-canvas data-close-on-click="false" data-content-scroll="false">
        <ul class="vertical menu text-center">
          <li><a href="#top"><?php echo $g_name; ?> & <?php echo $b_name; ?></a></li>
          <li><a href="#the-couple">THE COUPLE</a></li>
          <!--<li><a href="#the-stories">THE STORIES</a></li>-->
          <li><a href="#timer">STILL COUNTING DOWN</a></li>
          <li><a href="#events">EVENTS</a></li>
          <!--<li><a href="#rsvp-form">RSVP</a></li>
          <li><a href="#people">PEOPLE</a></li>
          <li><a href="#gallery">GALLERY</a></li>
          <li><a href="#gifts">GIFTS</a></li>-->
        </ul>
      </div><!-- end of off-canvas -->
      <!-- start wrapping main content -->
      <div class="off-canvas-content" data-off-canvas-content>
        <!-- welcome screen -->
        <section id="top" class="row expanded welcome-screen" style="<?php echo ("background-image:url('uploads/".$main_img."');"); ?>" data-top-top="transform:translateY(-20px)" data-top-bottom="transform:translateY(320px)"><!-- change background-image with yours -->
          <div class="column">
            <div class="welcome-text">
              <div class="headline"> <?php echo $formattedweddingdate;?></div>
              <div class="center-names">
                  <h2 class="show-for-sr"><?php echo $g_name; ?> & <?php echo $b_name; ?> are getting married</h2>
                  <div class="center"><div class="left"><?php echo $g_name; ?></div>&<div class="right"><?php echo $b_name; ?></div></div>
              </div>
              <div class="footline">We are getting married</div>
            </div>
          </div>
        </section>
        <!-- end welcome screen -->
        <!-- section with custom paralax divider -->
        <section id="the-couple" class="row expanded couple custom-paralax <?php if(isset($_SESSION['theme'])){echo $_SESSION['theme'];} else{echo "pinetrees-flat";} ?>">
          <div class="wrapper"></div>
          <div class="body">
            <h2 class="text-center main-heading">The Couple</h2>
            <h5 class="text-center">
          Solicit your esteemed presence with family to grace the auspicious occasion of the marriage of <?php echo $g_name; ?> & <?php echo $b_name; ?></h5>
            <div class="row picture-frame">
              <div class="people1">
                <div class="thumbnail thumbnail-line thumbnail-circle thumbnail-xs"><img alt="<?php echo $g_name; ?>" src="https://image.ibb.co/jZENRo/mustanche.png"></div>
                <h5><?php echo ($g_det); ?></h5>
              </div><!-- end of bride 1 -->
              <div class="frame-wrapper">
                <div class="frame">
                  <img alt="<?php echo $g_name; ?> & <?php echo $b_name; ?>" src="<?php echo ("uploads/".$main_img); ?>">
                </div>
              </div><!-- end frame couple wedding/prewedding shoot -->
              <div class="people2">
                <div class="thumbnail thumbnail-line thumbnail-circle thumbnail-xs"><img alt="<?php echo $b_name; ?>" src="https://image.ibb.co/coRmmo/love_image.png"></div>
                <h5><?php echo ($b_det); ?></h5>
                </a>
              </div><!-- end of bride 2 -->
            </div>
          </div>
        </section>
        <!-- end section with custom paralax divider -->
        <!-- divider image carousel -->
         <!--<section class="row expanded carousel-container">
          <h2 class="show-for-sr">Prewedding shot Suandi & nanik</h2>
          <div class="carousel-5">
            <div class="item">
              <img alt="" src="http://placehold.it/460x460">
            </div>
            <div class="item">
              <img alt="" src="http://placehold.it/460x460">
            </div>
            <div class="item">
              <img alt="" src="http://placehold.it/460x460">
            </div>
            <div class="item">
              <img alt="" src="http://placehold.it/460x460">
            </div>
            <div class="item">
              <img alt="" src="http://placehold.it/460x460">
            </div>
          </div>
        </section>-->
        <!-- end divider image carouesel -->
        <!-- timeline/story -->
        <!-- <section id="the-stories" class="row timeline expanded natural-white-texture">
          <div class="column">
            <div class="timeline-wrapper">
              <h2 class="text-center main-heading">The Stories</h2>
              
              <h5 class="text-center">present...</h5>
              <ul class="story wobbly">
                <li><!-- event 1 -->
                 <!-- <div class="column">
                    <span class="date">14 February 2017</span>
                    <h3>The Wedding</h3>
                    <p>Finally the time has come, this day we really happy. Please come by to enjoy the food and drink, dance party till drop with us! We also have some holy ceremonial with traditional balinese culture. <a class="button hollow secondary" href="#rsvp-form">RSVP!</a></p>
                  </div>
                  <div class="column empty"></div>
                  <div class="column image"><div class="thumbnail thumbnail-xl thumbnail-circle thumbnail-line"><img alt="" src="http://placehold.it/460x250"></div></div>
                </li><!-- end of event 1 -->
                <!--<li>--><!-- event 2 -->
                  <!--<div class="column">
                    <span class="date">26 Desember 2017</span>
                    <h3>The Proposal</h3>
                    <p>But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                  </div>
                  <div class="column empty"></div>
                  <div class="column image"><div class="thumbnail thumbnail-xl thumbnail-circle thumbnail-line"><img alt="" src="http://placehold.it/460x250"></div></div>
                </li><!-- end of event 2 -->
               <!-- <li><!-- event 3 -->
                  <!--<div class="column">
                    <span class="date">14 February 2016</span>
                    <h3>In a relationship</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                  </div>
                  <div class="column empty"></div>
                  <div class="column image"><div class="thumbnail thumbnail-xl thumbnail-circle thumbnail-line"><img alt="" src="http://placehold.it/460x250"></div></div>
                </li><!-- end of event 3 -->
                <!--<li>--><!-- event 4 -->
                <!--  <div class="column">
                    <span class="date"><?php //echo $g_name; ?></span>
                    <h3>The meeting</h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                  </div>
                  <div class="column empty"></div>
                  <div class="column image"><div class="thumbnail thumbnail-xl thumbnail-circle thumbnail-line"><img alt="" src="http://placehold.it/460x250"></div></div>
                </li><!-- end of event 4 -->
              <!--</ul>-->
           <!--   <h5 class="text-center">...old story</h5>
            </div>
            <!-- end of timeline/story paralax wraping in desktop/tablet -->
         <!-- </div>
        </section>
        <!-- end timeline/story -->
        <!-- time counter -->
        <section id="timer" class="row expanded time-countdown" style="background-image:url(https://image.ibb.co/hLw3yo/timebg.jpg)"><!-- change background url -->
          <div class="bg-overlay bg-overlay-heart bg-overlay-dark animated wobble_bg"></div>
          <div class="column text-center">
            <div class="row">
              <h2>Please join us on our happiest day!</h2>
            </div>
            <div class="row counter" id="getting-started" data-end-date="<?php echo $w_date; ?>"></div>
            <!-- <div class="row"><a class="button standout" href="#rsvp-form">RSVP</a></div>-->
          </div>
          <!-- need js to handling this, go to bottom of this file to change end-date event -->
        </section>
        <!-- end time counter -->
        <!-- Blogpost -->
        <section id="events" class="row blog-container">
          <div class="column body">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- First ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2603374620973706"
     data-ad-slot="9883827440"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
            <h2 class="text-center main-heading">Venue</h2>
            <h5 class="quote text-center">Come celebrate the joy of our union! Hope you will be able to make it! </h5>
            <div class="blog">
              <!-- eachpost 1 start -->
               <div class="each-post">
                  <!--<div class="thumbnail thumbnail-xxl"><img alt="" src=" https://image.ibb.co/ghX3XT/location_image.png"></div>-->
                <div class="content">
                  <!-- <h3>Mundoor</h3>-->
                  <div class="meta-post">
                  <!--  <span class="location"><?php echo $w_venue; ?></span>
                    <span class="date-time"><?php echo $mu1; ?> to <?php echo $mu2; ?> </span>
                  </div>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>-->
                </div>
              </div>
              <!-- end eachpost 1 start -->
              <!-- eachpost 2 start -->
              <div class="each-post">
                <div class="thumbnail thumbnail-xxl"><img alt="" src="https://image.ibb.co/ghX3XT/location_image.png"></div>
                <div class="content">
                  <h3><?php echo $w_place; ?></h3>
                  <div class="meta-post">
                    <span class="location"><?php echo $w_venue; ?></span>
                    <span class="date-time"><?php echo $mu1; ?> to <?php echo $mu2; ?></span>
                  </div>
                  <p>Solicit your esteemed presence with family to grace the auspicious occasion of the marriage with your presence and bless the wedded couple.</p>
                </div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- First ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2603374620973706"
     data-ad-slot="9883827440"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
              </div>
              <!-- end eachpost 2 start -->
              <!-- eachpost 3 start -->
             <!-- <div class="each-post">
                <div class="thumbnail thumbnail-xxl"><img alt="" src="http://placehold.it/350x350"></div>
                <div class="content">
                  <h3>Reception & Wedding dinner</h3>
                  <div class="meta-post">
                    <span class="location">Jln ABCD HIHIHAHA 56x</span>
                    <span class="date-time">9AM -10:30AM WITA, Feb 12, 2017</span>
                  </div>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                </div>
              </div>
              <!-- end eachpost 3 start -->
            </div>
          </div>
        </section>
        <!-- end Blogpost -->

        <!-- FORM RSVP -->
       <!-- <section id="rsvp-form" class="special-form">
          <div class="bg-overlay bg-overlay-ellipse"><div class="ellipse-line"></div></div>
          <div class="column">
            <div class="title">
              <h2>RSVP</h2>
              <h5>I know if you come down a long this website you must be have a good relationship with us, so please write down your information clear and nicely.</h5>  
            </div>
            <!-- // START FORM // -->
           <!-- <form id="submit-rsvp" data-abide novalidate><!-- add parameter to form if necessary -->
            <!--  <div class="greetings">
                <div class="message">
                  <h3 class="quote">
                    Dont be late! see ya  
                  </h3>  
                </div>
              </div>
              <div class="row">
                <div class="column small-12 medium-4">
                  <label>
                    <input type="text" name="name" placeholder="Name" required>
                    <span class="form-error">
                      Tell me your name
                    </span>
                  </label>
                </div>  
                <div class="column small-12 medium-4">
                  <label>
                    <input type="text" name="phone" placeholder="Contact Number" pattern="number" required>
                    <span class="form-error">
                      Please enter your contact number, so we can hook up your phone
                    </span>
                  </label>
                </div>  
                <div class="column small-12 medium-4">
                  <label>
                    <input type="email" name="email" placeholder="Email Address" pattern="email" required>
                    <span class="form-error">
                      Please enter your existing email
                    </span>
                  </label>
                </div>  
              </div>
              <div class="row">
                <div class="column small-12 large-9 checkbox-group" data-validator-min="1">
                  <legend>Attended the event</legend>
                  <input type="checkbox" name="attendance" data-validator="checkbox_limit" id="rsvp-opt1" /><label for="rsvp-opt1">Mejantos & Ngidih</label>
                  <input type="checkbox" name="attendance" data-validator="checkbox_limit" id="rsvp-opt2" /><label for="rsvp-opt2">The Wedding Day</label>
                  <input type="checkbox" name="attendance" data-validator="checkbox_limit" id="rsvp-opt3" /><label for="rsvp-opt3">Reception & Wedding Dinner</label>
                  <div class="spacing"></div><!-- must have div with class spacing to have breakline after input:checkbox -->
                 <!-- <span class="form-error">
                    You must attend to one of our ceremonial
                  </span>
                </div>
                <div class="column small-12 large-3">
                  <legend>Guest(s)</legend>
                  <select required name="guest">
                    <option value="">= Guest =</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>3++</option>
                  </select>
                  <span class="form-error">
                    Do you bring another guest?
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="column">
                  <textarea name="messages" placeholder="Drop couple of lines" required></textarea>
                  <span class="form-error">
                    Give me special words 
                  </span>
                </div>
              </div>
              <div class="row text-center">
                <div class="column"><button type="submit">SUBMIT</button></div>
              </div>
            </form>
            <!-- // END of FORM // -->

          </div>
        </section>
        <!-- end FORM RSVP -->
        <!-- people gallery -->
        <!--<section id="people" class="row asanoha behind expanded">
          <div class="column">
            <h2 class="text-center main-heading">People</h2>
            <h5 class="text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h5>
            <!-- carousel family -->
          <!--  <div class="row carousel-container">
              <h4 class="text-center">Family</h4>
              <div class="carousel-5">
                <div class="item"><!-- item 1 -->
             <!--     <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Wayan Baglur
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 1 -->
            <!--    <div class="item"><!-- item 2 -->
               <!--   <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Luh Pasih
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 2 -->
              <!--  <div class="item"><!-- item 3 -->
               <!--   <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Made Meja
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 3 -->
             <!--   <div class="item"><!-- item 4 -->
               <!--   <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Komang Seni
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 4 -->
             <!--   <div class="item"><!-- item 5 -->
            <!--      <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Ketut Nyamprut
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 5 -->
             <!-- </div>
            </div>
            <!-- end carousel family -->
            <!-- carousel Groomsmen -->
         <!--   <div class="row carousel-container">
              <h4 class="text-center">Groomsmen</h4>
              <div class="carousel-5">
                <div class="item"><!-- item 1 -->
            <!--      <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Putu Bagus
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 1 -->
         <!--       <div class="item"><!-- item 2 -->
           <!--       <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Made Nyem
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 2 -->
          <!--      <div class="item"><!-- item 3 -->
           <!--       <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Nyoman Ngakak
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 3 -->
           <!--     <div class="item"><!-- item 4 -->
           <!--       <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Ketut Mekenyem
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 4 -->
           <!--     <div class="item"><!-- item 5 -->
            <!--      <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Kadek Kenyem Masem
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 5 -->
              </div>
            </div>
            <!-- end carousel Groomsmen -->
            <!-- carousel Bridesmaids -->
         <!--   <div class="row carousel-container">
              <h4 class="text-center">Bridesmaids</h4>
              <div class="carousel-5">
                <div class="item"><!-- item 1 -->
         <!--         <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Luh Eleg Gan
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 1 -->
          <!--      <div class="item"><!-- item 2 -->
           <!--       <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Komang Cengir
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 2 -->
           <!--     <div class="item"><!-- item 3 -->
           <!--       <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Luh Bunga
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 3 -->
           <!--     <div class="item"><!-- item 4 -->
           <!--       <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Kadek Ngeseng
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 4 -->
           <!--     <div class="item"><!-- item 5 -->
           <!--       <img alt="" src="http://placehold.it/460x460">
                  <div class="hover-item">
                    <div class="desc">
                      Luh Cabe Mentik
                      <span class="social-media"><a href="#"><i class="fa fa-instagram"></i></a></span>
                    </div>
                  </div>
                </div><!-- END - item 5 -->
              </div>
            </div>
            <!-- end carousel Bridesmaids -->
          </div>
        </section>
        <!-- end people gallery -->

        <!-- Photo Gallery -->
      <!--  <section id="gallery" class="row expanded gallery-container">
          <div class="column">
            <h2 class="text-center main-heading">Gallery</h2>
            <ul class="filters">
              <!-- define categories -->
        <!--      <li class="" data-group="family">Family</li>
              <li class="" data-group="bride-groom">Bride & Groom</li>
              <li class="" data-group="spots">Spots</li>
            </ul>

            <!-- div galleries wrapper -->    
        <!--    <div id="grid" class="row galleries">
              <!-- gallery 1 -->
        <!--      <figure class="gallery column large-4 medium-6 small-12" data-groups='["family"]'>
                <a href="http://placehold.it/720x460" data-lightbox="gallery" data-title="The rings">
                  <img src="http://placehold.it/460x460" alt="">
                  <div class="label-wrapper">
                    <div class="label">Just Married!</div>
                  </div>
                </a>
              </figure>
              <!-- END - gallery 1 -->
              <!-- gallery 2 -->
          <!--    <figure class="gallery column large-4 medium-6 small-12" data-groups='["family"]'>
                <a href="http://placehold.it/720x460" data-lightbox="gallery" data-title="Our wedding ring">
                  <img src="http://placehold.it/460x460" alt="">
                  <div class="label-wrapper">
                    <div class="label">Our wedding ring</div>
                  </div>
                </a>  
              </figure>
              <!-- END - gallery 2 -->
              <!-- gallery 3 -->
       <!--       <figure class="gallery column large-4 medium-6 small-12" data-groups='["spots"]'>
                <a href="http://placehold.it/720x460" data-lightbox="gallery" data-title="The rings">
                  <img src="http://placehold.it/460x460" alt="">
                  <div class="label-wrapper">
                    <div class="label">The rings</div>
                  </div>
                </a>
              </figure>
              <!-- END - gallery 3 -->
              <!-- gallery 4 -->
       <!--       <figure class="gallery column large-4 medium-6 small-12" data-groups='["bride-groom"]'>
                <a href="http://placehold.it/720x460" data-lightbox="gallery" data-title="My queen">
                  <img src="http://placehold.it/460x460" alt="">
                  <div class="label-wrapper">
                    <div class="label">My Queen</div>
                  </div>
                </a>
              </figure>
              <!-- END - gallery 4 -->
              <!-- gallery 5 -->
        <!--      <figure class="gallery column large-4 medium-6 small-12" data-groups='["spots"]'>
                <a href="http://placehold.it/720x460" data-lightbox="gallery" data-title="Wedding ritual">
                  <img src="http://placehold.it/460x460" alt="">
                  <div class="label-wrapper">
                    <div class="label">Wedding ritual</div>
                  </div>
                </a>
              </figure>
              <!-- END - gallery 5 -->
              <!-- gallery 6 -->
      <!--        <figure class="gallery column large-4 medium-6 small-12" data-groups='["spots"]'>
                <a href="http://placehold.it/720x460" data-lightbox="gallery" data-title="Food lounge">
                  <img src="http://placehold.it/460x460" alt="">
                  <div class="label-wrapper">
                    <div class="label">Food lounge</div>
                  </div>
                </a>
              </figure>
              <!-- END - gallery 6 -->
              <!-- gallery 7 -->
        <!--      <figure class="gallery column large-4 medium-6 small-12" data-groups='["spots"]'>
                <a href="http://placehold.it/720x460" data-lightbox="gallery" data-title="Another food lounge">
                  <img src="http://placehold.it/460x460" alt="">
                  <div class="label-wrapper">
                    <div class="label">Another food lounge</div>
                  </div>
                </a>
              </figure>
              <!-- END - gallery 7 -->
              <!-- gallery 8 -->
        <!--      <figure class="gallery column large-4 medium-6 small-12" data-groups='["family"]'>
                <a href="http://placehold.it/720x460" data-lightbox="gallery" data-title="One of our pre-wedding shoot">
                  <img src="http://placehold.it/460x460" alt="">
                  <div class="label-wrapper">
                    <div class="label">One of our pre-wedding shoot</div>
                  </div>
                </a>
              </figure>
              <!-- END - gallery 8 -->
              <!-- gallery 9 -->
             <!-- <figure class="gallery column large-4 medium-6 small-12" data-groups='["bride-groom"]'>
                <a href="http://placehold.it/720x460" data-lightbox="gallery" data-title="He is Mine!">
                  <img src="http://placehold.it/460x460" alt="">
                  <div class="label-wrapper">
                    <div class="label">He is Mine!</div>
                  </div>
                </a>
              </figure>
              <!-- END - gallery 9 -->
              <!-- gallery 10 -->
             <!-- <figure class="gallery column large-4 medium-6 small-12" data-groups='["bride-groom"]'>
                <a href="http://placehold.it/720x460" data-lightbox="gallery" data-title="Another Pre-wedding shoot">
                  <img src="http://placehold.it/460x460" alt="">
                  <div class="label-wrapper">
                    <div class="label">Another Pre-wedding shoot</div>
                  </div>
                </a>
              </figure>
              <!-- END - gallery 10 -->
              <!-- gallery 11 -->
            <!--  <figure class="gallery column large-4 medium-6 small-12" data-groups='["bride-groom"]'>
                <a href="http://placehold.it/720x460" data-lightbox="gallery" data-title="Wedding cinematic shot">
                  <img src="http://placehold.it/460x460" alt="">
                  <div class="label-wrapper">
                    <div class="label">Wedding cinematic shot</div>
                  </div>
                </a>
              </figure>
              <!-- END - gallery 11 -->
            <!--  <div class="gallery-sizer"></div><!-- .gallery-sizer is markup helper for js (required) -->
            </div>
            <!-- END - div .galleries wrapper -->
          </div>
        </section>
        <!-- end photo gallery -->

        <!-- Section Short Contact and address + Google maps -->
        <section class="row expanded asanoha text-center">
          <h2 class="show-for-sr"><?php echo $g_name; ?> & <?php echo $b_name; ?> Wedding Party Google maps coordinate place</h2>
          <div class="column">
            <div class="row spacing s-30"></div>
            <div class="row">
            <div class="column"><a href="tel:<?php echo $w_ph1; ?>"><?php echo $w_ph1; ?></a></div>
            <!--<div class="column"><span class="lnr lnr-map-marker"></span> Lorem street 222x</div>-->
            <div class="column"><a href="mailto:<?php echo $w_email; ?>"> <?php echo $w_email; ?></a></div>
            </div>
            <div class="row spacing s-30"></div>
          </div>
        </section>
        <div id="map" data-lat=<?php echo $latitude; ?> data-long=<?php echo $longitude; ?> data-title="My wedding here!"></div><!-- LOAD GOOGLE MAPS -->
        <!-- end of maps thing -->

        <!-- begin gifts section -->
        <section id="gifts" class="row expanded smooth-waves">
          <div class="column">
            <h2 class="text-center main-heading">Thank You</h2>
            <h5 class="text-center">Expecting your presence and blessings on our special day! Thank you for your love and support. </h5>
            <div class="spacing s-70"></div>
            <!-- <div class="row">
              <div class="column small-12 large-expand text-center"><div class="thumbnail thumbnail-md"><img alt="" src="http://placehold.it/160x160"></div></div>
              <div class="column small-12 large-expand text-center"><div class="thumbnail thumbnail-md"><img alt="" src="http://placehold.it/160x160"></div></div>
              <div class="column small-12 large-expand text-center"><div class="thumbnail thumbnail-md"><img alt="" src="http://placehold.it/160x160"></div></div>
              <div class="column small-12 large-expand text-center"><div class="thumbnail thumbnail-md"><img alt="" src="http://placehold.it/160x160"></div></div>
              <div class="column small-12 large-expand text-center"><div class="thumbnail thumbnail-md"><img alt="" src="http://placehold.it/160x160"></div></div>
            </div>-->
          </div>
        </section>
        <!-- end gifts section -->

        <!-- begin footer -->
        <footer class="row expanded" style="<?php echo ("background-image:url('uploads/".$main_img."');"); ?>">
          <div class="bg-overlay bg-overlay-dark-green"></div>
          <div class="column">
            <h2 class="text-center">Save the date</h2>
            <h1 class="text-center" style="color: black;font-family: Lato;"><?php echo $formattedweddingdate;?></h1>
              <div class="row spacing s-30"></div>
              <div class="row">
                <div class="center-names trendy">
                    <div class="center"><div class="left"><?php echo $g_name; ?></div>&<div class="right"><?php echo $b_name; ?></div></div>
                </div>
              </div>
              <div class="row spacing s-50"></div>
              <div class="row footline">
                <div class="column small-12 large-3">
                  <a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a>
                  <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>
                <div class="column small-12 large-6">Created with <i class="fa fa-heart"></i> using <a href="https://www.invyt.in/" target="_blank">invyt</a><br/><br> To make your own <a href="https://www.invyt.in">invyt</a>, click <a href="https://www.invyt.in/signup.html">here</a><br> For a custom invyt, <a href="https://api.whatsapp.com/send?phone=+917907283945&text=Hi, I am contacting you from your website." class="social-icon whatsapp"><i class="fa fa-whatsapp"></i></a>or <a href="tel:09495971412">+919495971412</a></div>
                <div class="column small-12 large-3">
                  <!--  <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                  <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                  <a href="#" target="_blank"><i class="fa fa-twitter-square"></i></a>
                  <a href="#" target="_blank"><i class="fa fa-vimeo"></i></a>
                  <a href="#" target="_blank"><i class="fa fa-tumblr"></i></a>-->
                
                </div>
              </div>
          </div>
        </footer><!-- end footer -->
      </div><!-- END div off-canvas main content -->
    </div><!-- END div off-canvas wrapper -->
    
    <!--js files-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>
	
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="scripts/vendor/what-input.js"></script>
    <script type="text/javascript" src="scripts/vendor/foundation.js"></script>
    <script type="text/javascript" src="scripts/owl.carousel.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="scripts/lightbox.min.js"></script>
    <script type="text/javascript" src="scripts/skrollr.min.js"></script>
    <script type="text/javascript" src="scripts/shuffle.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4tXuwb48eW-1L69vx61x9fvEeJ5geFy0&callback=initMap"></script>
    <script type="text/javascript" src="scripts/app.js"></script>
  </body>
</html>
<?php


// Get the content that is in the buffer and put it in your file //
//file_put_contents(<?php echo("'".$g_name."weds".$b_name.".html'"); , ob_get_contents());


file_put_contents($g_name."weds".$b_name."_".$r.".html", ob_get_contents());
?>