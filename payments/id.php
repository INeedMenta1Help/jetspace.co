<?php session_start(); ?>
<html>
  <head>

  </head>

  <body>
    <form name="form" action="" method="post">
      <input type="text" name="cusID" id="cusID" placeholder="Your special ID, e.g. 'cus_C1YF53Ygh9hDf'" />
      <input type="submit" />
    </form>
    <?php
    if(isset($_POST['cusID'])) {
      $_SESSION['cusID'] = $_POST['cusID']
      header('Location: update.php');
    }
    ?>
  </body>
</html>
