<?php 
$ToEmail = 'tejabhp@gmail.com'; 
$EmailSubject = 'Site contact form'; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["name"].""; 
$MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
$MESSAGE_BODY .= "Subject: ".$_POST["subject"].""; 
$MESSAGE_BODY .= "Message: ".nl2br($_POST["message"]).""; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?>
<?php 
if ($_POST["email"]<>'') { 
    $ToEmail = 'tejabhp@gmail.com'; 
    $EmailSubject = 'Site contact form'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["name"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"]).""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?> 
<center><h3 style="color:red;">Your message has been sent successfully. You will get a response very soon. Thanks for getting in touch with Saiteja Enimidigandla.</h3></center>
<center><p>You will be redirected automatically in 20 secs or <a href="http://developerteja.ml/">Click Here to Site</a> </p> <center>
<?php 
} else { 
?> 
Server is Busy. Please try again. We regret for the inconvenience caused.
<?php 
}; 
?>
  <head>
    <meta charset="utf-8">
	<meta http-equiv="refresh" content="20;URL=http://developerteja.ml/">
  </head>
