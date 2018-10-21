<html>
<?php

//session_start(); 
//if(!$_SESSION['login_user']){
//header("Location: login.php"); 
//exit; 
//} 
/*if(isset($_SESSION['login_user'])){

$usr=$_SESSION['login_user'];}
else{
	$usr="";
}*/
session_start();
//$usr=$_SESSION['login_user'];
$ww=$_SESSION['wid'];
include 'config.php';
$con = mysqli_connect($host, $user, $password,$dbname);
$sql="SELECT main_pic_path from invyt_form where w_id=".$ww;
$det = mysqli_query($con,$sql);
if($row = mysqli_fetch_array($det)) {
  //  $w_id=$row["w_id"];
	$pic=$row["main_pic_path"];
	//echo $pic;
}
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
 
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  <meta name="theme-color" content="#3a9fff">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">  
    

<style>

	@media (max-width: 2560px) {

.abc{
height: auto;
width:100%;
position: relative;
vertical-align: middle;
display: inline-block;

}

.cover{
	object-fit: cover;
	height: auto;
	width: 100%;
	vertical-align: middle;
	position: relative;

}
.main{
	display: block;
	height: 600px;
	width: 1067px;
	text-align: center;
}

#image-container {
	display: block;
	float: left;
	height: 384px;
	width: 683px;
	overflow: hidden;

	position: relative;
	cursor: move;
	z-index: 2;
}

#overlay{
	padding: 9px 0px;
	left: 25%;
	top: 25%;
	position:absolute;
	pointer-events: none;
	background: url(preview/lap.png) no-repeat;
	z-index: 5;
}

#drag-image {
	left: 0px;
	pointer-events: none;
	position: relative;
	top: 0px;
	-moz-user-select: none;
}

.laptop{
	float: left;
	height: 581px;
	margin: auto;
	width: 703px;
	padding-top: 20px;
	padding-left:10px;
	left: 0px;
	top: 0px;
	background-image: url('preview/lap.svg');
	background-size: 100%;
	z-index: -1;
	margin-top: 25px;
	margin-bottom: 100px;
}




.abc1{
height: 100%;
position: relative;
vertical-align: middle;
display: inline-block;
text-align: center;

}


.cover1{
	object-fit: cover;
	height: 100%;
	width: auto%;
	vertical-align: middle;
	position: relative;
	

}
.main1{
	display: block;
	height: 270px;
	width: 480px;
	text-align: center;
}
#image-container1 {
	float: right;
	display: block;
	height: 480px;
	width: 270px;
	overflow: hidden;
	position: relative;
	cursor: move;
	z-index: 2;
}

#overlay1{
	padding: 9px 0px;
	left: 0px;
	top: 0px;
	position:absolute;
	pointer-events: none;
}

#drag-image1 {
	left: 0px;
	pointer-events: none;
	position: relative;
	top: 0px;
	-moz-user-select: none;
}

.mobile{
	height: 570px;
	float: right;
	width: 286px;
	padding-top: 41px;
	padding-left:0px;
	padding-right: 8px;
	left: 0px;
	top: 0px;
	background-image: url('preview/mob1.svg');
	background-size: 100%;
	z-index: -1;
	margin-top:25px;
}
}

@media (max-width:1024px){



	.mobile, .laptop{
	float: none;
	z-index: -1;
	margin:0 auto;
}

.respons{
	padding-top:50px;
	padding-bottom:50px;
	width:100%;
	min-height: xxx;
	overflow: hidden;
	margin: 0 auto;
    
}

#blah{
		padding-top:150px;
	}
}

@media (max-width:768px){

	#blah{
		padding-top:150px;
	}
}

@media (max-width:480px){

#blah{
	padding-top:150px;
}

.abc{
height: auto;
width:100%;
position: relative;
vertical-align: middle;
display: inline-block;

}

.cover{
	object-fit: cover;
	height: auto;
	width: 100%;
	vertical-align: middle;
	position: relative;

}
.main{
	display: block;
	height: 300px;
	width: 534px;
	text-align: center;
}

#image-container {
	float: left;
	display: block;
	height: 192px;
	width: 332px;
	overflow: hidden;
	position: relative;
	cursor: move;
	z-index: 2;
}

#overlay{
	padding: 9px 0px;
	left: 25%;
	top: 25%;
	position:absolute;
	pointer-events: none;
	background: url(preview/lap1.png) no-repeat;
}

.prev img{

width: 200px;	
height: 200px;
}

#drag-image {
	left: 0px;
	pointer-events: none;
	position: relative;
	top: 0px;
	-moz-user-select: none;
}

.laptop{
	float: left;
	height: 291px;
	width: 352px;
	padding-top: 20px;
	padding-left:10px;
	background: url('preview/lap.svg') no-repeat;
	background-size: 100%;
	z-index: -1;
}


