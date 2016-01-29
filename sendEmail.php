<?php
if(!isset($_POST['send message']))
{
	//This page should be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $$_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email))
{
	echo "Name and email are mandatory";
	exit;
}

$email_from = 'josefigu010@gmail.com';//My email address here
$email_subject = "New form submission";
$email_body = "You have received a new message from the user $name.\n".
	"email address: $visitor_email\n".
	"Here is the message:\n $message".
	
$to = "josefigu010@gmail.com";//My email address here
$headers = "From: $email_from \r\n";

//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to tahnk you page.
</?php>