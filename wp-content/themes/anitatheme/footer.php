<footer>
	<?php wp_footer();?>
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
</footer>