<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/lib/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/app/core/core-master.js"></script>
<script type="text/javascript" src="assets/js/app/pages/pages-master.js"></script>
<script src="assets/js/app/core/logo.js"></script>

<script>
  // Scroll to Fade header
  // $(window).scroll(function(){
  //   $(".header").css("opacity", 1 - ($(window).scrollTop()-300) / 1000);
  // });
  // Logo Animation JavaScript
  window.onload = function() {
    window.blackbox(document.getElementsByTagName('header')[0]);
  };
</script>
<script>
   $(document).ready(function(){
     $(window).bind('scroll', function() {
    var navBarHeight = $('.nav').height();
    var navHeight = $( window ).height() - navBarHeight;
       if ($(window).scrollTop() > navHeight) {
         $('nav').addClass('fixed');
       }
       else {
         $('nav').removeClass('fixed');
       }
    });
  });
</script>
<script>
      $(function() {
          $('.material-form').css({
              'position' : 'absolute',
              'left' : '50%',
              'top' : '50%',
              'margin-left' : -$('.material-form').outerWidth()/2,
              'margin-top' : -$('.material-form').outerHeight()/2
          });
      });


        $( ".clickToGetQuote" ).click(function() {
          $('.quoteForm').animate({ 'z-index': '9999', 'opacity': '1' }, 250);
        });

        $( ".getQuoteOut" ).click(function() {
          $('.quoteForm').animate({ 'opacity': '0', 'z-index': '-3' }, 250);
        });
</script>
<script>


  $(".popuper").click(function() {
    $('.popup').animate({
      'z-index': '9999',
      'opacity': '1'
    }, 250);
    $('.popupBack').animate({
      'z-index': '9990',
      'opacity': '1'
    }, 250);
    $(".popupPage").delay(300).animate({'width': '400pt'});
    $(".popupPage").animate({'height': '450pt'});
    $(".popupContent").delay(1260).animate({'opacity': '1'});
  });

  $(".popupBack").click(function() {
    $(".popupPage").delay(300).animate({'width': '10pt'});
    $(".popupPage").animate({'height': '10pt'});
    $('.popup').delay(1070).animate({'opacity': '0'});
    $(".popup").delay(1200).animate({'z-index': '-4'});
    $(".popupContent").animate({'opacity': '0'});
    $(this).delay(1100).animate({'opacity': '0', 'z-index': '-5'})
    setTimeout(function() {
      $('.pageSelectImageImage').detach();
      $('.pageSelectTextText').detach();
    }, 200);
  });
  var cardHeadOne   = $(".cardHeadOne").text();
  var cardHeadTwo   = $(".cardHeadTwo").text();
  var cardHeadThree = $(".cardHeadThree").text();
  var cardHeadFour  = $(".cardHeadFour").text();
  var cardHeadFive  = $(".cardHeadFive").text();


  var cardOneImg   = "/assets/media/images/icons/browser.svg";
  var cardTwoImg   = "/assets/media/images/icons/info.svg";
  var cardThreeImg = "/assets/media/images/icons/news.svg";
  var cardFourImg  = "/assets/media/images/icons/business.svg";
  var cardFiveImg  = "/assets/media/images/icons/e-shop.svg";

  $("#pageSelecter1").click(function() {
    $(".pageSelectText").append( "<span class='pageSelectTextText' id='websiteTypeName' name='websiteTypeName'>" + cardHeadOne + "</span>" );
    $(".pageSelectImage").append( "<img style='height: 90pt;' class='pageSelectImageImage' src='" + cardOneImg + "' />" );
    $(".pageTypeHiddenInput").append( "<input type='hidden' name='pageTypeText' id='pageTypeText' value='" + cardHeadOne + "' />" )
  });
  $("#pageSelecter2").click(function() {
    $(".pageSelectText").append( "<span class='pageSelectTextText' id='websiteTypeName' name='websiteTypeName'>" + cardHeadTwo + "</span>" );
    $(".pageSelectImage").append( "<img style='height: 90pt;' class='pageSelectImageImage' src='" + cardTwoImg + "' />" );
    $(".pageTypeHiddenInput").append( "<input type='hidden' name='pageTypeText' id='pageTypeText' value='" + cardHeadTwo + "' />" )
  });
  $("#pageSelecter3").click(function() {
    $(".pageSelectText").append( "<span class='pageSelectTextText' id='websiteTypeName' name='websiteTypeName'>" + cardHeadThree + "</span>" );
    $(".pageSelectImage").append( "<img style='height: 90pt;' class='pageSelectImageImage' src='" + cardThreeImg + "' />" );
    $(".pageTypeHiddenInput").append( "<input type='hidden' name='pageTypeText' id='pageTypeText' value='" + cardHeadThree + "' />" )
  });
    $("#pageSelecter4").click(function() {
    $(".pageSelectText").append( "<span class='pageSelectTextText' id='websiteTypeName' name='websiteTypeName'>" + cardHeadFour + "</span>" );
    $(".pageSelectImage").append( "<img style='height: 90pt;' class='pageSelectImageImage' src='" + cardFourImg + "' />" );
    $(".pageTypeHiddenInput").append( "<input type='hidden' name='pageTypeText' id='pageTypeText' value='" + cardHeadFour + "' />" )
  });
  $("#pageSelecter5").click(function() {
    $(".pageSelectText").append( "<span class='pageSelectTextText' id='websiteTypeName' name='websiteTypeName'>" + cardHeadFive + "</span>" );
    $(".pageSelectImage").append( "<img style='height: 90pt;' class='pageSelectImageImage' src='" + cardFiveImg + "' />" );
    $(".pageTypeHiddenInput").append( "<input type='hidden' name='pageTypeText' id='pageTypeText' value='" + cardHeadFive + "' />" )
  });
