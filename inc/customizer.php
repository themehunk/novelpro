<?php
     //  =============================
     //  = Default Theme Customizer Settings  =
     //  @ NovelPro Theme
     //  =============================

/*theme customizer*/
function novelpro_customize_register( $wp_customize ) {
     //  =============================
     //  = Genral Settings     =
   	 //  =============================
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
  $wp_customize->get_section('title_tagline')->title = esc_html__('General Setting', 'novelpro');
   $wp_customize->get_section('title_tagline')->priority = 3;
		//Logo upload
     $wp_customize->add_setting('logo_upload', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_upload'
    ));
      $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo_upload', array(
        'label'    => __('Logo Upload', 'novelpro'),
        'section'  => 'title_tagline',
        'settings' => 'logo_upload',
    )));
       //slider speed

    $wp_customize->add_panel( 'home_setting_panel', array(
    'priority'       => 4,
    'capability'     => 'edit_theme_options',
    'title'          => __('Section Setting', 'novelpro'),
) );

$wp_customize->add_section('section_home_animation', array(
        'title'    => __('Section Animation On/Off', 'novelpro'),
        'priority' => 1,
        'panel'    => 'home_setting_panel' 
    ));
 $wp_customize->add_section('section_home_on_off', array(
        'title'    => __('Section On/Off', 'novelpro'),
        'priority' => 2,
        'panel'    => 'home_setting_panel' 
    ));
       //= Choose Post Meta  =
     $wp_customize->add_setting('home_on_off', array(
        'default'        =>array(),
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'th_checkbox_explode'
    ));
    $wp_customize->add_control(new TH_Customize_Control_Checkbox_Multiple(
            $wp_customize,'home_on_off', array(
        'settings' => 'home_on_off',
        'label'   => __( 'Section On/Off Options', 'novelpro' ),
		'description'   => __( '(Check to hide section from front page.)', 'novelpro' ),
        'section' => 'section_home_on_off',
        'choices' => array(
                    'three_column'      => __( 'Service Section',      'novelpro' ),
                    'portfolio'          => __( 'Portfolio Section',         'novelpro' ),
                    'testimonial'       => __( 'Testimonial Section',       'novelpro' ),
                    'blog'              => __( 'Blog Section',       'novelpro' ),
                    'team'              => __( 'Team Section',       'novelpro' ),
                    'brands'            => __( 'Brand Section',             'novelpro' ),
                    'woo_commerce'      => __( 'WooCommerce Section',       'novelpro' ),
                    'countactus'       => __( 'Contact Us Section',         'novelpro' ),
                    'pricing'          => __( 'Pricing Section',             'novelpro' ),
                    'ribbon'          => __( 'Ribbon Section',             'novelpro' ),         
                    'custom-sec'          => __( 'Custom Section First',             'novelpro' ),
                    'custom-section-second'          => __( 'Custom Section Second',             'novelpro' ),
                    'custom-section-third'          => __( 'Custom Section Third',             'novelpro' ),
            )
        ) 
    )
);

     $wp_customize->add_section('section_home_sorting', array(
        'title'    => __('Section Ordering', 'novelpro'),
        'priority' => 3,
        'panel'    => 'home_setting_panel' 
    ));

