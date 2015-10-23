<?php
require_once("../include/config.php");

$search_term = "";
if(isset($_GET["s"]))
{
	$search_term = trim($_GET["s"]);
	if($search_term != "")
	{
		require_once(ROOT_PATH . "include/products.php");
		$products = get_products_search($search_term);
	}
}

$pageTitle = "Search";
$section = "search";
include(ROOT_PATH . "include/header.php");
?>

	<div class="section shirts search page">
		<div class="wrapper">
			<h1>Search</h1>

			<form method="get" action="./">
				<input type="text" name="s">
				<input type="submit" value="Go">
			</form>

			<?php 
			if($search_term != "")
			{
				if(!empty($products))
				{
					echo '<ul class="products">';
					foreach($products as $product)
					{
						include(ROOT_PATH . "include/partial/product_list_view.html.php");
					}
					echo '</ul>';
				}
				else
				{
					echo "<p>No products were found matching that searching term.</p>";
				}
			} 
			?>
			
		</div>
		
	</div>
<?php
include(ROOT_PATH . "include/footer.php");
?>