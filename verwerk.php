<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['name'];
    $email = $_POST['Email'];
    $onderwerp = $_POST['subject'];
    $bericht = $_POST['message'];

    $to = 'botje.sas@gmail.com';
    $subject = 'Contactformulier - ' . $onderwerp;
    $message = 'Naam: ' . $naam . "\r\n" .
               'E-mail: ' . $email . "\r\n" .
               'Bericht: ' . $bericht;

    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}

?>
