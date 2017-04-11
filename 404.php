<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ERROR 404</title>
    <?php include 'head.php' ?>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <style>
      body, html {
      	height: 100%;
      	width: 100%;
      	overflow: hidden;
      	padding: 0;
      	margin: 0;
      	font-family: 'Varela Round';
      }
      #confused {
      	position: absolute;
      	bottom: 0;
      	left: 20%;
      	height: 60%;
      	z-index: 6;
      }
      #confused img {
      	position: absolute;
      	bottom: 0;
      	left: 0;
      	height: 100%;
      }

      #errorMsg {
      	margin: auto;
      	width: 100%;
      	position: absolute;
      	top: calc((50% - 404pt / 2) - 100pt);
      	z-index: 1;
      }
      #errorMsg span {
      	text-align: center;
      	display: block;
      	color: #ffa3a3;
      }
      #errorMsg span:nth-of-type(1) {
      	font-size: 40pt;
      	text-align: center;
      	position: absolute;
      	opacity: 0.6;
      	left: calc(50% - 380pt);
      }
      #errorMsg span:nth-of-type(2) {
      	font-size: 404pt;
      	text-align: center;
      }
      #errorMsg span:nth-of-type(3) {
      	font-size: 40pt;
      	position: absolute;
      	top: 404pt;
      	right: calc(50% - 350pt);
      }
    </style>
  </head>
  <body>
    <div id="confused"><img src="http://orig09.deviantart.net/4872/f/2016/174/d/0/travalo_by_greenanimator-da7f5zc.gif" /></div>
    <div id="errorMsg">
    	<span>Error: file not found.</span>
    	<span>404</span>
    	<span>Uh-oh, looks like you're lost!</span>
    </div>
  </body>
</html>
