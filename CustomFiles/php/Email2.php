
<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["name"]==""||$_POST["email"]==""||$_POST["subject"]==""||$_POST["message"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers .= 'From: '.$email."\r\n".
$headers .= 'Cc: '.$email."\r\n".
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
$retval = mail("enimidigandlasaiteja@gmail.com", $subject, $message, $headers);
//echo "Your mail has been sent successfuly ! Thank you for your feedback";
if( $retval == true ) {
            echo "ok";
			?> 
			<center><h3 style="color:red;">Your message has been sent successfully. You will get a response very soon. Thanks for getting in touch with Saiteja Enimidigandla.</h3></center>
<center><p>You will be redirected automatically in 20 secs or <a href="http://developerteja.ml/">Click Here to Site</a> </p> <center>
  <head>
    <meta charset="utf-8">
	<meta http-equiv="refresh" content="20;URL=http://developerteja.ml/">
  </head>			
<?php
         }else {
            echo "Message could not be sent...";
         }
}
}
}
?>


