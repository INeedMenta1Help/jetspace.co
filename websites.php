        <?php
  if(isset($_POST['submitQuote'])){
      $toQ = "quote@jetspace.co";
      $fromQ = $_POST['emailQ'];
      $nameQ = $_POST['nameQ'];
      $locationQ = $_POST['locationQ'];
      $budgetQ = $_POST['budgetQ'];
      $subjectQ = "Quote Form Submission";
      $subject2Q = "Copy of your form submission from JetSpace Websites";
      $messageQ = "Person by the name of: " . $nameQ . "wants a quote, they is at the location of:  '" . $locationQ . "'  with a budget of:  '" . $budgetQ . "',  wrote the following in their website type and additional notes section: " . "\n\n" . $_POST['messageQ'] . "\n\nSent from 'Websites' page on jetspace.co from the 'Get Quote' button. \n\nBE SURE TO REPLY SAM!";
      $message2Q = "Here is a copy of your message you sent from the JetSpace Website, " . $name . " at the location of:  '" . $locationQ . "'  with a budget of:  '" . $budgetQ . "',  wrote the following in their website type and additional notes section: " . "\n\n" . $_POST['messageQ'];

      $headersQ = "From:" . $fromQ;
      $headers2Q = "From:" . $toQ;
      mail($toQ,$subjectQ,$messageQ,$headersQ);
      // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
  }
?>
<?php
  if(isset($_POST['submitWeb'])){
      $toW = "business@jetspace.co";
      $fromW = $_POST['emailW'];
      $nameW = $_POST['nameW'];
      $subjectW = "Get Website Form submission";
      $subject2W = "Copy of your 'Get website' form submission from Jetspace Websites";
      $messageW = "Person by the name of: " . $nameW . " (Email of: " . "$fromW" . ") wants a website. Website type is '" . $_POST['pageTypeText'] . "' and wrote the following in their additional notes: " . "\n\n" . $_POST['websiteNotes'] . "\n\nSent from 'Websites' page on jetspace.co from the 'Get Website' button. \n\nBE SURE TO REPLY SAM!";
      $message2W = "Here is a copy of your message you sent from the Jetspace Website,\n\n " . $nameW . " (Email of: " . "$fromW" . ") wrote the following in their additional notes: " . "\n\n" . $_POST['websiteNotes'] . "\n\nSent from 'Websites' page on jetspace.co from the 'Get Website' button.";

      $headersW = "From:" . $fromW;
      $headers2W = "From:" . $toW;
      mail($toW,$subjectW,$messageW,$headersW);
      // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
  }
