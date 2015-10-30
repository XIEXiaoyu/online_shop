<?php 
require_once("include/config.php");
include(ROOT_PATH . 'include/products.php');
$recent = get_products_recent();

$pageTitle = "Unique T-shirt designed by a frog";
$section = "shrits";

include(ROOT_PATH . 'include/header.php'); 
?>

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="<?php echo BASE_URL; ?>img/haha-the-pear.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="<?php echo BASE_URL; ?>shirts.php">
						<h2>Hey, I&rsquo;m Pear!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Pear&rsquo;s Latest Shirts</h2>

				<ul class="products">
				<?php 
					$list_view_html = "";
					foreach($recent as $product)
					{
						include(ROOT_PATH . "include/partial/product_list_view.html.php");
					}
					echo $list_view_html;
				?>			
				</ul>

			</div>

		</div>
<?php include(ROOT_PATH	. 'include/footer.php')?>