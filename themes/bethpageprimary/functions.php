<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar'),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Content Sidebar'),
		'id'            => 'sidebar-2',
		'description'   => __( 'Additional sidebar that appears on the right.'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area'),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section of the site.'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

if ( function_exists('add_theme_support') )
	// wp menus
	add_theme_support( 'menus' );

	// registering wp3+ menus
	register_nav_menus(
		array(
			'top-header' => __( 'Top Header'), // secondary nav in header
			'main-nav' => __( 'The Main Menu'),   // main nav in header
			'footer-links' => __( 'Footer Links') // secondary nav in footer
		)
	);

add_theme_support( 'post-thumbnails' );

wp_enqueue_style( $handle, $src, $deps, $ver, $media );

function add_capability() 
{
   // get the the role object
   $editor = get_role('editor');
   // add $cap capability to this role object
   $editor->add_cap('manage_options');

}

add_action('admin_init', 'add_capability');

add_filter( 'main-nav', 'add_menu_parent_class' );

function add_menu_parent_class( $items ) {

    $parents = array();
    foreach ( $items as $item ) {
        if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
            $parents[] = $item->menu_item_parent;
        }
    }

    foreach ( $items as $item ) {
        if ( in_array( $item->ID, $parents ) ) {
            $item->classes[] = 'menu-parent-item'; 
        }
    }

    return $items;    
}

wp_register_script('google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBGmZ9fJ3dE9d-Cz0sffx0AbZU2haEZu1A&sensor=true', array(), '3.15', true);

add_action('wp_enqueue_scripts', 'enqueue_assets');

function enqueue_assets() {
    wp_enqueue_script('google-maps-api');
}

?>