<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset='UTF-8'>
	<title>Document</title>
<?php load_css();?>
<?php load_js();?>
<?php get_header();?>


</head>
<header>

<div class="container">
<?php
	wp_nav_menu(
	array(
		'theme_location' => 'top-menu',
		'menu_class' => 'top-bar'
		)
	);

	?>


</div>

<section>
	<div class="searchbar">

			<?php get_search_form();?>
			</div>
			
</section>	

</header>
