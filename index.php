<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
  <head>
    <meta charset="utf-8" />
    <title>JetSpace｜Web Design</title>
    <meta name="description" content="Jetspace is a web design company that professionally creates and manages bespoke websites that are modern, responsive and most importantly, affordable." />
    <meta property="og:url" content="https://jetspace.co/" /><!-- Don't give file name if DirectoryIndex (leave blanl if normal page) -->
    <meta property="og:image" content="https://jetspace.co/assets/media/images/content/thumbnail.png" />
    <meta property="og:image:width" content="1000" /><!--Edit depending on resolution of image (keep w and h the same)-->
    <meta property="og:image:height" content="1000" /><!-- keep width and height -->
    <base target="_parent" />
    <meta property="og:description" content="Jetspace is a web design company that professionally creates and manages bespoke websites that are modern, responsive and most importantly, affordable." />
    <!-- BASIC INFO[end] -->

    <!--Local CSS[start]-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/mobile.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/master.scss" />
    <link rel="stylesheet" type="text/css" href="assets/css/homenav.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/misc.css" />
    <!-- Page specific CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/index.scss" />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/84/three.min.js" charset="utf-8"></script>

    <script type="text/javascript" src="assets/js/lib/framework.js"></script>
    <script type="text/javascript" src="assets/js/misc/misc.js"></script>
    <!-- JavaScript[end] -->

  </head>

  <body class="index">
  <div class="loadingContain">
	  <div class="loading">Loading</div>
  </div>

    <header style='position: fixed; top:0;' class='header' id="header">

      <script>
    			var pauseT = 5000;
    			var speed = 800;
    			setInterval(function() {
    				$('#quotes > div:first')
    					.animate({ 'opacity': 0 }, speed)
    					.next()
    					.animate({ 'opacity': 1 }, speed)
    					.end()
    					.appendTo('#quotes');
    			},  pauseT);
    		</script>
      <div class='mainquote'>
        <div id="quotes">
				<div style="opacity:1;">
					 <i>Cheapest quality Web Designers out there.<i class="em em---1"></i><h4>Company Review</h4></i>
				</div>
				 <div>
					  <i>"I'll certainly be recommending this to all of my friends!"<h4>- Samuel, @EnglishMilk</h4></i>
				</div>
				<div>
					 <i>"Amazing completion time and quality!"<h4>- Harry, @HarryHockton</h4></i>
				</div>
			</div>
		</div>

      <div class='logo, aposvg'>
        <object type='image/svg+xml' data='assets/media/images/content/logo.svg' style='width: 100%; height: 100%; margin-top: -60pt;'></object>
      </div>
			<div>
				<img class="apolg" src="/assets/media/images/content/ApoapsisLG.svg">
			</div>
      <div style="position: absolute; z-index: 10; left: 23%; top: 30%">
        <div>
         <div style="left: 20pt; top: 35%">
         <!-- <h6 style="text-transform: uppercase;color: #fff; font-size: 25pt; text-shadow: -3pt 3pt #222; letter-spacing:-1px; font-family: gt_walsheim_black;">Delivering your Websites,<br  />Wherever you may be.</h6> -->
     		 </div>
    		</div>
  		</div>
      <?php
        $files = glob('./assets/backgrounds/*.php');
        $random_file = $files[array_rand($files)];
        include($random_file);
      ?>
      <div class="scroll">
        <div class="mouse">

          <div class="mouse-icon">
            <span class="mouse-wheel"></span>
          </div>

        </div>
      </div>
    </header>

    <div class="homenav">
        <ul>
          <li><div><a href="/"          >Home       </a></div></li>
          <li><div><a href="/websites"  >Websites   </a></div></li>
          <li><div><a href="/portfolio" >Portfolio  </a></div></li>
          <li><div><a href="/about"     >About      </a></div></li>
          <li><div><a href="/contact-us">Contact Us </a></div></li>
        </ul>
    </div>

    <div id="websites" class="about">
      <div class="container ContentContainer">
        <div class="row">
          <div class="col-md-12">
            <div class="spacer"></div>
             <div class="webConstruct">
              <p>Bespoke Web Design, down to the <i class="highlight">finest</i> details.</p>
              <img src="https://assets-cdn.github.com/images/modules/site/open-source-ill-watch.png" />
              <p>We are serious about web design & development.</p>
              <div class="Wdescription" >
                <span>Let's face it, if you're running a serious business these days or even just a source for
                  information, an adequate website is crucial. Jetspace is a web design and development company that
                  creates every type of website and allows the real growth of business in todays world,
                   if you don't have a website, don't hope to be flourishing much in todays technology and
                   information-centric world. We know what comprises the best website and how to achieve it. This
                   development and design are time consuming and difficult, but necessary in the modern world's
                   standards, we are here to help aid that process.<br /><br /><div>
                    <div class="row" style="display: block; width: 100%margin: 2em 0;">
                     <div class="col-md-4 pictureList" style="">
                        <img src="https://assets-cdn.github.com/images/modules/site/home-ill-build.png" />
                     </div>
                     <div class="col-md-8" style="display: table-cell; vertical-align: middle; padding: 2rem 0;">
                     <span style="color: #666;">We hand craft each
                       website individually using pure computer code to achieve the highest level of detail, perfection
                       and originality using languages such as HTML, CSS alongside with preprocessors such as SASS.
                       We also use libraries and frameworks such as Bootstrap, JQuery, Angular, Node and React JS while also
                       using alternatives such as CoffeScript, an other processor.</span></div>
                     </div>
                    </div>
                       <div class="row" style="width: 100%;margin: 2em 0;">
                         <div class="col-md-4 pictureList" style=""><img src="https://assets-cdn.github.com/images/modules/site/home-ill-platform.png" style=""/></div>
                         <div class="col-md-8" style="display: table-cell; vertical-align: middle; padding: 2rem 0;"><span style="color: #666;">All this with years of
                           experience ensures you the best website that will be exactly what you need. We dedicate
                           a lot of time towards design, User Interface (UI) and the experience whilst using your site. These are very vital
                           elements as they represent the aesthetic and user friendliness of the company the site is representing.</span>
                         </div>
                       </div>

                           <div class="row" style="display: block; width: 100%;margin: 2em 0;">
                             <div class="col-md-12">
                           <br />All together this will ensure a maximal rate of customers and certify the highest quality
                           website for a low price, two things that are very important when running a business.</span>
                         </div>
                       </div>
                  </div>
             </div>
          </div>
        </div>
      </div>
      <div class="twoBoxWide">
      <div class="container">
          <div style="margin-top: 10rem; margin-bottom: 10rem;">
            <div class="row pictureList" style="display: block; margin: 12em 0;">
              <div class="col-md-4"><img src="https://jetspace.co/assets/media/images/icons/workCase.svg" /></div>
              <div class="col-md-8">
              <h1 class="sec2h">It's <!--<i>easy</i>--> easy to work with us.</h1>
              <p class="sec2t">Our services are not only of the highest standard, but also surprisingly simple, it all depends
                 on what you want. If you simply need a website as a secondary source of information
                  then we'll do all the heavy lifting while you tell us what you what. If your company's primary view
                   is over the web, we'll help you create a website that is most suitable for your firm and themed exactly
                    to your needs and content, ensuring your clients' get an excellent experience and impression of your company,
                     this is crucial to a company.</p>
                  </div>
            </div>
            <div class="row pictureList" style="display: block; margin: 12em 0;">
              <div class="col-md-4"><img src="https://jetspace.co/assets/media/images/icons/diamond.svg" /></div>
              <div class="col-md-8">
              <h1 class="sec2h">Guaranteed quality.</h1>
              <p class="sec2t">We have professionals with years of experience working together in harmony to form a perfectly reliable
                 website and web server to ensure your website is as user friendly, easy to read and is straight to the point.
                  We certify your site'll stay online at all the right times, all these aspects of a website are crucial to your users and/or clients. With all these vital
                  concepts combined you can feel safe knowing your website is to the highest modern standards.</p>
              </div>
            </div>
            <div class="row pictureList" style="display: block; margin: 12em 0;">
              <div class="col-md-4"><img src="https://jetspace.co/assets/media/images/icons/doughnut.svg" /></div>
              <div class="col-md-8">
              <h1 class="sec2h">Relax, we'll manage it for you.</h1>
              <p class="sec2t">You needn't worry about anything when you're with Jetspace. Any trouble with your website,
                 we'll be on the case as soon as we or you notice, we're only an e-mail away. If a problem arises or you are in need of support
                 Jetspace will handle any and all problems that presents itself. With rapid fixing and troubleshooting you can
                  remain ensured that your website is in good hands and safe at all times. Security, usability and
                   consistency is of utmost importance to us.</p>
                </div>
            </div>
          <hr class="miniSep">
          <h1 class="techHeader">Technologies we use:</h1>
          <p class="techHeaderSub">These are only some of the many technologies we use out of many frameworks and languages. You name it, we <a href="/code" class="link" >code</a> it.</p><br />
          <div class="langWrap">
            <img class="langIcons" src="https://jetspace.co/assets/media/images/icons/html5.svg" />
            <img class="langIcons" src="https://jetspace.co/assets/media/images/icons/jquery.gif" />
            <img class="langIcons" src="https://jetspace.co/assets/media/images/icons/sass.svg" />
            <img class="langIcons" src="https://jetspace.co/assets/media/images/icons/nodejs.svg" />
            <img class="langIcons" src="https://jetspace.co/assets/media/images/icons/rails.svg" />
            <img class="langIcons" src="https://jetspace.co/assets/media/images/icons/django.svg" />
            <img class="langIcons" src="https://jetspace.co/assets/media/images/icons/php-1.svg" />
            <img class="langIcons" src="https://jetspace.co/assets/media/images/icons/github.png" />
          </div>
          <a href="/code"><button class="langBtn">See more</button></a>
      </div>
    </div>
    </div>
    <?php include 'footer.php'; ?>
    </div>
    <?php include 'scripts.php'; ?>
  </body>
</html>
