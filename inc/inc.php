<?php
/**
 * all file includeed
 *
 * @param  
 * @return mixed|string
 */
	include( get_template_directory() . '/inc/define-template.php' );
	include( get_template_directory() . '/inc/custom-function.php' );
	include( get_template_directory() . '/inc/novelpro-unlimited/novelpro-unlimited.php' );
	include( get_template_directory() . '/inc/admin-function.php' );
	// customizer
	include( get_template_directory() . '/customizer/models/class-novelpro-singleton.php' );
	include( get_template_directory() . '/customizer/models/class-novelpro-defaults-models.php' );
	include( get_template_directory() . '/customizer/repeater/class-themehunk-repeater.php' );
	include( get_template_directory() . '/inc/custom-customizer.php' );
	include( get_template_directory() . '/inc/customizer.php' );
	include( get_template_directory() . '/inc/pro-button/class-customize.php' );
	// icon-picker
	require_once( THEME_DIR . '/inc/themehunk-icon-picker/class-themehunk-menu-icons.php' );
	require_once( THEME_DIR . '/inc/themehunk-icon-picker/themehunk-icon-picker.php' );
	require_once (THEME_DIR . '/inc/themehunk-icon-picker/includes/class-icon-font-fontawesome.php');
   Themehunk_Icon_Picker::get_instance( THEMEHUNK_URI . '/themehunk-icon-picker' );

   Themehunk_Icon_Picker::get_instance()->register( 'themehunk_Icon_Picker_FontAwesome' );
	
