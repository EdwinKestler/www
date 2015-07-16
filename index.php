<?php
session_start(); 
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login with facebook</title>
    <meta charset="utf-8" />
    <!-- Our CSS stylesheet file -->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />

    <!-- Including Open Sans Condensed from Google Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" />

    <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
 </head>
  
  <body>
  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
<div class="container">
<div class="hero-unit">
  <h1>Hello <?php echo $_SESSION['USERNAME']; ?></h1>
  <p>Welcome to "facebook login" tutorial</p>
  </div>
  
  <nav id="colorNav">
  <ul>
  <li class="red">
    <a href="#" class="icon-cogs"></a>
    <ul>
      <li>
        <a href="#">Settings</a>
      </li>
    </ul>
  </li>
  <li class="blue">
    <a href="#" class="icon-twitter"></a>
    <ul>
      <li>
        <a href="http://flatbox.io/iot">iot</a>
      </li>
    </ul>
  </li>
  <li class="yellow">
    <a href="#" class="icon-beaker"></a>
    <ul>
      <li>
        <a href="http://tutorialzine.com/category/tutorials/">Everything else</a>
      </li>
    </ul>
  </li>
  <li class="purple">
    <a href="#" class="icon-envelope"></a>
    <ul>
      <li>
        <a href="http://tutorialzine.com/contact/">Contact us</a>
      </li>
    </ul>
  </li>
  </ul>
  </nav>
  
<div class="span4">
  
 <ul class="nav nav-list">
<li class="nav-header">Image</li>
	<li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
<li class="nav-header">Facebook ID</li>
<li><?php echo  $_SESSION['FBID']; ?></li>
<li class="nav-header">Facebook fullname</li>
<li><?php echo $_SESSION['FULLNAME']; ?></li>
<li class="nav-header">Facebook Email</li>
<li><?php echo $_SESSION['EMAIL']; ?></li>
<div><a href="logout.php">Logout</a></div>
</ul>
    
    <?php else: ?>     <!-- Before login --> 
<div class="container">
<h1>Login with Facebook</h1>
           Not Connected

    <nav id="colorNav">
      <ul>
        <li class="green">
          <a href="#" class="icon-home"></a>
          <ul>
            <li>
              <a href="fbconfig.php">Login with Facebook</a>
             </li>
           </ul>
        </li>
      </ul>
    </nav>
        

    <footer>
      <h2>
        <i>flatbox:</i> CSS Site
      </h2>
      <a class="tzine" href="http://tutorialzine.com/2012/10/css3-dropdown-menu/">
        Head on to <i>
          Tutorial<b>zine</b>
        </i> to download this example
      </a>
     
    </footer>
 
        
    <?php endif ?>
  </body>
</html>
