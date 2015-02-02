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
<link href="css/fold.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/fold.js"></script>

<link rel="icon"  type="image/w-icon" href="img/icons/Kindia.ico">

</head>

<body id="verslag">

<script type="text/javascript">

 $(document).ready(function(){
 $(window).scroll(function(){
  // get the height of #wrap
  var h = $('#verslag').height();
  var y = $(window).scrollTop();
  if( y > (h*.5) && y < (h*.95) ){
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

<script src="js/social.js"></script>

<div id="wrapper">

<div id="navproj">
		<div id="prevproj"></div>
		<div id="nextproj"></div>

		<div id="slideshowproject">
			<div id"kaart"><img src="img/kaart/Kinda_wereldkaart_GR.png"></div>
			<div><img src="img/kaart/Kinda_India_Detail_2.png">
				<div id="kaartproject" class="bangaon">Bongaon</div>
				<div id="kaartproject" class="ashalayam">Ashalayam</div>
				<div id="kaartproject" class="howrah">Howrah</div>
				<div id="kaartproject" class="sarawatipur">Saraswatipur</div>
			</div>
		</div>

</div>

<script type="text/javascript">
 $("#slideshowproject > div:gt(0)").hide();
		// fade out current slide (first), fade in next slide and move first slide to end
		var nextSlide = function() {
			$("#slideshowproject > div:first")
			.fadeOut(1000)
			.next()
			.fadeIn(1000)
			.end()
			.appendTo("#slideshowproject");
		}
		var nextSlideTimer = setInterval(nextSlide,  12000);
		// fade out current slide (first) and move last slide to top and fade in
		$("#prevproj").click(function() {
			clearInterval(nextSlideTimer);

			$("#slideshowproject > div:first")
			.fadeOut(1000);
			$("#slideshowproject > div:last")
			.fadeIn(1000)
			.prependTo("#slideshowproject");

			nextSlideTimer = setInterval(nextSlide, 12000)
			setTimeout(nextSlideTimer, 12000)
		});
		$("#nextproj").click(function() {
			clearInterval(nextSlideTimer);

			$("#slideshowproject > div:first")
			.fadeOut(1000)
			.next()
			.fadeIn(1000)
			.end()
			.appendTo("#slideshowproject");

			nextSlideTimer = setInterval(nextSlide, 12000)
			setTimeout(nextSlideTimer, 12000)
		});
</script>

<div id="content">

<?php include "includes/verslag_2013.php" ?>

</div>

<?php include "includes/projecten.php" ?>

</div><!-- END wrapper -->

<?php include "includes/footer.php" ?>
</body>
</html>
