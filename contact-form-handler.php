<?php

   if (isset($_POST['submit'])) {
     $name =$_POST['name'];
     $mailFrom =$_POST['mail'];
     $Message =$_POST['Message'];

     $mailTo = "sidseloth3@gmail.com";
     $headers = "From: ".$mailFrom;
     $txt = "You have recieved an e-mail from ".$name."\n\n".$Message;


     mail($mailTo,$txt, $headers);
     header("Location: index. php?mailsend");
   }
 ?>
