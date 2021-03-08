<?php 
	$sidebar = cutslice_sidebar_primary();
	$layout = cutslice_layout_class();
	if ( $layout != 'col-1c'):
?>

	<div class="sidebar s1 dark">
		
		<div class="sidebar-content">
		
			<div class="leftbar-outer">
			
				<div class="leftbar">

					<?php if ( get_theme_mod('profile-image') || get_theme_mod('profile-name') || get_theme_mod('profile-description') ): ?>
						<div id="profile" class="group">
							<div id="profile-inner">
								<?php if ( get_theme_mod('profile-image') ): ?>
									<div id="profile-image"><img src="<?php echo esc_html( get_theme_mod('profile-image') ); ?>" alt="" /></div>
								<?php endif; ?>
								<?php if ( get_theme_mod('profile-name') ): ?>
									<div id="profile-name"><?php echo esc_html( get_theme_mod('profile-name') ); ?></div>
								<?php endif; ?>
								<?php if ( get_theme_mod('profile-description') ): ?>
									<div id="profile-description"><?php echo wp_kses_post( get_theme_mod('profile-description') ); ?></div>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
				
				</div>
			
				<?php if ( get_theme_mod( 'header-social', 'on' ) == 'on' ): ?>
					<?php cutslice_social_links() ; ?>
				<?php endif; ?>
				
				<?php if ( get_theme_mod( 'header-search', 'on' ) == 'on' ): ?>
					<div class="search-expand">
						<div class="search-expand-inner">
							<?php get_search_form(); ?>
						</div>
					</div>
				<?php endif; ?>
			
			</div>

			<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'sidebar' ) { get_template_part('inc/post-nav'); } ?>

			<?php dynamic_sidebar($sidebar); ?>

		</div><!--/.sidebar-content-->
		
	</div><!--/.sidebar-->
	
<?php endif; ?>