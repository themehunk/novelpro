<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function novelpro_unlimited_widgets_init(){

register_sidebar(array(
'name' => __('Custom Section 1', 'novelpro'),
'id' => 'novelpro-custom',
'description' => __('Add Custom widget', 'novelpro'),
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));

register_sidebar(array(
'name' => __('Custom Section 2', 'novelpro'),
'id' => 'novelpro-custom-second',
'description' => __('Add Custom widget', 'novelpro'),
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));

register_sidebar(array(
'name' => __('Custom Section 3', 'novelpro'),
'id' => 'novelpro-custom-third',
'description' => __('Add Custom widget', 'novelpro'),
'before_widget' => '',
'after_widget' => '',
'before_title' => '',
'after_title' => '',
));

}
/** Register sidebars by running novelpro_widgets_init() on the widgets_init hook. */
add_action('widgets_init', 'novelpro_unlimited_widgets_init');

function novelpro_unlimited_add_widget_custom_classes() {
    global $wp_registered_widgets;
    // Find those widgets
    $sidebars = wp_get_sidebars_widgets();
    if ( empty ( $sidebars ) ) {
        return;
    }
    // Loop through each widget area
    foreach ( $sidebars as $sidebar_id => $widgets ) {
        // Our main sidebar doesn't need additional classes
    if ( 'novelpro-team' != $sidebar_id && 'novelpro-services' != $sidebar_id) {
            continue;
        }

        // Get the number of widgets on the sidebar
        $number_of_widgets = count( $widgets );
        if (is_array($widgets)){
        foreach ( $widgets as $i => $widget_id ) {
            $widget_classes = '';
            $widget_position = ( $i + 1 );
            // Add a class for widget position
            $widget_classes .= ' widget-position-' . $widget_position;
            // Add a class for the total number of widgets in this widget area
            $widget_classes .= ' widget-count-' . $number_of_widgets;
            // Add first widget class
            if ( 1 == $widget_position ) {
                $widget_classes .= ' widget-first';
            }
            // Add last widget class
            if ( $number_of_widgets == $widget_position ) {
                $widget_classes .= ' widget-last';
            }
            // Add specific Foundation classes for layouts with, respectively, 6, 4, 3 or 2 columns
            if ( 3 < $number_of_widgets ) {

            $dividend = intval($number_of_widgets % 3);
            $loop_col = $number_of_widgets-$dividend;
              if($loop_col>=$widget_position){
                $widget_classes .= ' col-sm-4';
              }elseif(1 == $dividend){
               $widget_classes .= ' col-sm-12';
              }elseif(2==$dividend){
              $widget_classes .= ' col-sm-6';
              }
             }
            elseif ( 3 == $number_of_widgets ) {
                $widget_classes .= ' col-sm-4';
            }
            elseif ( 2 == $number_of_widgets ) {
                $widget_classes .= ' col-sm-6';
            }
            else {
                $widget_classes .= ' col-sm-12';
            }
            // Add Foundation columns
            $widget_classes .= ' widget';
            // Save new classes into global $wp_registered_widgets
            if ($widget_classes) {
            $wp_registered_widgets[$widget_id]['classname'] .= $widget_classes;
            }
            }
        }
    }
}
    add_action( 'init', 'novelpro_unlimited_add_widget_custom_classes' );
/*
 * Include assets
 */
function novelpro_unlimited_admin_assets() {

wp_enqueue_script('novelpro_widget_script', get_template_directory_uri() . '/inc/novelpro-unlimited/js/widget.js', array( 'jquery', 'wp-color-picker' ), '1.0', true);
}
add_action('admin_enqueue_scripts', 'novelpro_unlimited_admin_assets');
?>