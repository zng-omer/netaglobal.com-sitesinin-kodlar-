<?php



include_once("contactphp.php");

if(isset($_POST["btn"])){

      $name = filterthemessage($_POST["name"]);
      $email = filterthemessage($_POST["email"]);
      $message = filterthemessage($_POST["massage"]);
      $Subject = filterthemessage($_POST["subject"]);
      $phone_number = filterthemessage($_POST["phone_number"]);

      netaglobalmessage($name,$email,$phone_number,$message,$Subject);
      header("location:contact.php");


}else{
      header("location:contact.php");

}
















?>