<?php 

	// Menú
	if (function_exists('register_nav_menus')) {
		register_nav_menus( array( 
			'superior' => 'Menú Principal de Header' 
		) );
	}

	// Clase de Menu Anchor
	add_filter('nav_menu_link_attributes', 'menu_anchor_class', 10, 3);

	function menu_anchor_class ($atts, $item, $args){
		$class = 'nav-link';
		$atts['class'] = $class;
		return $atts;
	}

	// Imagenes destacadas
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
	}

	// Agrega Sidebar
	add_action( 'widgets_init', 'my_register_sidebars' );
	function my_register_sidebars() {
    	/* Register the 'primary' sidebar. */
    	register_sidebar(
        	array(
            	'id'            => 'primary',
            	'name'          => __( 'Blog Sidebar' ),
            	'description'   => __( 'Sidebar para blog' ),
            	'before_widget' => '<div class="mb-3">',
            	'after_widget'  => '</div>',
            	'before_title'  => '<h3 class="widget-title">',
            	'after_title'   => '</h3>',
        	)
    	);
    	/* Repeat register_sidebar() code for additional sidebars. */
	}

	/* Agrega Styles & Scripts */

	// function astra_theme_scripts() {
	// 	wp_enqueue_style('main-styles', get_template_directory_uri() . 'style.css', array(), filemtime(get_template_directory() . 'style.css'), false);
	// 	wp_enqueue_style('bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), filemtime(get_template_directory() . '/css/bootstrap.min.css'), false);
	// 	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
	// }
	// add_action( 'wp_enqueue_scripts', 'astra_theme_scripts' );

 ?>