<!doctype html>

<?php
     include 'config.php';
     $con = mysqli_connect($host, $user, $password,$dbname);
      session_start(); 
      if(!$_SESSION['login_user']){ 
       header("Location:login.php"); 
         exit; }
       
       
    ?>

<html lang="en">
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
            <a class="c-dropdown__item dropdown-item" href="dash.php">My Invyts</a>
            <a class="c-dropdown__item dropdown-item" href="edit_prof.php">Edit Profile</a>
            <a class="c-dropdown__item dropdown-item" href="logout.php">Log out</a>
          </div>
        </div>


      </header>

      <div class="container">
          <div class="row u-mt-medium">
        <div class="col-12">
          <h3 class="u-mb-small">Notifications</h3>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script>

          function funAct(gid,rev){
              var r;
              if(rev==0){
                  r=1;
              }
              else{
                  r=0;
              }
              alert(gid);
            $.ajax({
      url: 'http://localhost/invyt01/not_act.php',
      type: 'post',
      data: 'g_id='+gid+'&rev='+r,
      success: function(output) 
      {
          alert('success, server says '+output);
      }, error: function()
      {
          alert('something went wrong, rating failed');
      }
   });

   
          }
      </script>

      <div class="row">
        <div class="col-12">
          <div class="c-table-responsive@wide">
                <table class="c-table">
                  <thead class="c-table__head">
                    <tr class="c-table__row">
                      <th class="c-table__cell c-table__cell--head">Name</th>
                      <th class="c-table__cell c-table__cell--head">Message</th>
                      <th class="c-table__cell c-table__cell--head">Actions</th>
                    </tr>
                  </thead>
<?php
  $sql="SELECT w_id FROM `invyt_form_org` WHERE c_id= '".$_SESSION['login_user']."'";
  $det = mysqli_query($con,$sql);
  while($row0 = mysqli_fetch_array($det)) {
 $w=$row0["w_id"];
  $sql2="SELECT * FROM `invyt_greetings` WHERE w_id=".$w;
  $det2 = mysqli_query($con,$sql2);
 // $_SESSION['login_user']= $user_email;
  while($row = mysqli_fetch_array($det2)) {
    $g_id=$row["g_id"];
     $g_name=$row["g_name"];
     $g_pic=$row["pic_path"];
     $g_msg=$row["g_msg"];
     $g_date=$row["g_date"];
     $is_rev=$row["is_rev"];
 
echo'
                  <tbody>

                    <tr class="c-table__row">
                      <td class="c-table__cell">
                        <div class="o-media">
                          <div class="o-media__img u-mr-xsmall">
                            <div class="c-avatar c-avatar--small">
                              <img class="c-avatar__img" src="p2/uploads/wishes/'.$g_pic.'" alt="Jessica Alba">
                            </div>
                          </div>
                          <div class="o-media__body">
                            <h6>'.$g_name.'</h6>
                            <p>'. $g_date.'</p>
                          </div>
                        </div>
                      </td>
                      <td class="c-table__cell">'.$g_msg.'</td>
                      <td class="c-table__cell">
                       
                       <!-- <a href="not_act.php?app=1" class="c-btn c-btn--success u-mb-xsmall"  style="width: 90px;">Approve</a>&ensp;
                        <a href="not_act.php?dis=1" class="c-btn c-btn--warning u-mb-xsmall" style="width: 90px;">Disable</a>&ensp;-->
                        <div class="c-choice c-choice--checkbox">
                        <input class="c-choice__input" id="checkbox1" type="checkbox" onclick="funAct('.$g_id.','.$is_rev.')" name="act" value="1" ';if($is_rev==1){echo "checked";}else {echo "";} echo'><label class="c-choice__label" for="checkbox1"> Approve<br></label>
                        </div>
                        <a  class="c-btn c-btn--danger u-mb-xsmall" data-toggle="modal" data-target="#modal-delete" style="width: 90px;">Delete</a>

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
                                                <h3 class="u-mb-small">Do you want to delete this comment?</h3>
                                                <div class="u-text-center">
                                                  <a href="#" class="c-btn c-btn--danger c-btn--outline u-mr-small" data-dismiss="modal" aria-label="Close">Cancel</a>
                                                  <a href="not_act.php?del=1&g_id='.$g_id.'" class="c-btn c-btn--danger">Delete</a>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                    
                      </td>
                    </tr>';
  }
}
?>
                  </tbody>
                
                </table>
              </div>
        </div>
      </div>
        </div>
    </div>
    
    <!-- Main JavaScript -->
    <script src="dashjs/neat.min.js?v=1.0"></script>
  </body>
</html>