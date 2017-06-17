<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8" />
    <title>Portfolio | JetSpace</title><!-- !EDIT -->
    <meta name="description" content="Get an idea of what we do and see if you like our style" /><!-- !EDIT -->
    <meta property="og:url" content="https://jetspace.co/" /><!-- Don't give file name if DirectoryIndex (leave blanl if normal page) -->
    <meta property="og:image" content="https://jetspace.co/assets/media/images/content/thumbnail.png" />
    <meta property="og:image:width" content="1000" /><!--Edit depending on resolution of image (keep w and h the same)-->
    <meta property="og:image:height" content="1000" /><!-- keep width and height -->
    <base target="_parent" />
    <meta property="og:description" content="Get an idea of what we do and see if you like our style" /><!-- !EDIT -->
    <!-- BASIC INFO[end] -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <!--Local CSS[start]-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/master.css" />
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
	<style>
		 .line {
			display: inline-block;
			width: 15px;
			height: 15px;
			border-radius: 15px;
			background-color: #333;
		 }

		 .load-3 .line:nth-last-child(1) {
			animation: loadingC .6s .1s linear infinite;
		 }

		 .load-3 .line:nth-last-child(2) {
			animation: loadingC .6s .2s linear infinite;
		 }

		 .load-3 .line:nth-last-child(3) {
			animation: loadingC .6s .3s linear infinite;
		 }

		 @keyframes loadingC {
			0 {
				transform: translate(0, 0);
			}
			50% {
				transform: translate(0, 15px);
			}
			100% {
				transform: translate(0, 0);
			}
		 }
	</style>
	<div class="loadingContain2">
	  <div class="loadingPortfolio">
			<div class="load-3">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
		</div>
  </div>

    <?php include 'nav.php'; ?>
		<style>
		nav {
      z-index: 999;
			position: fixed !important;
			top: 0 !important;
			-webkit-box-shadow:0 -5pt 30pt -5pt #000000;
		  -moz-box-shadow:0 -5pt 30pt -5pt #000000;
		       box-shadow:0 -5pt 30pt -5pt #000000;
		}
		</style>
		<h1 class="isoHeading" style="
    	position: fixed;
    	top: 17%;
    	left: 4%;
    	z-index: 4;
    	text-transform: capitalize !important;
    	padding: 5pt;
    	color: #fff;
    	background:rgba(30, 30, 30, 0.8);
    	font-size: 70pt;
    	box-shadow: 34px 56px 94px -38px #000;
    	">Portfolio.</h1>
		<h1 class="isoHeading" style="
    	position: fixed;
    	top: 31%;
    	left: 14%;
    	z-index: 4;
    	padding: 5pt;
    	color: #fff;
    	background:rgba(30, 30, 30, 0.8);
    	font-size: 10pt;
    	box-shadow: 34px 56px 94px -38px #000;
			text-align: center;
    	">*Some pages are examples<br> not all are legitimate webpages</h1>
		<div style="
		position: fixed !important;
    background: rgba(255, 179, 179, 0.6);
    width: 200%;
    height: 67%;
    transform: rotateZ(-35deg);
    top: 11%;
    z-index: 2;
    left: -21%;"></div>
		<div style="
		position: fixed !important;
    background: rgba(20, 20, 20, 0.8);
    width: 200%;
    height: 100%;
    transform: rotateZ(-145deg);
    top: -1%;
    z-index: 1 !important;
    left: -101pt;"></div>
    <main>
			<div class="isolayer isolayer--scroll1 isolayer--shadow" style="z-index: 5;">
				<ul class="grid grid--effect-flip">

          <li class="grid__item">
            <a class="grid__link" href="http://worship.media/">
          		<img class="grid__img layer" src="assets/media/images/content/wireframe.png" alt="Wireframe Dummy" />
          		<img class="grid__img layer" src="assets/media/images/content/portfolio/worshipmedia.png" alt="011"/>
              <img class="grid__img layer" src="assets/media/images/content/portfolio/P_WM.svg" alt="01" />
              <span class="grid__title">Worship Media</span>
          	</a>
          </li>

          <li class="grid__item">
						<a class="grid__link" href="http://cuisine.jetspace.co/">
							<img class="grid__img layer" src="assets/media/images/content/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="assets/media/images/content/Dribbble1/2_1.jpg" alt="021" />
              <img class="grid__img layer" src="assets/media/images/content/portfolio/P_REST.svg" alt="01" />
              <span class="grid__title">Restaurant*</span>
						</a>
					</li>

					<li class="grid__item">
						<a class="grid__link" href="http://travel.jetspace.co/">
							<img class="grid__img layer" src="assets/media/images/content/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="assets/media/images/content/Dribbble1/3.jpg" alt="03" />
              <img class="grid__img layer" src="assets/media/images/content/portfolio/P_TRAVEL.svg" alt="01" />
              <span class="grid__title">Travel*</span>
						</a>
					</li>

          <li class="grid__item">
						<a class="grid__link" href="http://plumber.jetspace.co/">
							<img class="grid__img layer" src="assets/media/images/content/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="assets/media/images/content/Dribbble1/2.jpg" alt="03" />
              <img class="grid__img layer" src="assets/media/images/content/portfolio/P_PLUMB.svg" alt="01" />
              <span class="grid__title">Plumber*</span>
						</a>
					</li>

          <li class="grid__item">
						<a class="grid__link" href="http://university.jetspace.co/">
							<img class="grid__img layer" src="assets/media/images/content/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="assets/media/images/content/Dribbble1/2.jpg" alt="03" />
              <img class="grid__img layer" src="assets/media/images/content/portfolio/P_UNI.svg" alt="01" />
              <span class="grid__title">University*</span>
						</a>
					</li>

          <li class="grid__item">
						<a class="grid__link" href="http://personalpage.jetspace.co/">
							<img class="grid__img layer" src="assets/media/images/content/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="assets/media/images/content/Dribbble1/2.jpg" alt="03" />
              <img class="grid__img layer" src="assets/media/images/content/portfolio/P_PP.svg" alt="01" />
              <span class="grid__title">Personal Page*</span>
						</a>
					</li>

          <li class="grid__item">
						<a class="grid__link" href="http://broadcast.jetspace.co/">
							<img class="grid__img layer" src="assets/media/images/content/wireframe.png" alt="Wireframe Dummy" />
							<img class="grid__img layer" src="assets/media/images/content/Dribbble1/2.jpg" alt="03" />
              <img class="grid__img layer" src="assets/media/images/content/portfolio/P_BRO.svg" alt="01" />
              <span class="grid__title">Broadcasting*</span>
						</a>
					</li>

				</ul>
			</div>
		</main>
		<script src="assets/js/misc/imagesloaded.pkgd.min.js"></script>
		<script src="assets/js/misc/masonry.pkgd.min.js"></script>
		<script src="assets/js/misc/dynamics.min.js"></script>
		<script src="assets/js/misc/classie.js"></script>
		<script src="assets/js/misc/animOnScroll.js"></script>
		<script src="assets/js/misc/main.js"></script>
    <script>
		(function() {
			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}

			[].slice.call(document.querySelectorAll('.isolayer')).forEach(function(el) {
				new IsoGrid(el, {
					type : 'scrollable',
					transform : 'translateX(-15vw) translateY(275px) rotateX(45deg) rotateZ(45deg)',
					stackItemsAnimation : {
						properties : function(pos) {
							return {
								translateZ: (pos+1) * 50,
								rotateZ: getRandomInt(-3, 3)
							};
						},
						options : function(pos, itemstotal) {
							return {
								type: dynamics.bezier,
								duration: 500,
								points: [{"x":0,"y":0,"cp":[{"x":0.2,"y":1}]},{"x":1,"y":1,"cp":[{"x":0.3,"y":1}]}],
								//delay: (itemstotal-pos-1)*40
							};
						}
					},
					onGridLoaded : function() {
						classie.add(document.body, 'grid-loaded');
					}
				});
			});
		})();
		</script>
     <?php include 'scripts.php'; ?>
  </body>
</html>
