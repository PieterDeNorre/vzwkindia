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
    
        
<div id="contactform">
        
        <h1>Meer informatie nodig?</h1>
        
        <p><i>*</i> verplichte velden</p>
        <br><br>
                    <form id="contactc" method="post" action="php/mailcontact.php">
				        <label for="naamc">Naam<i>*</i></label>
                        <input type="text" name="naamc" placeholder="Naam" id="naam" required="Naam"/><br>
					
                        <label for="adresc">Adres<i>*</i></label>
                        <input type="text" name="adresc" id="adres" placeholder="Adres" required="Adres"/><br>
             		
                        <label for="emailc">E-mail<i>*</i></label>
                        <input type="email" placeholder="E-mail" pattern="[^ @]*@[^ @]*" name="emailc" id="email" required="E-mail"/><br>
                        
                        <label id="berichtc" for="message">Bericht</label><br />
                        <textarea name="message" id="messagec" rows="10" cols="60" required="Bericht"></textarea><br>
             		
             		
				        <input type="submit" name="send" value="Zenden" class="submit-button" onmouseover="this.className='btn btnsubmit'" onmouseout="this.className='submit-button'" />
                        <input type="reset" name="clear" value="Wissen" class="clear-button">
			         </form>
                </div>
    

    
<!-- <div id="formbarbeque">
        
        <h1>Inschrijving barbeque</h1>
        
        <h2>Datum: 29/09/2014</h2><p><i>*</i> verplichte velden</p>
        <br><br>
                    <form id="formbbq" method="post" action="php/mailbbq.php">
				        <label for="naam">Naam<i>*</i></label>
                        <input type="text" name="naam" placeholder="Naam" id="naam" required="Naam"/><br>
					
                        <label for="adres">Adres<i>*</i></label>
                        <input type="text" name="adres" id="adres" placeholder="Adres" required="Adres"/><br>
             		
                        <label for="email">E-mail<i>*</i></label>
                        <input type="email" placeholder="E-mail" pattern="[^ @]*@[^ @]*" name="email" id="email" required="E-mail"/><br>
                        
                        <label for="volwassenen">Aantal volwassenen<i>*</i></label>
                        <input type="number" min="1" max="99" pattern="[0-9]|[1-9][0-9]" placeholder="Aantal" name="volwassenen" id="volwassenen" required="volwassenen"/><br>
                        
                        <label for="kids">Aantal kinderen<i>*</i></label>
                        <input type="number" pattern="[0-9]|[1-9][0-9]" placeholder="Aantal" min="0" max="99" name="kids" id="kids" required="kids"/><br>
					
                        <label id="bericht" for="message">Bericht</label><br />
                        <textarea name="message" id="message" rows="10" cols="60" required="Bericht"></textarea><br>
             		
             		
				        <input type="submit" name="send" value="Zenden" class="submit-button" onmouseover="this.className='btn btnsubmit'" onmouseout="this.className='submit-button'" />
                        <input type="reset" name="clear" value="Wissen" class="clear-button">
			         </form>
        </div> -->
<div id="formbarbeque">
        
        <h1>Inschrijving Kaas- en Wijnavond</h1>
        
        <h2>Datum: 14/03/2015</h2><p><i>*</i> verplichte velden</p>
        <br><br>
                    <form id="formbbq" method="post" action="php/mailkaas.php">
				        <label for="naam">Naam<i>*</i></label>
                        <input type="text" name="naam" placeholder="Naam" id="naam" required="Naam"/><br>
					
                        <label for="adres">Adres<i>*</i></label>
                        <input type="text" name="adres" id="adres" placeholder="Adres" required="Adres"/><br>
             		
                        <label for="email">E-mail<i>*</i></label>
                        <input type="email" placeholder="E-mail" pattern="[^ @]*@[^ @]*" name="email" id="email" required="E-mail"/><br>
                        
                        <label for="volwassenen">Aantal volwassenen<i>*</i></label>
                        <input type="number" min="1" max="99" pattern="[0-9]|[1-9][0-9]" placeholder="Aantal" name="volwassenen" id="volwassenen" required="volwassenen"/><br>
                        
                        <label for="kids">Aantal kinderen<i>*</i></label>
                        <input type="number" pattern="[0-9]|[1-9][0-9]" placeholder="Aantal" min="0" max="99" name="kids" id="kids" required="kids"/><br>
					
                        <label id="bericht" for="message">Bericht</label><br />
                        <textarea name="message" id="message" rows="10" cols="60" required="Bericht"></textarea><br>
             		
             		
				        <input type="submit" name="send" value="Zenden" class="submit-button" onmouseover="this.className='btn btnsubmit'" onmouseout="this.className='submit-button'" />
                        <input type="reset" name="clear" value="Wissen" class="clear-button">
			         </form>
</div>
    
  </div>

</div><!-- END wrapper -->

<?php include "includes/footer.php" ?>

</body>
</html>