?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8" />
    <title>Websites | JetSpace</title><!-- !EDIT -->
    <meta name="description" content="Order your desired bespoke website or get a free quote" /><!-- !EDIT -->
    <meta property="og:url" content="http://JetSpace.co/" /><!-- Don't give file name if DirectoryIndex (leave blanl if normal page) -->
    <meta property="og:image" content="http://JetSpace.co/assets/media/images/content/thumbnail.png" />
    <meta property="og:image:width" content="1000" /><!--Edit depending on resolution of image (keep w and h the same)-->
    <meta property="og:image:height" content="1000" /><!-- keep width and height -->
    <base target="_parent" />
    <meta property="og:description" content="Order your desired bespoke website or get a free quote" /><!-- !EDIT -->
    <!-- BASIC INFO[end] -->

    <!--Local CSS[start]-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/websites.scss" />
    <link rel="stylesheet" type="text/css" href="assets/css/master.scss" />
    <link rel="stylesheet" type="text/css" href="assets/css/mobile.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/nav.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/misc.css" />
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


    <div class="quoteForm" id="quoteFormContain">

      <form action="" method="post" class="material-form" id="quoteForm submitQuote">
        <h1 style="font-weight: 300;">Get a free Quote:</h1><i class="fa fa-times getQuoteOut"></i><br/>
        <section class="material-form-field">
          <div class="material-form-field-controls">
            <div class="form-field-controls-group">
              <input type="text" name="nameQ" id="nameQ" required="required" placeholder="Name" title="Please enter your name" class="material-form-field-input">
              <label for="nameQ" class="material-form-field-label">Name</label>
            </div>
          </div>
        </section>
        <section class="material-form-field">
          <div class="material-form-field-controls">
            <div class="form-field-controls-group">
              <input type="email" name="emailQ" id="emailQ" required="required" placeholder="Email" title="Please enter Email" class="material-form-field-input">
              <label for="emailQ" class="material-form-field-label">Email</label>
            </div>
          </div>
        </section>
        <br />
        <section class="material-form-field">
          <div class="material-form-field-controls">
            <div class="form-field-controls-group">
              <input type="text" name="locationQ" id="locationQ" required="required" placeholder="Location" title="Please enter Location" class="material-form-field-input">
              <label for="locationQ" class="material-form-field-label">Location</label>
            </div>
          </div>
        </section>
        <section class="material-form-field">
          <div class="material-form-field-controls">
            <div class="form-field-controls-group">
              <input type="text" name="budgetQ" id="budgetQ" required="required" placeholder="Budget" title="Please enter Budget" class="material-form-field-input">
              <label for="budgetQ" class="material-form-field-label">Budget</label>
            </div>
          </div>
        </section>
        <section class="quoteMore">
          <div><h1>What type of website? Any additional information?</h1></div>
          <textarea name="messageQ" type="text" ></textarea>
        </section>
        <input type="submit" name="submitQuote" class="formButton" id="formButton" value="Get Quote" />
      </form>
    </div>
    <div class="popupBack"></div>
    <div class="popup">
      <div class="popupContain">
        <div class="popupPage">
          <div class="popupContent">
            <h1>Get your website</h1>
            <h3>Simply fill in the fields below and we'll be in contact with you shortly, ready to discuss your needs and exactly what you want.</h3>
            <h2 class="pageSelectText" id="pageSelectText" name="pageSelectText"></h2>
            <div class="pageSelectImage"></div>
            <form id="submitWeb" class="getPageForm" action="" method="post">
              <section class="material-form-field">
                <div class="material-form-field-controls">
                  <div class="form-field-controls-group">
                    <input type="Name" id="nameW" name="nameW" required="required" placeholder="Name" title="Please enter your name" class="material-form-field-input">
                    <label for="nameW" class="material-form-field-label">Name</label>

                  </div>
                </div>
              </section>
              <section class="material-form-field">
                <div class="material-form-field-controls">
                  <div class="form-field-controls-group">
                    <input type="Email" id="emailW" name="emailW" required="required" placeholder="Email" title="Please enter your name" class="material-form-field-input">
                    <label for="emailW" class="material-form-field-label">Email</label>

                  </div>
                </div>
              </section>
              <div style="display: inline; visibilty: hidden;" class="pageTypeHiddenInput"></div>
              <section class="getPageMessage material-form-field">
                <h4>Please give information about the site</h4>
                <textarea name="websiteNotes"></textarea>
                <div style="margin-bottom: -15pt; margin-top: 5pt;">
                   <input type="checkbox" class="check" required style="padding-top: 10pt;">
                    <p style="font-size: 8pt; display: inline; padding-left: 4pt; padding-bottom: 10pt; font-family: roboto; font-weight: 300;">Please tick to confirm that you agree with our <br><span style="border-bottom: 1px dotted;"><a href="https://jetspace.co/conditions" target="_blank">terms and conditions</a></span></p>
                 </div>
                <input type="submit" name="submitWeb" class="getPageSubmit"/>
              </section>
            </form>
          </div>
        </div>
      </div>
    </div>
<!-- Title -->
   <div style="position: absolute; top: calc(400pt / 2 - 120pt + 60pt);  z-index: 6; text-align: center; width: 100%;">
     <p class="titles">Websites</p>
     <input type="button" value="Get a free Quote" name="clickToGetQuote" class="clickToGetQuote getQuote" />
   </div>
   <div class="slideshowOverlay">
   </div>
    <div>
      <div id="slideshow" >
         <div class="slide1 slide">
         </div>
         <div class="slide2 slide">
         </div>
         <div class="slide3 slide">
         </div>
         <div class="slide4 slide">
         </div>
       </div>
     </div>

<!-- Begin first row -->
      <div class="container">

        <div class="spacer"></div>
        <div class="col-md-12">
         <div class="center">
             <p class="sec2m">All of our plans include:</p><br>

             <div class="boxx">
             <div class="col-md-6">
               <ul class="points" style="display: inline-block; text-align: left">
                <li>Web hosting.</li>
                <li>Unlimited private email services.</li>
                <li>Visitor tracking and analytics.</li>
                <li>Any domain you desire (.com .org .co)</li>
               </ul>
             </div>

             <div class="col-md-6" style="display: inline-block; text-align: left">
               <ul class="points">
                 <li>A fully bespoke design.</li>
                 <li>Two concept designs (more if needed)</li>
                 <li>SEO Services</li>
                 <li>Revisions to the site by us</li>
               </ul>
             </div>

           </div>
         </div>
       </div>


        <div class="row">
          <div class="col-md-12">
            <div class="spacer"></div>
            <div class="center">
              <p class="sec2h">Simple plans:</p>
              <h2 style="margin-top: -10pt; margin-bottom: 10pt;">Here are our most simple plans, for quick setups with minimum prices.</h2>

            <div class="plansWrap" style="padding-top: 30pt">

<!-- Card 1 -->
              <div class="webPlan plan">
                <div class="planHead">
                  <div class="planHeadContain">
                    <span class="planHeadTxt"><span class="cardHeadOne">One Page Site</span><span class="planSubHead">One page to leave the viewer stunned.</span></span>
                  </div>
                </div>
                <div class="planContent">
                  <img src="/assets/media/images/icons/browser.svg" style="width: 90pt"/>
                  <div class="planPrice">
                    <span>£99</span><span><i>ca.</i></span>
                    <span><i>£12 a month to maintain</i></span>
                  </div>
                  <div class="planDescription"><span>For only £12 / month we'll build your page, whether it be a simple landing page, personal website, something just for fun or even a sort of online business card. We'll be there to make changes whenever you request.</span></div>
                  <button class="btn2 popuper" id="pageSelecter1">Get your Page</button>
                </div>
              </div>

