<?php
if (!$_POST['submit']) {
  $myEmail = 'maciejozwiak@gmail.com';

  $firstName = $_POST['firstname'];
  $surName = $_POST['surname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  if ($email) {

    $mailText = "Imie: $firstName\nNazwisko: $surName\nEmail: $email\nTelefon: $phone";
    $mailHeader = "Od: $firstName <$email>";

    mail($myEmail, "Formularz kontaktowy", $mailText, $mailHeader) or die("Blad: wiadomosc nie zostala wyslana!");

    echo 'WIADOMOSC ZOSTALA WYSLANA. ODEZWIEMY SIE W PRZECIAGU GODZINY. DZIEKUJEMY';
  } else {
    echo 'Adres e-mail jest niepoprawny';
  }
}
?>
