<?php get_header(); ?>

<?php get_template_part('inc/featured'); ?>

<div class="content">

	<?php if ( get_theme_mod('heading-enable','off') == 'on' ) : ?>
		<?php get_template_part('inc/page-title'); ?>
	<?php endif; ?>
	
	<?php get_template_part('inc/front-widgets-top'); ?>
	
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ): the_post(); ?>
			<?php get_template_part('content'); ?>
		<?php endwhile; ?>
		
		<?php get_template_part('inc/front-widgets-bottom'); ?>
		<?php get_template_part('inc/pagination'); ?>
		
	<?php endif; ?>
	
</div><!--/.content-->

<div id="move-sidebar-content"></div>

<?php get_footer(); ?>