<!-- Card 2-->
              <div class="webPlan plan">
                <div class="planHead">
                  <div class="planHeadContain">
                    <span class="planHeadTxt"><span class="cardHeadTwo">Multipage Site</span><span class="planSubHead">Spread knowledge, raise awareness.</span></span>
                  </div>
                </div>
                <div class="planContent">
                  <img src="/assets/media/images/icons/info.svg" style="width: 90pt"/>
                  <div class="planPrice">
                    <span>£199</span><span><i>ca.</i></span>
                    <span><i>£19 a month to maintain</i></span>
                  </div>
                  <div class="planDescription"><span>At a price of only £19 per month you'll get a fully managed multiple-page website, whether that be your own recipe website or a radio host show you'd like to broadcast you'd like to share and don't worry, you'll be able to edit the site afterwards as well.</span></div>
                  <button class="btn2 popuper" id="pageSelecter2">Get your Site</button>
                </div>
              </div>

 <!-- Card 3-->
              <div class="webPlan plan">
                <div class="planHead">
                  <div class="planHeadContain">
                    <span class="planHeadTxt"><span class="cardHeadThree">Budget E-Commerce</span><span class="planSubHead">E-Commerce at a bargain.</span></span>
                  </div>
                </div>
                <div class="planContent" >
                  <img src="/assets/media/images/icons/register.svg" style="width: 90pt" />
                  <div class="planPrice">
                    <span>£299</span><span><i>ca.</i></span>
                    <span><i>£29 a month to maintain</i></span>
                  </div>
                  <div class="planDescription"><span>For £29 /mo you can get a starters e-commerce store, an online market for small businesses with a small budget. You can be assured that with your new e-commerce website, you'll have customers in no time. </span></div>
                  <button class="btn2 popuper" id="pageSelecter3">Get your Site</button>
                </div>
              </div>

            </div>
          </div>
        </div>
<!-- End first row -->

<!-- Begin second row -->
        <div class="row">
          <div class="col-md-12">
            <div class="spacer"></div>
            <div class="center">
              <p class="sec2h">Super plans:</p>
              <h2>Some of our most popular plans, for advanced setups with style.</h2>
            </div>

            <div class="plansWrap">

<!-- Card 4 -->
              <div class="serverPlan plan">
                <div class="planHead">
                  <div class="planHeadContain">
                    <span class="planHeadTxt"><span class="cardHeadFour">Booking Plan</span><span class="planSubHead">For Reservations and Business.</span></span>
                  </div>
                </div>
                <div class="planContent">
                  <img src="/assets/media/images/icons/hotel.svg" style="width: 82pt"/>
                  <div class="planPrice">
                    <span>£399</span><span><i>ca.</i></span>
                    <span><i>£34 a month to maintain</i></span>
                  </div>
                  <div class="planDescription"><span>For £34 per month you can have a system for your business for customer reservations. You can get customers a place, if you're a restaurant or a hotel, we're here to help you with this plan.</span></div>
                  <button class="btn2 popuper" id="pageSelecter4">Get your Site</button>
                </div>
              </div>

<!-- Card 5 -->
              <div class="serverPlan plan">
                <div class="planHead">
                  <div class="planHeadContain">
                    <span class="planHeadTxt"><span class="cardHeadFive">Premium E-Commerce</span><span class="planSubHead">Advertise & Sell your Products.</span></span>
                  </div>
                </div>
                <div class="planContent" >
                  <img src="/assets/media/images/icons/e-shop.svg" style="width: 85pt"/>
                  <div class="planPrice">
                    <span>£549</span><span><i>ca.</i></span>
                    <span><i>£39 a month to maintain</i></span>
                  </div>
                  <div class="planDescription"><span>Our most prestigious plan avaliable, with this plan you can have an entire online market to sell what you desire. You can sit back, relax and let us do the work for your online business, E-commerce has never been simpler.</span></div>
                  <button class="btn2 popuper" id="pageSelecter5">Get your Site</button>
                </div>
              </div>

 <!-- Card 6 -->
              <div class="serverPlan plan">
                <div class="planHead">
                  <div class="planHeadContain">
                    <span class="planHeadTxt">Other<span class="planSubHead">Anything you like, if you're not sure.</span></span>
                  </div>
                </div>
                <div class="planContent" >
                  <img src="/assets/media/images/icons/other.svg" style="width: 85pt"/>
                  <div class="planPrice">
                    <span>?</span><span><i> hours</i></span>
                    <span><i>Get a free quote below</i></span>
                  </div>
                  <div class="planDescription"><span>Your bespoke, personal, professional website just how you would like it. Fill in the free quote form and speak closely with us so we can build exactly what you would like for dream website.</span></div>
                  <button name="clickToGetQuote" class="clickToGetQuote btn2">Get a Free Quote</button>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
          <div class="spacer"></div><div class="spacer"></div></div>

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
