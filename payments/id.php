<?php session_start(); ?>
<html>
  <head>

  </head>

  <body>
    <?php
      header('Location: update.php');
    ?>
    <?php
      $_SESSION['cusID'] = $_POST['cusID']
    ?>
    <form name="form" action="" method="post">
      <input type="text" name="cusID" id="cusID" placeholder="Your special ID, e.g. 'cus_C1YF53Ygh9hDf'" />
      <input type="submit" />
    </form>
  </body>
</html>
