<?php

require_once("../include/config.php");

$pageTitle = "Thank you for your order!";
$section = "none";
include(ROOT_PATH . "include/header.php"); 
?>
	<div class="section page">
		<div class="wrapper">
			
			<h1>Thank you!</h1>

			<p>Thank you for your payment. Your transaction has been completed, and a receipt for your purchase has been emailed to you. You may log into your account at <a href="http://www.paypal.com/sg">www.paypal.com/sg</a> to view details of this transaction.</p>

			<p>Need another shirt already? Visit the <a href="<?php echo BASE_URL; ?>shirts.php">shirts Listing</a> page again.</p>
		</div>
		
	</div>
<?php 
include(ROOT_PATH . "include/footer.php");
?>

