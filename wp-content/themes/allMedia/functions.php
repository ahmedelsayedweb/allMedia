<?php
require_once('wp-bootstrap-navwalker.php');
require_once( get_template_directory() .'/inc/theme-option/option-tree/ot-loader.php');
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_pages', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_true' );
//add featured image
add_theme_support('post-thumbnails');
/*
** Function to Add custom Styles
** Added By @Ahmed ELsayed
** wp_enqueue_style()
*/
function ahmed_add_styles() {
	
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/libs/animate.css/animate.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font/font-icon/font-awesome/css/font-awesome.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/font/font-icon/alabicon/style.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/libs/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('slick', get_template_directory_uri() . '/assets/libs/slick-slider/slick.css');
	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/libs/slick-slider/slick-theme.css');
	wp_enqueue_style('fancybox-thumbs', get_template_directory_uri() . '/assets/libs/fancybox/source/helpers/jquery.fancybox-thumbs.css');
	wp_enqueue_style('jquery.fancybox', get_template_directory_uri() . '/assets/libs/fancybox/source/jquery.fancybox.css');
	wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
	wp_enqueue_style('components', get_template_directory_uri() . '/assets/css/components.css');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
}
/*
** Function to Add custom Scripts
** Added By @Ahmed ELsayed
** wp_enqueue_script()
*/
function ahmed_add_scripts() {
	
	wp_deregister_script('jquery'); //remove jquery
	wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true); //in footer
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/libs/bootstrap/js/bootstrap.min.js', array() , false, true);
	wp_enqueue_script('jquery.smooth-scroll', get_template_directory_uri() . '/assets/libs/smooth-scroll/jquery.smooth-scroll.js', array() , false, true);
	wp_enqueue_script('wow', get_template_directory_uri() . '/assets/libs/wow-js/wow.min.js', array() , false, true);
	wp_enqueue_script('slick.min', get_template_directory_uri() . '/assets/libs/slick-slider/slick.min.js', array() , false, true);
	wp_enqueue_script('jquery.mousewheel', get_template_directory_uri() . '/assets/libs/fancybox/source/jquery.mousewheel-3.0.6.pack.js', array() , false, true);
	wp_enqueue_script('jquery.fancybox', get_template_directory_uri() . '/assets/libs/fancybox/source/jquery.fancybox.pack.js', array() , false, true);
	wp_enqueue_script('jquery.fancybox-thumbs', get_template_directory_uri() . '/assets/libs/fancybox/source/helpers/jquery.fancybox-thumbs.js', array() , false, true);
	wp_enqueue_script('isotope.pkgd', get_template_directory_uri() . '/assets/libs/isotope/isotope.pkgd.min.js', array() , false, true);
	wp_enqueue_script('jquery-countTo', get_template_directory_uri() . '/assets/libs/CountTo/jquery-countTo.js', array() , false, true);
	wp_enqueue_script('portfolio-2', get_template_directory_uri() . '/assets/js/pages/portfolio-2.js', array() , false, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array() , false, true);
	wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js');
	wp_script_add_data('html5shiv','conditional','lt IE 9');
	
}
/*
** Add menu support
** Added By @Ahmed ELsayed
*/
function custom_menu(){

	//register_nav_menu('bootstrap-menu', __('Navigation Bor'));
	register_nav_menus( array(
	'bootstrap-menu' => 'Navigation Bor',
	'footer_menu' => 'Footer Menu',
) );
}
function Ahmed_extend_excerpt($length){
	return 10;
}
add_filter('excerpt_length','Ahmed_extend_excerpt');
function Ahmed_excerpt_change_dots($more){
	return '...';
}
add_filter('excerpt_more','Ahmed_excerpt_change_dots');
function add_menuclass($ulclass) {
  return preg_replace('/<a /', '<a class="main-menu"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');
function bootstrap_menu(){
	
	wp_nav_menu(array(
	'theme_location' => 'bootstrap-menu',
	'menu_class'     => 'nav-links nav navbar-nav is-hidden',
	'container'     => false,
	'depth'     => 2,
	'walker'     => new wp_bootstrap_navwalker(),
	));
}
add_filter( 'pll_copy_post_metas', 'copy_post_metas' );
 
function copy_post_metas( $metas ) {
    return array_merge( $metas, array( 'my_post_meta' ) );
}
add_filter( 'pll_copy_taxonomies', 'copy_tax', 10, 2 );
 
function copy_tax( $taxonomies, $sync ) {
    $taxonomies[] = 'my_custom_tax';
    return $taxonomies;
}
add_filter( 'pll_translation_url', 'check_archive_translation', 10, 2 );
 
function check_archive_translation( $url, $lang ) {
    global $wp_query;
    $qv = $wp_query->query;
 
    if ( is_month() ) {
        $posts = get_posts( array(
            'lang'     => $lang,
            'year'     => $qv['year'],
            'monthnum' => $qv['monthnum'],
        ) );
        if ( empty( $posts ) ) {
            return null;
        }
    }
    return $url;
}
add_filter( 'pll_get_post_types', 'add_cpt_to_pll', 10, 2 );
 
function add_cpt_to_pll( $post_types, $is_settings ) {
    if ( $is_settings ) {
        // hides 'my_cpt' from the list of custom post types in Polylang settings
        unset( $post_types['my_cpt'] );
    } else {
        // enables language and translation management for 'my_cpt'
        $post_types['my_cpt'] = 'my_cpt';
    }
    return $post_types;
}
add_filter( 'pll_get_taxonomies', 'add_tax_to_pll', 10, 2 );
 
function add_tax_to_pll( $taxonomies, $is_settings ) {
    if ( $is_settings ) {
        unset( $taxonomies['my_tax'] );
    } else {
        $taxonomies['my_tax'] = 'my_tax';
    }
    return $taxonomies;
}
add_filter( 'pll_redirect_home', '__return_false' );
/*
** Add Actions
** Added By @Ahmed ELsayed
** add_action()
*/

add_action( 'wp_enqueue_scripts', 'ahmed_add_styles' );
add_action( 'wp_enqueue_scripts', 'ahmed_add_scripts' );
add_action( 'init', 'custom_menu' );

