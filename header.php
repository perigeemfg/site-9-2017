<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      function echoSelectedClassIfRequestMatches($requestUri){
        $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
        if ($current_file_name == $requestUri) {
            echo 'class="selected"';
          }
      }
      function PageBG() {
        $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
        $pageid = 'id="'.$current_file_name.'"';
        echo $pageid;
      }
      ?>
    <meta charset="utf-8">
    <title>Perigee Manufacturing Company</title>
    <meta name="description" content="site description">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slideshow.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery.smoothState.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/slideshow.js"></script>
    <link rel="shortcut icon" href="favicon.ico" />
  </head>
  <body>
    <header <?=PageBG()?>>
      <div class="overlay">
        <div class="nav-bar">
          <div class="header-logo">
            <img src="images/long-logo.png" alt="Perigee Manufacturing Company">
          </div>
          <div class="header-message">
            <span>MANUFACTURERS OF HEXAGON NUTS MILLED FROM BAR AND PRECISION MACHINED PRODUCTS</span>
          </div>
        </div>
        <nav>
          <ul class="menu menu--inline menu--main">
            <li id="home"><a href="index.php">Home</a></li>
            <li <?=echoSelectedClassIfRequestMatches("capabilities")?> ><a href="capabilities.php">Capabilities</a></li>
            <li <?=echoSelectedClassIfRequestMatches("products")?> ><a href="products.php">Products</a></li>
            <li <?=echoSelectedClassIfRequestMatches("quality")?> ><a href="quality.php">Quality</a></li>
            <li <?=echoSelectedClassIfRequestMatches("about")?> ><a href="about.php">About</a></li>
            <li <?=echoSelectedClassIfRequestMatches("updates")?> ><a href="updates.php">Updates</a></li>
            <li <?=echoSelectedClassIfRequestMatches("employment")?> ><a href="employment.php">Employment</a></li>
            <li <?=echoSelectedClassIfRequestMatches("contact")?> ><a href="index.php#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

