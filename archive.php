<?php get_header(); ?>

<div class="content">
	
	<?php get_template_part('inc/page-title'); ?>

	<div class="content-inner group">
		<?php if ( have_posts() ) : ?>
				
			<?php if ( get_theme_mod('blog-content','blog-excerpt') == 'blog-full' ) : ?>
				
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content-full'); ?>
				<?php endwhile; ?>
				
			<?php else: ?>
			
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php endwhile; ?>
				
			<?php endif; ?>
			
			<?php get_template_part('inc/pagination'); ?>
			
		<?php endif; ?>
	</div>
</div><!--/.content-->

<div id="move-sidebar-content"></div>

<?php get_footer(); ?>