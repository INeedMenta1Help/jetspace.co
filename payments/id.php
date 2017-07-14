<?php
  session_start();
?>

<html>
  <head>
    <link rel="stylesheet" href="buy.css">
  </head>

  <body>
    <?php
      if(isset($_POST["cusID"])) {
        $_SESSION["cusID"] = $_POST["cusID"];
        header('Location: update.php');
      }
     ?>
     <div class="logo">
       <img src="../assets/media/images/content/ApoapsisLG.svg" alt="Payment for your Website, ">
       <img src="../assets/media/images/content/animated-word-logo-black.svg" alt=" Jetspace LTD.">
     </div>
     <div class="payment">
       <h2>Special ID</h2>
       <form action="" method="POST" id="card-form" style="display: none;">
         <div class="form-row">
           <label>CVC</label>
           <input type="text" name="cusID" id="cusID" placeholder="cus_C1YF53Ygh9hDf" />
         </div>

         <button type="submit" name="submit-button">Submit</button>
       </form>
     </div>
  </body>
</html>
