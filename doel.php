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

<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>    
 
<link rel="icon"  type="image/w-icon" href="img/icons/Kindia.ico">
    
</head>

<body id="doel">
		  
<script type="text/javascript">
        
 $(document).ready(function(){
 $(window).scroll(function(){
  // get the height of #wrap
  var h = $('#doel').height();
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
			<div ><img src="img/doelslideshow/doel_1.jpg"></div>
			<div ><img src="img/doelslideshow/doel_2.jpg"></div>
			<div ><img src="img/doelslideshow/doel_3.jpg"></div>
			<div ><img src="img/doelslideshow/doel_4.jpg"></div>

		</div>
        
	</div>

<script src="js/slideshow.js"></script></script>

<script>
    (function($){
        $(window).load(function(){
            $("#evenementen").mCustomScrollbar();
            verticalScroll:true
        });
    })(jQuery);
</script>


<?php include "includes/ev_bbq.php" ?>

    <div id="content">
    
<h1>Doel</h1>

<P>De grootste noodzaak is een degelijk onderwijs. Daarom is ons hoofddoel <b>&quot;sponsoring van een kindje om de studiekosten te helpen dragen&quot;</b><br>We steunen projecten bij het aankopen van schoolgerei, vernieuwing van een schooltje. Weliswaar kleinschalig, maar heel belangrijk voor die mensen.</P>
        
<p>Rekeningnummer vzw Kindia: <br>Argenta: IBAN BE10979578391504 </p>
        
        
<h1>Ontstaan</h1> 
<p>Kindia De VZW wordt gestuwd door twee mensen, Jean Marie en Therese. Zij maken van Kindia hun levensopdracht. Kindia ontstond een aantal jaren terug toen Jean Marie en Therese, in het kader van een andere VZW, naar India trokken. Zij beslisten toen een eigen VZW op te richten waar de kinderen centraal stonden. Sindsdien hebben zij samen een aanzienlijk palmares samengefietst.</p>
<p>In 2010 werd Jean Marie genomineerd voor de pluim, Het was een gezamelijke beslissing onder hen beiden. 
Er kon slechts &eacute;&eacute;n kandidaat voorgedragen worden. Eigenlijk verdienden zij beiden die pluim.</p>
    
    
    
</div>
    
<?php include "includes/projecten.php" ?>
    
    

</div><!-- END wrapper -->

<?php include "includes/footer.php" ?>

</body>
</html>