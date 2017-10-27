<html>
  <head>
    <meta charset="utf-8" />
    <title>PayPal Monthly Subscription | JetSpace</title>
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
    <!-- External js[end] -->
  </head>

  <body>
     <div class="logo">
       <img src="../assets/media/images/content/ApoapsisLG.svg" alt="Payment for your Website, ">
       <img src="../assets/media/images/content/animated-word-logo-black.svg" alt=" Jetspace LTD.">
     </div>
     <div class="payment">
       <h2>PayPal Monthly Subscription</h2>
       <p>Click the PayPal button to set up the monthly subscription:</p>
       <br />
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="text-align: center;">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="K29RP4YUK58QW">
<input type="image" src="https://jetspace.co/assets/media/images/paypal-button.png" border="0" style="width: 200px;" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form><br />
     </div>
     <script>
       $('.payment').css({
         'top': 'calc(50% - ' + $('.payment').outerHeight() + 'px / 2)'
       });
     </script>
  </body>
</html>
