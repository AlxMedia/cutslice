<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'cutslice', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'cutslice' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'cutslice' ),
	'button_url'  => 'https://agnarson.com/wpthemes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'cutslice' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'cutslice' ),
	'button_url'  => 'https://wordpress.org/support/theme/cutslice/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'cutslice' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'cutslice' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'cutslice' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'cutslice' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'cutslice' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'cutslice' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'cutslice' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'cutslice' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'cutslice' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'cutslice' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'cutslice' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'cutslice' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'cutslice' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'cutslice' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Heading
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'cutslice' ),
	'description'	=> esc_html__( 'Your blog heading', 'cutslice' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'cutslice' ),
	'description'	=> esc_html__( 'Your blog subheading', 'cutslice' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Blog Content
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'blog-content',
	'label'			=> esc_html__( 'Blog Content', 'cutslice' ),
	'section'		=> 'blog',
	'default'		=> 'blog-excerpt',
	'choices'		=> array(
		'blog-excerpt'	=> esc_html__( 'Excerpt', 'cutslice' ),
		'blog-full'		=> esc_html__( 'Full Post', 'cutslice' ),
	),
) );
// Blog: Excerpt Length
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'cutslice' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'cutslice' ),
	'section'		=> 'blog',
	'default'		=> '16',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'cutslice' ),
	'description'	=> esc_html__( '2 columns of widgets', 'cutslice' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'cutslice' ),
	'description'	=> esc_html__( '2 columns of widgets', 'cutslice' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'cutslice' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'cutslice' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Post Format
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-format',
	'label'			=> esc_html__( 'Post Format', 'cutslice' ),
	'description'	=> esc_html__( 'Shows post format in post header', 'cutslice' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'cutslice' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'cutslice' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'cutslice' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'cutslice' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'cutslice' ),
		'categories'=> esc_html__( 'Related by categories', 'cutslice' ),
		'tags'		=> esc_html__( 'Related by tags', 'cutslice' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'cutslice' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'cutslice' ),
	'section'		=> 'blog',
	'default'		=> 'sidebar',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'cutslice' ),
		'sidebar'	=> esc_html__( 'Sidebar', 'cutslice' ),
		'content'	=> esc_html__( 'Below content', 'cutslice' ),
	),
) );
// Header: Search
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'cutslice' ),
	'description'	=> esc_html__( 'Header search button', 'cutslice' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'cutslice' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'cutslice' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'cutslice' ),
	'description'	=> esc_html__( 'Square size image', 'cutslice' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'cutslice' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'cutslice' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'cutslice' ),
	'description'	=> esc_html__( 'A short description of you', 'cutslice' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'cutslice' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'cutslice' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'cutslice' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 2', 'cutslice' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'cutslice' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'cutslice' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'cutslice' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'cutslice' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'cutslice' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'cutslice' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'cutslice' ),
	'description'	=> esc_html__( 'Footer credit text', 'cutslice' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );


function cutslice_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'cutslice_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'cutslice' ),
		'description'	=> esc_html__( '(is_home) Primary', 'cutslice' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'cutslice' ),
	) );
	Kirki::add_field( 'cutslice_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'cutslice' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'cutslice' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'cutslice' ),
	) );
	Kirki::add_field( 'cutslice_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'cutslice' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'cutslice' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'cutslice' ),
	) );
	Kirki::add_field( 'cutslice_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'cutslice' ),
		'description'	=> esc_html__( '(is_category) Primary', 'cutslice' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'cutslice' ),
	) );
	Kirki::add_field( 'cutslice_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'cutslice' ),
		'description'	=> esc_html__( '(is_search) Primary', 'cutslice' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'cutslice' ),
	) );
	Kirki::add_field( 'cutslice_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'cutslice' ),
		'description'	=> esc_html__( '(is_404) Primary', 'cutslice' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'cutslice' ),
	) );
	Kirki::add_field( 'cutslice_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'cutslice' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'cutslice' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'cutslice' ),
	) );
	
 } 
add_action( 'init', 'cutslice_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'cutslice' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'cutslice' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'cutslice' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'cutslice' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'cutslice' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'cutslice' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'cutslice' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'cutslice' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'cutslice' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'cutslice' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'cutslice' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'cutslice' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'cutslice' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'cutslice' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'cutslice' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'cutslice' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'cutslice' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'cutslice' ),
	'description'	=> esc_html__( 'Select font for the theme', 'cutslice' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'cutslice' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'cutslice' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'cutslice' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'cutslice' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'cutslice' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'cutslice' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'cutslice' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'cutslice' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'cutslice' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'cutslice' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'cutslice' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'cutslice' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'cutslice' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'cutslice' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'cutslice' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'cutslice' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'cutslice' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'cutslice' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'cutslice' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'cutslice' ),
		'arial'					=> esc_html__( 'Arial', 'cutslice' ),
		'georgia'				=> esc_html__( 'Georgia', 'cutslice' ),
		'verdana'				=> esc_html__( 'Verdana', 'cutslice' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'cutslice' ),
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'cutslice' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'cutslice' ),
	'section'		=> 'styling',
	'default'		=> '50',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Container Width
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'cutslice' ),
	'description'	=> esc_html__( 'Max-width of the container.', 'cutslice' ),
	'section'		=> 'styling',
	'default'		=> '1280',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Article Width
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'article-width',
	'label'			=> esc_html__( 'Article Max-width', 'cutslice' ),
	'description'	=> esc_html__( 'Max-width of the articles.', 'cutslice' ),
	'section'		=> 'styling',
	'default'		=> '800',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Primary Color
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'cutslice' ),
	'section'		=> 'styling',
	'default'		=> '#ff7a64',
) );
// Styling: Gradient Left
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'color',
	'settings'		=> 'gradient-left',
	'label'			=> esc_html__( 'Gradient Left', 'cutslice' ),
	'section'		=> 'styling',
	'default'		=> '#ff9966',
) );
// Styling: Gradient Right
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'color',
	'settings'		=> 'gradient-right',
	'label'			=> esc_html__( 'Gradient Right', 'cutslice' ),
	'section'		=> 'styling',
	'default'		=> '#ff5e62',
) );
// Styling: Sidebar Color
Kirki::add_field( 'cutslice_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-sidebar',
	'label'			=> esc_html__( 'Sidebar Color', 'cutslice' ),
	'section'		=> 'styling',
	'default'		=> '#000000',
) );