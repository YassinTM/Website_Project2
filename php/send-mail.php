<?php
$vnaam = htmlspecialchars($_POST['vnaam']);
$anaam = htmlspecialchars($_POST['anaam']);
$email = htmlspecialchars($_POST['iemal']);
$onderwerp = htmlspecialchars($_POST['onderwerp']);
$bericht = htmlspecialchars($_POST['bericht']);

$to = "r1114367@student.thomasmore.be";
$subject = "Contactformulier: " . $onderwerp;
$message = "Naam: " . $vnaam . " " . $anaam . "\n";
$message .= "Email: " . $email . "\n\n";
$message .= "Bericht:\n" . $bericht;

$headers = "From: " . $email;

$send = mail($to, $subject, $message, $headers);

if ($send) {
    echo "Bericht succesvol verzonden!";
} else {
    echo "Er is een fout opgetreden bij het verzenden.";
}
?>