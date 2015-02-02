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

<body id="project">
		
<script type="text/javascript">
        
 $(document).ready(function(){
 $(window).scroll(function(){
  // get the height of #wrap
  var h = $('#project').height();
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
    
<h1>Projecten</h1> 
<div id="bangaon">
    
<div id="slideproj1">
    <div ><img src="img/projecten/Bonga_1.jpg"></div>
    <div ><img src="img/projecten/Bonga_2.jpg"></div>
	<div ><img src="img/projecten/Bonga_3.jpg"></div>
	<div ><img src="img/projecten/Bonga_4.jpg"></div>
	<div ><img src="img/projecten/Bonga_5.jpg"></div>
</div>

<script type="text/javascript">
$("#slideproj1 > div:gt(0)").hide();

setInterval(function() { 
$("#slideproj1 > div:first")
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo("#slideproj1");
},  5000);

</script>
    
<h2>Bongaon</h2> 
<p>In de school van Father Paul hebben we momenteel 54 sponsorkinderen. De school telt ongeveer 600 leerlingen, waarvan ook heel wat internen. De inwoners van Bongaon zijn meestal vluchtelingen uit Bangladesh. Het dorp ligt immers op amper 3 km van de grens. De mensen leven er in erbarmelijke omstandigheden. De school was nodig aan renovering toe.</p><p>Met vzw Kindia hebben we ons ge&euml;ngageerd hierbij te helpen. Met heel wat activiteiten gedurende het jaar en de steun van de gemeente Wevelgem en de provincie West-Vlaanderen brengen we fondsen bijeen.</p>
</div>
        
<div id="ashalayam">
    
<div id="slideproj2">
    <div ><img src="img/projecten/Asha_1.jpg"></div>
    <div ><img src="img/projecten/Asha_2.jpg"></div>
	<div ><img src="img/projecten/Asha_3.jpg"></div>
	<div ><img src="img/projecten/Asha_4.jpg"></div>
</div>

<script type="text/javascript">
$("#slideproj2 > div:gt(0)").hide();

setInterval(function() { 
$("#slideproj2 > div:first")
    .fadeOut(2000)
    .next()
    .fadeIn(2000)
    .end()
    .appendTo("#slideproj2");
},  7000);

</script>  
    
<h2>Ashalayam</h2> 
<p>Met Kindia werken we ook in de Ashalayam tehuizen, dit betekent &quot;Huis van Hoop&quot;. Hier worden straatkinderen opgevangen onder de hoede van Father Matthew George, een schat van een mens. Hij werkt met een aantal medewerkers aan de begeleiding en opleiding van kinderen van de straat.De kinderen worden door medewerkers van Childline naar de Ashalayam tehuizen gebracht. De meesten zijn nooit naar school geweest. Het harde leven op straat heeft hen getekend.<b> En toch ... bereikt Father Matthew George met de meeste kinderen onbeschrijfelijk mooie resultaten.</b></p><p> Hier hebben we met Kindia 41 sponsorkinderen. De meeste kinderen leren een beroep aan: bakker, timmerman, naaister enz. Maar ook een aantal van de kinderen studeren in het hoger onderwijs. Eens je persoonlijk hebt gezien hoe er met oneindig veel geduld met die straatkinderen wordt gewerkt moet je wel je hart openen voor zo'n inzet. Meer info over Ashalayam vind je op hun <a href=" http://www.ashalayam.org" target="_blank">website</a>.</p>
</div>

<div id="howrah">
    
<div id="slideproj3">
    <div ><img src="img/projecten/Howr_1.jpg"></div>
    <div ><img src="img/projecten/Howr_2.jpg"></div>
</div>

<script type="text/javascript">
$("#slideproj3 > div:gt(0)").hide();
    
    setInterval(function() { 
        $("#slideproj3 > div:first")
            .fadeOut(2000)
            .next()
            .fadeIn(2000)
            .end()
            .appendTo("#slideproj3");
    },  4000);

</script>
    
<h2>Howrah</h2>
<p>In de sloppenwijk Howrah hebben we vorig jaar een afdeling &quot;naaischool&quot; voor de meisjes gestart. Daar kunnen ze vanaf hun 12 jaar leren naaien. Na twee jaar is hun opleiding ten einde en mogen ze ook hun naaimachine meenemen, zodat ze hun eigen kledij kunnen maken. Zo voorzien ze in hun eigen levensonderhoud. De kledij die ze maken kunnen ze tevens verkopen in de winkels die samenwerken met Don Bosco.</p>
</div>
        
<div id="saraswatipur">
    
<div id="slideproj4">
    <div ><img src="img/projecten/Sara_1.jpg"></div>
	<div ><img src="img/projecten/Sara_2.jpg"></div>
	<div ><img src="img/projecten/Sara_3.jpg"></div>
	<div ><img src="img/projecten/Sara_4.jpg"></div>
    <div ><img src="img/projecten/Sara_5.jpg"></div>
</div>

<script type="text/javascript">
$("#slideproj4 > div:gt(0)").hide();

setInterval(function() { 
$("#slideproj4 > div:first")
    .fadeOut(3000)
    .next()
    .fadeIn(3000)
    .end()
    .appendTo("#slideproj4");
},  8000);

</script>
    
<h2>Saraswatipur: <i>Project uitgevoerd</i></h2> 
<p>Aan de voet van de Himalaya zijn er een aantal dorpjes die samen een 800 ha theeplantages hebben. Men is gestart met les geven in een klein oud kerkje en onder een plastic zeil. Voor het ogenblik krijgen 250 kindjes les, maar dit worden er dagelijks meer. De bouw van een echt schooltje (een polyvalente zaal) is afgewerkt dankzij de steun van Kindia, het project werd uitsluitend gesponsord door <b>de truckmeeting LAR</b> die elk jaar doorgaat</p>
</div>    
    
    
</div>

</div><!-- END wrapper -->

<?php include "includes/footer.php" ?>
</body>
</html>