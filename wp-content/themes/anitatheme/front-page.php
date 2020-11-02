
<header>
<body>
	<div>
		<?php 
            $image = get_field('background_image'); 
            if( $image ): ?>
            	<img alt="<?php echo $image['title']; ?>" class="hero-background is-transparent" src="<?php echo $image['url']; ?>">
        <?php endif; ?>
    </div>
	<div class="page-container">
		<?php get_header();?>
		<section class="page-wrap">
				<div class="container">
					<h1><?php the_title();?></h1>
					<?php get_template_part('includes/section', 'content');?>
				</div>
		</section>
		<?php get_footer();?>
	</div>
</body>
</header>
