<!doctype html>
<html lang="en">
<?php
include 'config.php';

$con = mysqli_connect($host, $user, $password,$dbname);

session_start(); 
if(!$_SESSION['login_user']){ 
  header("Location:login.php"); 
  exit;
    }
    if(isset($_SESSION['login_user'])){ 
      if (is_numeric($_SESSION['login_user']))
      { header("Location:login.php"); 
        exit;
      }
  
  }
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
   }
   else{
   

    $sql3="SELECT w_id,main_pic_path,bride_name, groom_name,rand_no,cr_date,pay_suc,w_plan FROM `invyt_form_org` WHERE c_id= '".$_SESSION['login_user']."'";
    
    $det = mysqli_query($con,$sql3);
   
    
    mysqli_close($con);
}

$nm= explode('@', $_SESSION['login_user'], 2)

?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="Neat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="dashcss/neat.min.css?v=1.0">
  </head>
  <body>

    <div class="o-page">
      <header class="c-navbar u-mb-large">
        <a class="c-navbar__brand" href="#">
          <img src="https://image.ibb.co/mFQ8aU/logo.png">
          </a>

        <div class="c-dropdown dropdown u-mr-small u-ml-auto">
          
          
        </div>

        <div class="c-dropdown dropdown u-mr-medium">
          <a href="notifications.php">
          <div class="c-notification has-indicator dropdown-toggle" id="dropdownMenuToggle2" role="button">
            <i class="c-notification__icon feather icon-bell"></i>
          </div>
          </a>
        </div>

        <div class="c-dropdown dropdown">
          <div class="c-avatar c-avatar--xsmall dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
            <img class="c-avatar__img" src="https://localmarketingplus.ca/wp-content/uploads/2015/02/blue-head.jpg" alt="Adam Sandler">
          </div>

          <div class="c-dropdown__menu has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAvatar">
           <!-- <a class="c-dropdown__item dropdown-item" href="#">My Invyts</a>-->
            <a class="c-dropdown__item dropdown-item" href="edit_prof.php">Edit Profile</a>
            <a class="c-dropdown__item dropdown-item" href="logout.php">Log out</a>
          </div>
        </div>


      </header>

      <div class="container">
      <div class="row u-mb-xlarge">
      <?php
 $no=0;


 while($row = mysqli_fetch_array($det)) {
  $n=$row["w_id"];
  $eno=$n;
  if($row["cr_date"]!=''){
  $cr= explode(' ', $row["cr_date"]);
  }
  else{
      $cr=explode(' ', "_ _");
  }
  $sl="/";
  echo'
      
          <div class="col-lg-6" style="padding-bottom:18px;">
           ';if($row['pay_suc']==1 ){echo '<a href="https://invyt.in/'.$row["groom_name"].'weds'. $row["bride_name"].'_'.$row["rand_no"].'.html" target=_blank">';}echo '
            <div class="c-plan" style="background: url(uploads/'.$row["main_pic_path"].') no-repeat center center; background-size: cover; background-position: 0px 0px; height: 300px; width: 100%;border-radius: 6px; box-shadow: 0 4px 10px 2px rgba(0,0,0,0.3);">
                <center>
                    <h4  style="font-family: Montserrat; text-shadow: 2px 2px 4px #0f0f0f; color: #ffffff;">'.$row["cr_date"].'</h4>
                    <br><br>  <br><br>  <br><br><br>  
                    <h2  style="margin-bottom:10px; font-size: 25px; font-family:';echo" 'Montserrat'";echo ' , cursive; text-shadow: 2px 2px 4px #0f0f0f; color: #ffffff;">'.$row["groom_name"].' & '.$row["bride_name"].'</h3>
                </center>
              
                </div> 
           
            </a>
              <div class="u-justify-between u-flex-wrap">
            <center>';
            if($row['pay_suc']==1 ){
              $iu="https://invyt.in/".$row["groom_name"]."weds". $row["bride_name"]."_".$row["rand_no"].".html";
              $iu = str_replace(' ', '%20', $iu);
            // echo '<a href="finish.php?i_url='.$iu.'"  class="user__img1" data-toggle="tooltip" data-placement="bottom" ></a>';
             echo ' <a href="finish.php?i_url='.$iu.'" class="c-btn c-btn--warning u-mb-xsmall"  style="background: #8a3aff; width: 90px;">Share</a>&ensp;';
             
            }
            else{
echo'
            <button class="c-btn c-btn--warning u-mb-xsmall" data-toggle="modal" data-target="#modal-share" style="background: #8a3aff; width: 90px;">Share</button>&ensp;

                        <div class="c-modal c-modal--small modal fade" id="modal-share" tabindex="-1" role="dialog" aria-labelledby="modal-share">
                          <div class="c-modal__dialog modal-dialog" role="document">
                              <div class="c-modal__content">
                                  <div class="c-modal__body">
                                    <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                                        <i class="feather icon-x"></i>
                                    </span>

                                    <span class="c-icon c-icon--danger c-icon--large u-mb-small" style="background: #8a3aff;">
                                      <i class="feather icon-credit-card"></i>
                                    </span>
                                    <h3 class="u-mb-small">Please complete payment to share the invyt</h3>
                                    <div class="u-text-center">
                                      <a href="#0" class="c-btn c-btn--danger c-btn--outline u-mr-small" data-dismiss="modal" aria-label="Close" style="color: #8a3aff;">Cancel</a>
                                      <a href="update.php?row_id='.$row["w_id"].'" class="c-btn c-btn--danger" style="background: #8a3aff;">Pay Now</a>
                                    </div>
                                  </div>
                              </div>
                          </div>
                        </div>';
            }
            echo '<a href="';if($row["w_plan"]==2){echo 'p2/p2_update.php?row_id='.$row["w_id"].'"';}else{echo 'update.php?row_id='.$row["w_id"].'"';};echo '"  class="c-btn c-btn--warning u-mb-xsmall" style="background: #8a3aff; width: 90px;">Edit</a>&ensp;
            <a  class="c-btn c-btn--warning u-mb-xsmall" data-toggle="modal" data-target="#modal-delete" style="background: #8a3aff; width: 90px;">Delete</a>

                        <div class="c-modal c-modal--small modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete">
                          <div class="c-modal__dialog modal-dialog" role="document">
                              <div class="c-modal__content">
                                  <div class="c-modal__body">
                                    <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                                        <i class="feather icon-x"></i>
                                    </span>

                                    <span class="c-icon c-icon--danger c-icon--large u-mb-small">
                                      <i class="feather icon-alert-triangle"></i>
                                    </span>
                                    <h3 class="u-mb-small">Do you want to delete this invyt?</h3>
                                    
                                    <p class="u-mb-medium">By deleting this, you no longer have access to your invyt.</p>

                                    <div class="u-text-center">
                                      <a href="#" class="c-btn c-btn--danger c-btn--outline u-mr-small" data-dismiss="modal" aria-label="Close">Cancel</a>
                                      <a href="del.php?row_id='.$row["w_id"].'"  class="c-btn c-btn--danger">Delete</a>
                                    </div>
                                  </div>
                              </div>
                          </div>
                        </div>
            </center>       
          </div>
          </div>
          <br><br>
';
$no++;
 if($no%2==0){
   echo '<br>';
 }
}
?>
 </div>
          </div>
         
                     
        </div>
          
      </div>
    </div>
    
    <!-- Main JavaScript -->
    <script src="dashjs/neat.min.js?v=1.0"></script>
  </body>
</html>