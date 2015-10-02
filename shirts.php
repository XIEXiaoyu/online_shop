<?php 
	$products = array();
	$products[101] = "Logo Shirt, Red";
	$products[102] = "Mike the Frog Shirt, Black";
	$products[103] = "Mike the Frog Shirt, Blue";
	$products[104] = "Logo Shirt, Green";
?>
<?php 
$pageTitle = "Mike's Full Catatlog of Shirts";
$section = "shirts";
include('include/header.php'); 
?>
	<div class="section page">
		<div class="wrapper">
			<h1>Mike&rsquo; Full Catalog of Shirts</h1>
			<ul>
				<?php foreach($products as $product){ ?>
				<li>
					<?php echo $product; ?>
				</li>
				<?php } ?>
			</ul>	
		</div>
		
	</div>
<?php include('include/footer.php'); ?>