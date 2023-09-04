<?php
$to = "zipitinsumos@gmail.com"; 
      $from = $_POST['email']; 
      $first_name = $_POST['name'];
      $subject = $_POST['subject'];
      $message =  $_POST['message'];
      $headers = "From:" . $from;
      $headers2 = "From:" . $to;
      mail($to,$subject,$message,$headers);
//      mail($from,$subject,$message,$headers2); // sends a copy of the message to the sender
//      echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
echo "¡El formulario se ha enviado con éxito!";
?>