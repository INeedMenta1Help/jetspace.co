<html>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('', true,''); ?> - Apoapsis</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <h1><?php wp_title('', true,''); ?></h1>
        <div class="bg"></div>
        <!-- your header, navigation bar and whatnot goes here -->
      </div><!-- header tag close -->
      <!-- don't close any open tags in this header sections as it
      is part of a much larger website, this file will be php
      included in the index.php file. -->
