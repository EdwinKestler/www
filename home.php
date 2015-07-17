<?php if ($_SESSION["new_user"] == "yes") { ?>
    <h2>Thank you <?php echo $_SESSION["name"] ?>, for registering with us!!!</h2>
  <?php } else { ?>
    <h2>Welcome back <?php echo $_SESSION["name"] ?>!!!</h2>
<?php } ?>
<h5>Your email id is: <span style="text-decoration:underline;"><?php echo $_SESSION["email"]; ?></span></h5>
