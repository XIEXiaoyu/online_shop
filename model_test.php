<?php 
	require_once("include/products.php");

	echo '<pre>';
	var_dump(get_products_subset(30, 30));