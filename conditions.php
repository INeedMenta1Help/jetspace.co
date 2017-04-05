<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8" />
    <title>T&C | JetSpace</title><!-- !EDIT -->
    <meta name="description" content="Building your Websites. UX/UI and Web App Development" /><!-- !EDIT -->
    <meta property="og:url" content="http://JetSpace.co/" /><!-- Don't give file name if DirectoryIndex (leave blanl if normal page) -->
    <meta property="og:image" content="http://JetSpace.co/assets/media/images/content/thumbnail.png" />
    <meta property="og:image:width" content="1000" /><!--Edit depending on resolution of image (keep w and h the same)-->
    <meta property="og:image:height" content="1000" /><!-- keep width and height -->
    <base target="_parent" />
    <meta property="og:description" content="Building your Websites. UX/UI and Web App Development" /><!-- !EDIT -->
    <!-- BASIC INFO[end] -->

    <!--Local CSS[start]-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/master.scss" />
    <link rel="stylesheet" type="text/css" href="assets/css/mobile.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/nav.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/misc.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/contact-us.scss" />

    <!-- Local CSS[end] -->

    <!--External css sources[start]-->
    <link rel="stylesheet prefetch" href="//daneden.github.io/animate.css/animate.min.css" /> <!--ANIMATIONS-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" /><!--ICONS-->
    <!-- External css[end] -->

    <!--local font css[start]-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font.css" />
    <link rel="stylesheet" type="text/css" href="assets/fonts/logo.css" />
    <link rel="stylesheet" type="text/css" href="assets/fonts/misc.css" />
    <!--local font css[end]-->
    <!--Retrive head tags[start] -->
    <?php include 'head.php'; ?>
    <!--Retrive head tags[end] -->
    <!--JavaScript[start]-->
    <script type="text/javascript" src="assets/js/lib/framework.js"></script>
    <script type="text/javascript" src="assets/js/misc/misc.js"></script>
    <!-- JavaScript[end] -->

    <!--External js[start]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.js"></script><!--Fallback for local framework-->
    <!-- External js[end] -->
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <style>
    nav {
      position: fixed !important;
      top: 0 !important;
      -webkit-box-shadow:0 -5pt 30pt -5pt #000000;
      -moz-box-shadow:0 -5pt 30pt -5pt #000000;
           box-shadow:0 -5pt 30pt -5pt #000000;
    }
    </style>

    <div style="position: absolute; top: calc(400pt / 2 - 120pt + 60pt);  z-index: 6; text-align: center; width: 100%;">
    <p class="titles">Terms & Conditions</p>
   </div>
   <div class="slideshowOverlay">
   </div>
    <div>
      <div id="slideshow" >
         <div class="slide3 slide">
         </div>
         <div class="slide4 slide">
         </div>
         <div class="slide1 slide">
         </div>
         <div class="slide2 slide">
         </div>
       </div>
     </div>

<div class="container">

   <div class="row">
         <div class="col-md-12" style="margin-top: 55pt; text-align: center">
          <p class="sec2h">The terms and conditions you must agree to</p>
         </div>
           <div class="col-md-12" style="margin-bottom: 25pt; margin-top: 15pt; margin-right: 27pt; text-align: center;">

              <div class="sec2t" style="text-align: right; display: inline-block; margin-right: 10pt">
               <p></p>
               </div>

             <div class="sec2t" style="text-align: left; display: inline-block;">
               <p>1.1 We are not liable for any loss of data or business due to either server outage or corruption of storage. <br>

                  1.2 You are not responsible for the protection of your data and should make any necessary backups.<br>

                  1.3 You agree to not to use our service for any illegal or malicious purposes.<br>

                  1.4 You have no right to keep using our service if we deem your use unfit.<br>

                  1.5 You will not use our service to infringe on the rights of another, or break copyright laws.<br>

                  1.6 You will not use our service to spread:<br><ul>
                    <li> a) malicious code, computer viruses or anything harmful to a computer system.<br></li>
                    <li>b) any content which encourages criminal action or use of illegal substances or items.<br></li></ul>

                  1.7 We are not liable for the content on your website  if the law deems it unfit.<br>

                  1.8 We are not liable for any copyright infringement you may commit.<br>

                  1.9 We hold the right to remove content on your website without warning if we deem it unfit.<br>

                  2.1 You must be at least 16 years of age to use our services.<br>

                  2.2 Any access to another website or network must comply with our terms in sections: 1.3, 1.5 and 1.6.<br>

                  2.3 We are not responsible for any damages caused by hackers or malicious software.<br>

                  2.4 You acknowledge that the prices advertised are estimates.<br>

                  2.5 Any refunds made will only be partial in proportion to the hours already worked<br>
                   </p>
             </div>
           </div>
          </div>

       <hr class="minisep"/>
        </div>

  <div class="spacer"></div>

      <?php include 'footer.php'; ?>
      <?php include 'scripts.php'; ?>
<script>

    $("#slideshow > div:gt(0)").hide();

    setInterval(function() {
      $('#slideshow > div:first')
        .fadeOut(2000)
        .next()
        .fadeIn(2000)
        .end()
        .appendTo('#slideshow');
    },  6000);
  </script>
  </body>
</html>
