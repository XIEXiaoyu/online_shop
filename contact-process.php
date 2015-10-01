<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$email_body = "";
$email_body = $email_body . "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Message: " . $message;

//ToDo: Send Email

$pageTitle = "Contact Mike";

$section = "contact";

include("include/header.php");

?>

	<div class="section page">

		<div class="wrapper">
			
			<h1>Contact</h1>

			<p>Thanks for the email! I&rsquo;ll be in touch shortly.</p>
		</div>
		
	</div>

<?php
	
	include("include/footer.php");

?>


