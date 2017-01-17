<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>vzw Kindia.be</title>

<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,700italic,500italic,400italic,300italic,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>    

<link rel="icon"  type="image/w-icon" href="img/icons/Kindia.ico">
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/kindia.css" rel="stylesheet" type="text/css" />
    
</head>

<body id="home">
		    
<script type="text/javascript">
        
 $(document).ready(function(){
 $(window).scroll(function(){
  // get the height of #wrap
  var h = $('#home').height();
  var y = $(window).scrollTop();
  if( y > (h*.25) && y < (h*.75) ){
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
	<div id="nav">
        <div id="prev"></div>
        <div id="next"></div>
		<div id="slideshow">
			<div ><img src="img/homeslideshow/street_1.jpg"></div>
			<div ><img src="img/homeslideshow/geit_kind.jpg"></div>
			<div ><img src="img/homeslideshow/street_2.jpg"></div>
			<div ><img src="img/homeslideshow/kids_3.jpg"></div>
			<div ><img src="img/homeslideshow/kind.jpg"></div>
			<div ><img src="img/homeslideshow/groep_1.jpg"></div>
		</div>
        
	</div>
s
<script src="js/slideshow.js"></script></script>    
<script type="text/javascript">
    (function($){
        $(window).load(function(){
            $("#evenementen").mCustomScrollbar();
            verticalScroll:true
        });
    })(jQuery);
</script>


<?php include "includes/ev_bbq.php" ?>

<div id="content">
    
<h1>Welkom</h1>

<P>Het kind behoort onder alle omstandigheden tot de eersten die recht hebben op bescherming en hulp. Het kind moet beschermd worden tegen alle vormen van verwaarlozing, wreedheid en uitbuiting.</P>

<p>Een VZW die zich inzet voor de sponsoring van arme kinderen in India en fondsen verzamelt voor educatieve projecten en gebouwen. Wij gaan o.a op zoek naar zogenaamde Foster Parents : <b>&quot;sponsor ouders&quot;</b> en verzamelen budgetten voor de bouw van scholen voor kinderen in India.</p> <p>Hoewel wij ons niet willen binden aan een geloof werken wij nauw samen met Don Bosco die er een uitmuntend werk leveren.</p>

<h1>Wie zijn wij?</h1>

<p>De <b>vzw Kindia</b> is gesticht op: <b>25/01/2006</b><br> Ondernemingsnummer: <b>0878 877606</b><br> 
Locatie:<b> Bieststraat 7 | 8560 Wevelgem</b><br>
Rekeningnummer: <b>IBAN BE10979578391504</b></p><br>
<p>De vzw bestaat uit een groep dynamische mensen die zich inzet om straatkinderen en kinderen uit doodarme gezinnen een betere toekomst te geven.</p>
    
    
    
</div>
    
<?php include "includes/projecten.php" ?>
    
</div><!-- END wrapper -->

<?php include "includes/footer.php" ?>

</body>
</html>