.abc1{
height: 100%;
position: relative;
vertical-align: middle;
}
.cover1{
	object-fit: cover;
	height: 100%;
	width: auto%;
	vertical-align: middle;
	position: relative;
	

}
.main1{
	display: block;
	height: 270px;
	width: 480px;
	margin-left:10px;
}
#image-container1 {
	display: block;
	height: 480px;
	width: 270px;
	overflow: hidden;
	position: relative;
	cursor: move;
	z-index: 2;
}

#overlay1{
	padding: 9px 0px;
	left: 0px;
	top: 0px;
	position:absolute;
	pointer-events: none;
}

#drag-image1 {
	left: 0px;
	pointer-events: none;
	position: relative;
	top: 0px;
	-moz-user-select: none;
}

.mobile{
	height: 570px;
	float: none;
	width: 286px;
	padding-top: 41px;
	background-image: url('preview/mob1.svg');
	background-size: 100%;
	z-index: -1;
	margin:0 auto;
}

.respons{
	width:100%;
	min-height: xxx;
	overflow: hidden;
	margin: 0 auto;

}
}
</style>
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
 <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Roboto+Slab:300,400" rel="stylesheet"> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
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
    	<div class="site__box-link" style="float:right;">
		<button class="btn btn--purple btn--width" onclick="myFunction()" style="background: #ffffff; color: #535252;"><i class="fa fa-arrow-left" ></i> Edit Form</button>
        </div>
  	</div>
	</div>
	<script type="text/javascript">
function myFunction() {
  window.history.back();

}
</script>
</header>
    

    
<div class="container" style="padding-left: 5px; text-align: center;" id="blah">


		<h3 style="padding-bottom:20px;"> Now let's move the picture to make it look perfect on all devices. </h3>


	<div class="laptop">
		<div id="image-container" class="main">
			<div class="abc">
			<img id="drag-image" src="uploads/<?php echo $pic; ?>" class="cover"/>
				
			</div>
			<div class="prev">
			<img id="overlay" src="preview/1.png">
			</div>

		</div>

</div>
<div class="respons">
	<div class="mobile">
		<div id="image-container1" class="main1">
			<div class="abc1">
			<img id="drag-image1" src="uploads/<?php echo $pic; ?>" class="cover1"/>
			</div>
			<img src="preview/mob.png" id="overlay1">
		</div>
	</div>

	</div>   
</div>
    <center>
	<div class="site__box-link">
                <form action="preview_site.php" method="POST">
                <input type="hidden" id="val" name="val" >
                <button type="submit"  class="btn btn--purple btn--width" >Next</button>
                </form>
            </div>
	</center><br><br><br><br>


  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
<script>

var _DRAGGGING_STARTED = 0;
var _LAST_MOUSEMOVE_POSITION = { x: null, y: null };
var _DIV_OFFSET = $('#image-container').offset();
var _CONTAINER_WIDTH = $("#image-container").outerWidth();
var _CONTAINER_HEIGHT = $("#image-container").outerHeight();
var _IMAGE_WIDTH;
var _IMAGE_HEIGHT;
var _IMAGE_LOADED = 0;
$('#drag-image').draggable();
$('#image-container').draggable();
$('#drag-image1').draggable();
$('#image-container1').draggable();

// Check whether image is cached or wait for the image to load 
// This is necessary before calculating width and height of the image
if($('#drag-image').get(0).complete) {
	ImageLoaded();
}
else {
	$('#drag-image').on('load', function() {
		ImageLoaded();
	});
}

// Image is loaded
function ImageLoaded() {
	_IMAGE_WIDTH = $("#drag-image").width();
	_IMAGE_HEIGHT = $("#drag-image").height();
	_IMAGE_LOADED = 1;	
}

$('#image-container').on('mousedown', function(event) {
	/* Image should be loaded before it can be dragged */
	if(_IMAGE_LOADED == 1) { 
		_DRAGGGING_STARTED = 1;

		/* Save mouse position */
		_LAST_MOUSE_POSITION = { x: event.pageX - _DIV_OFFSET.left, y: event.pageY - _DIV_OFFSET.top };
	}
});

$('#image-container').on('mouseup', function() {
	_DRAGGGING_STARTED = 0;
});

