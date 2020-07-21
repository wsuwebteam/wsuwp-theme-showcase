<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri(). '/style.css' ,
    array('parent-style'), wp_get_theme()->get('Version') );
}

function showcase_create_posttype() {
 
    register_post_type( 'profile',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Profiles' ),
                'singular_name' => __( 'Profile' )
            ),
            'public' => true,
            'has_archive' => true,
			'rewrite' => array('slug' => 'profiles'),
			'supports' => array('title', 'editor', 'custom-fields', 'excerpt', 'thumbnail'),
            'show_in_rest' => true,
 
        )
    );
}


add_action( 'init', 'showcase_create_posttype' );


function showcase_embed_template( $template ) {
	
	if ( isset( $_GET['modal-embed'] ) ) {
		return __DIR__ . '/embed-template.php';
	} 
 
    return $template;
}


add_filter( 'template_include', 'showcase_embed_template' );