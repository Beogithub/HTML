<?php
  // Verkrijg de ingevulde gegevens
  $naam = $_POST['naam'];
  $email = $_POST['email'];
  $bericht = $_POST['bericht'];

  // Stel de e-mailheaders in
  $headers = 'From: ' . $email . "\r\n" .
             'Reply-To: ' . $email . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  // Verstuur de e-mail
  mail('tim.vanbruaene@gmail.com', 'Onderwerp van de e-mail', $bericht, $headers);

  // Toon een bevestiging aan de gebruiker
  echo 'Bedankt voor je bericht!';
?>