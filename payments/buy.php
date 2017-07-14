<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') require_once('./payer.php'); ?>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8" />
    <title>Payments | JetSpace</title>
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
      <script src="https://js.stripe.com/v1/"></script>
      <script>
        Stripe.setPublishableKey('pk_live_Of7dcqCHZ6XPIwyos6Ti3K3u');
      </script>
      <script src="buy.js"></script>
      <!--Fallback for local framework-->
      <!-- External js[end] -->
  </head>

  <body>
    <div class="payment">
      <h2>Payment Form</h2>
      <?php
        if (isset($error)) {
          echo $error;
        } elseif (isset($success)) {
          echo $success;
        }
      ?>
      <form action="" method="POST">
        <script
          src="https://checkout.stripe.com/checkout.js"
          class="stripe-button"
          data-key="pk_live_Of7dcqCHZ6XPIwyos6Ti3K3u"
          data-name="JETSPACE LTD."
          data-panel-label="Set Card Details"
          data-label="Set Card Details"
          data-allow-remember-me=true
          data-locale="auto">
        </script>
      </form>
    </div>
    <script>
      $('.payment').css({
        'top': 'calc(50% - ' + $('.payment').height() + 'px / 2)'
      });
    </script>
  </body>
</html>
