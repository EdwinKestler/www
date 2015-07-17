<?php
session_start();
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login with facebook</title>
   <!-- Add login URL in index.php -->
   <a class="btn btn-block btn-social btn-facebook" href="https://www.facebook.com/dialog/oauth?client_id=1492541474313250&redirect_uri=http://flatbox.io/facebook_login.php">Login with Facebook</a> 
 </head>
  <body>
  <?php if ($_SESSION['FBID']): ?>

              <!-- Add logout URL in home.php -->
<a class="btn btn-block btn-social btn-facebook" href="<?php echo $logoutURL; ?>">Logout</a> 

    <?php else: ?>     
             


    <?php endif ?>
  </body>
</html>