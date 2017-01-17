<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>vzw Kindia.be</title>
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,700italic,500italic,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'>
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/kindia.css" rel="stylesheet" type="text/css" />
    <link href="css/form.css" rel="stylesheet" type="text/css" />
    
    <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <link rel="icon"  type="image/w-icon" href="img/icons/Kindia.ico">
    
  </head>
  <body id="contact">
    
    <script type="text/javascript">
    
    $(document).ready(function(){
    $(window).scroll(function(){
    // get the height of #wrap
    var h = $('#contact').height();
    var y = $(window).scrollTop();
    if( y > (h*.10) && y < (h*.90) ){
    // if we are show keyboardTips
    $("#top").fadeIn("slow");
    } else {
    $('#top').fadeOut('slow');
    }
    });
    })
    </script>
    <?php include "includes/header.php" ?>
    <?php include "includes/navbar.php" ?>
    
    <script src="js/social.js"></script></script>
    <div id="wrapper">
      <div id="content">
        <?php include "includes/form/info.php" ?>
        <?php include "includes/form/bbq.php" ?>
      </div>
    </div>
    <?php include "includes/footer.php" ?>
  </body>
</html>