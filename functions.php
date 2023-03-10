<?php
function novelpro_lang(){
load_theme_textdomain('novelpro', get_template_directory() . '/languages');
}
add_action('init','novelpro_lang');
function novelpro_setup() {
    // title init
    add_theme_support('title-tag');
    // post thumbnail
    add_theme_support('post-thumbnails');
    add_image_size( 'portfolio-thumbnail',360, 280, TRUE );
    /**
     * Post format support
     */
    add_theme_support('post-formats', array('image', 'gallery', 'video', 'link', 'quote'));
    // Add support for Block Styles.
    add_theme_support( 'wp-block-styles' );
    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );
    // Add support for editor styles.
    add_theme_support( 'editor-styles' );
    // Enqueue editor styles.
    add_editor_style( 'style-editor.css' );
    // Add support for responsive embedded content.
    add_theme_support( 'responsive-embeds' );
    /// custom header
    $defaults = array(
    'default-image'          => '',
    'width'                  => 0,
    'height'                 => 0,
    'flex-height'            => false,
    'flex-width'             => false,
    'uploads'                => true,
    'random-default'         => false,
    'header-text'            => true,
    'default-text-color'     => '',
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults ); 

    /**
     * Automatic feed links support
     */
    add_theme_support('automatic-feed-links');

    /**
     * Custom editor style initialize
     */
    add_editor_style();
    register_nav_menus(array(
        'home-menu' => HOME_MENU,
        'frontpage-menu' => FRONT_MENU
    ));

     // on single blog post pages with comments open and threaded comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { 
        // enqueue the javascript that performs in-link comment reply fanciness
        wp_enqueue_script( 'comment-reply' ); 
    }


}
add_action('after_setup_theme', 'novelpro_setup');

require_once (get_template_directory() . '/inc/inc.php'); 
require_once( get_template_directory() . '/import/themehunk.php' );

