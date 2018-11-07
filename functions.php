<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'before_widget' => '<div class="box">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',));

register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'second' ),
	) );
	
/******************************************************************************
* @Author: Boutros AbiChedid 
* @Date:   June 20, 2011
* @Websites: http://bacsoftwareconsulting.com/ ; http://blueoliveonline.com/
* @Description: Preserves HTML formating to the automatically generated Excerpt.
* Also Code modifies the default excerpt_length and excerpt_more filters.
* @Tested: Up to WordPress version 3.1.3
*******************************************************************************/
function custom_wp_trim_excerpt($text) {
$raw_excerpt = $text;
if ( '' == $text ) {
    //Retrieve the post content. 
    $text = get_the_content('');
 
    //Delete all shortcode tags from the content. 
    $text = strip_shortcodes( $text );
 
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
     
    $allowed_tags = '<p>,<a>,<em>,<strong>,<li>,<ul>,<ol>,<blockquote>,<img>,<div>'; 
    $text = strip_tags($text, $allowed_tags);
     
    $excerpt_word_count = 170; 
    $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
     
    $excerpt_end = ' [...] <a class="readmore" href="'. get_permalink( get_the_ID() ) . '">read more </a><div style="clear: both;"></div>';
    $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);
     
    $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
        array_pop($words);
        $text = implode(' ', $words);
        $text = $text . $excerpt_more;
    } else {
        $text = implode(' ', $words);
    }
}
return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');

wp_enqueue_script( 'smoothup', get_template_directory_uri() . '/js/smoothscroll.js', array( 'jquery' ), '',  true );

function my_excerpt_password_form( $excerpt ) {
    if ( post_password_required() )
        $excerpt = get_the_password_form();
    return $excerpt;
}
add_filter( 'the_excerpt', 'my_excerpt_password_form' );

add_theme_support( 'post-formats', array( 'aside', 'image' ) );

?>