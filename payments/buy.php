<!DOCTYPE html>
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
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/mobile.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/master.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/nav.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/misc.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/contact-us.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/index.css" />

      <!-- Local CSS[end] -->

      <!--External css sources[start]-->
      <link rel="stylesheet prefetch" href="//daneden.github.io/animate.css/animate.min.css" />
      <!--ANIMATIONS-->
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />
      <!--ICONS-->
      <!-- External css[end] -->

      <!--local font css[start]-->
      <link rel="stylesheet" type="text/css" href="assets/fonts/font.css" />
      <link rel="stylesheet" type="text/css" href="assets/fonts/logo.css" />
      <link rel="stylesheet" type="text/css" href="assets/fonts/misc.css" />
      <!--local font css[end]-->
      <!--Retrive head tags[start] -->
      <?php include '../head.php'; ?>
      <!--Retrive head tags[end] -->
      <!--JavaScript[start]-->
      <script type="text/javascript" src="assets/js/lib/framework.js"></script>
      <script type="text/javascript" src="assets/js/misc/misc.js"></script>
      <!-- JavaScript[end] -->

      <!--External js[start]-->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
      <!--Fallback for local framework-->
      <!-- External js[end] -->
  </head>

  <body>
    <h2>Payment Form</h2>

    <form id="buy-form" method="post" action="javascript:">

      <p class="form-label">First Name:</p>
      <input class="text" id="first-name" spellcheck="false"></input>

      <p class="form-label">Last Name:</p>
      <input class="text" id="last-name" spellcheck="false"></input>

      <p class="form-label">Email Address:</p>
      <input class="text" id="email" spellcheck="false"></input>

      <p class="form-label">Credit Card Number:</p>
      <input class="text" id="card-number" autocomplete="off"></input>

      <p class="form-label">Expiration Date:</p>
      <select id="expiration-month">
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
      </select>

      <select id="expiration-year">
        <?php
          $yearRange = 20;
          $thisYear = date('Y');
          $startYear = ($thisYear + $yearRange);

          foreach (range($thisYear, $startYear) as $year) {
            if ($year == $thisYear) {
              print '<option value="'.$year.'" selected="selected">' . $year . '</option>';
            } else {
              print '<option value="'.$year.'">' . $year . '</option>';
            }
          }
        ?>
      </select>

      <p class="form-label">CVC:</p>
      <input class="text" id="card-security-code" autocomplete="off"></input>

      <input id="buy-submit-button" type="submit" value="Place This Order »"></input>
    </form>
  </body>
</html>