/* ----------------------------------------------------------------------------------- */
/* Styles Enqueue */
/* ----------------------------------------------------------------------------------- */
function novelpro_add_stylesheet() {
    $section_animation = get_theme_mod('section_animation',false);
    $rtl_enable = get_theme_mod('rtl','');
	if (!is_admin()) {
    wp_enqueue_style( 'novelpro_font', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    wp_enqueue_style('novelpro_bootstrap', get_template_directory_uri() . "/css/bootstrap.css", '', '', 'all');
    wp_enqueue_style('novelpro_font_awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css", '', '', 'all');
   wp_enqueue_style('novelpro_font_awesome_old', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", '', '', 'all');
    if($section_animation!=true){
    wp_enqueue_style('animate', get_template_directory_uri() . "/css/animate.css", '', '', 'all');
    }
     wp_enqueue_style('novelpro_flexslider', get_template_directory_uri() . "/css/flexslider.css", '', '', 'all');
	wp_enqueue_style('novelpro_bxslider', get_template_directory_uri() . "/css/jquery.bxslider.css", '', '', 'all');
    wp_enqueue_style('novelpro_prettyPhoto', get_template_directory_uri() . "/css/prettyPhoto.css", '', '', 'all');
    wp_enqueue_style('novelpro_menucss', get_template_directory_uri() . "/css/menu-css.css", '', '', 'all');
    wp_enqueue_style('novelpro_brndcss', get_template_directory_uri() . "/css/owl.carousel.css", '', '', 'all');
    if($rtl_enable=='1'){
    wp_enqueue_style('novelpro_rtl', get_template_directory_uri() . "/css/rtl.css", '', '', 'all');
    }
	wp_enqueue_style( 'novelpro_style', get_stylesheet_uri() );
    if (function_exists( 'novelpro_typography_style' ) ) :
   wp_add_inline_style( 'novelpro_style', novelpro_typography_style());
   endif;
    }
}
add_action('wp_enqueue_scripts', 'novelpro_add_stylesheet');
/* ----------------------------------------------------------------------------------- */
/* jQuery Enqueue */
/* ----------------------------------------------------------------------------------- */
function novelpro_wp_enqueue_scripts() {
     $section_animation = get_theme_mod('section_animation',false);
    if (!is_admin()) {
    wp_enqueue_script('jquery');
    wp_enqueue_script('classie', get_template_directory_uri() . '/js/classie.js', array('jquery'),'21032016', true);
    wp_enqueue_script('jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array('jquery'),'21032016', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'),'21032016', true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'),'21032016', true);
    wp_enqueue_script('hammer', get_template_directory_uri() . '/js/hammer.js', array('jquery'),'21032016', true);
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'),'21032016', true);
    wp_enqueue_script('prettyphoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array('jquery'),'21032016', true);
    wp_enqueue_script('jcarousellite', get_template_directory_uri() . '/js/jquery.jcarousellite.js', array('jquery'),'21032016', true);
    wp_enqueue_script('buxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array('jquery'),'21032016', true);
  wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.js', array('jquery'),'21032016', true);  
  wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'),'21032016', true);
  wp_enqueue_script('skrollr', get_template_directory_uri() . '/js/skrollr.js', array('jquery'),'21032016', true);
if($section_animation!=true){
 wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js', array('jquery'),'21032016', true);
        }
     if(get_theme_mod('cf_hide_show_','off')=='on') : 
    wp_enqueue_script('novelpro-recaptcha', '//www.google.com/recaptcha/api.js', array('jquery'),'21032016', true);
    endif;
    wp_enqueue_script('novelpro-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'),'21032016', true);
    
    }
}
// Hook into wp_enqueue_scripts
add_action( 'wp_enqueue_scripts', 'novelpro_wp_enqueue_scripts' );

/*
 * Custom header menu
 *
*/
    function th_nav_menu(){
        wp_nav_menu( array('theme_location' => 'home-menu', 
        'container' => false, 
            'menu_class' => 'menu', 
            'menu_id'         => 'menu',
            'fallback_cb'     => 'th_wp_page_menu'));
    }

   function th_wp_page_menu()
{
    echo '<ul class="menu" id="menu">';
    wp_list_pages(array('title_li' => ''));
    echo '</ul>';
}


    function th_front_nav_menu(){
        wp_nav_menu( array('theme_location' => 'frontpage-menu', 
        'container' => false, 
            'menu_class' => 'menu', 
            'menu_id'         => 'menu',
            'fallback_cb'     => 'th_wp_page_menu'));
    }

   function th_front_wp_page_menu()
{
    echo '<ul class="menu" id="menu">';
    wp_list_pages(array('title_li' => ''));
    echo '</ul>';
}


function novelpromenu_add_menuclass($ulclass) {
    return preg_replace('/<ul>/', '<ul class="sf-menu">', $ulclass, 1);
}

add_filter('wp_page_menu', 'novelpromenu_add_menuclass');


//main nav
function novelpromenu_nav() {
    if (function_exists('wp_nav_menu'))
        wp_nav_menu(array('theme_location' => 'home-menu', 'menu_class' => 'sf-menu nav navbar-nav navbar-right', 'menu_id' => '','container' => '', 'fallback_cb' => 'novelpromenu_nav_fallback'));
    else
        novelpromenu_nav_fallback();
}
function novelpromenu_nav_fallback() {
    ?>

    <ul class="sf-menu nav navbar-nav navbar-right">
        <?php
        wp_list_pages('title_li=&show_home=1&sort_column=menu_order');
        ?>
    </ul>

    <?php
}
//Frontpage nav
function novelpromenu_frontpage_nav() {
    if (function_exists('wp_nav_menu'))
        wp_nav_menu(array('theme_location' => 'frontpage-menu', 'menu_class' => 'nav navbar-nav navbar-right sf-menu', 'menu_id' => '', 'container' => '', 'fallback_cb' => 'novelpromenu_frontpage_nav_fallback'));
    else
        novelpromenu_frontpage_nav_fallback();
}
function novelpromenu_frontpage_nav_fallback() {
    ?>
    <ul class="sf-menu nav navbar-nav navbar-right">
        <?php
        wp_list_pages('title_li=&show_home=1&sort_column=menu_order');
        ?>
    </ul>

    <?php
}
//mobile nav
function novelpromenu_mobile_nav() {
    if (function_exists('wp_nav_menu'))
        wp_nav_menu(array('theme_location' => 'home-menu', 'menu_class' => '', 'menu_id' => '','container' => '', 'fallback_cb' => 'novelpromenu_mobile_nav_fallback'));
    else
        novelpromenu_mobile_nav_fallback();
}

// Add CLASS attributes to the first <ul> occurence in wp_page_menu
function novelpro_add_menuclass($ulclass) {
    return preg_replace('/<ul>/', '<ul class="ddsmoothmenu">', $ulclass, 1);
}

add_filter('wp_page_menu', 'novelpro_add_menuclass');

//main nav
function novelpro_nav() {
    if (function_exists('wp_nav_menu'))
        wp_nav_menu(array('theme_location' => 'home-menu', 'container_id' => 'menu', 'menu_class' => 'ddsmoothmenu', 'fallback_cb' => 'novelpro_nav_fallback'));
    else
        novelpro_nav_fallback();
}

function novelpro_nav_fallback() {
    ?>
    <div id="menu">
        <ul class="ddsmoothmenu">
    <?php
    wp_list_pages('title_li=&show_home=1&sort_column=menu_order');
    ?>
        </ul>
    </div>
    <?php
}

function novelpro_nav_menu_items($items) {
    if (is_home()) {
        $homelink = '<li class="current_page_item">' . '<a href="' . home_url('/') . '">' . HOME_TEXT . '</a></li>';
    } else {
        $homelink = '<li>' . '<a href="' . home_url('/') . '">' . HOME_TEXT . '</a></li>';
    }
    $items = $homelink . $items;
    return $items;
}

add_filter('wp_list_pages', 'novelpro_nav_menu_items');

//Frontpage nav
function novelpro_frontpage_nav() {
    if (function_exists('wp_nav_menu'))
        wp_nav_menu(array('theme_location' => 'frontpage-menu', 'container_id' => 'menu', 'menu_class' => 'ddsmoothmenu', 'fallback_cb' => 'novelpro_frontpage_nav_fallback'));
    else
        novelpro_frontpage_nav_fallback();
}

function novelpro_frontpage_nav_fallback() {
    ?>
    <div id="menu">
        <ul class="ddsmoothmenu">
    <?php
    wp_list_pages('title_li=&show_home=1&sort_column=menu_order');
    ?>
        </ul>
    </div>
    <?php
}
function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="page-scroll"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

/* ----------------------------------------------------------------------------------- */
/* Breadcrumbs Plugin
  /*----------------------------------------------------------------------------------- */

function novelpro_breadcrumbs() {
    $delimiter = '&raquo;';
    $home = __('Home','novelpro'); // text for the 'Home' link
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb
    echo '<p id="crumbs">';
    global $post;
    $homeLink = home_url();
    echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
    if (is_category()) {
        global $wp_query;
        $cat_obj = $wp_query->get_queried_object();
        $thisCat = $cat_obj->term_id;
        $thisCat = get_category($thisCat);
        $parentCat = get_category($thisCat->parent);
        if ($thisCat->parent != 0)
            echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
        echo $before . __('Archive by category','novelpro') . single_cat_title('', false) . '"' . $after;
    }
    elseif (is_day()) {
        echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
        echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
        echo $before . get_the_time('d') . $after;
    } elseif (is_month()) {
        echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
        echo $before . get_the_time('F') . $after;
    } elseif (is_year()) {
        echo $before . get_the_time('Y') . $after;
    } elseif (is_single() && !is_attachment()) {
        if (get_post_type() != 'post') {
            $post_type = get_post_type_object(get_post_type());
            $slug = $post_type->rewrite;
            echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } else {
            $cat = get_the_category();
            $cat = $cat[0];
            echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            echo $before . get_the_title() . $after;
        }
    } elseif (!is_single() && !is_page() && get_post_type() != 'post') {
        $post_type = get_post_type_object(get_post_type());
        //echo $before . $post_type->labels->singular_name . $after;
        echo $before . 'Search results for "' . get_search_query() . '"' . $after;
    } elseif (is_attachment()) {
        $parent = get_post($post->post_parent);
        $cat = get_the_category($parent->ID);
        $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
    } elseif (is_page() && !$post->post_parent) {
        echo $before . get_the_title() . $after;
    } elseif (is_page() && $post->post_parent) {
        $parent_id = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
            $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb)
            echo $crumb . ' ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
    } elseif (is_search()) {
        echo $before . __('Search results for','novelpro') . get_search_query() . '"' . $after;
    } elseif (is_tag()) {
        echo $before . __('Posts tagged','novelpro') . single_tag_title('', false) . '"' . $after;
    } elseif (is_author()) {
        global $author;
        $userdata = get_userdata($author);
        echo $before . __('Articles posted by','novelpro') . $userdata->display_name . $after;
    } elseif (is_404()) {
        echo $before . __('Error 404','novelpro') . $after;
    }
    if (get_query_var('paged')) {
        if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
            echo ' (';
        echo PAGE . ' ' . get_query_var('paged');
        if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
            echo ')';
    }
    echo '</p>';
}

/* ----------------------------------------------------------------------------------- */
/* Attachment Page Design
  /*----------------------------------------------------------------------------------- */

//For Attachment Page
/**
 * Prints HTML with meta information for the current post (category, tags and permalink).
 *
 */
function novelpro_posted_in() {
// Retrieves tag list of current post, separated by commas.
    $tag_list = get_the_tag_list('', ', ');
    if ($tag_list) {
        $posted_in = THIS_ENTRY_WAS_POSTED_IN . ' .' . AND_TAGGED . ' %2$s.' . BOOKMARK_THE . ' <a href="%3$s" title="Permalink to %4$s" rel="bookmark">' . PERMALINK . '</a>.';
    } elseif (is_object_in_taxonomy(get_post_type(), 'category')) {
        $posted_in = THIS_ENTRY_WAS_POSTED_IN . ' %1$s. ' . BOOKMARK_THE . ' <a href="%3$s" title="Permalink to %4$s" rel="bookmark">' . PERMALINK . '</a>.';
    } else {
        $posted_in = BOOKMARK_THE . '<a href="%3$s" title="Permalink to %4$s" rel="bookmark">' . PERMALINK . '</a>.';
    }
// Prints the string, replacing the placeholders.
    printf(
            $posted_in, get_the_category_list(', '), $tag_list, get_permalink(), the_title_attribute('echo=0')
    );
}

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * Used to set the width of images and content. Should be equal to the width the theme
 * is designed for, generally via the style.css stylesheet.
 */
if (!isset($content_width))
    $content_width = 590;

/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override twentyten_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 * @uses register_sidebar
 */
function novelpro_widgets_init() {
// Area 1, located at the top of the sidebar.
    register_sidebar(array(
        'name' => PRIMARY_WIDGET,
        'id' => 'primary-widget-area',
        'description' => THE_PRIMARY_WIDGET,
        'before_widget' => '<div class="sidebar_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="line"></span>',
        'after_title' => '</h3>',
    ));
// Area 2, located below the Primary Widget Area in the sidebar. Empty by default.
    register_sidebar(array(
        'name' => SECONDRY_WIDGET,
        'id' => 'secondary-widget-area',
        'description' => THE_SECONDRY_WIDGET,
        'before_widget' => '<div class="sidebar_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3><span class="line"></span>',
        'after_title' => '</h3>',
    ));
	// Footer Area 1,  Empty by default.
    register_sidebar(array(
        'name' => __('First Footer Widget Area', 'novelpro'),
        'id' => 'first-footer-widget-area',
        'description' => __('First Footer Widget', 'novelpro'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
	// Footer Area 2, Empty by default.
    register_sidebar(array(
        'name' => __('Second Footer Widget Area', 'novelpro'),
        'id' => 'second-footer-widget-area',
        'description' => __('Second Footer Widget', 'novelpro'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
	// Footer Area 3, Empty by default.
    register_sidebar(array(
        'name' => __('Third Footer Widget Area', 'novelpro'),
        'id' => 'third-footer-widget-area',
        'description' => __('Third Footer Widget', 'novelpro'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
	
	// Footer Area 4, located below the Primary Widget Area in the sidebar. Empty by default.
    register_sidebar(array(
        'name' => __('Fourth Footer Widget Area', 'novelpro'),
        'id' => 'fourth-footer-widget-area',
        'description' => __('Fourth Footer Widget', 'novelpro'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

 register_sidebar(array(
        'name' => __('Woocommerce widget area', 'novelpro'),
        'id' => 'th-woo-widget-area',
        'description' => __('Woocommerce page display', 'novelpro'),
        'before_widget' => '<div class="woo-widget-partition">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));   
	
}

/** Register sidebars by running novelpro_widgets_init() on the widgets_init hook. */
add_action('widgets_init', 'novelpro_widgets_init');

/**
 * Pagination
 *
 */
function novelpro_pagination($pages = '', $range = 2) {
    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged))
        $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        echo "<ul class='paging'>";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages)
            echo "<li><a href='" . get_pagenum_link(1) . "'>&laquo;</a></li>";
        if ($paged > 1 && $showitems < $pages)
            echo "<li><a href='" . get_pagenum_link($paged - 1) . "'>&lsaquo;</a></li>";
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
                echo ($paged == $i) ? "<li><a href='" . get_pagenum_link($i) . "' class='current' >" . $i . "</a></li>" : "<li><a href='" . get_pagenum_link($i) . "' class='inactive' >" . $i . "</a></li>";
            }
        }
        if ($paged < $pages && $showitems < $pages)
            echo "<li><a href='" . get_pagenum_link($paged + 1) . "'>&rsaquo;</a></li>";
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages)
            echo "<li><a href='" . get_pagenum_link($pages) . "'>&raquo;</a></li>";
        echo "</ul>\n";
    }
}

/////////Theme Options

//Trm excerpt
function novelpro_trim_excerpt($length) {
    global $post;
    $explicit_excerpt = $post->post_excerpt;
    if ('' == $explicit_excerpt) {
        $text = get_the_content('');
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
    } else {
        $text = apply_filters('the_content', $explicit_excerpt);
    }
    $text = strip_shortcodes($text); // optional
    $text = strip_tags($text);
    $excerpt_length = $length;
    $words = explode(' ', $text, $excerpt_length + 1);
    if (count($words) > $excerpt_length) {
        array_pop($words);
        array_push($words, '...');
        $text = implode(' ', $words);
        $text = apply_filters('the_excerpt', $text);
    }
    return $text;
}

function novelpro_image_post($post_id) {
    add_post_meta($post_id, 'img_key', 'on');
}

//Trm post title
function the_titlesmall($before = '', $after = '', $echo = true, $length = false) {
    $title = get_the_title();
    if ($length && is_numeric($length)) {
        $title = substr($title, 0, $length);
    }
    if (strlen($title) > 0) {
        $title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
        if ($echo)
            echo $title;
        else
            return $title;
    }
}
function novelpro_head_css() {
    $output = '';
    $alt_css = get_theme_mod('theme_color','#fed136');
    $custom_css = get_theme_mod('custom_css_text','');

    if ($alt_css <> '') {
        $output .= $alt_css . "\n";
    }
// Output styles
    if ($output <> '') {
$output = "<!-- Custom Styling -->\n<style type=\"text/css\">\n
.page-content .searchform #searchsubmit, .footer-widget-area .searchform #searchsubmit, .footer_bg, .woocommerce span.onsale, .woocommerce-page span.onsale, .woocommerce #content input.button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce-page #content input.button, .woocommerce-page #respond input#submit, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce #content input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce-page #content input.button.alt, .woocommerce-page #respond input#submit.alt, .woocommerce-page a.button.alt, .woocommerce-page button.button.alt, .woocommerce-page input.button.alt, .woocommerce ul.products li.product a.button, .woocommerce.archive ul.products li.product a.button, .woocommerce-page.archive ul.products li.product a.button, .woocommerce #content input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce-page #content input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce-page input.button:hover, .woocommerce #content input.button.alt:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce-page #content input.button.alt:hover, .woocommerce-page #respond input#submit.alt:hover, .woocommerce-page a.button.alt:hover, .woocommerce-page button.button.alt:hover, .woocommerce-page input.button.alt:hover, .woocommerce ul.products li.product a.button:hover, .woocommerce.archive ul.products li.product a.button:hover, .woocommerce-page.archive ul.products li.product a.button:hover .woocommerce-page #respond input#submit, .woocommerce-product-search input[type='submit'], .ui-slider .ui-slider-range, #move-to-top, .sub-menu li:hover, .menu-item.current-menu-item, .navigation .menu > li:hover, li.page_item.current_page_item, .sub-menu .menu-item-has-children ul li a:hover, .sub-menu .menu-item-has-children:hover, .menu li .active,.woocommerce-product-search button{
    background:" . $alt_css . ";
} 
@media screen and (max-width: 1024px){
#menu li:hover {
 background:" . $alt_css . ";
}} 
.text-primary, .woocommerce .star-rating span, .woocommerce-page .star-rating span, .woocommerce ul.products li.product h3:hover, .woocommerce-page ul.products li.product h3:hover, li.product a:hover, .bx-caption span p a, .bx-caption span p a:hover,a:hover, a:focus, a:active, a.active,.owl-theme .owl-controls .owl-buttons div, div.facebook .pp_description {
    color: " . $alt_css . ";
}
a {
    color: " . $alt_css . ";
}
.contact_section .leadform-show-form input[type='submit'] {
    background:" . $alt_css . ";
    border: solid " . $alt_css . " 1px;
} 

.btn-primary, #commentform input#submit, #commentform input#submit:hover {
    border-color: " . $alt_css . ";
    background-color:" . $alt_css . ";
}
.btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active {
    border-color:" . $alt_css . ";
    background-color:" . $alt_css . ";
}
.btn-primary .badge {
    color:" . $alt_css . ";
    background-color: #fff;
}
.btn-xl {
    border-color: " . $alt_css . ";
    background-color: " . $alt_css . ";
}
.navbar-default .navbar-brand {
    color:" . $alt_css . ";
}
.navbar-default .navbar-toggle {
    border-color:" . $alt_css . ";
    background-color:" . $alt_css . ";
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
    background-color:" . $alt_css . ";
}
.navbar-default .navbar-nav>.active>a {
    background-color:" . $alt_css . ";
}
.timeline>li .timeline-image {
    background-color:" . $alt_css . ";
}
.contact_section .form-control:focus {
    border-color:" . $alt_css . ";
}
ul.social-buttons li a:hover,
ul.social-buttons li a:focus,
ul.social-buttons li a:active {
    background-color:" . $alt_css . ";
}
::-moz-selection {
    background:" . $alt_css . ";
}

::selection {
    background:" . $alt_css . ";
}
.contact_section .leadform-show-form input:focus, .contact_section .leadform-show-form textarea:focus {
    border: 2px solid" . $alt_css . ";
}

body {
    webkit-tap-highlight-color:" . $alt_css . ";
}
ol.commentlist li.comment .comment-author .avatar {
    border: 3px solid " . $alt_css . "; 
}
ol.commentlist li.comment .reply a {
    background: " . $alt_css . ";
}
#commentform a {
    color: " . $alt_css . ";
}
.home_blog_content .post:hover .post_content_bottom{
    background:" . $alt_css . ";
}
#portfolio .portfolio-item .portfolio-link .portfolio-hover{
	background:" . $alt_css . ";
}
.navbar .sf-menu ul li:hover , .price-post:hover .plan-select {
    background-color:" . $alt_css . ";
}
.sf-menu ul ul li , .price-class .featured .header-package{
	background-color:" . $alt_css . ";
}
.price-class .featured .header-package{
    background-color:" . $alt_css . "!important;
}
.navbar .sf-menu li:hover,
.navbar .sf-menu li.sfHover,
.home .last-btn.navbar-shrink .navigation ul#menu > li:last-child > a {
	background-color:" . $alt_css . ";
} 
.home .last-btn .navigation ul#menu > li:last-child > a{
border: 2px solid " . $alt_css . ";
color:" . $alt_css . ";
}";
echo $output;
echo  html_entity_decode($custom_css);
echo "</style>";
    }
}
add_action('wp_head', 'novelpro_head_css');

/**
 * The Gallery shortcode.
 *
 * This implements the functionality of the Gallery Shortcode for displaying
 * WordPress images on a post.
 *
 * @since 2.5.0
 *
 * @param array $attr Attributes of the shortcode.
 * @return string HTML content to display gallery.
 */
remove_shortcode('gallery');
add_shortcode('gallery', 'NovelPro_gallery_shortcode');

function NovelPro_gallery_shortcode($attr) {
    $post = get_post();
    static $instance = 0;
    $instance++;
    if (!empty($attr['ids'])) {
        // 'ids' is explicitly ordered, unless you specify otherwise.
        if (empty($attr['orderby']))
            $attr['orderby'] = 'post__in';
        $attr['include'] = $attr['ids'];
    }
    // Allow plugins/themes to override the default gallery template.
    $output = apply_filters('post_gallery', '', $attr);
    if ($output != '')
        return $output;
    // We're trusting author input, so let's at least make sure it looks like a valid orderby statement
    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }
    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
                    ), $attr));
    $id = intval($id);
    if ('RAND' == $order)
        $orderby = 'none';
    if (!empty($include)) {
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif (!empty($exclude)) {
        $attachments = get_children(array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));
    } else {
        $attachments = get_children(array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));
    }
    if (empty($attachments))
        return '';
    if (is_feed()) {
        $output = "\n";
        foreach ($attachments as $att_id => $attachment)
            $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
        return $output;
    }
    $itemtag = tag_escape($itemtag);
    $captiontag = tag_escape($captiontag);
    $columns = intval($columns);
    $itemwidth = $columns > 0 ? floor(100 / $columns) : 100;
    $float = is_rtl() ? 'right' : 'left';
    $selector = "gallery-{$instance}";
    ?>
    <script>
        //Gallery
        //Prety Photo     
        jQuery.noConflict();
        jQuery(document).ready(function() {
            jQuery(".<?php echo $selector ?> a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'light_rounded', slideshow: 8000, autoplay_slideshow: true});
        });
    </script>
    <?php
    $gallery_style = $gallery_div = '';
    if (apply_filters('use_default_gallery_style', true))
        $gallery_style = "
        
        <!-- see gallery_shortcode() in wp-includes/media.php -->";
    $size_class = sanitize_html_class($size);
    $gallery_div = "<div id='$selector' class='$selector gallery galleryid-{$id} gallery-columns-{$columns} gallery-size-{$size_class}'>";
    $gallery_ul = "<ul class='thumbnail col-{$columns}'>";
    $output = apply_filters('gallery_style', $gallery_style . "\n\t\t" . $gallery_div . $gallery_ul);
    $i = 0;
    ?>
    <?php
    foreach ($attachments as $gallery_image) {
        $attachment_img = wp_get_attachment_url($gallery_image->ID);
        $img_source = NovelPro_image_resize($attachment_img, 816, 450);
        if (is_single()) {
            $img_source = NovelPro_image_resize($attachment_img, 816, 450);
        }
        if (is_home()) {
            $img_source = NovelPro_image_resize($attachment_img, 816, 450);
        }

        $title = '';
        if($gallery_image->post_content!=''){
            $title ='title="'.$gallery_image->post_content.'"';
        }
        $output .= "<li>";
        $output .= '<a rel="prettyPhoto[gallery2]" alt="' . $gallery_image->post_excerpt . '" href="' . $attachment_img . '"  '.$title.'>';

        $output .= '<span>';
        $output .= '</span>';
        $output .= '<img src="' . $img_source['url'] . '" alt=""/>';
        $output .= '</a>';
        $output .= '<h2><a class="gall-content"  href="' . '?attachment_id=' . $gallery_image->ID . '">';
        $output .= $gallery_image->post_excerpt;
        $output .= '</a></h2>';
        $output .= "</li>";
    }
    $output .= "
    <br style='clear: both;' />         
    </ul>\n
    </div>";
    return $output;
}
/*
 *   Mobile device detection
 */
