 $(document).ready(function() {
     $(window).scroll(function() {
         // get the height of #wrap
         var h = $('#home').height();
         var y = $(window).scrollTop();

         if (y > (h * .25) && y < (h * .75)) {
             // if we are show keyboardTips
             $("#top").fadeIn("slow");
         } else {
             $('#top').fadeOut('slow');
         }
     });
 })


 $(window).load(function() {
     $("#evenementen").mCustomScrollbar();
     verticalScroll: true
 });