<?php 



session_start();


function filterthemessage ($value){
      $first  = trim($value);
      $second = strip_tags($first);
      $third = htmlspecialchars($second,ENT_QUOTES);
      return $third;

}






   /* mail*/   /* mail*/   /* mail*/   /* mail*/   /* mail*/   /* mail*/

   header("Content-Type:text/html; charset=UTF-8");
  
 

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;


function netaglobalmessage (  $name ,  $email  ,   $phone , $message ,$subject){




   require 'PHPMailer/src/Exception.php';
   require 'PHPMailer/src/PHPMailer.php';
   require 'PHPMailer/src/SMTP.php';

   $MailGonder		=	new PHPMailer(true);
   try{
       $MailGonder->SMTPDebug			=	0;
       $MailGonder->isSMTP();
       $MailGonder->Host				=	'smtp.gmail.com';
       $MailGonder->SMTPAuth			=	true;
       $MailGonder->CharSet			=	'UTF-8';
       $MailGonder->Username			=	'zngzengin7@gmail.com (email adresiniz)';
       $MailGonder->Password			=	'sizin şifreniz email';
       $MailGonder->SMTPSecure			=	'ssl';
       $MailGonder->Port				=	587;
       $MailGonder->SMTPOptions		=	array(
                                               'ssl' => [
                                                   'verify_peer' => false,
                                                   'verify_peer_name' => false,
                                                   'allow_self_signed' => true
                                               ],
                                           );
       $MailGonder->setFrom('zngzengin7@gmail.com', 'Code Felixs Techgnology');
       $MailGonder->addAddress( $email, $name);
       // $MailGonder->addAddress('zngzengin7@gmail.com', 'ZNG Tecnology company');
       $MailGonder->addReplyTo('zngzengin7@gmail.com', 'Code Felixs Techgnology');
       $MailGonder->isHTML(true);
       $MailGonder->Subject			=	$subject;
       $MailGonder->MsgHTML( "Hey there Some body try to get in touch you here is the message : ".$message."</br>Here is the email who send this message ". $email." <br />Here is the name of the customer : ".$name." <br /> Code Felixs Techgnology <br/ >" . $phone);
       //$MailGonder->Body    = 'Mailin Gövdesi';s
       //$MailGonder->AltBody = 'Mailin Gövdesi (HTML mail kabul etmeyen sunucular için)';
       $MailGonder->send();
       
      //echo 'Mail Gönderildi';

   }catch(Exception $e) {
       
       //echo 'Mail Gönderim Hatası<br />Hata Açıklaması : ', $MailGonder->ErrorInfo;
   }
   
}

















?>