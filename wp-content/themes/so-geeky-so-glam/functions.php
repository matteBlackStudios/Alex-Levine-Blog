<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );


function add_post_formats() {
    add_theme_support( 'post-formats', array(   ) );

}
add_action( 'after_setup_theme', 'add_post_formats', 20 );

add_action( 'admin_init', 'hide_editor' );

function custom_admin_js() {
    $url = get_template_directory_uri(). '/assets/javascript/custom/admin.js';
    echo '"<script type="text/javascript" src="'. $url . '"></script>"';
}
add_action('admin_footer', 'custom_admin_js');

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

function get_post_excerpt($char_count){
    $excerpt =  get_the_excerpt();
    if(empty($excerpt)){
        $excerpt = substr(types_render_field( "content-section-1", array("output"=>"raw")), 0, $char_count);
        if(empty($excerpt)){
            $excerpt = substr(types_render_field( "content-first-section", array("output"=>"raw")), 0, $char_count);
        }
    }

    return $excerpt;
}
function get_post_featured_image($post_id){
    $image = '';
    if ( has_post_thumbnail( $post_id ) ){
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
        $image = $image[0];
    }
    return $image;
}
function linkify_tweet($tweet) {

    //Convert urls to <a> links
    $tweet = preg_replace("/([\w]+\:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/", "<a target=\"_blank\" href=\"$1\">$1</a>", $tweet);

    //Convert hashtags to twitter searches in <a> links
    $tweet = preg_replace("/#([A-Za-z0-9\/\.]*)/", "<a target=\"_new\" href=\"http://twitter.com/search?q=$1\">#$1</a>", $tweet);

    //Convert attags to twitter profiles in <a> links
    $tweet = preg_replace("/@([A-Za-z0-9\/\.]*)/", "<a target=\"_blank\" href=\"http://www.twitter.com/$1\">@$1</a>", $tweet);

    return $tweet;

}
function get_timeago( $ptime )
{
    $estimate_time = time() - $ptime;

    if( $estimate_time < 1 )
    {
        return 'less than 1 second ago';
    }

    $condition = array(
        12 * 30 * 24 * 60 * 60  =>  'year',
        30 * 24 * 60 * 60       =>  'month',
        24 * 60 * 60            =>  'day',
        60 * 60                 =>  'hour',
        60                      =>  'min',
        1                       =>  'sec'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $estimate_time / $secs;

        if( $d >= 1 )
        {
            $r = round( $d );
            return '' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
        }
    }
}
function get_fb_share_count( $url ) {

    $api = file_get_contents( 'http://graph.facebook.com/?id=' . $url );
    $count = json_decode( $api );
    if($count->shares){
       return $count->shares;
    }else{
       return 0;
    }
}
function my_new_contactmethods( $contactmethods ) {
// Add Twitter
    $contactmethods['twitter'] = 'Twitter';
//add Facebook
    $contactmethods['facebook'] = 'Facebook';
//add Instagram
    $contactmethods['instagram'] = 'Instagram';



    return $contactmethods;
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);
function custom_loginlogo() {
    echo '<style type="text/css">h1 a {background-image: url('.get_bloginfo('template_directory').'/assets/images/global/logo.png) !important; background-size: 314px !important; width: 100% !important; height: 134px !important }</style>';
}
add_action('login_head', 'custom_loginlogo');