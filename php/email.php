<?php

$emailTo = "";

$subject = "Espero que funcione :) ";

$body = "Sos lo máximo pibe";

$headers = "From: moyagabriel14@gmail.com";

if (mail($emailTo, $subject, $body, $headers))(
  echo "email enviado";
} else {
  echo "email NO enviado";
}

?>
