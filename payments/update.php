<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once('./updater.php');
  }
?>
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
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/mobile.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/master.css" />

    <link rel="stylesheet" type="text/css" href="./buy.css" />
    <!-- Local CSS[end] -->

    <!--External css sources[start]-->
    <link rel="stylesheet prefetch" href="https://daneden.github.io/animate.css/animate.min.css" />
    <!--ANIMATIONS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />
    <!--ICONS-->
    <!-- External css[end] -->

    <!--local font css[start]-->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/font.css" />
    <link rel="stylesheet" type="text/css" href="../assets/fonts/logo.css" />
    <link rel="stylesheet" type="text/css" href="../assets/fonts/misc.css" />
    <!--local font css[end]-->
    <!--Retrive head tags[start] -->
    <?php include '../head.php'; ?>
    <!--Retrive head tags[end] -->

    <!--External js[start]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.min.js"></script>
    <script src="https://js.stripe.com/v1/"></script>
    <script>
      Stripe.setPublishableKey('pk_live_Of7dcqCHZ6XPIwyos6Ti3K3u');
      $(document).ready(function() {
        function addInputNames() {
          // Not ideal, but jQuery's validate plugin requires fields to have names
          // so we add them at the last possible minute, in case any javascript
          // exceptions have caused other parts of the script to fail.
          $(".card-number").attr("name", "card-number")
          $(".card-cvc").attr("name", "card-cvc")
          $(".card-expiry-year").attr("name", "card-expiry-year")
        }

        function removeInputNames() {
          $(".card-number").removeAttr("name")
          $(".card-cvc").removeAttr("name")
          $(".card-expiry-year").removeAttr("name")
        }

        function submit(form) {
          // remove the input field names for security
          // we do this *before* anything else which might throw an exception
          removeInputNames(); // THIS IS IMPORTANT!
          // given a valid form, submit the payment details to stripe
          $(form['submit-button']).attr("disabled", "disabled")
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, function(status, response) {
            if (response.error) {
              // re-enable the submit button
              $(form['submit-button']).removeAttr("disabled")

              // show the error
              $(".payment-errors").html(response.error.message);
              // we add these names back in so we can revalidate properly
              addInputNames();
            } else {
              // token contains id, last4, and card type
              var token = response['id'];
              // insert the stripe token
              var input = $("<input name='stripeToken' value='" + token + "' style='display:none;' />");
              form.appendChild(input[0])
              // and submit
              form.submit();
            }
          });

          return false;
        }

        // add custom rules for credit card validating
        jQuery.validator.addMethod("cardNumber", Stripe.validateCardNumber, "Please enter a valid card number");
        jQuery.validator.addMethod("cardCVC", Stripe.validateCVC, "Please enter a valid security code");
        jQuery.validator.addMethod("cardExpiry", function() {
          return Stripe.validateExpiry($(".card-expiry-month").val(),
            $(".card-expiry-year").val())
        }, "Please enter a valid expiration");
        // We use the jQuery validate plugin to validate required params on submit
        $("#card-form").validate({
          submitHandler: submit,
          rules: {
            "card-cvc": {
              cardCVC: true,
              required: true
            },
            "card-number": {
              cardNumber: true,
              required: true
            },
            "card-expiry-year": "cardExpiry" // we don't validate month separately
          }
        });
        // adding the input field names is the last step, in case an earlier step errors
        addInputNames();
      });
    </script>
    <script src="buy.js"></script>
    <!--Fallback for local framework-->
    <!-- External js[end] -->
  </head>

  <body>
    <div class="payment">
      <?php
        if (isset($error)) {
            echo $error;
            echo "<br />";
        } elseif (isset($success)) {
            echo $success;
            echo "<br />";
        }
      ?>
      <h2>Payment Form</h2>
      <form action="" method="POST" id="card-form" style="display: none;">

        <div class="form-row">
          <label for="name" class="stripeLabel">Legal Name</label>
          <input type="text" name="name" class="required" />
        </div>

        <div class="form-row">
          <label for="email">E-mail</label>
          <input type="text" name="email" class="required" />
        </div>

        <div class="form-row">
          <label>Card Number</label>
          <input type="text" maxlength="20" autocomplete="off" class="card-number stripe-sensitive required" />
        </div>

        <div class="form-row">
          <label>CVC</label>
          <input type="text" maxlength="4" autocomplete="off" class="card-cvc stripe-sensitive required" />
        </div>

        <div class="form-row">
          <label>Expiration</label>
          <div class="expiry-wrapper">
            <select class="card-expiry-month stripe-sensitive required">
                  </select>
            <script type="text/javascript">
              var select = $(".card-expiry-month"),
                month = new Date().getMonth() + 1;
              for (var i = 1; i <= 12; i++) {
                select.append($("<option value='" + i + "' " + (month === i ? "selected" : "") + ">" + i + "</option>"))
              }
            </script>
            <span> / </span>
            <select class="card-expiry-year stripe-sensitive required"></select>
            <script type="text/javascript">
              var select = $(".card-expiry-year"),
                year = new Date().getFullYear();
        for (var i = 0; i < 12; i++) {
                select.append($("<option value='" + (i + year) + "' " + (i === 0 ? "selected" : "") + ">" + (i + year) + "</option>"))
              }
            </script>
          </div>
        </div>

        <button type="submit" name="submit-button">Submit</button>
        <span class="payment-errors"></span>
      </form>
    </div>
    <script>
      if (window.Stripe) $("#card-form").show()
    </script>
    <script>
      $('.payment').css({
        'top': 'calc(50% - ' + $('.payment').height() + 'px / 2)'
      });
    </script>
    <noscript><p>JavaScript is required for the registration form.</p></noscript>
  </body>

  </html>
