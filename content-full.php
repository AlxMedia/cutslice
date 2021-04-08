<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article-type-list article-type-full group'); ?>>	
	
	<div class="type-list-outer group">
		<div class="type-list-inner">

			<div class="post-wrapper">

				<header class="entry-header group">
					<div class="type-list-date"><?php the_time( get_option('date_format') ); ?></div>
					<h2 class="entry-title">
						<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h2>
				</header>
				
				<?php if ( get_theme_mod('post-format','on') == 'on' ) : ?>
					<div class="entry-media">
						<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
					</div>
				<?php endif; ?>
				
				<div class="entry-content">
					<div class="entry themeform">	
						<?php the_content(); ?>
						<div class="clear"></div>
						<a class="type-list-more" href="<?php the_permalink(); ?>"><span><?php esc_html_e('Read More','cutslice'); ?></span></a>						
					</div><!--/.entry-->
				</div>

			</div>

		</div>
		
		<div class="type-list-bottom group">
			<div class="type-list-avatar">
				<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), '48' ); ?>
				</a>
			</div>
			<ul class="type-list-meta">
				<li><i class="far fa-folder"></i> <?php the_category(' / '); ?></li>
				<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) == 'on' ) ): ?>
					<li class="type-list-comments">
						<a class="post-comments" href="<?php comments_link(); ?>"><span><?php comments_number( '0', '1', '%' ); ?></span></a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
		
	</div>

</article><!--/.post-->	