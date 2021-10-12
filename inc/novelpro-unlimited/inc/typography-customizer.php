<?php
/*
 Novelpro advance typography
*/
    $wp_customize->add_panel( 'typography_panel', array(
    'priority'       => 3,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __('Typography Panel', 'novelpro'),
    'description'    => '',
) );
    $wp_customize->add_section( 'novel_typography_fontsubset', array(
     'title'         => __( 'Font Subset','novelpro' ),
     'panel'         => 'typography_panel',
     'priority'      => 1,
) );

    $wp_customize->add_section( 'novelpro_typography_body', array(
     'title'          => __( 'Body','novelpro' ),
     'panel'  => 'typography_panel',
     'priority'       => 2,
) );
/****************/
// Font Subset  
/****************/ 
if ( class_exists( 'TH_Customize_Control_Checkbox_Multiple' ) ){
    $wp_customize->add_setting(
            'novelpro_font_subsets', array(
                'default' => array( 'latin' ),
                'sanitize_callback' => 'th_checkbox_explode',
            )
        );
    $wp_customize->add_control(
            new TH_Customize_Control_Checkbox_Multiple(
                $wp_customize, 'novelpro_font_subsets', array(
                    'section' => 'novel_typography_fontsubset',
                    'label'   => esc_html__( 'Font Subsets', 'novelpro' ),
                    'choices' => array(
                        'latin'     => 'latin',
                        'latin-ext' => 'latin-ext',
                        'cyrillic'  => 'cyrillic',
                        'cyrillic-ext' => 'cyrillic-ext',
                        'greek'        => 'greek',
                        'greek-ext'    => 'greek-ext',
                        'vietnamese'   => 'vietnamese',
                        'arabic'       => 'arabic',
                    ),
                    'priority' => 1,
                )
            )
        );
}
/************************/
// Body
/***********************/
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_body_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_body_font', array(
        'label' => esc_html__( 'Font family', 'novelpro' ),
                    'section'           => 'novelpro_typography_body',
                    'priority'          => 1,
                    'type'              => 'select',
            )
        )
    );
}
//Text-transform
$wp_customize->add_setting('novelpro_body_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_body_text_transform', array(
        'settings' => 'novelpro_body_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_body',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
/*******************/
// Body font-size
/*******************/
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_body_font_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '16',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_body_font_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_body',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
    // font line-height
$wp_customize->add_setting(
            'novelpro_body_font_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.6',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize,'novelpro_body_font_line_height', array(
                    'label'       => esc_html__( 'Line-Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_body',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
// font letter spacing
$wp_customize->add_setting(
                'novelpro_body_font_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_body_font_letter_spacing', array(
                    'label'       => esc_html__( 'Letter-Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_body',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
}

//Title
$wp_customize->add_section( 'novelpro_typography_title', array(
     'title'          => __( 'Title','novelpro' ),
     'panel'  => 'typography_panel',
     'priority'       => 2,
) );
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_title_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_title_font', array(
            'label' => esc_html__( 'Title', 'novelpro' ),
                    'section'     => 'novelpro_typography_title',
                    'type'        => 'select',
            )
        )
    );
}
//Title Text-transform
$wp_customize->add_setting('novelpro_title_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_title_text_transform', array(
        'settings' => 'novelpro_title_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_title',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default','novelpro' ),
        'none'       => __( 'None','novelpro' ),
        'capitalize' => __( 'Capitalize','novelpro' ),
        'uppercase'  => __( 'Uppercase','novelpro' ),
        'lowercase'  => __( 'Lowercase','novelpro' ),    
        ),
));

/**********************/
//Content Font-Style H1
/**********************/
$wp_customize->add_section( 'novelpro_typography_content', array(
     'title'          => __( 'Content','novelpro' ),
     'panel'  => 'typography_panel',
     'priority'       => 2,
) );
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_h1_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_h1_font', array(
            'label' => esc_html__( 'H1', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'select',
            )
        )
    );
}
//H1 Text-transform
$wp_customize->add_setting('novelpro_h1_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_h1_text_transform', array(
        'settings' => 'novelpro_h1_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_content',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default','novelpro' ),
        'none'       => __( 'None','novelpro' ),
        'capitalize' => __( 'Capitalize','novelpro' ),
        'uppercase'  => __( 'Uppercase','novelpro' ),
        'lowercase'  => __( 'Lowercase','novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_h1_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '36',
              
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_h1_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_h1_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize,'novelpro_h1_line_height', array(
                    'label'       => esc_html__( 'Line-Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );

// font letter spacing
$wp_customize->add_setting(
                'novelpro_h1_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_h1_letter_spacing', array(
                    'label'       => esc_html__( 'Letter-Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
}
/**********************/
//Content Font-Style H2
/**********************/
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_h2_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_h2_font', array(
            'label' => esc_html__( 'H2', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    
                    'type'        => 'select',
            )
        )
    );
}
//H1 Text-transform
$wp_customize->add_setting('novelpro_h2_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_h2_text_transform', array(
        'settings' => 'novelpro_h2_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_content',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_h2_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '30',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_h2_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_h2_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize,'novelpro_h2_line_height', array(
                    'label'       => esc_html__( 'Line-Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
// font letter spacing
$wp_customize->add_setting(
                'novelpro_h2_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_h2_letter_spacing', array(
                    'label'       => esc_html__( 'Letter-Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
}
/**********************/
//Content Font-Style H3
/**********************/
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_h3_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_h3_font', array(
            'label' => esc_html__( 'H3', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    
                    'type'        => 'select',
            )
        )
    );
}
//H1 Text-transform
$wp_customize->add_setting('novelpro_h3_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_h3_text_transform', array(
        'settings' => 'novelpro_h3_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_content',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_h3_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '24',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_h3_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_h3_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize,'novelpro_h3_line_height', array(
                    'label'       => esc_html__( 'Line-Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );

// font letter spacing
$wp_customize->add_setting(
                'novelpro_h3_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_h3_letter_spacing', array(
                    'label'       => esc_html__( 'Letter-Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
}
/**********************/
//Content Font-Style H4
/**********************/
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_h4_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_h4_font', array(
            'label' => esc_html__( 'H4', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    
                    'type'        => 'select',
            )
        )
    );
}
//H1 Text-transform
$wp_customize->add_setting('novelpro_h4_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_h4_text_transform', array(
        'settings' => 'novelpro_h4_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_content',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_h4_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '18',
               
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_h4_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_h4_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize,'novelpro_h4_line_height', array(
                    'label'       => esc_html__( 'Line-Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );

// font letter spacing
$wp_customize->add_setting(
                'novelpro_h4_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_h4_letter_spacing', array(
                    'label'       => esc_html__( 'Letter-Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
}
/**********************/
//Content Font-Style H5
/**********************/
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_h5_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_h5_font', array(
            'label' => esc_html__( 'H5', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    
                    'type'        => 'select',
            )
        )
    );
}
//H5 Text-transform
$wp_customize->add_setting('novelpro_h5_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_h5_text_transform', array(
        'settings' => 'novelpro_h5_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_content',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_h5_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '14', 
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_h5_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_h5_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize,'novelpro_h5_line_height', array(
                    'label'       => esc_html__( 'Line-Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );

// font letter spacing
$wp_customize->add_setting(
                'novelpro_h5_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_h5_letter_spacing', array(
                    'label'       => esc_html__( 'Letter-Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
}
/**********************/
//Content Font-Style H6
/**********************/
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_h6_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_h6_font', array(
            'label' => esc_html__( 'H6', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'select',
            )
        )
    );
}
//H6 Text-transform
$wp_customize->add_setting('novelpro_h6_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_h6_text_transform', array(
        'settings' => 'novelpro_h6_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_content',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_h6_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '32',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_h6_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_h6_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '32',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_h6_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_h6_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '32',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_h6_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_content',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
}
/************************/
// Slider Section Typography
/************************/
$wp_customize->add_section( 'novelpro_typography_slider', array(
     'title'    => __( 'Typography','novelpro' ),
     'panel'    => 'home_page_slider',
     'priority' => 10,
) );
// break    
 $wp_customize->add_setting('slider_typography_main_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'slider_typography_main_heading',array(
            'section' => 'novelpro_typography_slider',
            'description' => __( 'Main Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
)));    
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_slider_heading_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_slider_heading_font', array(
            'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_slider',
                    'type'        => 'select',
            )
        )
    );
}
//slider heading
$wp_customize->add_setting('novelpro_heading_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_heading_text_transform', array(
        'settings' => 'novelpro_heading_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_slider',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_heading_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '56',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_heading_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_slider',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_heading_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_heading_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_slider',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_heading_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_heading_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_slider',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
}
/******************/
// SUB HEADING
/******************/
// break    
 $wp_customize->add_setting('slider_typography_sub_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'slider_typography_sub_heading',array(
            'section' => 'novelpro_typography_slider',
            'description' => __( 'Sub Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
)));    
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_sbheading_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_sbheading_font', array(
            'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_slider',
                    'type'        => 'select',
            )
        )
    );
}
//slider heading
$wp_customize->add_setting('novelpro_sbheading_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_sbheading_text_transform', array(
        'settings' => 'novelpro_sbheading_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_slider',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_sbheading_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '18',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_sbheading_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_slider',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_sbheading_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_sbheading_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_slider',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_sbheading_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_sbheading_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_slider',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
/******************/
// slider Button
/******************/
// break    
 $wp_customize->add_setting('slider_typography_btn', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'slider_typography_btn',array(
            'section' => 'novelpro_typography_slider',
            'description' => __( 'Button', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
)));    
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_sldier_btn_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_sldier_btn_font', array(
            'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_slider',
                    'type'        => 'select',
            )
        )
    );
}
//slider heading
$wp_customize->add_setting('novelpro_sldier_btn_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_sldier_btn_text_transform', array(
        'settings' => 'novelpro_sldier_btn_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_slider',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));

/************************/
// Service Section Typography
/************************/
$wp_customize->add_section( 'novelpro_typography_service', array(
     'title'    => __( 'Typography','novelpro' ),
     'panel'    => 'home_three_col',
     'priority' => 10,
) );
// break    
 $wp_customize->add_setting('servive_typography_main_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'servive_typography_main_heading',array(
            'section' => 'novelpro_typography_service',
            'description' => __( 'Main Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
)));    
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_service_main_heading_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_service_main_heading_font', array(
            'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'select',
            )
        )
    );
}
//service heading
$wp_customize->add_setting('novelpro_service_main_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_service_main_hd_text_transform', array(
        'settings' => 'novelpro_service_main_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_service',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));

if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_service_main_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '40',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_service_main_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_service_main_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_service_main_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_service_main_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_service_main_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// service sub heading
// break    
 $wp_customize->add_setting('servive_typography_sb_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'servive_typography_sb_heading',array(
            'section' => 'novelpro_typography_service',
            'description' => __( 'Sub Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
)));    
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_service_sb_heading_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_service_sb_heading_font', array(
            'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_service_sb_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_service_sb_hd_text_transform', array(
        'settings' => 'novelpro_service_sb_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_service',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));