</script>


<!-- thanks codepen -->
<script>
/* global define, exports: true, module*/
;(function(root, factory) {
    'use strict';

    if(typeof define === 'function' && define.amd) {
        define(factory);
    }
    else if(typeof exports === 'object') {
        exports = module.exports = factory();
    }
    else {
        root.TinyType = factory();
    }
})(this, function() {
  return function TinyType(
    selectedElement,   // element's id string OR a DOM Element
    strings = [],
    {
      typeSpeed = 140,
      deleteSpeed = 10,
      startDelay = 500,
      deleteDelay = 1000,
      cursor = '|',
      loop = true,
      onFinished,
    } = {}  // configs are optional
  ) {
    const element = (typeof selectedElement === 'string')
      ? document.getElementById(selectedElement)
      : selectedElement;

    deleteDelay = deleteDelay || 0;   // adressess deleteDelay: false
    startDelay = startDelay || 0; // adressess startDelay: false

    if (cursor) {
      const cursorSpan = document.createElement('span');
      cursorSpan.classList.add('tinytype-cursor');
      cursorSpan.textContent = cursor;
      element.insertAdjacentElement('afterend', cursorSpan);
    }

    let stringsIndex = 0;

    typewrite(strings);

    function typewrite(strings) {
      if (stringsIndex === strings.length)
        if (loop) stringsIndex = 0;   // should always be the case
        else return;                  // probably not usefull

      setTimeout(() => { typeString(strings[stringsIndex]); }, startDelay);
    }

    function typeString(str) {
      let index = 0;

      const intervalID = setInterval(() => {
        element.textContent += str[index];
        if (++index === str.length) return onStringTyped(intervalID);
      }, typeSpeed);
    }

    function onStringTyped(id) {
      clearInterval(id);
      if (!loop && stringsIndex === strings.length - 1)   // if no loop, don’t erase last string
        return (onFinished) ? onFinished() : null;
      setTimeout(eraseString, deleteDelay);
    }

    function eraseString() {
      const str = element.textContent;
      let strLength = str.length;

      const intervalID = setInterval(() => {
        element.textContent = str.substr(0, --strLength);
        if (strLength === 0) return onStringErased(intervalID);
      }, deleteSpeed);
    }

    function onStringErased(id) {
      clearInterval(id);
      ++stringsIndex;
      typewrite(strings);
    }

  };

});


/************************************************
***************** CONFIG TEST *******************
************************************************/
var phrases = ['Web Design', 'For business and personal', 'Programming', 'Affordable Sites', 'Filled with benefits', 'Web Development', 'Backend + Frontend',];
TinyType('tinytype', phrases, {
  // cursor: '▐',
  // cursor: '_',
  // cursor: false,
  // startDelay: 750,
  onFinished: function() {},
  // deleteDelay: 300,
  // loop: true,
  // typeSpeed: 170,
  deleteSpeed: 80
});
</script>
