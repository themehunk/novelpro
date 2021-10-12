<?php
add_action('after_setup_theme', 'novelpro_unlimited_load');
function novelpro_unlimited_load() {
if (function_exists( 'novelpro_setup' ) ) :
include_once(ABSPATH.'wp-admin/includes/plugin.php');  
if (is_plugin_active( 'novelpro-unlimited/novelpro-unlimited.php' ) ){
deactivate_plugins('novelpro-unlimited/novelpro-unlimited.php');
}
include_once( get_template_directory() . '/inc/novelpro-unlimited/inc/constant.php' );
include_once( get_template_directory() . '/inc/novelpro-unlimited/inc/install.php' );
include_once( get_template_directory() . '/inc/novelpro-unlimited/inc/customizer.php' );
include_once( get_template_directory() . '/inc/novelpro-unlimited/inc/custom-style.php' );
include_once( get_template_directory() . '/inc/novelpro-unlimited/inc/widget/custom.php' );
// typography
include_once( get_template_directory() . '/inc/novelpro-unlimited/inc/customizer-font-selector/functions.php' );
include_once( get_template_directory() . '/inc/novelpro-unlimited/inc/typography-style.php' );

/********************************/
// responsive slider function
/*********************************/
if ( ! function_exists( 'novelpro_responsive_slider_funct' ) ) :
function novelpro_responsive_slider_funct($control_name,$function_name){
  $custom_css='';
           $control_value = get_theme_mod( $control_name );
           if ( empty( $control_value ) ){
                return '';
             }  
        if ( novelpro_is_json( $control_value ) ){
    $control_value = json_decode( $control_value, true );
    if ( ! empty( $control_value ) ) {

      foreach ( $control_value as $key => $value ){
        $custom_css .= call_user_func( $function_name, $value, $key );
      }
    }
    return $custom_css;
  }  
}
endif;
/********************************/
// responsive slider function add media query
/********************************/
if ( ! function_exists( 'novelpro_add_media_query' ) ) :
function novelpro_add_media_query( $dimension, $custom_css ){
  switch ($dimension) {
      case 'desktop':
      $custom_css = '@media (min-width: 769px){' . $custom_css . '}';
      break;
      break;
      case 'tablet':
      $custom_css = '@media (max-width: 768px){' . $custom_css . '}';
      break;
      case 'mobile':
      $custom_css = '@media (max-width: 550px){' . $custom_css . '}';
      break;
  }

      return $custom_css;
}
endif;


endif;
}
?>