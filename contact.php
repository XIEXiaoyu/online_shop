<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);

	if($name == "" OR $email == "" OR $message == "")
	{
		echo "You specify a value for name, email address and message.";
		exit();
	}

	foreach($_POST as $value)
	{
		if(stripos($value, 'Content-Type:') !== FALSE)
		{
			echo "There was a problem with the information you entered.";
			exit();
		}
	}

	if($_POST["address"] != "")
	{
		echo "Your form submission has an error.";
		exit();
	}

	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Message: " . $message;

	//ToDo: Send Email

	header("Location: contact.php?status=thanks");  //redirect to contact-thanks.php
	exit;
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

				<p>I&rsquo;d love to hear from you. Complete the email to send me an Email.</p>
				
				<form method="post" action="contact.php">
					<table>
						<tr>
							<th>
								<label for="name">Name</label>
							</th>	

							<td>
								<input type="text" name="name" id="name">
							</td>
						</tr>

						<tr>
							<th>
								<label for="email">Email</label>
							</th>	

							<td>
								<input type="text" name="email" id="email">
							</td>
						</tr>

						<tr>
							<th>
								<label for="message">Message</label>
							</th>	

							<td>
								<textarea name="message" id="message"></textarea>
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