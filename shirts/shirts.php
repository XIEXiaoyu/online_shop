<?php 
require_once("../include/config.php");
require_once(ROOT_PATH . "include/products.php"); 

$pageTitle = "Mike's Full Catatlog of Shirts";
$section = "shirts";
include(ROOT_PATH . 'include/header.php'); 
?>
	<div class="section shirts page">
		<div class="wrapper">
			<h1>Mike&rsquo; Full Catalog of Shirts</h1>
			<ul class="products">
				<?php foreach($products as $product_id => $product){ 
					echo get_list_view_html($product_id,$product);
				} 
				?>
			</ul>	
		</div>
		
	</div>
<?php include(ROOT_PATH . 'include/footer.php'); ?>