$('#image-container').on('mousemove', function(event) {
	if(_DRAGGGING_STARTED == 1) {
		var current_mouse_position = { x: event.pageX - _DIV_OFFSET.left, y: event.pageY - _DIV_OFFSET.top };
		var change_x = current_mouse_position.x - _LAST_MOUSE_POSITION.x;
		var change_y = current_mouse_position.y - _LAST_MOUSE_POSITION.y;

		/* Save mouse position */
		_LAST_MOUSE_POSITION = current_mouse_position;

		var img_top = parseInt($("#drag-image").css('top'), 10);
		var img_left = parseInt($("#drag-image").css('left'), 10);

		var img_top_new=0;
		var img_left_new=0;
		 img_top_new = img_top + change_y;
		 img_left_new = img_left + change_x;

		/* Validate top and left do not fall outside the image, otherwise white space will be seen */
		if(img_top_new > 0)
			img_top_new = 0;
		if(img_top_new < (_CONTAINER_HEIGHT - _IMAGE_HEIGHT))
			img_top_new = _CONTAINER_HEIGHT - _IMAGE_HEIGHT;

		if(img_left_new > 0)
			img_left_new = 0;
		if(img_left_new < (_CONTAINER_WIDTH - _IMAGE_WIDTH))
			img_left_new = _CONTAINER_WIDTH - _IMAGE_WIDTH;

		$("#drag-image").css({ top: img_top_new + 'px', left: img_left_new + 'px' });
	//	document.getElementById("demo").innerHTML = img_left_new + ' '+ img_top_new;
		var t1=img_top_new;
		var l1=img_left_new;
		var v=t1+":"+l1;
		document.cookie="one="+v;

		
	}
});

</script>
<script>
		var _DRAGGGING_STARTED1 = 0;
		var _LAST_MOUSEMOVE_POSITION1 = { x1: null, y1: null };
		var _DIV_OFFSET1 = $('#image-container1').offset();
		var _CONTAINER_WIDTH1 = $("#image-container1").outerWidth();
		var _CONTAINER_HEIGHT1 = $("#image-container1").outerHeight();
		var _IMAGE_WIDTH1;
		var _IMAGE_HEIGHT1;
		var _IMAGE_LOADED1 = 0;
		
		// Check whether image is cached or wait for the image to load 
		// This is necessary before calculating width and height of the image
		if($('#drag-image1').get(0).complete) {
			ImageLoaded1();
		}
		else {
			$('#drag-image1').on('load', function() {
				ImageLoaded1();
			});
		}
		
		// Image is loaded
		function ImageLoaded1() {
			_IMAGE_WIDTH1 = $("#drag-image1").width();
			_IMAGE_HEIGHT1 = $("#drag-image1").height();
			_IMAGE_LOADED1 = 1;	
		}
		
		$('#image-container1').on('mousedown', function(event) {
			/* Image should be loaded before it can be dragged */
			if(_IMAGE_LOADED1 == 1) { 
				_DRAGGGING_STARTED1 = 1;
		
				/* Save mouse position */
				_LAST_MOUSE_POSITION1 = { x1: event.pageX - _DIV_OFFSET1.left, y1: event.pageY - _DIV_OFFSET1.top };
			}
		});
		
		$('#image-container1').on('mouseup', function() {
			_DRAGGGING_STARTED1 = 0;
		});
		
		$('#image-container1').on('mousemove', function(event) {
			if(_DRAGGGING_STARTED1 == 1) {
				var current_mouse_position1 = { x1: event.pageX - _DIV_OFFSET1.left, y1: event.pageY - _DIV_OFFSET1.top };
				var change_x1 = current_mouse_position1.x1 - _LAST_MOUSE_POSITION1.x1;
				var change_y1 = current_mouse_position1.y1 - _LAST_MOUSE_POSITION1.y1;
		
				/* Save mouse position */
				_LAST_MOUSE_POSITION1 = current_mouse_position1;
		
				var img_top1 = parseInt($("#drag-image1").css('top'), 10);
				var img_left1 = parseInt($("#drag-image1").css('left'), 10);
		
				var img_top_new1 =0;
				var img_left_new1=0;
				 img_top_new1 = img_top1 + change_y1;
				img_left_new1 = img_left1 + change_x1;
		
				/* Validate top and left do not fall outside the image, otherwise white space will be seen */
				if(img_top_new1 > 0)
					img_top_new1 = 0;
				if(img_top_new1 < (_CONTAINER_HEIGHT1 - _IMAGE_HEIGHT1))
					img_top_new1 = _CONTAINER_HEIGHT1 - _IMAGE_HEIGHT1;
		
				if(img_left_new1 > 0)
					img_left_new1 = 0;
				if(img_left_new1 < (_CONTAINER_WIDTH1 - _IMAGE_WIDTH1))
					img_left_new1 = _CONTAINER_WIDTH1 - _IMAGE_WIDTH1;
		
				$("#drag-image1").css({ top: img_top_new1 + 'px', left: img_left_new1 + 'px' });
				//document.getElementById("demo1").innerHTML = img_left_new1 + ' '+ img_top_new1;
				var t2=img_top_new1;
				var l2=img_left_new1;
				var v2=t2+":"+l2;
				document.cookie="two="+v2;
				 
			}
		});
		
	</script>
	<script>

	</script>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

  

    <script  src="js/index.js"></script>
</body>
</html>