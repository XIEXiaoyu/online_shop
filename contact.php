<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);

	if($name == "" OR $email == "" OR $message == "")
	{
		$error_message = "You must specify a value for name, email address and message.";
		 
	}

	if(!isset($error_message))
	{
		foreach($_POST as $value)
		{
			if(stripos($value, 'Content-Type:') !== FALSE)
			{
				$error_message = "There was a problem with the information you entered.";
			}
		}
	}

	if(!isset($error_message) && ($_POST["address"] != ""))
	{
		$error_message = "Your form submission has an error.";
	}

	require_once 'include/phpmailer/class.phpmailer.php';
	require_once 'include/phpmailer/class.smtp.php';
	// require 'include/phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer();


	if(!isset($error_message) && !$mail->ValidateAddress($email))
	{
		$error_message = "You must specify a valid Email address.";
	}

	if(!isset($error_message))
	{
		$mail->IsSMTP();
		//$mail->SMTPDebug = 2;
		$mail->SMTPAuth = true;
		$mail->Host = "smtp.postmarkapp.com";
		$mail->Port = 25;
		$mail->Username = "c29691df-be87-44dd-b104-fc498986ac9e";
		$mail->Password = "c29691df-be87-44dd-b104-fc498986ac9e";

		$email_body = "";
		$email_body = $email_body . "Name: " . $name . "<br>" . "Email: " . $email . "<br>" . "Message: " . $message;

		//Send Email
		$mail->SetFrom("jun@xiejun.be", "DaTouLi");
		$address = "xiejun04512@gmail.com";
		$mail->AddAddress($address, "DaTouLi");

		$mail->Subject = "DaTouLi Contact From Submission | " . $name;

		$mail->MsgHTML($email_body);
		if($mail->Send())
		{
			header("Location: contact.php?status=thanks");  //redirect to contact-thanks.php
			exit;
		}
		else
		{
			$error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
		}
	}	
}
?>

<?php 
$pageTitle = "Contact Mike"; 

$section = "contacts";

include('include/header.php'); 
?>

	<div class="section page">

		<div class = "wrapper">

			<h1>Contact</h1>

			<?php 
			if(isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
			
			<p>Thanks for the email! I&rsquo;ll be in touch shortly.</p>
	
			<?php } 
			else { ?>
			
				<?php  
				if(!isset($error_message))
				{
					echo '<p>I&rsquo;d love to hear from you. Complete the email to send me an Email.</p>';
				}
				else
				{
					echo '<p class="message">' . $error_message . '</p>';
				}
				?>


				<form method="post" action="contact.php">
					<table>
						<tr>
							<th>
								<label for="name">Name</label>
							</th>	

							<td>
								<input type="text" name="name" id="name" value="<?php if(isset($name)) {echo $name;} ?>">
							</td>
						</tr>

						<tr>
							<th>
								<label for="email">Email</label>
							</th>	

							<td>
								<input type="text" name="email" id="email" value="<?php if(isset($email)) {echo $email;} ?>">
							</td>
						</tr>

						<tr>
							<th>
								<label for="message">Message</label>
							</th>	

							<td>
								<textarea name="message" id="message"><?php if(isset($message)) {echo($message);} ?></textarea>
							</td>
						</tr>

						<tr style="display: none;">
							<th>
								<label for="address">Address</label>
							</th>	

							<td>
								<input type="text" name="address" id="address">
								<p>Humans: Please leave this field blank.</p>
							</td>
						</tr>
					 				
					</table>

					<input type="submit" value="send">

				</form>
			<?php 
			} ?>

		</div class = "wrapper">

	</div>

<?Php 
include('include/footer.php'); 
?>