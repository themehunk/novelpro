<?php
function novelpro_unlimited_customize_register( $wp_customize ){
$cats = array();
   $cats[0] = 'All Categories';
   foreach ( get_categories() as $categories => $category ){
   $cats[$category->term_id] = $category->name;
 }
include_once( get_template_directory() . '/inc/novelpro-unlimited/inc/color-picker/alpha-color-picker.php' );
include_once( get_template_directory() . '/inc/novelpro-unlimited/inc/customizer-font-selector/class/class-novelpro-font-selector.php' );
include_once( get_template_directory() . '/inc/novelpro-unlimited/inc/customizer-range-value/class/class-novelpro-customizer-range-value-control.php' );
$palette = array(
        'rgba(255, 0, 0, 0.7)',
        'rgba(54, 0, 170, 0.8)',
        '#FFCC00',
        'rgba( 20, 20, 20, 0.8 )',
        '#666666',
        '#F5f5f5',
        '#2B4267'
    );
//=============================
//= Theme option =
//=============================
$wp_customize->add_panel( 'theme_optn', array(
    'priority'       => 3,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Theme Options', 'novelpro'),
    'description'    => '',
) );   
// global-setting
$wp_customize->add_section('global_set', array(
        'title'    => __('Global Settings', 'novelpro'),
        'priority' => 1,
        'panel'  => 'theme_optn',
));

//animation on/off
$wp_customize->add_setting('section_animation', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('section_animation', array(
        'settings' => 'section_animation',
        'section'     => 'global_set',
        'label'       => esc_html__('Disable animation effect ?', 'novelpro'),  
                    'description' => esc_html__('Check here to disable home page section animation.', 'novelpro'),
        'type'    => 'checkbox',
    ) );
// back to top disable    
$wp_customize->add_setting('_backtotop_disable', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('_backtotop_disable', array(
        'settings' => '_backtotop_disable',
        'label'       => esc_html__('Hide back to top button ?', 'novelpro'),
        'description' => esc_html__('Check here to disable back to top button.', 'novelpro'),
        'section' => 'global_set',
        'type'    => 'checkbox',
    ) );
 // loader/on/off option    
$wp_customize->add_setting('_loader_disable', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('_loader_disable', array(
        'settings' => '_loader_disable',
        'label'       => esc_html__('Disable site loader ?', 'novelpro'),
        'description' => esc_html__('Check here to disable site loader.', 'novelpro'),
        'section' => 'global_set',
        'type'    => 'checkbox',
    ) ); 
// rtl option    
$wp_customize->add_setting('rtl', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea'
    ));
    $wp_customize->add_control('rtl', array(
        'settings' => 'rtl',
        'label'     => __( 'Activate RTL ?' ),
        'description' => __('Check here to enable right to left.', 'novelpro'),
        'section' => 'global_set',
        'type'    => 'checkbox',
    ) );
 // SITE COLOR OPTION   
 $wp_customize->add_section('site_color', array(
        'title'    => __('Global Color Settings', 'novellite'),
        'priority' => 2,
        'panel'  => 'theme_optn',
));   
$wp_customize->add_setting('theme_color', array(
        'default'        => '#fed136',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => ''
    ));
    $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize, 
    'theme_color', 
    array(
        'label'      => __( 'Theme Color', 'novelpro' ),
        'section'    => 'site_color',
        'settings'   => 'theme_color',
    ) ) 
); 
// loader-color  
    $wp_customize->add_setting('site_loader_clr', array(
        'default'        => '#fed136',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => ''
    ));
    $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize, 
    'site_loader_clr', 
    array(
        'label'      => __( 'Loader Color', 'novelpro' ),
        'section'    => 'site_color',
        'settings'   => 'site_loader_clr',
    ) ) 
); 
// footer-bg-color
$wp_customize->add_setting('footer_bg_color', array(
        'default'        => '#eee',
        'capability'     => 'edit_theme_options',
        
    ));
    $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize, 
    'footer_bg_color', 
    array(
        'label'      => __( 'Footer Background Color', 'novellite' ),
        'section'    => 'site_color',
        'settings'   => 'footer_bg_color',
    ) ) );  
// footer-info-color
$wp_customize->add_setting('footer_info_bg_color', array(
        'default'        => '#fff',
        'capability'     => 'edit_theme_options',
        
    ));
    $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize, 
    'footer_info_bg_color', 
    array(
        'label'      => __( 'Copyright Background Color', 'novellite' ),
        'section'    => 'site_color',
        'settings'   => 'footer_info_bg_color',
    ) ) ); 
// copyright-text-color
$wp_customize->add_setting('copyright_txt_color', array(
        'default'        => '#333',
        'capability'     => 'edit_theme_options',
        
    ));
    $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize, 
    'copyright_txt_color', 
    array(
        'label'      => __( 'Copyright Text Color', 'novellite' ),
        'section'    => 'site_color',
        'settings'   => 'copyright_txt_color',
    ) ) );

// social-icon-color
$wp_customize->add_setting('social_icon_color', array(
        'default'        => '#222',
        'capability'     => 'edit_theme_options',
        
    ));
    $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize, 
    'social_icon_color', 
    array(
        'label'      => __( 'Social Icon Color', 'novellite' ),
        'section'    => 'site_color',
        'settings'   => 'social_icon_color',
    ) ) );
//header-setting add
 $wp_customize->add_section('header_area', array(
        'title'    => __('Header Setting', 'novelpro'),
        'priority' => 4,
        'panel'    => 'theme_optn',
    ));
$wp_customize->add_setting('header_fxd', array(
        'default'        =>'on',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));
$wp_customize->add_control( 'header_fxd', array(
        'settings' => 'header_fxd',
        'label'   => __('Header','novelpro'),
        'type'    => 'radio',
        'section' => 'header_area',
        'choices'    => array(
            'on'        =>'Fixed',
            'off'      => 'Normal',
        ),
    ));
// add menu style
$wp_customize->add_setting('menu_style', array(
        'default'        =>'on',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'menu_style', array(
        'settings' => 'menu_style',
        'label'   => __('Menu Style','novelpro'),
        'type'    => 'radio',
        'section' => 'header_area',
        'choices'    => array(
            'on'        =>'Inline',
            'off'      => 'Centered',
            'split'      =>'Split Menu',
        ),
    ));
// header visibility hidden
    $wp_customize->add_setting('header_hide', array(
       'default'        => '',
       'capability'     => 'edit_theme_options',
       'sanitize_callback' => 'sanitize_text_field'
   ));
   $wp_customize->add_control( 'header_hide', array(
       'settings' => 'header_hide',
       'label'   => __('Header Visibility','novelpro'),
       'description' => __('(Check here to hide header until scroll. Work with fixed header only.)','novelpro'),
       'section' => 'header_area',
       'type'    => 'checkbox',
       'choices'    => array(
       'image'      => 'Use Background Image',
       ),
   ));
//header transparent
    $wp_customize->add_setting( 'hdr_bg_trnsparent_active',
              array(
            'sanitize_callback' => 'sanitize_text_field',
            'default'           => '',
                )
            );
    $wp_customize->add_control( 'hdr_bg_trnsparent_active',
                array(
                'type'        => 'checkbox',
                'label'       => esc_html__('Header Transparent', 'novelpro'),
                'section'     => 'header_area',
                'description' => esc_html__('(Only applied for front page template.)', 'novelpro')
                )
            ); 
//custom-button
    $wp_customize->add_setting( 'last_menu_btn',
              array(
            'sanitize_callback' => 'sanitize_text_field',
            'default'           => '',
                )
            );
    $wp_customize->add_control( 'last_menu_btn',
                array(
                'type'        => 'checkbox',
                'label'       => esc_html__('Custom Button', 'novelpro'),
                'section'     => 'header_area',
                'description' => esc_html__('(Check here to style last menu item as a custom button.)', 'novelpro')
                )
            );     
//header-bg-color
$wp_customize->add_setting('hd_bg_color',
        array(
            'default'     => '',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

$wp_customize->add_control(
        new Customize_Alpha_Color_Control($wp_customize,
            'hd_bg_color',
            array(
                'label'     => __('Background Color','novelpro'),
                'section'   => 'header_area',
                'settings'  => 'hd_bg_color',
                'palette'   => $palette
            )
        )
    );
//header-shrink-bg-color
$wp_customize->add_setting('hd_shnk_bg_color',
        array(
            'default'     => '',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

$wp_customize->add_control(
        new Customize_Alpha_Color_Control($wp_customize,
            'hd_shnk_bg_color',
            array(
                'label'     => __('Fixed Header Background Color','novelpro'),
                'section'   => 'header_area',
                'settings'  => 'hd_shnk_bg_color',
                'palette'   => $palette
            )
        )
    );
// break    
 $wp_customize->add_setting('hdr_site_title_line_break_color', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'hdr_site_title_line_break_color',array(
            'section' => 'header_area',
            'description' => __( 'Site Title', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
            )));    
// title
$wp_customize->add_setting('site_title_color', array(
        'default'        => '#fff',
        'capability'     => 'edit_theme_options',
        
    ));
    $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize, 
    'site_title_color', 
    array(
    'label' => __('Title Color','novelpro'),
        'section'    => 'header_area',
        'settings'   => 'site_title_color',
    ) ) );
// menu  
// break    
 $wp_customize->add_setting('hdr_resp_line_break_color', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'hdr_resp_line_break_color',array(
            'section' => 'header_area',
            'description' => __( 'Menu', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
            )));     
$wp_customize->add_setting('hd_menu_color', array(
        'default'        => '#fff',
        'capability'     => 'edit_theme_options',
        
    ));
    $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize, 
    'hd_menu_color', 
    array(
    'label' => __('Link Color','novelpro'),
        'section'    => 'header_area',
        'settings'   => 'hd_menu_color',
    ) ) );
// hover-bg-color
$wp_customize->add_setting('hd_menu_hvr_bg_color', array(
        'default'        => '#fec503',
        'capability'     => 'edit_theme_options',
        
    ));
    $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize, 
    'hd_menu_hvr_bg_color', 
    array(
    'label' => __('Link Hover/Active Background Color','novelpro'),
        'section'    => 'header_area',
        'settings'   => 'hd_menu_hvr_bg_color',
    ) ) ); 
