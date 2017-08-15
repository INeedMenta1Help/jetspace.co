<?php
session_start();
if(isset($_POST["cusID"])) {
  $_SESSION["cusID"] = trim($_POST["cusID"]);
  header('Location: update.php');
}
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Payment Method | JetSpace</title>
    <meta name="description" content="Get a look at what we're all about and see our FAQ section" />
    <meta property="og:url" content="https://jetspace.co/" />
    <!-- Don't give file name if DirectoryIndex (leave blanl if normal page) -->
    <meta property="og:image" content="https://JetSpace.co/assets/media/images/content/thumbnail.png" />
    <meta property="og:image:width" content="1000" />
    <!--Edit depending on resolution of image (keep w and h the same)-->
    <meta property="og:image:height" content="1000" />
    <!-- keep width and height -->
    <base target="_parent" />
    <meta property="og:description" content="Get a look at what we're all about and see our FAQ section" />
    <!-- BASIC INFO[end] -->

    <!--Local CSS[start]-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/mobile.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/master.css" />

    <link rel="stylesheet" type="text/css" href="./buy.css" />
    <link rel="stylesheet" type="text/css" href="./method.css" />
    <!-- Local CSS[end] -->

    <!--External css sources[start]-->
    <link rel="stylesheet prefetch" href="https://daneden.github.io/animate.css/animate.min.css" />
    <!--ANIMATIONS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />
    <!--ICONS-->
    <!-- External css[end] -->

    <!--local font css[start]-->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/font.css" />
    <link rel="stylesheet" type="text/css" href="../assets/fonts/logo.css" />
    <link rel="stylesheet" type="text/css" href="../assets/fonts/misc.css" />
    <!--local font css[end]-->
    <!--Retrive head tags[start] -->
    <?php include '../head.php'; ?>
    <!--Retrive head tags[end] -->

    <!--External js[start]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
    <!-- External js[end] -->
  </head>

  <body>
    <div class="logo">
     <img src="../assets/media/images/content/ApoapsisLG.svg" alt="Payment for your Website, ">
     <img src="../assets/media/images/content/animated-word-logo-black.svg" alt=" Jetspace LTD.">
    </div>

    <div class="methodbox" style="left: 7.5vw;">
      <h2>Card</h2>
        <p>Click here to pay by card for the deposit for your site, you will be redirected to the card paying page where you will be asked for a code which will be given in the email we sent you.<br>Services supported by Stripe&copy;</p>
        <img class="paybtn" src="../assets/media/images/paypal-button.png" />

        <img src="../assets/media/images/logo/checkout/stripe.svg" />
        <img src="../assets/media/images/logo/checkout/visa.svg" />
        <img src="../assets/media/images/logo/checkout/mastercard.svg" />
        <img src="../assets/media/images/logo/checkout/maestro.svg" />
    </div>

    <div class="seperator"></div>

    <div class="methodbox" style="left: 57.5vw;">
      <h2>Paypal</h2>
      <p>Click here to pay by card for the deposit for your site, you will be redirected to the card paying page where you will be asked for a code which will be given in the email we sent you.<br>Services supported by Stripe&copy;</p>
      <img src="../assets/media/images/logo/checkout/paypal.svg" />
      <img class="paybtn" src="../assets/media/images/paypal-button.png" />
    </div>
  </body>
</html>