if( !function_exists('novelpro_mobile_user_agent_switch') ){
    function novelpro_mobile_user_agent_switch(){
        $device = '';
        
        if( stristr($_SERVER['HTTP_USER_AGENT'],'ipad') ) {
            $device = "ipad";
        } else if( stristr($_SERVER['HTTP_USER_AGENT'],'iphone') || strstr($_SERVER['HTTP_USER_AGENT'],'iphone') ) {
            $device = "iphone";
        } else if( stristr($_SERVER['HTTP_USER_AGENT'],'blackberry') ) {
            $device = "blackberry";
        } else if( stristr($_SERVER['HTTP_USER_AGENT'],'android') ) {
            $device = "android";
        }

        if( $device ) {
            return $device; 
        }else{
            return false;
        }
    }
}
/**
 * Enqueues the javascript for comment replys 
 * 
 * */
function novelpro_enqueue_scripts() {
    if (is_singular() and get_site_option('thread_comments')) {
        wp_print_scripts('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'novelpro_enqueue_scripts');

  // Set up the WordPress core custom background feature.
    add_theme_support('custom-background',apply_filters( 'novelpro_background_args', array(
        'default-repeat'         => 'no-repeat',
        'default-position-x'     => 'center',
        'default-attachment'     => 'fixed'
    )));
     /* woocommerce support */
    add_theme_support( 'woocommerce' );
	
	// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}
// ----------------------------//
// layout choose function
//-----------------------------//
// blog
if (!function_exists('novelpro_blog_layout') ) {
    function novelpro_blog_get_layout( $default = 'blog-right' ) {
    $layout = get_theme_mod( 'novelpro_blog_layout', $default );
    return apply_filters( 'novelpro_blog_get_layout', $layout, $default );
    }
}
// woo
if (!function_exists('novelpro_woo_layout') ) {
    function novelpro_woo_get_layout( $default = 'blog-right' ) {
    $layout = get_theme_mod( 'novelpro_woo_layout', $default );
    return apply_filters( 'novelpro_woo_get_layout', $layout, $default );
    }
}
?>