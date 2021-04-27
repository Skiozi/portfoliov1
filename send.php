<?php

    if(isset($_POST['btn-send']))
    {
      $LastName = $_POST['lastname'];
      $FirstName = $_POST['firstname'];
      $Mail = $_POST['mail'];
      $Object = $_POST['object'];
      $Message = $_POST['message'];

      $all = 
      "lastname: “.$LastName.”\r".
      "firstname: “.$FirstName.”\r".
      "mail: “.$Mail.”\r".
      "object: “.$Object.”\r".
      "remarques: “.$Message.”\r";

      $all = '<html><body>';
      $all .= '<table rules="all" style="border-color: #0c9bdd;" cellpadding="20">';
      $all .= "<tr style='background: #eee;'><td><strong>Nom:</strong> </td><td>" . strip_tags($_POST['lastname']) . "</td></tr>";
      $all .= "<tr><td><strong>Prénom:</strong> </td><td>" . strip_tags($_POST['firstname']) . "</td></tr>";
      $all .= "<tr><td><strong>E-mail:</strong> </td><td>" . strip_tags($_POST['mail']) . "</td></tr>";
      $all .= "<tr><td><strong>Objet:</strong> </td><td>" . strip_tags($_POST['object']) . "</td></tr>";
      $all .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
      $all .= "</table>";
      $all .= "</body></html>";

      if(empty($LastName) || empty($FirstName) || empty($Mail) ||  empty($Object)|| empty($Message)) {
          header('location:http://127.0.0.1:5500/');
      } else {   
          $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
          $to = "bruchet.alexandre1@gmail.com";

          if(mail($to,$all,$headers))
          {
            header('location:http://127.0.0.1:5500/');
          }
      }
    }



?>