// icon-color
 $wp_customize->add_setting('menu_icon_clr', array(
        'default'        => '#fff',
        'capability'     => 'edit_theme_options',
        
    ));
    $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize, 
    'menu_icon_clr', 
    array(
    'label' => __('Icon Color','novelpro'),
        'section'    => 'header_area',
        'settings'   => 'menu_icon_clr',
    ) ) );    
// break-dropdown-menu   
 $wp_customize->add_setting('dropdown_break_color', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'dropdown_break_color',array(
            'section' => 'header_area',
            'description' => __( 'Drop Down Menu', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
            )));
 $wp_customize->add_setting('drp_menu_lnk', array(
        'default'        => '#4d4d4d',
        'capability'     => 'edit_theme_options',
        
    ));
    $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize, 
    'drp_menu_lnk', 
    array(
    'label' => __('Link Color','novelpro'),
        'section'    => 'header_area',
        'settings'   => 'drp_menu_lnk',
    ) ) );  

 $wp_customize->add_setting('drp_menu_lnk', array(
        'default'        => '#4d4d4d',
        'capability'     => 'edit_theme_options',
        
    ));
    $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize, 
    'drp_menu_lnk', 
    array(
    'label' => __('Link Color','novelpro'),
        'section'    => 'header_area',
        'settings'   => 'drp_menu_lnk',
    ) ) ); 
 // DROPDOWN-BG   
 $wp_customize->add_setting('drp_menu_bg', array(
        'default'        => '#fff',
        'capability'     => 'edit_theme_options',
        
    ));
    $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize, 
    'drp_menu_bg', 
    array(
    'label' => __('Background Color','novelpro'),
        'section'    => 'header_area',
        'settings'   => 'drp_menu_bg',
    ) ) );  
// responsive menu button color  
 $wp_customize->add_setting('mobile_break_color', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'mobile_break_color',array(
            'section' => 'header_area',
            'description' => __( 'Mobile Menu', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
            )));   
 
   $wp_customize->add_setting('mobile_menu_bg_color', array(
        'default'        => '#fff',
        'capability'     => 'edit_theme_options',
     
    ));
    $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize, 
    'mobile_menu_bg_color', 
    array(
    'label' => __('Responsive Menu Icon Color','novelpro'),
        'section'    => 'header_area',
        'settings'   => 'mobile_menu_bg_color',
    ) ) );
// page-layout-setting
$wp_customize->add_section('page_layout', array(
        'title'    => __('Page Layout Setting', 'novelpro'),
        'priority' => 4,
        'panel'  => 'theme_optn',
)); 
$wp_customize->add_setting( 'novelpro_blog_layout',
    array(
              'sanitize_callback' => 'sanitize_text_field',
              'default'           => 'blog-right',
              )
         );
$wp_customize->add_control( 'novelpro_blog_layout',
        array(
        'type'        => 'select',
        'label'       => esc_html__('Archive Post Layout', 'novelpro'),
        'description'       => esc_html__('Is applied for post, category, search, archive, tag pages, etc.', 'novelpro'),
        'section'     => 'page_layout',
        'choices' => array(
        'blog-right' => esc_html__('Right sidebar', 'novelpro'),
        'blog-left' => esc_html__('Left sidebar', 'novelpro'),
        'blog-no-sidebar' => esc_html__('No sidebar', 'novelpro'),
                    )
                )
            );
// woo-layout
$wp_customize->add_setting( 'novelpro_woo_layout',
    array(
              'sanitize_callback' => 'sanitize_text_field',
              'default'           => 'woo-right',
              )
         );
$wp_customize->add_control( 'novelpro_woo_layout',
        array(
        'type'        => 'select',
        'label'       => esc_html__('woocommerce Pages Layout', 'novelpro'),
        'description'       => esc_html__('Is applied for shop page, product single page, product archive page', 'novelpro'),
        'section'     => 'page_layout',
        'choices' => array(
        'woo-right' => esc_html__('Right sidebar', 'novelpro'),
        'woo-left' => esc_html__('Left sidebar', 'novelpro'),
        'woo-no-sidebar' => esc_html__('No sidebar', 'novelpro'),
                    )
                )
            );
// woo-layout



$wp_customize->add_section('custom_jscode', array(
        'title'    => __('Custom Jquery Code Settings', 'novelpro'),
        'priority' => 4,
        'panel'  => 'theme_optn',
));
$wp_customize->add_setting('custom_header_js', array(
        'sanitize_callback' => 'novelpro_sanitize_textarea',
    ));
    $wp_customize->add_control('custom_header_js', array(
        'label'    => __('Header Jquery Code', 'novelpro'),
        'description' =>__('The following code will add to the <head> tag. Useful if you need to add additional scripts or Google Analytics code.','novelpro'),
        'section'  => 'custom_jscode',
        'settings' => 'custom_header_js',
         'type'       => 'textarea',
    ));

$wp_customize->add_setting('custom_footer_js', array(
        'sanitize_callback' => 'novelpro_sanitize_textarea',
    ));
    $wp_customize->add_control('custom_footer_js', array(
        'label'    => __('Footer Jquery Code', 'novelpro'),
        'description' =>__('The following code will be added to the footer before the closing </body> tag. Useful if you need to Javascript or tracking code.','novelpro'),
        'section'  => 'custom_jscode',
        'settings' => 'custom_footer_js',
         'type'       => 'textarea',
    ));

//------------------------------------//
//-----------SLIDER SETTING-----------//
//------------------------------------//
 // background-setting video/images
$wp_customize->add_setting('sldr_bckg', array(
        'default'        =>'image',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'sldr_bckg', array(
        'settings' => 'sldr_bckg',
        'label'   => __('Slider Background','novelpro'),
        'section' => 'section_slider_speed',
        'type'    => 'radio',
        'choices'    => array(
            'image'          => 'Image',
            'video'          => 'Video',
            'externalplugin' => 'External Plugin',
        ),
    ));
//  redirection
if (class_exists('Novelpro_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'slide_setting_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Novelpro_Widegt_Redirect(
                $wp_customize, 'slide_setting_redirect', array(
                    'section'      => 'section_slider_speed',
                    'button_text'  => esc_html__( 'Go To Image Slide', 'novelpro' ),
                    'button_class' => 'focus-customizer-slide-image-redirect',  
                )
            )
        );
// video redirect
$wp_customize->add_setting(
            'video_setting_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new Novelpro_Widegt_Redirect(
                $wp_customize, 'video_setting_redirect', array(
                    'section'      => 'section_slider_speed',
                    'button_text'  => esc_html__( 'Go To video', 'novelpro' ),
                    'button_class' => 'focus-customizer-video-redirect',  
                )
            )
        );


}   
 // external plugin fornt setting
 $wp_customize->add_setting('front_extrnl_shrcd', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
    ));
    $wp_customize->add_control('front_extrnl_shrcd', array(
        'label'    => __('Plugin Shortcode', 'novelpro'),
        'section'  => 'section_slider_speed',
        'settings' => 'front_extrnl_shrcd',
         'type'       => 'textarea',
    ));      
