<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset='UTF-8'>
	<title>DOcument</title>


<?php load_css();?>
<?php load_js();?>
<?php get_header();?>


</head>
<body>
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

</header>