if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_service_sb_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '18',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_service_sb_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_service_sb_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_service_sb_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_service_sb_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_service_sb_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// service title
// break    
 $wp_customize->add_setting('servive_typography_title', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'servive_typography_title',array(
            'section' => 'novelpro_typography_service',
            'description' => __( 'Service Title', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
)));    
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_service_tle_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_service_tle_font', array(
            'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_service_tle_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_service_tle_text_transform', array(
        'settings' => 'novelpro_service_tle_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_service',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));

if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_service_tle_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '20',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_service_tle_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_service_tle_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_service_tle_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_service_tle_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_service_tle_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// service content
// break    
 $wp_customize->add_setting('servive_typography_content', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'servive_typography_content',array(
            'section' => 'novelpro_typography_service',
            'description' => __( 'Service Content', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
)));    
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_service_cnt_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_service_cnt_font', array(
            'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_service_cnt_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_service_cnt_text_transform', array(
        'settings' => 'novelpro_service_cnt_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_service',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));

if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_service_cnt_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '16',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_service_cnt_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_service_cnt_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.8',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_service_cnt_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
$wp_customize->add_setting(
            'novelpro_service_cnt_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_service_cnt_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_service',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
/************************/
// Portfolio Section Typography
/************************/
$wp_customize->add_section( 'novelpro_typography_portfolio', array(
     'title'    => __( 'Typography','novelpro' ),
     'panel'    => 'home_portfolio',
     'priority' => 10,
) );
// break    
 $wp_customize->add_setting('portfolio_typography_main_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'portfolio_typography_main_heading',array(
            'section' => 'novelpro_typography_portfolio',
            'description' => __( 'Main Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
)));    
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_portfolio_main_heading_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_portfolio_main_heading_font', array(
            'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_portfolio',
                    'type'        => 'select',
            )
        )
    );
}
//portfolio heading
$wp_customize->add_setting('novelpro_portfolio_main_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_portfolio_main_hd_text_transform', array(
        'settings' => 'novelpro_portfolio_main_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_portfolio',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_portfolio_main_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '40',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_portfolio_main_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_portfolio',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_portfolio_main_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_portfolio_main_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_portfolio',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_portfolio_main_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_portfolio_main_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_portfolio',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// break    
 $wp_customize->add_setting('portfolio_typography_sub_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'portfolio_typography_sub_heading',array(
            'section' => 'novelpro_typography_portfolio',
            'description' => __( 'Sub Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
)));    
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_portfolio_sub_heading_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_portfolio_sub_heading_font', array(
            'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_portfolio',
                    'type'        => 'select',
            )
        )
    );
}
//portfolio subheading
$wp_customize->add_setting('novelpro_portfolio_sb_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_portfolio_sb_hd_text_transform', array(
        'settings' => 'novelpro_portfolio_sb_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_portfolio',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_portfolio_sb_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '18',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_portfolio_sb_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_portfolio',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_portfolio_sb_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_portfolio_sb_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_portfolio',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_portfolio_sb_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_portfolio_sb_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_portfolio',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
/********************************/
//Testimonial Section Typography
/********************************/
$wp_customize->add_section( 'novelpro_typography_testimonial', array(
     'title'    => __( 'Typography','novelpro' ),
     'panel'    => 'home_testimonial',
     'priority' => 10,
) );
// break    
 $wp_customize->add_setting('testimonial_typography_main_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'testimonial_typography_main_heading',array(
            'section' => 'novelpro_typography_testimonial',
            'description' => __( 'Main Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
)));    
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_testimonial_main_heading_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_testimonial_main_heading_font', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_testimonial',
                    'type'        => 'select',
            )
        )
    );
}
//testimonial heading
$wp_customize->add_setting('novelpro_testimonial_main_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_testimonial_main_hd_text_transform', array(
        'settings' => 'novelpro_testimonial_main_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_testimonial',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_testimonial_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '40',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_testimonial_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_testimonial',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_testimonial_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_testimonial_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_testimonial',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_testimonial_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_testimonial_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_testimonial',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// testimonial title break    
 $wp_customize->add_setting('testimonial_typography_title', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'testimonial_typography_title',array(
            'section' => 'novelpro_typography_testimonial',
            'description' => __( 'Description', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
)));    
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_testimonial_title_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_testimonial_title_font', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_testimonial',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_testimonial_title_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_testimonial_title_text_transform', array(
        'settings' => 'novelpro_testimonial_title_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_testimonial',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_testimonial_title_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '18',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_testimonial_title_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_testimonial',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_testimonial_title_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_testimonial_title_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_testimonial',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_testimonial_title_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_testimonial_title_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_testimonial',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// testimonial author break    
 $wp_customize->add_setting('testimonial_typography_author', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'testimonial_typography_author',array(
            'section' => 'novelpro_typography_testimonial',
            'description' => __( 'Author', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
)));    
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_testimonial_author_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_testimonial_author_font', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_testimonial',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_testimonial_author_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_testimonial_author_text_transform', array(
        'settings' => 'novelpro_testimonial_author_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_testimonial',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_testimonial_author_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '18',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_testimonial_author_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_testimonial',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_testimonial_author_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_testimonial_author_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_testimonial',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_testimonial_author_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_testimonial_author_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_testimonial',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
/********************************/
//Blog Section Typography
/********************************/
$wp_customize->add_section( 'novelpro_typography_blog', array(
     'title'    => __( 'Typography','novelpro' ),
     'panel'    => 'home_blog',
     'priority' => 10,
) );
// break    
 $wp_customize->add_setting('blog_typography_main_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'blog_typography_main_heading',array(
            'section' => 'novelpro_typography_blog',
            'description' => __( 'Main Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//Blog heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_blog_main_hd', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_blog_main_hd', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_blog_main_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_blog_main_hd_text_transform', array(
        'settings' => 'novelpro_blog_main_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_blog',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_blog_main_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '40',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_main_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_blog_main_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_main_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_blog_main_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_main_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}

// break    
 $wp_customize->add_setting('blog_typography_sub_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'blog_typography_sub_heading',array(
            'section' => 'novelpro_typography_blog',
            'description' => __( 'Sub Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//Blog sub heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_blog_sb_hd', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_blog_sb_hd', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_blog_sb_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_blog_sb_hd_text_transform', array(
        'settings' => 'novelpro_blog_sb_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_blog',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_blog_sb_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '18',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_sb_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_blog_sb_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_sb_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_blog_sb_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_sb_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// break    
$wp_customize->add_setting('blog_typography_title', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'blog_typography_title',array(
            'section' => 'novelpro_typography_blog',
            'description' => __( 'Post Title', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//Blog post title
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_blog_title', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_blog_title', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_blog_title_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_blog_title_text_transform', array(
        'settings'   => 'novelpro_blog_title_text_transform',
        'label'      => __('Text Transform','novelpro'),
        'section'    => 'novelpro_typography_blog',
        'type'       => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_blog_title_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '18',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_title_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_blog_title_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_title_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_blog_title_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_title_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// break    
$wp_customize->add_setting('blog_typography_post_meta', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'blog_typography_post_meta',array(
            'section' => 'novelpro_typography_blog',
            'description' => __( 'Post Meta', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//Blog post title
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_blog_post_meta', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_blog_post_meta', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_blog_post_meta_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_blog_post_meta_text_transform', array(
        'settings'   => 'novelpro_blog_post_meta_text_transform',
        'label'      => __('Text Transform','novelpro'),
        'section'    => 'novelpro_typography_blog',
        'type'       => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_blog_post_meta_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '14',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_post_meta_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_blog_post_meta_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_post_meta_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_blog_post_meta_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_post_meta_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// break    
$wp_customize->add_setting('blog_typography_content', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'blog_typography_content',array(
            'section' => 'novelpro_typography_blog',
            'description' => __( 'Post Content', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//Blog post title
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_blog_content', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_blog_content', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_blog_conten_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_blog_conten_text_transform', array(
        'settings'   => 'novelpro_blog_conten_text_transform',
        'label'      => __('Text Transform','novelpro'),
        'section'    => 'novelpro_typography_blog',
        'type'       => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));

if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_blog_content_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '18',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_content_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_blog_content_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_content_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_blog_content_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_blog_content_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_blog',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
/********************************/
//Team Section Typography
/********************************/
$wp_customize->add_section('novelpro_typography_team', array(
     'title'    => __( 'Typography','novelpro' ),
     'panel'    => 'our_team',
     'priority' => 10,
) );
// break    
 $wp_customize->add_setting('team_typography_main_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'team_typography_main_heading',array(
            'section' => 'novelpro_typography_team',
            'description' => __( 'Main Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//team heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_team_main_hd', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_team_main_hd', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_team_main_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_team_main_hd_text_transform', array(
        'settings' => 'novelpro_team_main_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_team',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_team_main_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '40',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_team_main_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_team_main_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_team_main_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_team_main_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_team_main_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// sub heading break    
 $wp_customize->add_setting('team_typography_sub_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'team_typography_sub_heading',array(
            'section' => 'novelpro_typography_team',
            'description' => __( 'Sub Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//team heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_team_sb_hd', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_team_sb_hd', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_team_sb_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_team_sb_hd_text_transform', array(
        'settings' => 'novelpro_team_sb_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_team',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_team_sb_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '18',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_team_sb_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_team_sb_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_team_sb_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
$wp_customize->add_setting(
            'novelpro_team_sb_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_team_sb_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// break    
 $wp_customize->add_setting('team_typography_title', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'team_typography_title',array(
            'section' => 'novelpro_typography_team',
            'description' => __( 'Title', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//team heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_team_title', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_team_title', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_team_title_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_team_title_text_transform', array(
        'settings' => 'novelpro_team_title_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_team',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_team_title_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '20',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_team_title_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_team_title_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_team_title_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_team_title_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_team_title_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// break    
 $wp_customize->add_setting('team_typography_content', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'team_typography_content',array(
            'section' => 'novelpro_typography_team',
            'description' => __( 'Content', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//team heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_team_content', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_team_content', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_team_content_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_team_content_text_transform', array(
        'settings' => 'novelpro_team_content_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_team',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_team_content_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '16',
                
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_team_content_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_team_content_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_team_content_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_team_content_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_team_content_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_team',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
/********************************/
//Price Section Typography
/********************************/
$wp_customize->add_section('novelpro_typography_price', array(
     'title'    => __( 'Typography','novelpro' ),
     'panel'    => 'pricing_section',
     'priority' => 10,
) );
// break    
 $wp_customize->add_setting('price_typography_main_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'price_typography_main_heading',array(
            'section' => 'novelpro_typography_price',
            'description' => __( 'Main Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//price heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_price_main_hd', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_price_main_hd', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_price_main_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_price_main_hd_text_transform', array(
        'settings' => 'novelpro_price_main_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_price',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_price_main_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '40',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_main_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_price_main_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_main_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_price_main_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_main_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// break    
 $wp_customize->add_setting('price_typography_sub_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'price_typography_sub_heading',array(
            'section' => 'novelpro_typography_price',
            'description' => __( 'Sub Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//price sub heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_price_sb_hd', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_price_sb_hd', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_price_sb_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_price_sb_hd_text_transform', array(
        'settings' => 'novelpro_price_sb_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_price',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_price_sb_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '18',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_sb_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_price_sb_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_sb_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_price_sb_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_sb_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// break    
 $wp_customize->add_setting('price_typography_title', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'price_typography_title',array(
            'section' => 'novelpro_typography_price',
            'description' => __( 'Title', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//price title heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_price_title', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_price_title', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_price_title_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_price_title_text_transform', array(
        'settings'  => 'novelpro_price_title_text_transform',
        'label'     => __('Text Transform','novelpro'),
        'section'   => 'novelpro_typography_price',
        'type'      => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_price_title_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '24',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_title_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_price_title_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_title_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_price_title_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_title_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
//break    
 $wp_customize->add_setting('price_typography_list', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'price_typography_list',array(
            'section' => 'novelpro_typography_price',
            'description' => __( 'List', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//price list 
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_price_list', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_price_list', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_price_list_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_price_list_text_transform', array(
        'settings'  => 'novelpro_price_list_text_transform',
        'label'     => __('Text Transform','novelpro'),
        'section'   => 'novelpro_typography_price',
        'type'      => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_price_list_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '14',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_list_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_price_list_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_list_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_price_list_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_list_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
//break    
 $wp_customize->add_setting('price_typography_signup', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'price_typography_signup',array(
            'section' => 'novelpro_typography_price',
            'description' => __( 'SignUp', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//price signup 
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_price_signup', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_price_signup', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_price_signup_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_price_signup_text_transform', array(
        'settings'  => 'novelpro_price_signup_text_transform',
        'label'     => __('Text Transform','novelpro'),
        'section'   => 'novelpro_typography_price',
        'type'      => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_price_signup_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '16',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_signup_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_price_signup_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_signup_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_price_signup_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_price_signup_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_price',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
/********************************/
// Brand Section Typography
/********************************/
$wp_customize->add_section('novelpro_typography_brand', array(
     'title'    => __( 'Typography','novelpro' ),
     'panel'    => 'brand_panel',
     'priority' => 10,
) );
// break    
 $wp_customize->add_setting('brand_typography_main_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'brand_typography_main_heading',array(
            'section' => 'novelpro_typography_brand',
            'description' => __( 'Main Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//Brand Heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_brand_main_hd', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_brand_main_hd', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_brand',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_brand_main_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_brand_main_hd_text_transform', array(
        'settings' => 'novelpro_brand_main_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_brand',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_brand_main_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '40',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_brand_main_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_brand',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_brand_main_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_brand_main_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_brand',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_brand_main_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_brand_main_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_brand',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// brand sub break    
 $wp_customize->add_setting('brand_typography_sub_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'brand_typography_sub_heading',array(
            'section' => 'novelpro_typography_brand',
            'description' => __( 'Sub Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//price heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_brand_sub_hd', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_brand_sub_hd', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_brand',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_brand_sub_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'novelpro_brand_sub_hd_text_transform', array(
        'settings' => 'novelpro_brand_sub_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_brand',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_brand_sub_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '18',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_brand_sub_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_brand',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_brand_sub_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_brand_sub_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_brand',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_brand_sub_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_brand_sub_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_brand',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
/********************************/
// Ribbon Section Typography
/********************************/
$wp_customize->add_section('novelpro_typography_ribbon', array(
     'title'    => __('Typography','novelpro'),
     'panel'    => 'ribbon_panel',
     'priority' => 10,
) );
// Ribbon heading break    
 $wp_customize->add_setting('ribbon_typography_main_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'ribbon_typography_main_heading',array(
            'section' => 'novelpro_typography_ribbon',
            'description' => __( 'Main Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//Ribbon Heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_ribbon_main_hd', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_ribbon_main_hd', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_ribbon',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_ribbon_main_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_ribbon_main_text_transform', array(
        'settings' => 'novelpro_ribbon_main_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_ribbon',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_ribbon_main_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '40',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_ribbon_main_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_ribbon',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_ribbon_main_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_ribbon_main_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_ribbon',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_ribbon_main_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_ribbon_main_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_ribbon',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
// Ribbon heading break    
 $wp_customize->add_setting('ribbon_typography_btn', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'ribbon_typography_btn',array(
            'section' => 'novelpro_typography_ribbon',
            'description' => __( 'Button', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//Ribbon Heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_ribbon_btn', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_ribbon_btn', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_ribbon',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_ribbon_btn_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_ribbon_btn_text_transform', array(
        'settings' => 'novelpro_ribbon_btn_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_ribbon',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_ribbon_btn_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '16',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_ribbon_btn_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_ribbon',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
}
/********************************/
// Contact Section Typography
/********************************/
$wp_customize->add_section('novelpro_typography_contact', array(
     'title'    => __('Typography','novelpro'),
     'panel'    => 'lead_panel',
     'priority' => 10,
) );
// Ribbon heading break    
 $wp_customize->add_setting('contact_typography_main_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'contact_typography_main_heading',array(
            'section' => 'novelpro_typography_contact',
            'description' => __( 'Main Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//Ribbon Heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_contact_main_hd', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_contact_main_hd', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_contact',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_contact_main_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_contact_main_hd_text_transform', array(
        'settings' => 'novelpro_contact_main_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_contact',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_contact_main_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '40',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_contact_main_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_contact',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_contact_main_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_contact_main_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_contact',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_contact_main_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_contact_main_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_contact',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
//Ribbon subHeading  
 $wp_customize->add_setting('contact_typography_sub_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'contact_typography_sub_heading',array(
            'section' => 'novelpro_typography_contact',
            'description' => __( 'Sub Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_contact_sb_hd', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_contact_sb_hd', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_contact',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_contact_sub_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_contact_sub_hd_text_transform', array(
        'settings' => 'novelpro_contact_sub_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_contact',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_contact_sb_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '18',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_contact_sb_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_contact',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_contact_sb_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_contact_sb_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_contact',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_contact_sb_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_contact_sb_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_contact',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}

/********************************/
// Woocommerce Section Typography
/********************************/
$wp_customize->add_section('novelpro_typography_woo', array(
     'title'    => __('Typography','novelpro'),
     'panel'    => 'woo_panel',
     'priority' => 10,
) );
//woo heading break    
 $wp_customize->add_setting('woo_typography_main_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'woo_typography_main_heading',array(
            'section' => 'novelpro_typography_woo',
            'description' => __( 'Main Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//woo Heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_woo_main_hd', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_woo_main_hd', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_woo_main_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_woo_main_hd_text_transform', array(
        'settings' => 'novelpro_woo_main_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_woo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_woo_main_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '40',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_woo_main_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_woo_main_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_woo_main_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_woo_main_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_woo_main_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
//woo sub heading break    
 $wp_customize->add_setting('woo_typography_sub_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'woo_typography_sub_heading',array(
            'section' => 'novelpro_typography_woo',
            'description' => __( 'Sub Heading', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//woo Heading
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_woo_sub_hd', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_woo_sub_hd', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_woo_sub_hd_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_woo_sub_hd_text_transform', array(
        'settings' => 'novelpro_woo_sub_hd_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_woo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_woo_sub_hd_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '18',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_woo_sub_hd_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_woo_sub_hd_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_woo_sub_hd_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_woo_sub_hd_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_woo_sub_hd_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
//woo title break    
 $wp_customize->add_setting('woo_typography_title_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'woo_typography_title_heading',array(
            'section' => 'novelpro_typography_woo',
            'description' => __( 'Title', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//woo title
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_woo_tle', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_woo_tle', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_woo_tle_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_woo_tle_text_transform', array(
        'settings' => 'novelpro_woo_tle_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_woo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_woo_tle_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '16',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_woo_tle_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_woo_tle_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_woo_tle_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_woo_tle_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_woo_tle_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
//woo price break    
 $wp_customize->add_setting('woo_typography_price_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'woo_typography_price_heading',array(
            'section' => 'novelpro_typography_woo',
            'description' => __( 'Price', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//woo price
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_woo_price', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_woo_price', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_woo_price_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_woo_price_text_transform', array(
        'settings' => 'novelpro_woo_price_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_woo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_woo_price_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '16',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_woo_price_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_woo_price_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_woo_price_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_woo_price_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_woo_price_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
//woo button break    
 $wp_customize->add_setting('woo_typography_btn_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'woo_typography_btn_heading',array(
            'section' => 'novelpro_typography_woo',
            'description' => __( 'Button', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
//woo price
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_woo_btn', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_woo_btn', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_woo_btn_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_woo_btn_text_transform', array(
        'settings' => 'novelpro_woo_btn_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'novelpro_typography_woo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_woo_btn_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '16',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_woo_btn_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'novelpro_typography_woo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
}
/*****************/
// header-menu
/*****************/   
 $wp_customize->add_setting('woo_typography_menu_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'woo_typography_menu_heading',array(
            'section' => 'header_area',
            'description' => __( 'Menu Typography', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_menu_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_menu_font', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'header_area',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_menu_font_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_menu_font_text_transform', array(
        'settings' => 'novelpro_menu_font_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'header_area',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_menu_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '15',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_menu_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'header_area',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_menu_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.2',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_menu_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'header_area',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_menu_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_menu_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'header_area',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );

}
/*****************/
// SITE TITLE
/*****************/   
 $wp_customize->add_setting('woo_typography_site_title_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'woo_typography_site_title_heading',array(
            'section' => 'title_tagline',
            'description' => __( 'Site Title Typography', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_site_title_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_site_title_font', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'title_tagline',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_site_title_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_site_title_text_transform', array(
        'settings' => 'novelpro_site_title_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'title_tagline',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_site_title_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '40',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_site_title_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'title_tagline',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_site_title_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_site_title_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'title_tagline',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_site_title_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_site_title_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'title_tagline',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );
}
/*******************/
// Site Description
/*******************/   
 $wp_customize->add_setting('woo_typography_site_desc_heading', array(
            'sanitize_callback' => 'sanitize_text_field'
        ));
$wp_customize->add_control(new Novelpro_Customize_Misc_Control(
            $wp_customize,'woo_typography_site_desc_heading',array(
            'section' => 'title_tagline',
            'description' => __( 'Site Description Typography', 'novelpro' ),
            'type' => 'content',
            'input_attrs' => array('divider' => true),
))); 
if (class_exists( 'Novelpro_Font_Selector')){
        $wp_customize->add_setting(
            'novelpro_site_desc_font', array(
                'type'              => 'theme_mod',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
        $wp_customize->add_control(
            new Novelpro_Font_Selector(
                $wp_customize, 'novelpro_site_desc_font', array(
                'label' => esc_html__( 'Font Style', 'novelpro' ),
                    'section'     => 'title_tagline',
                    'type'        => 'select',
            )
        )
    );
}
$wp_customize->add_setting('novelpro_site_desc_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control('novelpro_site_desc_text_transform', array(
        'settings' => 'novelpro_site_desc_text_transform',
        'label'    => __('Text Transform','novelpro'),
        'section'  => 'title_tagline',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'novelpro' ),
        'none'       => __( 'None', 'novelpro' ),
        'capitalize' => __( 'Capitalize', 'novelpro' ),
        'uppercase'  => __( 'Uppercase', 'novelpro' ),
        'lowercase'  => __( 'Lowercase', 'novelpro' ),    
        ),
));
if ( class_exists( 'Novelpro_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'novelpro_site_desc_size', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '16',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_site_desc_size', array(
                    'label'       => esc_html__( 'Font-Size', 'novelpro' ),
                    'section'     => 'title_tagline',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
         )
    );
$wp_customize->add_setting(
            'novelpro_site_desc_line_height', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1.4',
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_site_desc_line_height', array(
                    'label'       => esc_html__( 'Line Height', 'novelpro' ),
                    'section'     => 'title_tagline',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
           )
    );
$wp_customize->add_setting(
            'novelpro_site_desc_letter_spacing', array(
                'sanitize_callback' => 'novelpro_sanitize_range_value',
                'default'           => '1',     
            )
        );
$wp_customize->add_control(
            new Novelpro_WP_Customizer_Range_Value_Control(
                $wp_customize, 'novelpro_site_desc_letter_spacing', array(
                    'label'       => esc_html__( 'Letter Spacing', 'novelpro' ),
                    'section'     => 'title_tagline',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
          )
    );

}