<?php

$name = stripslashes($_POST['naam'])."\r\n";
$message = stripslashes($_POST['message'])."\r\n";
$email = stripslashes($_POST['email'])."\r\n";
$adres = stripslashes($_POST['adres'])."\r\n";

$volwassenen = stripslashes($_POST['volwassenen'])."\r\n";
$kids = stripslashes($_POST['kids'])."\r\n";

$subject = "Inschrijving Barbeque Kindia 2014";
$host = "jmvwevelgem@skynet.be";

$body = <<<EOD

$message\r\n
Naam: $name
Email: $email
Adres: $adres

Aantal volwassenen: $volwassenen
Aantal kinderen: $kids

EOD;

$headers = "From: $email\r\n";

$mail_status = mail($host, $subject, $body, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Bedankt voor uw inschrijving.');
        window.location = 'http://www.kindia.be';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('mail, niet verzonden, mail naar jmvwevelgem@skynet.be');
        window.location = 'http://www.kindia.be';
    </script>
<?php
}
?>