<?php
if ( ! isset( $content_width ) ) $content_width = 1000;


function custom_theme_setup(){
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('custom-background');
	add_theme_support('custom-header',array('width' => 1000, 'height' => 400));
}
add_action('after_setup_theme','custom_theme_setup');

function rekisteroi_menu(){
	register_nav_menu('reuna','Paavalikko');
}
add_action('init','rekisteroi_menu');


/*mההritellההn wp-mostpopular osion asetukset sivustolle*/
function remove_widget_action(){
global $wp_widget_factory;
    
remove_action('wp_head',array($wp_widget_factory->widgets['WordpressPopularPosts'],'wpp_print_stylesheet'));
}
add_action('wp_head','remove_widget_action',1);

/*kirjaston lisההminen*/
function lisaa_kirjasto(){
	wp_enqueue_script(
	'custom-script',
	get_stylesheet_directory_uri() . '/js/app.js',
	array('jquery')
	);
}
add_action('wp_enqueue_scripts','lisaa_kirjasto');


/*lisהtההn vimpaimet sivustoon, jolloin voidaan lisהtה taustakuva helposti sivuille ilman css-mההrittelyה*/
if( function_exists('register_sidebar')){
    register_sidebar(array(
        'name' => 'vimpaimet',
        'id' => 'vimpaimet'));
}
?>