<?php
 $to = "mmoutenot@gmail.com";
 $subject = $emailName;
 $body = $emailMessage;
 $headers = 'From: '.$emailFrom."\r\n".
 if (mail($to, $subject, $body, $headers)) {
   echo("<p>Message successfully sent!</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }
 ?>

