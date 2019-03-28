<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

/* NOTE 2803019 */

add_action( 'wp_enqueue_scripts', 'note_theme_enqueue_styles' , 20 );
function note_theme_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    
}

/* DISABLE CLASSIS EDITOR WORDPRESS */

if ( version_compare($GLOBALS['wp_version'], '5.0-beta', '>') ) {
    // WP > 5 beta
    add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );
} else {
    // WP < 5 beta
    add_filter( 'gutenberg_can_edit_post_type', '__return_false' );
}

/* CREATE SHORT CODE Ý KIẾN KHÁCH HÀNG */
if(!function_exits('create_shortcode_comment_custommer')) {
    function create_shortcode_comment_custommer() {
        $xhtml = '';
        $xhtml.= '<div id="GROUP1059" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP1253">
                    <div class="widget-content">
                        <div id="BOX1060" class="widget-element widget-snap ladi-drop lazy-hidden" lp-type="box" lp-lang="BOX" lp-group="GROUP1059" lp-display="block">
                            <div class="widget-content">
                                
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="GROUP1061" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP1059">
                            <div class="widget-content">
                                <div id="SHAPE1062" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP1061" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="SHAPE1063" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP1061" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="SHAPE1064" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP1061" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="SHAPE1065" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP1061" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="SHAPE1066" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP1061" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,174,15,1)">
                                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="HEADLINE1067" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP1059" lp-display="block">
                            <p class="widget-content" lp-node="p">Đã mua và cảm thấy rất hài lòng về máy. Cấu hình ngon cộng thêm camera rất đẹp. Pin xài tương đối ổn, cảm biến vân tay nhạy. Nói chung là siêu phẩm nên không có gì phải phàn nàn.</p>
                        </div>
                        <div id="GROUP1068" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP1059">
                            <div class="widget-content">
                                <div id="HEADLINE1069" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP1068" lp-display="block">
                                    <h6 class="widget-content" lp-node="h6">Phạm Huy Cường</h6> </div>
                                <div id="HEADLINE1070" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP1068" lp-display="block">
                                    <h6 class="widget-content" lp-node="h6">Đã Mua Tại dienthoaithongminh.info</h6> </div>
                            </div>
                        </div>
                    </div>
                </div>';
        return $xhtml;
    }
    add_shortcode( 'COMMENT-CUSTOMMER', 'create_shortcode_comment_custommer');
}