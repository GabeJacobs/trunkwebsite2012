<?php
 $to = "travelingtrunk@gmail.com";
 $subject = $_POST['emailName'];
 $body = $_POST['emailMessage'];
 $from = $_POST['emailFrom'];

 $body = $body . "\n\nFrom: " . $from;

 if (mail($to, $subject, $body)) {
   echo("<p>Message successfully sent! $to $subject $body $from</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }
 ?>