// section ordering
$wp_customize->add_setting('novelpro_sorting', array(
    'default' =>array('section_three_column','section_portfolio','section_testimonial',
    'section_blog','section_woo','section_team', 'section_pricing', 'section_brands','section_countactus','section_ribbon','section_custom','section_custom_second','section_custom_third'),
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'th_checkbox_explode'
    ));
    $wp_customize->add_control(new TH_Customize_Sort_List(
            $wp_customize,'novelpro_sorting', array(
        'settings' => 'novelpro_sorting',
        'label'   => __( 'Section Order Option', 'novelpro' ),
        'section' => 'section_home_sorting',
        'choices' => array(
                    'section_three_column'      => __( '1 Services Section','novelpro' ),
                    'section_portfolio'          => __( '2 Portfolio Section',         'novelpro' ),
                    'section_testimonial'       => __( '3 Testimonial Section', 'novelpro' ),
                    'section_blog'               => __( '4 Blog Section','novelpro' ),
                    'section_team'               => __( '5 Team Section','novelpro' ),
                    'section_pricing'            => __('6 Pricing Section','novelpro' ),
                    'section_brands'            => __( '7 Brands Section','novelpro' ),
                    'section_woo'               => __( '8 Woocommerce Section','novelpro' ),
                    'section_countactus'        => __( '9 Contact Us  Section','novelpro' ),
                    'section_ribbon'        => __( '10 Ribbon  Section','novelpro' ),
                    'section_custom'        => __( '11 Custom  Section First','novelpro' ),
                    'section_custom_second'        => __( '12 Custom  Section Second','novelpro' ),
                    'section_custom_third'        => __( '13 Custom  Section Third','novelpro' ),
            )
        ) 
    )
);

    
      //  =============================
      //  = Home Page Slider Settings       =
   	  //  =============================

     $wp_customize->add_panel( 'home_page_slider', array(
    'priority'       => 5,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Slider Setting', 'novelpro'),
    'description'    => '',
) );

       //slider speed
 $wp_customize->add_section('section_slider_speed', array(
        'title'    => __('Settings', 'novelpro'),
        'priority' => 1,
         'panel'  => 'home_page_slider',
    ));
    $wp_customize->add_setting('novelpro_slider_speed', array(
        'default'           => 3000,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_int'
    ));
    $wp_customize->add_control('novelpro_slider_speed', array(
        'label'    => __('Slider Speed Option', 'novelpro'),
        'section'  => 'section_slider_speed',
        'settings' => 'novelpro_slider_speed',
         'type'       => 'text',
    ));

    //First slider image

     $wp_customize->add_section('section_slider_first', array(
        'title'    => __('First Slide', 'novelpro'),
        'priority' => 2,
         'panel'  => 'home_page_slider',
    ));
    $wp_customize->add_setting('first_slider_image', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_upload'
    ));
   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'first_slider_image', array(
        'label'    => __('Upload image', 'novelpro'),
        'section'  => 'section_slider_first',
        'settings' => 'first_slider_image',
    )));
    $wp_customize->add_setting('first_slider_heading', array(
        'default'           => 'Heading 1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('first_slider_heading', array(
        'label'    => __('Heading', 'novelpro'),
        'section'  => 'section_slider_first',
        'settings' => 'first_slider_heading',
         'type'       => 'text',
    ));
 
    $wp_customize->add_setting('first_slider_desc', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'

    ));
    $wp_customize->add_control('first_slider_desc', array(
        'label'    => __('Description', 'novelpro'),
        'section'  => 'section_slider_first',
        'settings' => 'first_slider_desc',
         'type'       => 'textarea',
    ));
       $wp_customize->add_setting('first_slider_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('first_slider_link', array(
        'label'    => __('Link for slide', 'novelpro'),
        'section'  => 'section_slider_first',
        'settings' => 'first_slider_link',
         'type'       => 'text',
    ));

         $wp_customize->add_setting('first_button_text', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('first_button_text', array(
        'label'    => __('Button text', 'novelpro'),
        'section'  => 'section_slider_first',
        'settings' => 'first_button_text',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('first_button_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        
    ));
    $wp_customize->add_control('first_button_link', array(
        'label'    => __('Button link', 'novelpro'),
        'section'  => 'section_slider_first',
        'settings' => 'first_button_link',
         'type'       => 'text',
    ));

       $wp_customize->add_setting('first_button2_text', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        
    ));
    $wp_customize->add_control('first_button2_text', array(
        'label'    => __('Button 2 text', 'novelpro'),
        'section'  => 'section_slider_first',
        'settings' => 'first_button2_text',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('first_button2_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
       
    ));
    $wp_customize->add_control('first_button2_link', array(
        'label'    => __('Button 2 link', 'novelpro'),
        'section'  => 'section_slider_first',
        'settings' => 'first_button2_link',
         'type'       => 'text',
    ));

    //Second slider image

     $wp_customize->add_section('section_slider_second', array(
        'title'    => __('Second Slide', 'novelpro'),
        'priority' => 3,
         'panel'  => 'home_page_slider',
    ));
    $wp_customize->add_setting('second_slider_image', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_upload'
    ));
   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'second_slider_image', array(
        'label'    => __('Upload image', 'novelpro'),
        'section'  => 'section_slider_second',
        'settings' => 'second_slider_image',
    )));
    $wp_customize->add_setting('second_slider_heading', array(
        'default'           => 'Heading 1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('second_slider_heading', array(
        'label'    => __('Heading', 'novelpro'),
        'section'  => 'section_slider_second',
        'settings' => 'second_slider_heading',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('second_slider_desc', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('second_slider_desc', array(
        'label'    => __('Description', 'novelpro'),
        'section'  => 'section_slider_second',
        'settings' => 'second_slider_desc',
         'type'       => 'textarea',
    ));
    $wp_customize->add_setting('second_slider_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('second_slider_link', array(
        'label'    => __('Link for slide', 'novelpro'),
        'section'  => 'section_slider_second',
        'settings' => 'second_slider_link',
         'type'       => 'text',
    ));

    $wp_customize->add_setting('second_button_text', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('second_button_text', array(
        'label'    => __('Button text', 'novelpro'),
        'section'  => 'section_slider_second',
        'settings' => 'second_button_text',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('second_button_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('second_button_link', array(
        'label'    => __('Button link', 'novelpro'),
        'section'  => 'section_slider_second',
        'settings' => 'second_button_link',
         'type'       => 'text',
    ));

    $wp_customize->add_setting('second_button2_text', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('second_button2_text', array(
        'label'    => __('Button 2 text', 'novelpro'),
        'section'  => 'section_slider_second',
        'settings' => 'second_button2_text',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('second_button2_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('second_button2_link', array(
        'label'    => __('Button 2 link', 'novelpro'),
        'section'  => 'section_slider_second',
        'settings' => 'second_button2_link',
         'type'       => 'text',
    ));

    //Third slider image

     $wp_customize->add_section('section_slider_third', array(
        'title'    => __('Third Slide', 'novelpro'),
        'priority' => 4,
         'panel'  => 'home_page_slider',
    ));
    $wp_customize->add_setting('third_slider_image', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_upload'
    ));
   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'third_slider_image', array(
        'label'    => __('Upload image', 'novelpro'),
        'section'  => 'section_slider_third',
        'settings' => 'third_slider_image',
    )));
    $wp_customize->add_setting('third_slider_heading', array(
        'default'           => 'Heading 1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('third_slider_heading', array(
        'label'    => __('Heading', 'novelpro'),
        'section'  => 'section_slider_third',
        'settings' => 'third_slider_heading',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('third_slider_desc', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('third_slider_desc', array(
        'label'    => __('Description', 'novelpro'),
        'section'  => 'section_slider_third',
        'settings' => 'third_slider_desc',
         'type'       => 'textarea',
    ));
    $wp_customize->add_setting('third_slider_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('third_slider_link', array(
        'label'    => __('Link for slide', 'novelpro'),
        'section'  => 'section_slider_third',
        'settings' => 'third_slider_link',
         'type'       => 'text',
    ));

    $wp_customize->add_setting('third_button_text', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('third_button_text', array(
        'label'    => __('Button text', 'novelpro'),
        'section'  => 'section_slider_third',
        'settings' => 'third_button_text',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('third_button_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('third_button_link', array(
        'label'    => __('Button link', 'novelpro'),
        'section'  => 'section_slider_third',
        'settings' => 'third_button_link',
         'type'       => 'text',
    ));

    $wp_customize->add_setting('third_button2_text', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('third_button2_text', array(
        'label'    => __('Button 2 text', 'novelpro'),
        'section'  => 'section_slider_third',
        'settings' => 'third_button2_text',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('third_button2_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('third_button2_link', array(
        'label'    => __('Button 2 link', 'novelpro'),
        'section'  => 'section_slider_third',
        'settings' => 'third_button2_link',
         'type'       => 'text',
    ));

    //Fourth slider image

     $wp_customize->add_section('section_slider_fourth', array(
        'title'    => __('Fourth Slide', 'novelpro'),
        'priority' => 5,
         'panel'  => 'home_page_slider',
    ));
    $wp_customize->add_setting('fourth_slider_image', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_upload'
    ));
   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'fourth_slider_image', array(
        'label'    => __('Upload image', 'novelpro'),
        'section'  => 'section_slider_fourth',
        'settings' => 'fourth_slider_image',
    )));
    $wp_customize->add_setting('fourth_slider_heading', array(
        'default'           => 'Heading 1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('fourth_slider_heading', array(
        'label'    => __('Heading', 'novelpro'),
        'section'  => 'section_slider_fourth',
        'settings' => 'fourth_slider_heading',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('fourth_slider_desc', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('fourth_slider_desc', array(
        'label'    => __('Description', 'novelpro'),
        'section'  => 'section_slider_fourth',
        'settings' => 'fourth_slider_desc',
         'type'       => 'textarea',
    ));
    $wp_customize->add_setting('fourth_slider_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('fourth_slider_link', array(
        'label'    => __('Link for slide', 'novelpro'),
        'section'  => 'section_slider_fourth',
        'settings' => 'fourth_slider_link',
         'type'       => 'text',
    ));

    $wp_customize->add_setting('fourth_button_text', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('fourth_button_text', array(
        'label'    => __('Button text', 'novelpro'),
        'section'  => 'section_slider_fourth',
        'settings' => 'fourth_button_text',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('fourth_button_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('fourth_button_link', array(
        'label'    => __('Button link', 'novelpro'),
        'section'  => 'section_slider_fourth',
        'settings' => 'fourth_button_link',
         'type'       => 'text',
    ));

    $wp_customize->add_setting('fourth_button2_text', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('fourth_button2_text', array(
        'label'    => __('Button 2 text', 'novelpro'),
        'section'  => 'section_slider_fourth',
        'settings' => 'fourth_button2_text',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('fourth_button2_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('fourth_button2_link', array(
        'label'    => __('Button 2 link', 'novelpro'),
        'section'  => 'section_slider_fourth',
        'settings' => 'fourth_button2_link',
         'type'       => 'text',
    ));

     //Fifth slider image

     $wp_customize->add_section('section_slider_fifth', array(
        'title'    => __('Fifth Slide', 'novelpro'),
        'priority' => 6,
         'panel'  => 'home_page_slider',
    ));
    $wp_customize->add_setting('fifth_slider_image', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_upload'
    ));
   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'fifth_slider_image', array(
        'label'    => __('Upload image', 'novelpro'),
        'section'  => 'section_slider_fifth',
        'settings' => 'fifth_slider_image',
    )));

    $wp_customize->add_setting('fifth_slider_heading', array(
        'default'           => 'Heading 1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea'
    ));
    $wp_customize->add_control('fifth_slider_heading', array(
        'label'    => __('Heading', 'novelpro'),
        'section'  => 'section_slider_fifth',
        'settings' => 'fifth_slider_heading',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('fifth_slider_desc', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea'
    ));
    $wp_customize->add_control('fifth_slider_desc', array(
        'label'    => __('Description', 'novelpro'),
        'section'  => 'section_slider_fifth',
        'settings' => 'fifth_slider_desc',
         'type'       => 'textarea',
    ));
    $wp_customize->add_setting('fifth_slider_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control('fifth_slider_link', array(
        'label'    => __('Link for slide', 'novelpro'),
        'section'  => 'section_slider_fifth',
        'settings' => 'fifth_slider_link',
         'type'       => 'text',
    ));

   

    $wp_customize->add_setting('fifth_button_text', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('fifth_button_text', array(
        'label'    => __('Button text', 'novelpro'),
        'section'  => 'section_slider_fifth',
        'settings' => 'fifth_button_text',
         'type'       => 'text',
    ));
     $wp_customize->add_setting('fifth_button_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('fifth_button_link', array(
        'label'    => __('Button link', 'novelpro'),
        'section'  => 'section_slider_fifth',
        'settings' => 'fifth_button_link',
         'type'       => 'text',
    ));

    $wp_customize->add_setting('fifth_button2_text', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('fifth_button2_text', array(
        'label'    => __('Button 2 text', 'novelpro'),
        'section'  => 'section_slider_fifth',
        'settings' => 'fifth_button2_text',
         'type'       => 'text',
    ));
     $wp_customize->add_setting('fifth_button2_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('fifth_button2_link', array(
        'label'    => __('Button 2 link', 'novelpro'),
        'section'  => 'section_slider_fifth',
        'settings' => 'fifth_button2_link',
         'type'       => 'text',
    ));
     //Sixth slider image

     $wp_customize->add_section('section_slider_sixth', array(
        'title'    => __('Sixth Slide', 'novelpro'),
        'priority' => 7,
         'panel'  => 'home_page_slider',
    ));
    $wp_customize->add_setting('sixth_slider_image', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_upload'
    ));
   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'sixth_slider_image', array(
        'label'    => __('Upload image', 'novelpro'),
        'section'  => 'section_slider_sixth',
        'settings' => 'sixth_slider_image',
    )));
    $wp_customize->add_setting('sixth_slider_heading', array(
        'default'           => 'Heading 1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea'
    ));
    $wp_customize->add_control('sixth_slider_heading', array(
        'label'    => __('Heading', 'novelpro'),
        'section'  => 'section_slider_sixth',
        'settings' => 'sixth_slider_heading',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('sixth_slider_desc', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea'
    ));
    $wp_customize->add_control('sixth_slider_desc', array(
        'label'    => __('Description', 'novelpro'),
        'section'  => 'section_slider_sixth',
        'settings' => 'sixth_slider_desc',
         'type'       => 'textarea',
    ));
    $wp_customize->add_setting('sixth_slider_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
    ));
    $wp_customize->add_control('sixth_slider_link', array(
        'label'    => __('Link for slide', 'novelpro'),
        'section'  => 'section_slider_sixth',
        'settings' => 'sixth_slider_link',
         'type'       => 'text',
    ));

    $wp_customize->add_setting('sixth_button_text', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('sixth_button_text', array(
        'label'    => __('Button text', 'novelpro'),
        'section'  => 'section_slider_sixth',
        'settings' => 'sixth_button_text',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('sixth_button_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('sixth_button_link', array(
        'label'    => __('Button link', 'novelpro'),
        'section'  => 'section_slider_sixth',
        'settings' => 'sixth_button_link',
         'type'       => 'text',
    ));

    $wp_customize->add_setting('sixth_button2_text', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('sixth_button2_text', array(
        'label'    => __('Button 2 text', 'novelpro'),
        'section'  => 'section_slider_sixth',
        'settings' => 'sixth_button2_text',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('sixth_button2_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('sixth_button2_link', array(
        'label'    => __('Button 2 link', 'novelpro'),
        'section'  => 'section_slider_sixth',
        'settings' => 'sixth_button2_link',
         'type'       => 'text',
    ));
//-------------------End Sldier Panel----------------------------//

                //  =============================
                 //  = Three Column Settings       =
                 //  =============================

    $wp_customize->add_panel( 'home_three_col', array(
    'priority'       => 6,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Services Setting', 'novelpro'),
    'description'    => '',
) );


 $wp_customize->add_section('section_three_col_heading', array(
        'title'    => __('Main Heading & Sub Heading', 'novelpro'),
        'priority' => 1,
         'panel'  => 'home_three_col',
    ));

  $wp_customize->add_setting('col_heading', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('col_heading', array(
        'label'    => __('Main Heading', 'novelpro'),
        'section'  => 'section_three_col_heading',
        'settings' => 'col_heading',
         'type'       => 'text',
    ));

 $wp_customize->add_section('novelpro_service_section', array(
        'title'    => __('Service Settings', 'novelpro'),
        'priority' => 2,
        'panel'    =>'home_three_col'
    ));
       //Slider Content Via Repeater
      if ( class_exists( 'Novelpro_Class_Repeater' ) ){
            $wp_customize->add_setting(
             'novelpro_service_content', array(
             'default'           =>  Novelpro_Defaults_Models::instance()->get_feature_default(),
             'sanitize_callback' => 'novelpro_repeater_sanitize',  
             
                )
            );
            $wp_customize->add_control(
                new Novelpro_Class_Repeater(
                    $wp_customize, 'novelpro_service_content', array(
                        'label'                                => esc_html__( 'Service Content', 'novelpro' ),
                        'section'                              => 'novelpro_service_section',
                        'add_field_label'                      => esc_html__( 'Add new Service', 'novelpro' ),
                        'item_name'                            => esc_html__( 'Service', 'novelpro' ),
                        
                        'customizer_repeater_title_control'    => true,   
                        'customizer_repeater_subtitle_control'    => false, 
                        'customizer_repeater_text_control'    => true,  
                        'customizer_repeater_image_control'    => true, 
                        'customizer_repeater_logo_image_control'    => false, 
                        'customizer_repeater_icon_control' => true,
                        'customizer_repeater_link_control'     => true,
                        'customizer_repeater_repeater_control' => false, 
                        'customizer_repeater_price_control' => false,
                        'customizer_repeater_color2_control' => true, 
                        'customizer_repeater_titleclr_control' => true, 
                        'customizer_repeater_textclr_control' => true, 
                        'customizer_repeater_bgclr_control' => true, 
                                         
                        
                    ),'novelpro_service_content'
                )
            );
        }

// service
// $wp_customize->selective_refresh->add_partial( 'novelpro_service_section', array(
//         'selector' => '#section1',
// ) );

       $wp_customize->add_setting('col_sub', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('col_sub', array(
        'label'    => __('Sub Heading', 'novelpro'),
        'section'  => 'section_three_col_heading',
        'settings' => 'col_sub',
         'type'       => 'textarea',
    ));

//-------------------End Three Column Panel----------------------------//


     //Home Page Portfolio heading and sub heading 
$wp_customize->add_panel( 'home_portfolio', array(
    'priority'       => 6,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Portfolio Setting', 'novelpro'),
    'description'    => '',
) );

    $wp_customize->add_section( 'portfolio_head_desc', array(
     'title'          => __( 'Main Heading & Sub Heading','novelpro' ),
     'panel'  => 'home_portfolio',
     'priority'       => 1,
) );
       $wp_customize->add_setting('portfolio_head_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control('portfolio_head_', array(
        'label'    => __('Main Heading', 'novelpro'),
        'section'  => 'portfolio_head_desc',
        'settings' => 'portfolio_head_',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('portfolio_desc_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('portfolio_desc_', array(
        'label'    => __('Sub Heading', 'novelpro'),
        'section'  => 'portfolio_head_desc',
        'settings' => 'portfolio_desc_',
         'type'       => 'textarea',
    ));

                 //  =============================
                //  = Testimonial Settings       =
                //  =============================

$wp_customize->add_panel( 'home_testimonial', array(
    'priority'       => 8,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Testimonial Setting', 'novelpro'),
    'description'    => '',
) );

//Parallax Background Image
 $wp_customize->add_section('testimonial_bg_heading', array(
        'title'    => __('Testimonial Heading', 'novelpro'),
        'priority' => 1,
         'panel'  => 'home_testimonial',
    ));

 $wp_customize->add_section('novelpro_testimonial_section', array(
        'title'    => __('Testimonial Settings', 'novelpro'),
        'priority' => 2,
        'panel'    =>'home_testimonial'
    ));

    //Slider Content Via Repeater
      if ( class_exists( 'Novelpro_Class_Repeater' ) ){
            $wp_customize->add_setting(
             'novelpro_testimonial_content', array(
             'default'           => Novelpro_Defaults_Models::instance()->get_testimonials_default(),
             'sanitize_callback' => 'novelpro_repeater_sanitize',  
             
                )
            );
            $wp_customize->add_control(
                new Novelpro_Class_Repeater(
                    $wp_customize, 'novelpro_testimonial_content', array(
                        'label'                                => esc_html__( 'Testimonial Content', 'novelpro' ),
                        'section'                              => 'novelpro_testimonial_section',
                        'add_field_label'                      => esc_html__( 'Add new Testimonial', 'novelpro' ),
                        'item_name'                            => esc_html__( 'Testimonial', 'novelpro' ),
                        
                        'customizer_repeater_title_control'    => true,   
                        'customizer_repeater_subtitle_control'    => false, 
                        'customizer_repeater_text_control'    => true,  
                        'customizer_repeater_image_control'    => true, 
                        'customizer_repeater_logo_image_control'    => false, 
                        'customizer_repeater_icon_control' => false,
                        'customizer_repeater_link_control'     => true,
                        'customizer_repeater_repeater_control' => false, 
                        'customizer_repeater_price_control' => false, 
                        'customizer_repeater_color2_control' => false, 
                        'customizer_repeater_titleclr_control' => true, 
                        'customizer_repeater_textclr_control' => true, 
                        'customizer_repeater_bgclr_control' => false,  
                        'customizer_repeater_borderclr_control' => true,
                                         
                        
                    ),'novelpro_testimonial_content'
                )
            );
        }
// testimonial
$wp_customize->selective_refresh->add_partial( 'novelpro_testimonial_content', array(
        'selector' => '.testi-img',
) );
// main heading

    $wp_customize->add_setting('testimonial_heading', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('testimonial_heading', array(
        'label'    => __('Testimonial Main Heading', 'novelpro'),
        'section'  => 'testimonial_bg_heading',
        'settings' => 'testimonial_heading',
         'type'       => 'text',
    ));

    /*
     * Home Page Blog heading and sub heading 
    */
$wp_customize->add_panel( 'home_blog', array(
    'priority'       => 9,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Latest Post Setting', 'novelpro'),
    'description'    => '',
) );

    $wp_customize->add_section( 'blog_head_desc', array(
     'title'          => __( 'Blog Heading & Sub Heading','novelpro' ),
     'priority'       => 1,
     'panel'  => 'home_blog',
) );
       $wp_customize->add_setting('blog_head_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('blog_head_', array(
        'label'    => __('Home Page Blog Feature Heading', 'novelpro'),
        'section'  => 'blog_head_desc',
        'settings' => 'blog_head_',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('blog_desc_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('blog_desc_', array(
        'label'    => __('Home Page Blog Feature Sub Heading', 'novelpro'),
        'section'  => 'blog_head_desc',
        'settings' => 'blog_desc_',
         'type'       => 'textarea',
    ));


    $wp_customize->add_section( 'blog_lightbox', array(
     'title'          => __( 'Blog Lightbox','novelpro' ),
     'priority'       => 2,
     'panel'  => 'home_blog',
        ) );
       $wp_customize->add_setting('blog_light_box', array(
        'default'           => 'on',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('blog_light_box', array(
        'label'    => __('Blog Image Lightbox on/off', 'novelpro'),
        'section'  => 'blog_lightbox',
        'settings' => 'blog_light_box',
           'type'    => 'radio',
        'choices'    => array(
            'on'        =>'Lightbox On (Open Blog Lightbox)',
            'off'       => 'Lightbox Off (Open Blog Single Page)',
        ),
    ));


   //End Blog Heading


        //  =============================
        //  = Our Team Settings       =
        //  =============================
    // team panel
$wp_customize->add_panel( 'our_team', array(
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Team Setting', 'novelpro'),
    'description'    => '',
) );

  
        $wp_customize->add_section('novelpro_team_section', array(
        'title'    => __('Team Settings', 'novelpro'),
        'priority' => 2,
        'panel'    =>'our_team'
    ));

    //Slider Content Via Repeater
      if ( class_exists( 'Novelpro_Class_Repeater' ) ){
            $wp_customize->add_setting(
             'novelpro_teams_content', array(
             'default'           => Novelpro_Defaults_Models::instance()->get_team_default(),
             'sanitize_callback' => 'novelpro_repeater_sanitize',  
             
                )
            );
            $wp_customize->add_control(
                new Novelpro_Class_Repeater(
                    $wp_customize, 'novelpro_teams_content', array(
                        'label'                                => esc_html__( 'Team Content', 'novelpro' ),
                        'section'                              => 'novelpro_team_section',
                        'add_field_label'                      => esc_html__( 'Add new Team', 'novelpro' ),
                        'item_name'                            => esc_html__( 'Team', 'novelpro' ),
                        
                        'customizer_repeater_title_control'    => true,   
                        'customizer_repeater_subtitle_control'    => true, 
                        'customizer_repeater_text_control'    => true,  
                        'customizer_repeater_image_control'    => true, 
                        'customizer_repeater_logo_image_control'    => false, 
                        'customizer_repeater_icon_control' => false,
                        'customizer_repeater_link_control'     => true,
                        'customizer_repeater_repeater_control' => true, 
                        'customizer_repeater_price_control' => false,
                        'customizer_repeater_titleclr_control' => true,  
                        'customizer_repeater_buttonclr_control' => true,  
                        'customizer_repeater_buttonhvrclr_control' => true,  
                        'customizer_repeater_textclr_control' => true, 
                        'customizer_repeater_borderclr_control' => false,  
                        'customizer_repeater_color_control' => true,
                                         
                        
                    ),'oneline_team_content'
                )
            );
        }

        // team
$wp_customize->selective_refresh->add_partial( 'novelpro_teams_content', array(
        'selector' => '#section5 .row.wow',
) );

// team head and sub heading
    $wp_customize->add_section( 'team_head_desc', array(
     'title'          => __( 'Main Heading & Sub Heading','novelpro' ),
     'theme_supports' => 'custom-background',
     'panel'          => 'our_team',
    'priority'        => 1,

) );
       $wp_customize->add_setting('team_head_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('team_head_', array(
        'label'    => __('Main Heading', 'novelpro'),
        'section'  => 'team_head_desc',
        'settings' => 'team_head_',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('team_desc_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('team_desc_', array(
        'label'    => __('Sub Heading', 'novelpro'),
        'section'  => 'team_head_desc',
        'settings' => 'team_desc_',
         'type'       => 'textarea',
    ));
    // End team section

    //  =============================
    //      = Pricing Section   =
    //  =============================

    //panal settings
$wp_customize->add_panel( 'pricing_section', array(
    'priority'       => 11,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Pricing Setting', 'novelpro'),
    'description'    => '',
) );

$wp_customize->add_section('novelpro_pricing_section', array(
        'title'    => __('Pricing Settings', 'novelpro'),
        'priority' => 2,
        'panel'    =>'pricing_section'
    ));
   //Pricing Content Via Repeater
      if ( class_exists( 'Novelpro_Class_Repeater' ) ) {
            $wp_customize->add_setting(
                'novelpro_pricing_content', array(
                    'sanitize_callback' => 'novelpro_repeater_sanitize',  
                    'default'           => Novelpro_Defaults_Models::instance()->get_pricing_default(),
                )
            );

            $wp_customize->add_control(
                new Novelpro_Class_Repeater(
                    $wp_customize, 'novelpro_pricing_content', array(
                        'label'                                => esc_html__( 'Pricing Content', 'novelpro' ),
                        'section'                              => 'novelpro_pricing_section',
                        'priority'                             => 15,
                        'add_field_label'                      => esc_html__( 'Add new Pricing', 'novelpro' ),
                        'item_name'                            => esc_html__( 'Pricing', 'novelpro' ),
                        'customizer_repeater_icon_control'  => false,
                        'customizer_repeater_image_control'    => false,
                        'customizer_repeater_title_control'    => true,
                        'customizer_repeater_price_control'    => true,
                        'customizer_repeater_subtitle_control' => true,
                        'customizer_repeater_text_control'     => true,
                       'customizer_repeater_text2_control' => true,
                        'customizer_repeater_link_control'     => true,
                        'customizer_repeater_repeater_control' => false,
                        'customizer_repeater_color2_control' => false,
                        'customizer_repeater_bgclr_control'  => true,
                        'customizer_repeater_titleclr_control' => true,
                        'customizer_repeater_textclr_control' => true,
                        'customizer_repeater_priceclr_control' => true,
                        'customizer_repeater_buttonclr_control' => true,
                        'customizer_repeater_buttonhvrclr_control' => true,
                        'customizer_repeater_priceclr_control' => true,
                        'customizer_repeater_buttonbg_control'=> true,
                        'customizer_repeater_buttonhvrbg_control'=> true,
                    ),'novelpro_pricing_content'
                )
            );
        }
        // pricing
$wp_customize->selective_refresh->add_partial( 'novelpro_pricing_content', array(
        'selector' => '.price-package .price-grid',
) );
        $wp_customize->add_setting('novelpro_pricing_popular', 
      array(
        'default' => 2,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
));
    $wp_customize->add_control( 'novelpro_pricing_popular', 
    array(
        'label'    => __('Which pricing table you want to ser as recommend', 'novelpro'),
        'section'  => 'novelpro_pricing_section',
         'type'     => 'number',
         'priority' => 15,
));
// section setings
    $wp_customize->add_section( 'pricing_head', array(
     'title'          => __( 'Main Heading & Sub Heading','novelpro' ),
     'theme_supports' => 'custom-background',
     'panel'  => 'pricing_section',
     'priority'       => 1,

) );

    // heding and subheading (text & textarwa , uploadas)
    
       $wp_customize->add_setting('pricing_head_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('pricing_head_', array(
        'label'    => __('Main Heading', 'novelpro'),
        'section'  => 'pricing_head',
        'settings' => 'pricing_head_',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('pricing_desc_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('pricing_desc_', array(
        'label'    => __('Sub Heading', 'novelpro'),
        'section'  => 'pricing_head',
        'settings' => 'pricing_desc_',
         'type'       => 'textarea',
    ));
        // end pricing


    //  =============================
    //      = Brand Section   =
    //  =============================
    // brand panel

$wp_customize->add_panel( 'brand_panel', array(
    'priority'       => 12,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Brand Setting', 'novelpro'),
    'description'    => '',
) );

$wp_customize->add_section('novelpro_brand_section', array(
        'title'    => __('Brand Settings', 'novelpro'),
        'priority' => 2,
        'panel'    =>'brand_panel'
    ));

    //Slider Content Via Repeater
      if ( class_exists( 'Novelpro_Class_Repeater' ) ){
            $wp_customize->add_setting(
             'novelpro_brand_content', array(
             'default'           => Novelpro_Defaults_Models::instance()->get_brand_default(),
             'sanitize_callback' => 'novelpro_repeater_sanitize',  
             
                )
            );
            $wp_customize->add_control(
                new Novelpro_Class_Repeater(
                    $wp_customize, 'novelpro_brand_content', array(
                        'label'                                => esc_html__( 'Brand Content', 'novelpro' ),
                        'section'                              => 'novelpro_brand_section',
                        'add_field_label'                      => esc_html__( 'Add new Brand', 'novelpro' ),
                        'item_name'                            => esc_html__( 'Brand', 'novelpro' ),
                          
                        'customizer_repeater_image_control'    => true, 
                        'customizer_repeater_link_control'     => true,
                        'customizer_repeater_repeater_control' => false, 
                        'customizer_repeater_price_control' => false,  
                                         
                        
                    ),'novelpro_brand_content'
                )
            );
        }
// brand
$wp_customize->selective_refresh->add_partial( 'novelpro_brand_content', array(
        'selector' => '.brands #owl-demo',
) );
// team head and sub heading
    $wp_customize->add_section( 'brand_head_desc', array(
     'title'          => __( 'Main Heading & Sub Heading','novelpro' ),
     'theme_supports' => 'custom-background',
     'panel'  => 'brand_panel',
     'priority'       => 1,
) );
       $wp_customize->add_setting('brand_head_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('brand_head_', array(
        'label'    => __('Main Heading', 'novelpro'),
        'section'  => 'brand_head_desc',
        'settings' => 'brand_head_',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('brand_desc_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('brand_desc_', array(
        'label'    => __('Sub Heading', 'novelpro'),
        'section'  => 'brand_head_desc',
        'settings' => 'brand_desc_',
         'type'       => 'textarea',
    ));

  //  =============================
    //      = woo Commerce Section   =
    //  =============================
$wp_customize->add_panel( 'woo_panel', array(
    'priority'       => 13,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('WooCommerce Setting', 'novelpro'),
    'description'    => '',
    
) );
$wp_customize->add_section( 'woo_section', array(
        'title'          => __( 'Setting','novelpro' ),
        'panel'  => 'woo_panel',
        'priority'       => 1,  
        ));

    $wp_customize->add_setting('woo_head_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea'
     ));
    $wp_customize->add_control('woo_head_', array(
        'label'    => __('Main Heading', 'novelpro'),
        'section'  => 'woo_section',
        'settings' => 'woo_head_',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('woo_desc_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea'
    ));
    $wp_customize->add_control('woo_desc_', array(
        'label'    => __('Sub Heading', 'novelpro'),
        'section'  => 'woo_section',
        'settings' => 'woo_desc_',
         'type'       => 'textarea',
    ));

  $wp_customize->add_setting('woo_shortcode', array(
        'default'        => '[recent_products]',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea'
    ));
    $wp_customize->add_control('woo_shortcode', array(
        'settings' => 'woo_shortcode',
        'label'     => 'WooCommerce ShortCode',
        'section' => 'woo_section',
        'type'    => 'textarea',
    ) );
    // End team section
    

//  =============================
//  = lead detail Settings       =
//  =============================

    $wp_customize->add_panel( 'lead_panel', array(
        'priority'       => 14,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Contact Form Setting', 'novelpro'),
        'description'    => '',
    ));

// lead form settings
    $wp_customize->add_section( 'lead_form', array(
     'title'          => __( 'Contact Form Setting', 'novelpro' ),
     'panel'  => 'lead_panel',
     'priority' => 1,
    ));

   $wp_customize->add_setting('cf_shtcd_', array(
        'default'           => '[lead-form form-id=1 title=Contact Us]',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea'
    ));
    $wp_customize->add_control('cf_shtcd_', array(
        'label'    => __('Shortcode', 'novelpro'),
        'section'  => 'lead_form',
        'settings' => 'cf_shtcd_',
        'type'       => 'textarea',
    ));

    $wp_customize->add_setting('cf_head_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('cf_head_', array(
        'label'    => __('Main Heading', 'novelpro'),
        'section'  => 'lead_form',
        'settings' => 'cf_head_',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('cf_desc_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('cf_desc_', array(
        'label'    => __('Sub Heading', 'novelpro'),
        'section'  => 'lead_form',
        'settings' => 'cf_desc_',
         'type'       => 'textarea',
    ));

//  =============================
//  = Custom Css      =
//  =============================
// custom color
if( get_bloginfo( 'version' ) < '4.7'):
   $wp_customize->add_setting('custom_css_text', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea'
    ));
    $wp_customize->add_control('custom_css_text', array(
        'settings' => 'custom_css_text',
        'label'     => 'Custom Css',
        'section' => 'colors',
        'type'    => 'textarea',
    ) );
endif;
    $wp_customize->add_section( 'footer_option', array(
         'title'          => __( 'Footer Text & Social Icons', 'novelpro' ),
         'priority'       => 16,
         'panel'       => 'theme_optn',
    ) );
    $wp_customize->add_setting('footertext', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('footertext', array(
        'label'    => __('Footer Text', 'novelpro'),
        'section'  => 'footer_option',
        'settings' => 'footertext',
         'type'       => 'textarea',
    ));

    $wp_customize->add_setting('social_link_twitter', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('social_link_twitter', array(
        'label'    => __('Twitter URL', 'novelpro'),
        'section'  => 'footer_option',
        'settings' => 'social_link_twitter',
         'type'       => 'text',
    ));

       $wp_customize->add_setting('social_link_facebook', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('social_link_facebook', array(
        'label'    => __('Facebook URL', 'novelpro'),
        'section'  => 'footer_option',
        'settings' => 'social_link_facebook',
         'type'       => 'text',
    ));

   $wp_customize->add_setting('social_link_pintrest', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('social_link_pintrest', array(
        'label'    => __('Pintrest URL', 'novelpro'),
        'section'  => 'footer_option',
        'settings' => 'social_link_pintrest',
         'type'       => 'text',
    ));

    $wp_customize->add_setting('social_link_instagram', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('social_link_instagram', array(
        'label'    => __('Instagram URL', 'novelpro'),
        'section'  => 'footer_option',
        'settings' => 'social_link_instagram',
         'type'       => 'text',
    ));
        $wp_customize->add_setting('social_link_dribbble', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('social_link_dribbble', array(
        'label'    => __('Dribbble URL', 'novelpro'),
        'section'  => 'footer_option',
        'settings' => 'social_link_dribbble',
         'type'       => 'text',
    ));

    $wp_customize->add_setting('social_link_google', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('social_link_google', array(
        'label'    => __('Google+ URL', 'novelpro'),
        'section'  => 'footer_option',
        'settings' => 'social_link_google',
         'type'       => 'text',
    ));

    $wp_customize->add_setting('social_link_linkedin', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('social_link_linkedin', array(
        'label'    => __('LinkedIn URL', 'novelpro'),
        'section'  => 'footer_option',
        'settings' => 'social_link_linkedin',
         'type'       => 'text',
    ));
/**************************/
// shop image control
/**************************/
 $wp_customize->add_section('shoppage_hdr_sec', array(
        'title'    => __('Shop Images', 'novelpro'),
        'priority' => 1,
        'panel'    => 'woocommerce',
    ));
  $wp_customize->add_setting('shop_hrdimg', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_upload'
    ));
      $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'shop_hrdimg', array(
        'label'    => __('Header Image', 'novelpro'),
        'section'  => 'shoppage_hdr_sec',
        'settings' => 'shop_hrdimg',
    )));


}
add_action('customize_register','novelpro_customize_register');
?>