// parallax/on/off
$wp_customize->add_setting('sldr_parallax', array(
        'default'        =>'on',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'sldr_parallax', array(
        'settings' => 'sldr_parallax',
        'label'   => __('Parallax On/Off Option','novelpro'),
        'section' => 'section_slider_speed',
        'type'    => 'radio',
        'choices'    => array(
            'on'        => 'On',
            'off'      => 'Off',
        ),
    ));
// hero section scrolling
$wp_customize->add_setting('hide_hero_section', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
$wp_customize->add_control('hide_hero_section', array(
        'settings' => 'hide_hero_section',
        'section'     => 'section_slider_speed',
        'label'       => esc_html__('Check to disable Hero scroll button ?', 'novelpro'),  
        'type'    => 'checkbox',
    ) );    
$wp_customize->add_setting('sectn_scroll', array(
        'default'           => 'section1',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('sectn_scroll', array(
        'label'    => __('Hero Section Scroll', 'novelpro'),
        'description' => __('Add section ID to which you want to scroll.'),
        'section'  => 'section_slider_speed',
        'settings' => 'sectn_scroll',
         'type'       => 'text',
));
//mask overlay image on/off
$wp_customize->add_setting('mask_ovrlay_img', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('mask_ovrlay_img', array(
        'settings' => 'mask_ovrlay_img',
        'section'     => 'section_slider_speed',
        'label'       => esc_html__('Check to disable image overlay mask ?', 'novelpro'),  
        'type'    => 'checkbox',
    ) );
// slider-butoon-style
$wp_customize->add_setting( 'slidr_button',
    array(
              'sanitize_callback' => 'sanitize_text_field',
              'default'           => 'default',
              )
         );
$wp_customize->add_control('slidr_button',
        array(
        'type'        => 'select',
        'label'       => esc_html__('Button 1', 'novelpro'),
        'description'       => esc_html__('Choose button style for slider', 'novelpro'),
        'section'     => 'section_slider_speed',
        'choices' => array(
        'default' => esc_html__('Button style 1', 'novelpro'),
        'button-one' => esc_html__('Button style 2', 'novelpro'),
        'button-two' => esc_html__('Button style 3', 'novelpro'),
        'button-three' => esc_html__('Button style 4', 'novelpro'),
        'button-four' => esc_html__('Button style 5', 'novelpro'),
        'button-five' => esc_html__('Button style 6', 'novelpro'),
             )
           )
        );  
 $wp_customize->add_setting( 'slidr_button2',
    array(
              'sanitize_callback' => 'sanitize_text_field',
              'default'           => 'default',
              )
         );
$wp_customize->add_control('slidr_button2',
        array(
        'type'        => 'select',
        'label'       => esc_html__('Button 2', 'novelpro'),
        'description'       => esc_html__('Choose button style for slider', 'novelpro'),
        'section'     => 'section_slider_speed',
        'choices' => array(
        'default' => esc_html__('Button style 1', 'novelpro'),
        'button-one-2' => esc_html__('Button style 2', 'novelpro'),
        'button-two-2' => esc_html__('Button style 3', 'novelpro'),
        'button-three-2' => esc_html__('Button style 4', 'novelpro'),
        'button-four-2' => esc_html__('Button style 5', 'novelpro'),
        'button-five-2' => esc_html__('Button style 6', 'novelpro'),
             )
           )
        );         
//video upload and caption
$wp_customize->add_section('slider_video_cap', array(
        'title'    => __('Video Setting', 'novelpro'),
        'priority' => 7,
         'panel'  => 'home_page_slider',
    ));
    $wp_customize->add_setting('sld_bg_video', array(
       'default'        => '',
       'sanitize_callback' => 'sanitize_text_field'
   ));
   $wp_customize->add_control( new WP_Customize_Upload_Control(
       $wp_customize, 'sld_bg_video', array(
       'label'    => __('Upload Slider Video', 'novelpro'),
       'section'  => 'slider_video_cap',
       'settings' => 'sld_bg_video',
   )));
// poster image
    $wp_customize->add_setting('sld_bg_video_poster', array(
       'default'        => NOVELPRO_POSTER_BG,
       'sanitize_callback' => 'sanitize_text_field'
   ));
   $wp_customize->add_control( new WP_Customize_Upload_Control(
       $wp_customize, 'sld_bg_video_poster', array(
       'label'    => __('Upload Poster Image', 'novelpro'),
       'section'  => 'slider_video_cap',
       'settings' => 'sld_bg_video_poster',
   )));
// muted
 $wp_customize->add_setting('video_muted', array(
       'default'        => '',
       'capability'     => 'edit_theme_options',
       'sanitize_callback' => 'sanitize_text_field'
   ));
   $wp_customize->add_control( 'video_muted', array(
       'settings' => 'video_muted',
       'label'   => __('Mute Audio','novelpro'),
       'section' => 'slider_video_cap',
       'type'    => 'checkbox',
       'choices'    => array(
       'muted'      => 'Video Audio Muted',
       ),
   ));
// video text
$wp_customize->add_setting('video_slider_heading', array(
        'default'           => 'Heading',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('video_slider_heading', array(
        'label'    => __('Video Heading', 'novelpro'),
        'section'  => 'slider_video_cap',
        'settings' => 'video_slider_heading',
         'type'       => 'text',
    ));
 
    $wp_customize->add_setting('video_slider_desc', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        'transport'         => 'postMessage'

    ));
    $wp_customize->add_control('video_slider_desc', array(
        'label'    => __('Description for Video', 'novelpro'),
        'section'  => 'slider_video_cap',
        'settings' => 'video_slider_desc',
         'type'       => 'textarea',
    ));
       $wp_customize->add_setting('video_slider_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('video_slider_link', array(
        'label'    => __('Link for Video','novelpro'),
        'section'  => 'slider_video_cap',
        'settings' => 'video_slider_link',
         'type'       => 'text',
    ));

         $wp_customize->add_setting('video_button_text', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('video_button_text', array(
        'label'    => __('Text for button', 'novelpro'),
        'section'  => 'slider_video_cap',
        'settings' => 'video_button_text',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('video_button_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('video_button_link', array(
        'label'    => __('Link for button', 'novelpro'),
        'section'  => 'slider_video_cap',
        'settings' => 'video_button_link',
         'type'       => 'text',
    ));
// btn2
       $wp_customize->add_setting('video_button2_text', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('video_button2_text', array(
        'label'    => __('Text for button 2', 'novelpro'),
        'section'  => 'slider_video_cap',
        'settings' => 'video_button2_text',
         'type'       => 'text',
    ));

     $wp_customize->add_setting('video_button2_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage'
    ));
    $wp_customize->add_control('video_button2_link', array(
        'label'    => __('Link for button 2', 'novelpro'),
        'section'  => 'slider_video_cap',
        'settings' => 'video_button2_link',
         'type'       => 'text',
    ));
/*******************************/   
//Start Leadform Builder Contact Form
/*******************************/
$wp_customize->add_setting('active_leadform', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
$wp_customize->add_control('active_leadform', array(
        'settings' => 'active_leadform',
        'section'     => 'section_slider_speed',
        'label'       => esc_html__('Check to Enable Contact Form ?', 'novelpro'),  
        'type'    => 'checkbox',
    ) );
 $wp_customize->add_setting('active_leadform_shtcd', array(
        'default'           => '[lead-form form-id=1 title=Contact Us]',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea'
    ));
$wp_customize->add_control('active_leadform_shtcd', array(
        'label'    => __('Shortcode', 'novelpro'),
        'section'  => 'section_slider_speed',
        'settings' => 'active_leadform_shtcd',
        'type'     => 'textarea',
    )); 
$wp_customize->add_setting('active_leadform_text', array(
        'default'           => __('Contact Us','novelpro'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));
$wp_customize->add_control('active_leadform_text', array(
        'label'    => __('Contact form Popup link heading in ipad/mobile view', 'novelpro'),
        'section'  => 'section_slider_speed',
        'settings' => 'active_leadform_text',
         'type'    => 'text',
    ));
/*******************************/   
//End Leadform Builder Contact Form
/*******************************/
// slider colors
 $wp_customize->add_section('slider_colors', array(
        'title'    => __('Colors', 'novelpro'),
        'priority' => 8,
         'panel'  => 'home_page_slider',
    ));

  $wp_customize->add_setting('slider_heading_color', array(
            'default'        => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'slider_heading_color', array(
            'label'      => __('Heading Color', 'novelpro' ),
            'section'    => 'slider_colors',
            'settings'   => 'slider_heading_color',
        ) ) );

        $wp_customize->add_setting('slider_subheading_color', array(
            'default'        => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'slider_subheading_color', array(
            'label'      => __('Sub Heading Color', 'novelpro' ),
            'section'    => 'slider_colors',
            'settings'   => 'slider_subheading_color',
        ) ) );
// break    
 $wp_customize->add_setting('sldr_btn_break_color', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'sldr_btn_break_color',array(
            'section' => 'slider_colors',
            'description' => __( 'Button 1 Color', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
            )));
//border
  $wp_customize->add_setting('slider_btn_border_color',
            array(
            'default'     => '#fff',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'slider_btn_border_color',
            array(
                'label'     => __('Border Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'slider_btn_border_color',
                'palette'   => $palette
            )
        )
    );      
 // text           
    $wp_customize->add_setting('slider_btn_txt_color',
            array(
            'default'     => '#fff',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'slider_btn_txt_color',
            array(
                'label'     => __('Text Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'slider_btn_txt_color',
                'palette'   => $palette
            )
        )
    );


 // bg       
    $wp_customize->add_setting('slider_btn_bg_color',
            array(
            'default'     => 'rgba(255, 255, 255, 0.2)',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'slider_btn_bg_color',
            array(
                'label'     => __('Background Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'slider_btn_bg_color',
                'palette'   => $palette
            )
        )
    );
// BORDER-HOVER
$wp_customize->add_setting('slider_btn_border_hvr_color',
            array(
            'default'     => '#fff',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'slider_btn_border_hvr_color',
            array(
                'label'     => __('Hover Border Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'slider_btn_border_hvr_color',
                'palette'   => $palette
            )
        )
    );   
 // text-HOVER
$wp_customize->add_setting('slider_btn_txt_hvr_color',
            array(
            'default'     => '#fff',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'slider_btn_txt_hvr_color',
            array(
                'label'     => __('Hover Text Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'slider_btn_txt_hvr_color',
                'palette'   => $palette
            )
        )
    );    
    // BORDER-HOVER
 $wp_customize->add_setting('slider_btn_bg_hover_color',
            array(
            'default'     => 'rgba(255, 255, 255, 0.7)',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'slider_btn_bg_hover_color',
            array(
                'label'     => __('Hover Background Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'slider_btn_bg_hover_color',
                'palette'   => $palette
            )
        )
    );
 // break    
 $wp_customize->add_setting('sldr_btn2_break_color', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'sldr_btn2_break_color',array(
            'section' => 'slider_colors',
            'description' => __( 'Button 2 Color', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
)));   
 //border
  $wp_customize->add_setting('slider_btn2_border_color',
            array(
            'default'     => '#fff',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'slider_btn2_border_color',
            array(
                'label'     => __('Border Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'slider_btn2_border_color',
                'palette'   => $palette
            )
        )
    );      
 // text           
    $wp_customize->add_setting('slider_btn2_txt_color',
            array(
            'default'     => '#fff',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'slider_btn2_txt_color',
            array(
                'label'     => __('Text Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'slider_btn2_txt_color',
                'palette'   => $palette
            )
        )
    );


 // bg       
    $wp_customize->add_setting('slider_btn2_bg_color',
            array(
            'default'     => 'rgba(255, 255, 255, 0.2)',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'slider_btn2_bg_color',
            array(
                'label'     => __('Background Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'slider_btn2_bg_color',
                'palette'   => $palette
            )
        )
    );
// BORDER-HOVER
$wp_customize->add_setting('slider_btn2_border_hvr_color',
            array(
            'default'     => '#fff',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'slider_btn2_border_hvr_color',
            array(
                'label'     => __('Hover Border Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'slider_btn2_border_hvr_color',
                'palette'   => $palette
            )
        )
    );   
 // text-HOVER
$wp_customize->add_setting('slider_btn2_txt_hvr_color',
            array(
            'default'     => '#fff',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'slider_btn2_txt_hvr_color',
            array(
                'label'     => __('Hover Text Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'slider_btn2_txt_hvr_color',
                'palette'   => $palette
            )
        )
    );    
    // BORDER-HOVER
 $wp_customize->add_setting('slider_btn2_bg_hover_color',
            array(
            'default'     => 'rgba(255, 255, 255, 0.7)',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'slider_btn2_bg_hover_color',
            array(
                'label'     => __('Hover Background Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'slider_btn2_bg_hover_color',
                'palette'   => $palette
            )
        )
    );       
// overlay
$wp_customize->add_setting('sldr_ovrly_break_color', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'sldr_ovrly_break_color',array(
            'section' => 'slider_colors',
            'description' => __( 'Overlay Color', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
            ))); 
$wp_customize->add_setting('slider_bg_ovrly_color',
            array(
            'default'     => 'rgba(0, 0,0, 0.1)',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

$wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'slider_bg_ovrly_color',
            array(
                'label'     => __('Background Overlay Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'slider_bg_ovrly_color',
                'palette'   => $palette
            )
        )
    );
// contact form color
$wp_customize->add_setting('sldr_contact_break_color', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'sldr_contact_break_color',array(
            'section' => 'slider_colors',
            'description' => __( 'Contact Form Color', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
)));
$wp_customize->add_setting('sldr_contact_bg_color',
            array(
            'default'     => '#f7f7f7',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

$wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'sldr_contact_bg_color',
            array(
                'label'     => __('Background Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'sldr_contact_bg_color',
                'palette'   => $palette
            )
        )
    ); 
 $wp_customize->add_setting('sldr_contact_hd_color',
            array(
            'default'     => '#333',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'sldr_contact_hd_color',
            array(
                'label'     => __('Heading Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'sldr_contact_hd_color',
                'palette'   => $palette
            )
        )
    );
$wp_customize->add_setting('sldr_contact_txt_color',
            array(
            'default'     => '#333',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'sldr_contact_txt_color',
            array(
                'label'     => __('Label Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'sldr_contact_txt_color',
                'palette'   => $palette
            )
        )
    );
$wp_customize->add_setting('sldr_contact_input_bg_color',
            array(
            'default'     => '#fff',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'sldr_contact_input_bg_color',
            array(
                'label'     => __('Input BG Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'sldr_contact_input_bg_color',
                'palette'   => $palette
            )
        )
    );
    $wp_customize->add_setting('sldr_contact_input_txt_color',
            array(
            'default'     => '#333',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'sldr_contact_input_txt_color',
            array(
                'label'     => __('Input Text Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'sldr_contact_input_txt_color',
                'palette'   => $palette
            )
        )
    );


    $wp_customize->add_setting('sldr_contact_btn_bg_color',
            array(
            'default'     => '#7202bb',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'sldr_contact_btn_bg_color',
            array(
                'label'     => __('Button BG Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'sldr_contact_btn_bg_color',
                'palette'   => $palette
            )
        )
    );
    $wp_customize->add_setting('sldr_contact_btn_txt_color',
            array(
            'default'     => '#fff',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control( new Customize_Alpha_Color_Control($wp_customize,
            'sldr_contact_btn_txt_color',
            array(
                'label'     => __('Button Text Color', 'novelpro' ),
                'section'   => 'slider_colors',
                'settings'  => 'sldr_contact_btn_txt_color',
                'palette'   => $palette
            )
        )
    );
//****SERVICES section****//
///////////////////////////////	
 $wp_customize->add_section('services_background', array(
        'title'    => __('Background', 'novelpro'),
        'priority' => 2,
        'panel'    =>'home_three_col'
    ));
    $wp_customize->add_setting('services_bg_background', array(
        'default'        => 'color',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'services_bg_background', array(
        'settings' => 'services_bg_background',
        'label'   => __('Background Option','novelpro'),
        'section' => 'services_background',
        'type'    => 'radio',
        'choices'    => array(
        'color'    => 'Background Color',
        'image'    => 'Background Image',  
        ),
    ));
//images
    $wp_customize->add_setting('services_bg_image', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'services_bg_image', array(
        'label'    => __('Upload Background Image', 'novelpro'),
        'section'  => 'services_background',
        'settings' => 'services_bg_image',
    )));
// parallax/on/off
$wp_customize->add_setting('services_parallax', array(
        'default'        =>'on',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'services_parallax', array(
        'settings' => 'services_parallax',
        'label'   => __('Parallax On/Off Option','novelpro'),
        'section' => 'services_background',
        'type'    => 'radio',
        'choices'    => array(
            'on'        => 'On',
            'off'      => 'Off',
        ),
    ));


//overlay and background color
// Alpha Color Picker Test Setting
    $wp_customize->add_setting(
        'service_img_overly_color',
        array(
            'default'     => 'rgba(0, 0,0, 0)',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control($wp_customize,
            'service_img_overly_color',
            array(
                'label'     => __('Background Color', 'novelpro' ),
                'description'=>__('Image Overlay & Background Color Change','novelpro'),
                'section'   => 'services_background',
                'settings'  => 'service_img_overly_color',
                'palette'   => $palette
            )
        )
    );
$wp_customize->add_section('services_color', array(
        'title'    => __('Colors', 'novelpro'),
        'priority' => 3,
        'panel'    =>'home_three_col'
    ));

     $wp_customize->add_setting('service_heading_color', array(
            'default'        => '#333',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'service_heading_color', array(
            'label'      => __('Heading Color', 'novelpro' ),
            'section'    => 'services_color',
            'settings'   => 'service_heading_color',
        ) ) );

        $wp_customize->add_setting('service_subheading_color', array(
            'default'        => '#777',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'service_subheading_color', array(
            'label'      => __('Sub Heading Color', 'novelpro' ),
            'section'    => 'services_color',
            'settings'   => 'service_subheading_color',
        ) ) );

//****portfolio section****//
///////////////////////////////
$wp_customize->add_section('portfolio_background', array(
        'title'    => __('Background', 'novelpro'),
        'priority' => 2,
        'panel'    =>'home_portfolio'
    ));
    $wp_customize->add_setting('portfolio_bg_background', array(
        'default'        => 'color',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'portfolio_bg_background', array(
        'settings' => 'portfolio_bg_background',
        'label'   => __('Background Option','novelpro'),
        'section' => 'portfolio_background',
        'type'    => 'radio',
        'choices'    => array(
        'color'    => 'Background Color',
        'image'    => 'Background Image',  
        ),
    ));
//images
    $wp_customize->add_setting('portfolio_bg_image', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'portfolio_bg_image', array(
        'label'    => __('Upload Background Image', 'novelpro'),
        'section'  => 'portfolio_background',
        'settings' => 'portfolio_bg_image',
    )));
//parallax/on/off
$wp_customize->add_setting('portfolio_parallax', array(
        'default'        =>'on',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'portfolio_parallax', array(
        'settings' => 'portfolio_parallax',
        'label'   => __('Parallax On/Off Option','novelpro'),
        'section' => 'portfolio_background',
        'type'    => 'radio',
        'choices'    => array(
            'on'        => 'On',
            'off'      => 'Off',
        ),
    )); 
// Alpha Color Picker Test Setting
    $wp_customize->add_setting(
        'portfolio_img_overly_color',
        array(
            'default'     => 'rgba(0, 0,0, 0)',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control($wp_customize,
            'portfolio_img_overly_color',
            array(
                'label'     => __('Background Color', 'novelpro' ),
                'description'=>__('Image Overlay & Background Color Change','novelpro'),
                'section'   => 'portfolio_background',
                'settings'  => 'portfolio_img_overly_color',
                'palette'   => $palette
            )
        )
    );


//overlay & background color
    $wp_customize->add_section('portfolio_colors', array(
        'title'    => __('Colors', 'novelpro'),
        'priority' => 3,
        'panel'    =>'home_portfolio'
    ));
//heading & subheading
   $wp_customize->add_setting('portfolio_heading_color', array(
            'default'        => '#333',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'portfolio_heading_color', array(
            'label'      => __('Heading Color', 'novelpro' ),
            'section'    => 'portfolio_colors',
            'settings'   => 'portfolio_heading_color',
        ) ) );

        $wp_customize->add_setting('portfolio_subheading_color', array(
            'default'        => '#777',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'portfolio_subheading_color', array(
            'label'      => __('Sub Heading Color', 'novelpro' ),
            'section'    => 'portfolio_colors',
            'settings'   => 'portfolio_subheading_color',
        ) ) );

//****testimonial section****//
///////////////////////////////
$wp_customize->add_section('testimonial_background', array(
        'title'    => __('Background', 'novelpro'),
        'priority' => 2,
        'panel'    =>'home_testimonial'
    ));
    $wp_customize->add_setting('testimonial_bg_background', array(
        'default'        => 'image',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('testimonial_bg_background', array(
        'settings' => 'testimonial_bg_background',
        'label'   => __('Background Option','novelpro'),
        'section' => 'testimonial_background',
        'type'    => 'radio',
        'choices'    => array(
        'color'    => 'Background Color',
        'image'    => 'Background Image',  
        ),
    ));
//images
    $wp_customize->add_setting('testimonial_bg_image', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
        'default'           => NOVELPRO_UNL_TESTIMONIAL_BG,
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'testimonial_bg_image', array(
        'label'    => __('Upload Background Image', 'novelpro'),
        'section'  => 'testimonial_background',
        'settings' => 'testimonial_bg_image',
    )));
// parallax/on/off
$wp_customize->add_setting('testimonial_parallax', array(
        'default'        =>'on',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'testimonial_parallax', array(
        'settings' => 'testimonial_parallax',
        'label'   => __('Parallax On/Off Option','novelpro'),
        'section' => 'testimonial_background',
        'type'    => 'radio',
        'choices'    => array(
            'on'        => 'On',
            'off'      => 'Off',
        ),
    )); 
    //overlay & background color
$wp_customize->add_setting(
        'testimonial_img_overly_color',
        array(
            'default'     => 'rgba(219,131,0,0.12)',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control($wp_customize,
            'testimonial_img_overly_color',
            array(
                'label'     => __('Background Color', 'novelpro' ),
                'description'=>__('Image Overlay & Background Color Change','novelpro'),
                'section'   => 'testimonial_background',
                'settings'  => 'testimonial_img_overly_color',
                'palette'   => $palette
            )
        )
    );
$wp_customize->add_setting('test_slider_speed', array(
        'default'           => __('3000','novelpro'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        
    ));
    $wp_customize->add_control('test_slider_speed', array(
        'label'    => __('Slider Speed', 'novelpro'),
        'section'  => 'testimonial_background',
        'settings' => 'test_slider_speed',
         'type'       => 'text',
    ));

    $wp_customize->add_section('testimonial_colors', array(
        'title'    => __('Colors', 'novelpro'),
        'priority' => 3,
        'panel'    =>'home_testimonial'
    ));
    //heading
   $wp_customize->add_setting('testimonial_heading_color', array(
            'default'        => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'testimonial_heading_color', array(
            'label'      => __('Heading Color', 'novelpro' ),
            'section'    => 'testimonial_colors',
            'settings'   => 'testimonial_heading_color',
        ) ) );

//****Blog section****//
///////////////////////////////
// blog settings        
$wp_customize->add_section('blog_setting', array(
        'title'    => __('Settings', 'novelpro'),
        'priority' => 2,
        'panel'    =>'home_blog'
    ));
$wp_customize->add_setting('blog_cate', array(
        'default'        => 1,
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
    ));
$wp_customize->add_control('blog_cate', array(
        'settings' => 'blog_cate',
        'label'   => __('Post Category','novelpro'),
        'section' => 'blog_setting',
        'type' => 'select',
        'choices' => $cats,
    ) );
$wp_customize->add_setting('blog_count', array(
        'default'        => 3,
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('blog_count', array(
        'settings'  => 'blog_count',
        'label'     => __('Number of Post','novelpro'),
        'section'   => 'blog_setting',
        'type'      => 'number',
       'input_attrs' => array('min' => 1,'max' => 50)

    ) );
///background    
$wp_customize->add_section('blog_background', array(
        'title'    => __('Background', 'novelpro'),
        'priority' => 2,
        'panel'    =>'home_blog'
    ));
    $wp_customize->add_setting('blog_bg_background', array(
        'default'        => 'color',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'blog_bg_background', array(
        'settings' => 'blog_bg_background',
        'label'   => __('Background Option','novelpro'),
        'section' => 'blog_background',
        'type'    => 'radio',
        'choices'    => array(
        'color'    => 'Background Color',
        'image'    => 'Background Image',  
        ),
    ));
//images
    $wp_customize->add_setting('blog_bg_image', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'blog_bg_image', array(
        'label'    => __('Upload Background Image', 'novelpro'),
        'section'  => 'blog_background',
        'settings' => 'blog_bg_image',
    )));
 // parallax/on/off
$wp_customize->add_setting('blog_parallax', array(
        'default'        =>'on',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'blog_parallax', array(
        'settings' => 'blog_parallax',
        'label'   => __('Parallax On/Off Option','novelpro'),
        'section' => 'blog_background',
        'type'    => 'radio',
        'choices'    => array(
            'on'        => 'On',
            'off'      => 'Off',
        ),
    ));   
//overlay & background color
$wp_customize->add_setting(
        'blog_img_overly_color',
        array(
            'default'     => 'rgba(0, 0,0, 0)',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control($wp_customize,
            'blog_img_overly_color',
            array(
                'label'     => __('Background Color', 'novelpro' ),
                'description'=>__('Image Overlay & Background Color Change','novelpro'),
                'section'   => 'blog_background',
                'settings'  => 'blog_img_overly_color',
                'palette'   => $palette
            )
        )
    );

    $wp_customize->add_section('blog_colors', array(
        'title'    => __('Colors', 'novelpro'),
        'priority' => 3,
        'panel'    =>'home_blog'
    ));
    
    //heading & subheading
   $wp_customize->add_setting('blog_heading_color', array(
            'default'        => '#333',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'blog_heading_color', array(
            'label'      => __('Heading Color', 'novelpro' ),
            'section'    => 'blog_colors',
            'settings'   => 'blog_heading_color',
        ) ) );

        $wp_customize->add_setting('blog_subheading_color', array(
            'default'        => '#777',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'blog_subheading_color', array(
            'label'      => __('Sub Heading Color', 'novelpro' ),
            'section'    => 'blog_colors',
            'settings'   => 'blog_subheading_color',
        ) ) );


//****team section****//
///////////////////////////////
$wp_customize->add_section('team_background', array(
        'title'    => __('Background', 'novelpro'),
        'priority' => 2,
        'panel'    =>'our_team'
    ));
    $wp_customize->add_setting('team_bg_background', array(
        'default'        => 'color',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'team_bg_background', array(
        'settings' => 'team_bg_background',
        'label'   => __('Background Option','novelpro'),
        'section' => 'team_background',
        'type'    => 'radio',
        'choices'    => array(
        'color'    => 'Background Color',
        'image'    => 'Background Image',  
        ),
    ));
//images
    $wp_customize->add_setting('team_bg_image', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'team_bg_image', array(
        'label'    => __('Upload Background Image', 'novelpro'),
        'section'  => 'team_background',
        'settings' => 'team_bg_image',
    )));
// parallax/on/off
$wp_customize->add_setting('team_parallax', array(
        'default'        =>'on',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'team_parallax', array(
        'settings' => 'team_parallax',
        'label'   => __('Parallax On/Off Option','novelpro'),
        'section' => 'team_background',
        'type'    => 'radio',
        'choices'    => array(
            'on'        => 'On',
            'off'      => 'Off',
        ),
    )); 
//overlay & background color
$wp_customize->add_setting(
        'team_img_overly_color',
        array(
            'default'     => 'rgba(0, 0,0, 0)',
            'type'        => 'theme_mod',
            'capability'  => 'edit_theme_options',
        ) );

    $wp_customize->add_control(
        new Customize_Alpha_Color_Control($wp_customize,
            'team_img_overly_color',
            array(
                'label'     => __('Background Color', 'novelpro' ),
                'description'=>__('Image Overlay & Background Color Change','novelpro'),
                'section'   => 'team_background',
                'settings'  => 'team_img_overly_color',
                'palette'   => $palette
            )
        )
    );

    $wp_customize->add_section('team_colors', array(
        'title'    => __('Colors', 'novelpro'),
        'priority' => 3,
        'panel'    =>'our_team'
    ));

    //heading & subheading
   $wp_customize->add_setting('team_heading_color', array(
            'default'        => '#333',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'team_heading_color', array(
            'label'      => __('Heading Color', 'novelpro' ),
            'section'    => 'team_colors',
            'settings'   => 'team_heading_color',
        ) ) );

        $wp_customize->add_setting('team_subheading_color', array(
            'default'        => '#777',
            'sanitize_callback' => 'sanitize_hex_color'
        ));
        $wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'team_subheading_color', array(
            'label'      => __('Sub Heading Color', 'novelpro' ),
            'section'    => 'team_colors',
            'settings'   => 'team_subheading_color',
        ) ) );

//****price section****//
///////////////////////////////
$wp_customize->add_section('price_background', array(
        'title'    => __('Background', 'novelpro'),
        'priority' => 2,
        'panel'    =>'pricing_section'
    ));
    $wp_customize->add_setting('price_bg_background', array(
        'default'        => 'image',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'price_bg_background', array(
        'settings' => 'price_bg_background',
        'label'   => __('Background Option','novelpro'),
        'section' => 'price_background',
        'type'    => 'radio',
        'choices'    => array(
        'color'    => 'Background Color',
        'image'    => 'Background Image',  
        ),
    ));
//images
    $wp_customize->add_setting('price_bg_image', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => NOVELPRO_UNL_PRICE_BG
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'price_bg_image', array(
        'label'    => __('Upload Background Image', 'novelpro'),
        'section'  => 'price_background',
        'settings' => 'price_bg_image',
    )));
// parallax/on/off
$wp_customize->add_setting('price_parallax', array(
        'default'        =>'on',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'price_parallax', array(
        'settings' => 'price_parallax',
        'label'   => __('Parallax On/Off Option','novelpro'),
        'section' => 'price_background',
        'type'    => 'radio',
        'choices'    => array(
            'on'        => 'On',
            'off'      => 'Off',
        ),
    ));
    //overlay & background color
$wp_customize->add_setting(
            'price_img_overly_color',
            array(
                'default'     => 'rgba(0, 0,0, 0)',
                'type'        => 'theme_mod',
                'capability'  => 'edit_theme_options',
            ) );

     $wp_customize->add_control(
            new Customize_Alpha_Color_Control($wp_customize,
                'price_img_overly_color',
                array(
                    'label'     => __('Background Color', 'novelpro' ),
                    'description'=>__('Image Overlay & Background Color Change','novelpro'),
                    'section'   => 'price_background',
                    'settings'  => 'price_img_overly_color',
                    'palette'   => $palette
                )
            )
        );

    $wp_customize->add_section('price_colors', array(
            'title'    => __('Colors', 'novelpro'),
            'priority' => 3,
            'panel'    =>'pricing_section'
        ));
        //heading & subheading
    $wp_customize->add_setting('price_heading_color', array(
                'default'        => '#fff',
                'sanitize_callback' => 'sanitize_hex_color'
            ));
            $wp_customize->add_control( 
                new WP_Customize_Color_Control($wp_customize,'price_heading_color', array(
                'label'      => __('Heading Color', 'novelpro' ),
                'section'    => 'price_colors',
                'settings'   => 'price_heading_color',
            ) ) );

            $wp_customize->add_setting('price_subheading_color', array(
                'default'        => '#fff',
                'sanitize_callback' => 'sanitize_hex_color'
            ));
    $wp_customize->add_control( 
                new WP_Customize_Color_Control($wp_customize,'price_subheading_color', array(
                'label'      => __('Sub Heading Color', 'novelpro' ),
                'section'    => 'price_colors',
                'settings'   => 'price_subheading_color',
            ) ) );

//****brand section****//
///////////////////////////////
$wp_customize->add_section('brand_background', array(
        'title'    => __('Background', 'novelpro'),
        'priority' => 2,
        'panel'    =>'brand_panel'
    ));
    $wp_customize->add_setting('brand_bg_background', array(
        'default'        => 'color',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'brand_bg_background', array(
        'settings' => 'brand_bg_background',
        'label'   => __('Background Option','novelpro'),
        'section' => 'brand_background',
        'type'    => 'radio',
        'choices'    => array(
        'color'    => 'Background Color',
        'image'    => 'Background Image',  
        ),
    ));
//images
    $wp_customize->add_setting('brand_bg_image', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'brand_bg_image', array(
        'label'    => __('Upload Background Image', 'novelpro'),
        'section'  => 'brand_background',
        'settings' => 'brand_bg_image',
    )));
// parallax/on/off
$wp_customize->add_setting('brand_parallax', array(
        'default'        =>'on',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'brand_parallax', array(
        'settings' => 'brand_parallax',
        'label'   => __('Parallax On/Off Option','novelpro'),
        'section' => 'brand_background',
        'type'    => 'radio',
        'choices'    => array(
            'on'        => 'On',
            'off'      => 'Off',
        ),
    ));
$wp_customize->add_setting(
            'brand_img_overly_color',
            array(
                'default'     => 'rgba(0, 0,0, 0)',
                'type'        => 'theme_mod',
                'capability'  => 'edit_theme_options',
            ) );

     $wp_customize->add_control(
            new Customize_Alpha_Color_Control($wp_customize,
                'brand_img_overly_color',
                array(
                    'label'     => __('Background Color', 'novelpro' ),
                    'description'=>__('Image Overlay & Background Color Change','novelpro'),
                    'section'   => 'brand_background',
                    'settings'  => 'brand_img_overly_color',
                    'palette'   => $palette
                )
            )
        );


//number of slides    
$wp_customize->add_setting('slider_numb', array(
        'default'           => __('6','novelpro'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
        
    ));
    $wp_customize->add_control('slider_numb', array(
        'label'    => __('Number of Slides to Show', 'novelpro'),
        'section'  => 'brand_background',
        'settings' => 'slider_numb',
         'type'       => 'text',
    ));

//overlay & background color
    $wp_customize->add_section('brand_colors', array(
            'title'    => __('Colors', 'novelpro'),
            'priority' => 3,
            'panel'    =>'brand_panel'
        ));
    //heading & subheading
    $wp_customize->add_setting('brand_heading_color', array(
                'default'        => '#333',
                'sanitize_callback' => 'sanitize_hex_color'
            ));
            $wp_customize->add_control( 
                new WP_Customize_Color_Control($wp_customize,'brand_heading_color', array(
                'label'      => __('Heading Color', 'novelpro' ),
                'section'    => 'brand_colors',
                'settings'   => 'brand_heading_color',
            ) ) );

            $wp_customize->add_setting('brand_subheading_color', array(
                'default'        => '#777',
                'sanitize_callback' => 'sanitize_hex_color'
            ));
    $wp_customize->add_control( 
                new WP_Customize_Color_Control($wp_customize,'brand_subheading_color', array(
                'label'      => __('Sub Heading Color', 'novelpro' ),
                'section'    => 'brand_colors',
                'settings'   => 'brand_subheading_color',
            ) ) );

//****woocommerce section****//
///////////////////////////////
$wp_customize->add_section('woo_background', array(
        'title'    => __('Background', 'novelpro'),
        'priority' => 2,
        'panel'    =>'woo_panel'
    ));
    $wp_customize->add_setting('woo_bg_background', array(
        'default'        => 'color',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'woo_bg_background', array(
        'settings' => 'woo_bg_background',
        'label'   => __('Background Option','novelpro'),
        'section' => 'woo_background',
        'type'    => 'radio',
        'choices'    => array(
        'color'    => 'Background Color',
        'image'    => 'Background Image',  
        ),
    ));
//images
    $wp_customize->add_setting('woo_bg_image', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'woo_bg_image', array(
        'label'    => __('Upload Background Image', 'novelpro'),
        'section'  => 'woo_background',
        'settings' => 'woo_bg_image',
    )));
// parallax/on/off
$wp_customize->add_setting('woo_parallax', array(
        'default'        =>'on',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'woo_parallax', array(
        'settings' => 'woo_parallax',
        'label'   => __('Parallax On/Off Option','novelpro'),
        'section' => 'woo_background',
        'type'    => 'radio',
        'choices'    => array(
            'on'        => 'On',
            'off'      => 'Off',
        ),
    ));
//overlay & background color
 $wp_customize->add_setting(
            'woo_img_overly_color',
            array(
                'default'     => 'rgba(0, 0,0, 0)',
                'type'        => 'theme_mod',
                'capability'  => 'edit_theme_options',
            ) );

     $wp_customize->add_control(
            new Customize_Alpha_Color_Control($wp_customize,
                'woo_img_overly_color',
                array(
                    'label'     => __('Background Color', 'novelpro' ),
                    'description'=>__('Image Overlay & Background Color Change','novelpro'),
                    'section'   => 'woo_background',
                    'settings'  => 'woo_img_overly_color',
                    'palette'   => $palette
                )
            )
        );
    $wp_customize->add_section('woo_colors', array(
            'title'    => __('Colors', 'novelpro'),
            'priority' => 3,
            'panel'    =>'woo_panel'
        ));
        //heading & subheading
    $wp_customize->add_setting('woo_heading_color', array(
                'default'        => '#333',
                'sanitize_callback' => 'sanitize_hex_color'
            ));
            $wp_customize->add_control( 
                new WP_Customize_Color_Control($wp_customize,'woo_heading_color', array(
                'label'      => __('Heading Color', 'novelpro' ),
                'section'    => 'woo_colors',
                'settings'   => 'woo_heading_color',
            ) ) );

            $wp_customize->add_setting('woo_subheading_color', array(
                'default'        => '#777',
                'sanitize_callback' => 'sanitize_hex_color'
            ));
    $wp_customize->add_control( 
                new WP_Customize_Color_Control($wp_customize,'woo_subheading_color', array(
                'label'      => __('Sub Heading Color', 'novelpro' ),
                'section'    => 'woo_colors',
                'settings'   => 'woo_subheading_color',
            ) ) );

//****contact lead section****//
///////////////////////////////
$wp_customize->add_section('lead_background', array(
        'title'    => __('Background', 'novelpro'),
        'priority' => 2,
        'panel'    =>'lead_panel'
    ));
    $wp_customize->add_setting('lead_bg_background', array(
        'default'        => 'image',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'lead_bg_background', array(
        'settings' => 'lead_bg_background',
        'label'   => __('Background Option','novelpro'),
        'section' => 'lead_background',
        'type'    => 'radio',
        'choices'    => array(
        'color'    => 'Background Color',
        'image'    => 'Background Image',  
        ),
 ));
//images
    $wp_customize->add_setting('lead_bg_image', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => NOVELPRO_UNL_LEAD_BG
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'lead_bg_image', array(
        'label'    => __('Upload Background Image', 'novelpro'),
        'section'  => 'lead_background',
        'settings' => 'lead_bg_image',
    )));
// parallax/on/off
$wp_customize->add_setting('lead_parallax', array(
        'default'        =>'on',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'lead_parallax', array(
        'settings' => 'lead_parallax',
        'label'   => __('Parallax On/Off Option','novelpro'),
        'section' => 'lead_background',
        'type'    => 'radio',
        'choices'    => array(
            'on'        => 'On',
            'off'      => 'Off',
        ),
    ));
$wp_customize->add_setting(
            'lead_img_overly_color',
            array(
                'default'     => 'rgba(0, 0,0, 0)',
                'type'        => 'theme_mod',
                'capability'  => 'edit_theme_options',
            ) );

     $wp_customize->add_control(
            new Customize_Alpha_Color_Control($wp_customize,
                'lead_img_overly_color',
                array(
                    'label'     => __('Background Color', 'novelpro' ),
                    'description'=>__('Image Overlay & Background Color Change','novelpro'),
                    'section'   => 'lead_background',
                    'settings'  => 'lead_img_overly_color',
                    'palette'   => $palette
                )
            )
        );

//overlay & background color
$wp_customize->add_section('lead_colors', array(
            'title'    => __('Colors', 'novelpro'),
            'priority' => 3,
            'panel'    =>'lead_panel'
        ));
    //heading & subheading
    $wp_customize->add_setting('lead_heading_color', array(
                'default'        => '#fff',
                'sanitize_callback' => 'sanitize_hex_color'
            ));
            $wp_customize->add_control( 
                new WP_Customize_Color_Control($wp_customize,'lead_heading_color', array(
                'label'      => __('Heading Color', 'novelpro' ),
                'section'    => 'lead_colors',
                'settings'   => 'lead_heading_color',
            ) ) );

            $wp_customize->add_setting('lead_subheading_color', array(
                'default'        => '#fff',
                'sanitize_callback' => 'sanitize_hex_color'
            ));
    $wp_customize->add_control( 
                new WP_Customize_Color_Control($wp_customize,'lead_subheading_color', array(
                'label'      => __('Sub Heading Color', 'novelpro' ),
                'section'    => 'lead_colors',
                'settings'   => 'lead_subheading_color',
            ) ) );
//map
$wp_customize->add_setting('map_address', array(
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'novelpro_sanitize_textarea_html'
            ));
        $wp_customize->add_control('map_address', array(
            'label'    => __('Map Address', 'doctorsline'),
            'description' => __('insert goole map iframe <a target="_blank" href="https://www.google.co.in/maps">Map</a>','doctorsline'),
            'section'  => 'lead_form',
            'settings' => 'map_address',
             'type'       => 'textarea',
            'priority' => 20,
            ));
    
//  =============================
//  = Ribbon Settings             =
//  =============================
$wp_customize->add_panel( 'ribbon_panel', array(
    'priority'       => 14,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Ribbon Setting', 'novelpro'),
    'description'    => '',
    
) );
$wp_customize->add_section( 'ribn_section', array(
        'title'          => __( 'Setting','novelpro' ),
        'panel'  => 'ribbon_panel',
        'priority'       => 1,  
        ));
$wp_customize->add_setting('ribn_head_', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',

     ));
    $wp_customize->add_control('ribn_head_', array(
        'label'    => __('Title', 'novelpro'),
        'section'  => 'ribn_section',
        'settings' => 'ribn_head_',
         'type'       => 'textarea',
    ));
 // button text
$wp_customize->add_setting('ribn_btn_txt', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'novelpro_sanitize_textarea',
     ));
    $wp_customize->add_control('ribn_btn_txt', array(
        'label'    => __('Button Text', 'novelpro'),
        'section'  => 'ribn_section',
        'settings' => 'ribn_btn_txt',
         'type'       => 'text',
    )); 
// button link
$wp_customize->add_setting('ribn_btn_link', array(
        'default'           => '#',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url',
     ));
    $wp_customize->add_control('ribn_btn_link', array(
        'label'    => __('Button Link', 'novelpro'),
        'section'  => 'ribn_section',
        'settings' => 'ribn_btn_link',
         'type'       => 'text',
    )); 
// background settings
$wp_customize->add_section( 'ribn_bg_section', array(
        'title'          => __( 'Background','novelpro' ),
        'panel'  => 'ribbon_panel',
        'priority'       => 2,  
        ));
$wp_customize->add_setting('ribn_chs_', array(
        'default'        => 'color',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'ribn_chs_', array(
        'settings' => 'ribn_chs_',
        'label'   => __('Background Option','novelpro'),
        'section' => 'ribn_bg_section',
        'type'    => 'radio',
        'choices'    => array(
        'color'    => 'Background Color',
        'image'    => 'Background Image',  
        'video'    => 'Background Video',  
        ),
 ));
//images
    $wp_customize->add_setting('rbn_bg_image', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'rbn_bg_image', array(
        'label'    => __('Upload Background Image', 'novelpro'),
        'section'  => 'ribn_bg_section',
        'settings' => 'rbn_bg_image',
    )));
//video
$wp_customize->add_setting('rbn_bg_vd', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
$wp_customize->add_control( new WP_Customize_Upload_Control(
       $wp_customize, 'rbn_bg_vd', array(
       'label'    => __('Upload Background Video', 'novelpro'),
       'section'  => 'ribn_bg_section',
       'settings' => 'rbn_bg_vd',
   )));
// video-image
$wp_customize->add_setting('rbn_video_image', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'rbn_video_image', array(
        'label'    => __('Video Image', 'novelpro'),
        'description'    => __('In mobile view set video image', 'novelpro'),
        'section'  => 'ribn_bg_section',
        'settings' => 'rbn_video_image',
    )));
// parallax/on/off
$wp_customize->add_setting('rbn_parallax', array(
        'default'        =>'on',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'rbn_parallax', array(
        'settings' => 'rbn_parallax',
        'label'   => __('Parallax On/Off Option','novelpro'),
        'section' => 'ribn_bg_section',
        'type'    => 'radio',
        'choices'    => array(
            'on'        => 'On',
            'off'      => 'Off',
        ),
    ));
    $wp_customize->add_setting(
            'rbn_img_overly_color',
            array(
                'default'     => 'rgba(0, 0,0, 0.1)',
                'type'        => 'theme_mod',
                'capability'  => 'edit_theme_options',
            ) );

     $wp_customize->add_control(
            new Customize_Alpha_Color_Control($wp_customize,
                'rbn_img_overly_color',
                array(
                    'label'     => __('Background Color', 'novelpro' ),
                    'description'=>__('Image Overlay & Background Color Change','novelpro'),
                    'section'   => 'ribn_bg_section',
                    'settings'  => 'rbn_img_overly_color',
                    'palette'   => $palette
                )
            )
        );
// color option //
//overlay & background color
$wp_customize->add_section('rbn_colors', array(
            'title'    => __('Colors', 'novelpro'),
            'priority' => 3,
            'panel'    =>'ribbon_panel'
        ));
    //heading & subheading
    $wp_customize->add_setting('rbn_heading_color', array(
                'default'        => '#fff',
                'sanitize_callback' => 'sanitize_hex_color'
            ));
            $wp_customize->add_control( 
                new WP_Customize_Color_Control($wp_customize,'rbn_heading_color', array(
                'label'      => __('Title Color', 'novelpro' ),
                'section'    => 'rbn_colors',
                'settings'   => 'rbn_heading_color',
            ) ) );

    $wp_customize->add_setting('rbn_bnt_color', array(
                'default'        => '#fec503;',
                'sanitize_callback' => 'sanitize_hex_color'
            ));
    $wp_customize->add_control( 
                new WP_Customize_Color_Control($wp_customize,'rbn_bnt_color', array(
                'label'      => __('Button Color', 'novelpro' ),
                'section'    => 'rbn_colors',
                'settings'   => 'rbn_bnt_color',
            ) ) );

//  =============================
//  = custom section Settings             =
//  =============================
$wp_customize->add_panel( 'cust_panel', array(
    'priority'       => 15,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Custom Section Setting', 'novelpro'),
    'description'    => '',
    
) );
// custom header
$wp_customize->remove_section( 'header_image');
// custom color
    $wp_customize->get_section('colors')->title = esc_html__('Body Background Color', 'novelpro');
    $wp_customize->get_section('colors')->priority = 60;
    $wp_customize->get_section('colors')->panel = 'theme_optn';
// custom background
$wp_customize->add_section( 'background_image', array(
  'title'          => __( 'Body Background Image', 'novelpro' ),
  'theme_supports' => 'custom-background',
  'priority'       => 80,
  'panel' =>'theme_optn',
) ); 
// selective-refresh option added
$wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.navbar-header h1 a'
) );
$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.navbar-header p'
) );
$wp_customize->selective_refresh->add_partial( 'first_slider_heading', array(
       'selector' => '#slider-div .container h1',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'first_slider_desc', array(
       'selector' => '#slider-div .container p',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'first_button_text', array(
       'selector' => '#slider-div .main-slider-button',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'sectn_scroll', array(
       'selector' => '#slider-div .hero-id',
       
   ) );

$wp_customize->selective_refresh->add_partial( 'col_heading', array(
       'selector' => '#section1 .section-heading',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'col_sub', array(
       'selector' => '#section1 .section-subheading',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'novelpro_service_content', array(
       'selector' => '#section1 .row:nth-of-type(2)',
       
   ) );
$wp_customize->selective_refresh->
add_partial( 'portfolio_head_', array(
       'selector' => '#section2 .section-heading',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'portfolio_desc_', array(
       'selector' => '#section2 .section-subheading',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'testimonial_heading', array(
       'selector' => '#section3 .testimonial-header',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'blog_head_', array(
       'selector' => '#section4 .section-heading',
       
   ) ); 
$wp_customize->selective_refresh->add_partial( 'blog_desc_', array(
       'selector' => '#section4 .section-subheading',
       
   ) ); 
$wp_customize->selective_refresh->add_partial( 'team_head_', array(
       'selector' => '#section5 .section-heading',
       
   ) ); 
$wp_customize->selective_refresh->add_partial( 'team_desc_', array(
       'selector' => '#section5 .section-subheading',
       
   ) ); 
$wp_customize->selective_refresh->add_partial( 'brand_head_', array(
       'selector' => '#section6 .section-heading',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'brand_desc_', array(
       'selector' => '#section6 .section-subheading',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'woo_head_', array(
       'selector' => '#section8 .section-heading',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'woo_desc_', array(
       'selector' => '#section8 .section-subheading',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'cf_head_', array(
       'selector' => '#section7 .section-heading',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'cf_desc_', array(
       'selector' => '#section7 .section-subheading',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'pricing_head_', array(
       'selector' => '#section9 .post-title h1',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'pricing_desc_', array(
       'selector' => '#section9 .post-title p',
       
   ) );

$wp_customize->selective_refresh->add_partial( 'ribn_head_', array(
       'selector' => '#section10 .video-title h2',
       
   ) ); 
$wp_customize->selective_refresh->add_partial( 'ribn_btn_txt', array(
       'selector' => '#section10 a.btn-video',
       
   ) );
$wp_customize->selective_refresh->add_partial( 'cf_shtcd_', array(
       'selector' => '#section7 .cnt-div',
       
   ) );

$wp_customize->selective_refresh->add_partial( 'footertext', array(
       'selector' => 'span.copyright',
       
   ) );  
//typography
$wp_customize->register_section_type( 'Novelpro_WP_Customizer_Range_Value_Control' );
include_once( get_template_directory() . '/inc/novelpro-unlimited/inc/typography-customizer.php' );
}    
add_action('customize_register','novelpro_unlimited_customize_register',999);
function novelpro_is_json( $string ){
    return is_string( $string ) && is_array( json_decode( $string, true ) ) ? true : false;
}
function novelpro_unlimited_registers(){
wp_enqueue_script( 'novelpro_unlimited_customizer_script', get_template_directory_uri() . '/inc/novelpro-unlimited/js/customizer.js', array("jquery"), '', true  );
// select font typography
wp_enqueue_script( 'novelpro-select-script', get_template_directory_uri() . '/inc/novelpro-unlimited/inc/customizer-font-selector/js/select.js', array( 'jquery' ), '1.0.0', true );
wp_enqueue_script( 'novelpro-typography-js', get_template_directory_uri() . '/inc/novelpro-unlimited/inc/customizer-font-selector/js/typography.js', array( 'jquery', 'novelpro-select-script' ), '1.0.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'novelpro_unlimited_registers', 999);
function novelpro_unlimited_style_registers(){
    // font select typography
    wp_enqueue_style('novelpro-select-style', get_template_directory_uri() . '/inc/novelpro-unlimited/inc/customizer-font-selector/css/select.css', null, '1.0.0');
    wp_enqueue_style('novelpro-typography',get_template_directory_uri() . '/inc/novelpro-unlimited/inc/customizer-font-selector/css/typography.css', null);
    
}
add_action('customize_controls_print_styles', 'novelpro_unlimited_style_registers');

?>