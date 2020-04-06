<HTML>
<HEAD>
</HEAD>
<BODY>

<?php
  echo "email";
  require_once('email/class.phpmailer.php');
  //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "khwaab11";  // GMAIL username
  $mail->Password   = "sady@5101";            // GMAIL password

  $mail->SetFrom('khwaab11@gmail.com', 'name, organization'); // Change the name as you want
  $mail->Subject    = "hell0 with world";
  $mail->Body = "name:$name,email:$email,address,phone:$phoneno";
  $mail->AddAddress("khwaab11@gmail.com");
  
  $mail->Send();

 // echo "<br><br><font color='green' size='3'><b>Email has been Successfully Sent!</b></font></center>"; 	  

  ?>
</BODY>
</HTML>
