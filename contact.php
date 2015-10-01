<?php 
$pageTitle = "Contact Mike"; 

$section = "contacts";

include('include/header.php'); 
?>

	<div class="section page">

		<div class = "wrapper">

			<h1>Contact</h1>

			<p>I&rsquo;d love to hear from you. Complete the email to send me an Email.</p>
			
			<form method="post" action="contact-process.php">
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
				 				
				</table>

				<input type="submit" value="send">

			</form>

		</div class = "wrapper">

	</div>

<?Php 
include('include/footer.php'); 
?>