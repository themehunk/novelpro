<?php
function novelpro_typography_style(){
$novelpro_typography_style='';
// body 
$novelpro_body_font           = get_theme_mod('novelpro_body_font');
$novelpro_body_text_transform = get_theme_mod('novelpro_body_text_transform');
if(!empty($novelpro_body_font)){
novelpro_enqueue_google_font($novelpro_body_font);
$novelpro_typography_style.="body,.page_heading_container .page_heading_content h1,.navigation ul li a, .navigation ul li a:link,.novelpro_slider .container h1, #slider-div .container h1,section h2.section-heading,section h3.section-subheading,h1.testimonial-header,.home_blog_content .post .post_title a,.video-ribbon .video-title h2,.price-page h1,h1, h2, h3, h4, h5, h6,a,.price-block li,#respond label{ 
   font-family:{$novelpro_body_font};
   text-transform:{$novelpro_body_text_transform};
  }"; 
}
function novelpro_body_font_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= 'body,p{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_body_font_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= 'body,p{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_body_font_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= 'body,p{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_body_font_size','novelpro_body_font_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_body_font_line_height','novelpro_body_font_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_body_font_letter_spacing','novelpro_body_font_letter_spacing_responsive');

//title
$novelpro_title_font   = get_theme_mod('novelpro_title_font');
$novelpro_title_text_transform = get_theme_mod('novelpro_title_text_transform');
if(!empty($novelpro_title_font)){
novelpro_enqueue_google_font($novelpro_title_font);
$novelpro_typography_style.=".novelpro_slider .container h1, #slider-div .container h1,
section h2.section-heading,.service-heading,#section3 h1.testimonial-header,.home_blog_content .post .post_title a,.video-ribbon .video-title h2,#section9 .price-page h1,.price-block ul.price-grid li.price-post h3,.woocommerce ul.products li.product .woocommerce-loop-category__title, .woocommerce ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product h3,.team-member h4,.page_heading_container .page_heading_content h1,h3#reply-title,.page-content .sidebar h3, .footer-widget-area h3,h3#comments,.content-bar .post .post_title,.page-content .sidebar h3, .footer-widget-area h3{ 
   font-family:{$novelpro_title_font};
   text-transform:{$novelpro_title_text_transform};
  }"; 
}
//content
// h1
$novelpro_h1_font           = get_theme_mod('novelpro_h1_font');
$novelpro_h1_text_transform = get_theme_mod('novelpro_h1_text_transform');
if(!empty($novelpro_h1_font)){
novelpro_enqueue_google_font($novelpro_h1_font);
$novelpro_typography_style.=".page-content .content-bar h1{ 
   font-family:{$novelpro_h1_font};
   text-transform:{$novelpro_h1_text_transform};
  }"; 
}

function novelpro_h1_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h1{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_h1_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h1{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_h1_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h1{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}

$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h1_size','novelpro_h1_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h1_line_height','novelpro_h1_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h1_letter_spacing','novelpro_h1_letter_spacing_responsive');
// h2
$novelpro_h2_font           = get_theme_mod('novelpro_h2_font');
$novelpro_h2_text_transform = get_theme_mod('novelpro_h2_text_transform');
if(!empty($novelpro_h2_font)){
novelpro_enqueue_google_font($novelpro_h2_font);
$novelpro_typography_style.=".page-content .content-bar h2{ 
   font-family:{$novelpro_h2_font};
   text-transform:{$novelpro_h2_text_transform};
  }"; 
}

function novelpro_h2_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h2{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_h2_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h2{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_h2_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h2{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h2_size','novelpro_h2_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h2_line_height','novelpro_h2_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h2_letter_spacing','novelpro_h2_letter_spacing_responsive');
// h3
$novelpro_h3_font           = get_theme_mod('novelpro_h3_font');
$novelpro_h3_text_transform = get_theme_mod('novelpro_h3_text_transform');
if(!empty($novelpro_h3_font)){
novelpro_enqueue_google_font($novelpro_h3_font);
$novelpro_typography_style.=".page-content .content-bar h3{ 
   font-family:{$novelpro_h3_font};
   text-transform:{$novelpro_h3_text_transform};
  }"; 
}

function novelpro_h3_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h3{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_h3_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h3{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_h3_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h3{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h3_size','novelpro_h3_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h3_line_height','novelpro_h3_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h3_letter_spacing','novelpro_h3_letter_spacing_responsive');
// h4
$novelpro_h4_font           = get_theme_mod('novelpro_h4_font');
$novelpro_h4_text_transform = get_theme_mod('novelpro_h4_text_transform');
if(!empty($novelpro_h4_font)){
novelpro_enqueue_google_font($novelpro_h4_font);
$novelpro_typography_style.=".page-content .content-bar h4{ 
   font-family:{$novelpro_h4_font};
   text-transform:{$novelpro_h4_text_transform};
  }"; 
}

function novelpro_h4_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h4{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_h4_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h4{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_h4_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h4{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h4_size','novelpro_h4_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h4_line_height','novelpro_h4_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h4_letter_spacing','novelpro_h4_letter_spacing_responsive');
// h5
$novelpro_h5_font           = get_theme_mod('novelpro_h5_font');
$novelpro_h5_text_transform = get_theme_mod('novelpro_h5_text_transform');
if(!empty($novelpro_h5_font)){
novelpro_enqueue_google_font($novelpro_h5_font);
$novelpro_typography_style.=".page-content .content-bar h5{ 
   font-family:{$novelpro_h5_font};
   text-transform:{$novelpro_h5_text_transform};
  }"; 
}
function novelpro_h5_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h5{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_h5_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h5{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_h5_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h5{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h5_size','novelpro_h5_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h5_line_height','novelpro_h5_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h5_letter_spacing','novelpro_h5_letter_spacing_responsive');
// h6
$novelpro_h6_font           = get_theme_mod('novelpro_h6_font');
$novelpro_h6_text_transform = get_theme_mod('novelpro_h6_text_transform');
if(!empty($novelpro_h6_font)){
novelpro_enqueue_google_font($novelpro_h6_font);
$novelpro_typography_style.=".page-content .content-bar h6{ 
   font-family:{$novelpro_h6_font};
   text-transform:{$novelpro_h6_text_transform};
  }"; 
}
function novelpro_h6_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h6{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_h6_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h6{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_h6_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.page-content .content-bar h6{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h6_size','novelpro_h6_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h6_line_height','novelpro_h6_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_h6_letter_spacing','novelpro_h6_letter_spacing_responsive');
/****************************/
// slider section typography
/****************************/
// heading
$novelpro_slider_heading_font = get_theme_mod('novelpro_slider_heading_font');
$novelpro_heading_text_transform = get_theme_mod('novelpro_heading_text_transform');
if(!empty($novelpro_slider_heading_font)){
novelpro_enqueue_google_font($novelpro_slider_heading_font);
$novelpro_typography_style.=".novelpro_slider .container h1 a, #slider-div .container h1 a{ 
   font-family:{$novelpro_slider_heading_font};
   text-transform:{$novelpro_heading_text_transform};
  }"; 
}
function novelpro_heading_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.novelpro_slider .container h1 a, #slider-div .container h1 a{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_heading_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.novelpro_slider .container h1 a, #slider-div .container h1 a{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_heading_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.novelpro_slider .container h1 a, #slider-div .container h1 a{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_heading_size','novelpro_heading_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_heading_line_height','novelpro_heading_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_heading_letter_spacing','novelpro_heading_letter_spacing_responsive');
// subheading
$novelpro_sbheading_font = get_theme_mod('novelpro_sbheading_font');
$novelpro_sbheading_text_transform = get_theme_mod('novelpro_sbheading_text_transform');
if(!empty($novelpro_sbheading_font)){
novelpro_enqueue_google_font($novelpro_sbheading_font);
$novelpro_typography_style.=".novelpro_slider .container p, #slider-div .container p{ 
   font-family:{$novelpro_sbheading_font};
   text-transform:{$novelpro_sbheading_text_transform};
  }"; 
}
function novelpro_sbheading_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.novelpro_slider .container p, #slider-div .container p{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_sbheading_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.novelpro_slider .container p, #slider-div .container p{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_sbheading_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.novelpro_slider .container p, #slider-div .container p{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_sbheading_size','novelpro_sbheading_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_sbheading_line_height','novelpro_sbheading_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_sbheading_letter_spacing','novelpro_sbheading_letter_spacing_responsive');
// slider-button
$novelpro_sldier_btn_font = get_theme_mod('novelpro_sldier_btn_font');
$novelpro_sldier_btn_text_transform = get_theme_mod('novelpro_sldier_btn_text_transform');
if(!empty($novelpro_sldier_btn_font)){
novelpro_enqueue_google_font($novelpro_sldier_btn_font);
$novelpro_typography_style.=".theme-slider-button{ 
   font-family:{$novelpro_sldier_btn_font};
   text-transform:{$novelpro_sldier_btn_text_transform};
  }"; 
}

/****************************/
// Service section typography
/****************************/
// main heading
$novelpro_service_main_heading_font = get_theme_mod('novelpro_service_main_heading_font');
$novelpro_service_main_hd_text_transform = get_theme_mod('novelpro_service_main_hd_text_transform');
if(!empty($novelpro_service_main_heading_font)){
novelpro_enqueue_google_font($novelpro_service_main_heading_font);
$novelpro_typography_style.="#section1 h2.section-heading{ 
   font-family:{$novelpro_service_main_heading_font};
   text-transform:{$novelpro_service_main_hd_text_transform};
  }"; 
}
function novelpro_service_main_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section1 h2.section-heading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_service_main_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section1 h2.section-heading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_service_main_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section1 h2.section-heading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_service_main_hd_size','novelpro_service_main_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_service_main_hd_line_height','novelpro_service_main_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_service_main_hd_letter_spacing','novelpro_service_main_hd_letter_spacing_responsive');
// sub heading
$novelpro_service_sb_heading_font = get_theme_mod('novelpro_service_sb_heading_font');
$novelpro_service_sb_hd_text_transform = get_theme_mod('novelpro_service_sb_hd_text_transform');
if(!empty($novelpro_service_sb_heading_font)){
novelpro_enqueue_google_font($novelpro_service_sb_heading_font);
$novelpro_typography_style.="#section1 h3.section-subheading{ 
   font-family:{$novelpro_service_sb_heading_font};
   text-transform:{$novelpro_service_sb_hd_text_transform};
  }"; 
}
function novelpro_service_sb_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section1 h3.section-subheading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_service_sb_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section1 h3.section-subheading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_service_sb_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section1 h3.section-subheading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_service_sb_hd_size','novelpro_service_sb_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_service_sb_hd_line_height','novelpro_service_sb_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_service_sb_hd_letter_spacing','novelpro_service_sb_hd_letter_spacing_responsive');
//Title
$novelpro_service_tle_font = get_theme_mod('novelpro_service_tle_font');
$novelpro_service_tle_text_transform = get_theme_mod('novelpro_service_tle_text_transform');
if(!empty($novelpro_service_tle_font)){
novelpro_enqueue_google_font($novelpro_service_tle_font);
$novelpro_typography_style.="h4.service-heading{ 
   font-family:{$novelpro_service_tle_font};
   text-transform:{$novelpro_service_tle_text_transform};
  }"; 
}
function novelpro_service_tle_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= 'h4.service-heading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_service_tle_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= 'h4.service-heading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_service_tle_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= 'h4.service-heading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_service_tle_size','novelpro_service_tle_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_service_tle_line_height','novelpro_service_tle_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_service_tle_letter_spacing','novelpro_service_tle_letter_spacing_responsive');
//content
$novelpro_service_cnt_font = get_theme_mod('novelpro_service_cnt_font');
$novelpro_service_cnt_text_transform = get_theme_mod('novelpro_service_cnt_text_transform');
if(!empty($novelpro_service_tle_font)){
novelpro_enqueue_google_font($novelpro_service_tle_font);
$novelpro_typography_style.="p.text-muted{ 
   font-family:{$novelpro_service_cnt_font};
   text-transform:{$novelpro_service_cnt_text_transform};
  }"; 
}
function novelpro_service_cnt_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= 'p.text-muted{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_service_cnt_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= 'p.text-muted{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_service_cnt_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= 'p.text-muted{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_service_cnt_size','novelpro_service_cnt_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_service_cnt_line_height','novelpro_service_cnt_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_service_cnt_letter_spacing','novelpro_service_cnt_letter_spacing_responsive');
/****************************/
// Portfolio section typography
/****************************/
// main heading
$novelpro_portfolio_main_heading_font = get_theme_mod('novelpro_portfolio_main_heading_font');
$novelpro_portfolio_main_hd_text_transform = get_theme_mod('novelpro_portfolio_main_hd_text_transform');
if(!empty($novelpro_portfolio_main_heading_font)){
novelpro_enqueue_google_font($novelpro_portfolio_main_heading_font);
$novelpro_typography_style.="#section2 h2.section-heading{ 
   font-family:{$novelpro_portfolio_main_heading_font};
   text-transform:{$novelpro_portfolio_main_hd_text_transform};
  }"; 
}
function novelpro_portfolio_main_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section2 h2.section-heading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_portfolio_main_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section2 h2.section-heading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_portfolio_main_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section2 h2.section-heading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_portfolio_main_hd_size','novelpro_portfolio_main_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_portfolio_main_hd_line_height','novelpro_portfolio_main_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_portfolio_main_hd_letter_spacing','novelpro_portfolio_main_hd_letter_spacing_responsive');
// Sub heading
$novelpro_portfolio_sub_heading_font = get_theme_mod('novelpro_portfolio_sub_heading_font');
$novelpro_portfolio_sb_hd_text_transform = get_theme_mod('novelpro_portfolio_sb_hd_text_transform');
if(!empty($novelpro_portfolio_sub_heading_font)){
novelpro_enqueue_google_font($novelpro_portfolio_sub_heading_font);
$novelpro_typography_style.="#section2 h3.section-subheading{ 
   font-family:{$novelpro_portfolio_sub_heading_font};
   text-transform:{$novelpro_portfolio_sb_hd_text_transform};
  }"; 
}
function novelpro_portfolio_sb_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section2 h3.section-subheading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_portfolio_sb_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section2 h3.section-subheading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_portfolio_sb_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section2 h3.section-subheading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_portfolio_sb_hd_size','novelpro_portfolio_sb_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_portfolio_sb_hd_line_height','novelpro_portfolio_sb_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_portfolio_sb_hd_letter_spacing','novelpro_portfolio_sb_hd_letter_spacing_responsive');
/****************************/
//Testimonial section typography
/****************************/
// main heading
$novelpro_testimonial_main_heading_font = get_theme_mod('novelpro_testimonial_main_heading_font');
$novelpro_testimonial_main_hd_text_transform = get_theme_mod('novelpro_testimonial_main_hd_text_transform');
if(!empty($novelpro_testimonial_main_heading_font)){
novelpro_enqueue_google_font($novelpro_testimonial_main_heading_font);
$novelpro_typography_style.="#section3 h1.testimonial-header{ 
   font-family:{$novelpro_testimonial_main_heading_font};
   text-transform:{$novelpro_testimonial_main_hd_text_transform};
  }"; 
}
function novelpro_testimonial_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section3 h1.testimonial-header{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_testimonial_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section3 h1.testimonial-header{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_testimonial_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section3 h1.testimonial-header{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_testimonial_hd_size','novelpro_testimonial_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_testimonial_hd_line_height','novelpro_testimonial_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_testimonial_hd_letter_spacing','novelpro_testimonial_hd_letter_spacing_responsive');
// description
$novelpro_testimonial_title_font = get_theme_mod('novelpro_testimonial_title_font');
$novelpro_testimonial_title_text_transform = get_theme_mod('novelpro_testimonial_title_text_transform');
if(!empty($novelpro_testimonial_title_font)){
novelpro_enqueue_google_font($novelpro_testimonial_title_font);
$novelpro_typography_style.=".testimonial-wrapper .bx-wrapper .bx-caption span{ 
   font-family:{$novelpro_testimonial_title_font};
   text-transform:{$novelpro_testimonial_title_text_transform};
  }"; 
}
function novelpro_testimonial_title_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.testimonial-wrapper .bx-wrapper .bx-caption span{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_testimonial_title_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.testimonial-wrapper .bx-wrapper .bx-caption span{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_testimonial_title_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.testimonial-wrapper .bx-wrapper .bx-caption span{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_testimonial_title_size','novelpro_testimonial_title_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_testimonial_title_line_height','novelpro_testimonial_title_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_testimonial_title_letter_spacing','novelpro_testimonial_title_letter_spacing_responsive');

// Author
$novelpro_testimonial_author_font = get_theme_mod('novelpro_testimonial_author_font');
$novelpro_testimonial_author_text_transform = get_theme_mod('novelpro_testimonial_author_text_transform');
if(!empty($novelpro_testimonial_author_font)){
novelpro_enqueue_google_font($novelpro_testimonial_author_font);
$novelpro_typography_style.=".bx-wrapper .bx-caption p a{ 
   font-family:{$novelpro_testimonial_author_font};
   text-transform:{$novelpro_testimonial_author_text_transform};
  }"; 
}
function novelpro_testimonial_author_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.bx-wrapper .bx-caption p a{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_testimonial_author_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.bx-wrapper .bx-caption p a{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_testimonial_author_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.bx-wrapper .bx-caption p a{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_testimonial_author_size','novelpro_testimonial_author_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_testimonial_author_line_height','novelpro_testimonial_author_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_testimonial_author_letter_spacing','novelpro_testimonial_author_letter_spacing_responsive');
/****************************/
//Post section typography
/****************************/
// main heading
$novelpro_blog_main_hd = get_theme_mod('novelpro_blog_main_hd');
$novelpro_blog_main_hd_text_transform = get_theme_mod('novelpro_blog_main_hd_text_transform');
if(!empty($novelpro_blog_main_hd)){
novelpro_enqueue_google_font($novelpro_blog_main_hd);
$novelpro_typography_style.="#section4 h2.section-heading{ 
   font-family:{$novelpro_blog_main_hd};
   text-transform:{$novelpro_blog_main_hd_text_transform};
  }"; 
}
function novelpro_blog_main_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section4 h2.section-heading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_blog_main_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section4 h2.section-heading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_blog_main_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section4 h2.section-heading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_main_hd_size','novelpro_blog_main_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_main_hd_line_height','novelpro_blog_main_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_main_hd_letter_spacing','novelpro_blog_main_hd_letter_spacing_responsive');
// sub heading
$novelpro_blog_sb_hd = get_theme_mod('novelpro_blog_sb_hd');
$novelpro_blog_sb_hd_text_transform = get_theme_mod('novelpro_blog_sb_hd_text_transform');
if(!empty($novelpro_blog_sb_hd)){
novelpro_enqueue_google_font($novelpro_blog_sb_hd);
$novelpro_typography_style.="#section4 h3.section-subheading{ 
   font-family:{$novelpro_blog_sb_hd};
   text-transform:{$novelpro_blog_sb_hd_text_transform};
  }"; 
}
function novelpro_blog_sb_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section4 h3.section-subheading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_blog_sb_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section4 h3.section-subheading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_blog_sb_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section4 h3.section-subheading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_sb_hd_size','novelpro_blog_sb_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_sb_hd_line_height','novelpro_blog_sb_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_sb_hd_letter_spacing','novelpro_blog_sb_hd_letter_spacing_responsive');
// post title
$novelpro_blog_title = get_theme_mod('novelpro_blog_title');
$novelpro_blog_title_text_transform = get_theme_mod('novelpro_blog_title_text_transform');
if(!empty($novelpro_blog_title)){
novelpro_enqueue_google_font($novelpro_blog_title);
$novelpro_typography_style.=".home_blog_content .post .post_title a{ 
   font-family:{$novelpro_blog_sb_hd};
   text-transform:{$novelpro_blog_title_text_transform};
  }"; 
}
function novelpro_blog_title_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.home_blog_content .post .post_title a{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_blog_title_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.home_blog_content .post .post_title a{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_blog_title_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.home_blog_content .post .post_title a{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_title_size','novelpro_blog_title_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_title_line_height','novelpro_blog_title_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_title_letter_spacing','novelpro_blog_title_letter_spacing_responsive');
// post meta
$novelpro_blog_post_meta = get_theme_mod('novelpro_blog_post_meta');
$novelpro_blog_post_meta_text_transform = get_theme_mod('novelpro_blog_post_meta_text_transform');
if(!empty($novelpro_blog_post_meta)){
novelpro_enqueue_google_font($novelpro_blog_post_meta);
$novelpro_typography_style.=".home_blog_content .post_content .post_meta,.home_blog_content .post .post_content_bottom span{ 
   font-family:{$novelpro_blog_post_meta};
   text-transform:{$novelpro_blog_post_meta_text_transform};
  }"; 
}
function novelpro_blog_post_meta_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.home_blog_content .post_content .post_meta,.home_blog_content .post .post_content_bottom span{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_blog_post_meta_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.home_blog_content .post_content .post_meta,.home_blog_content .post .post_content_bottom span{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_blog_post_meta_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.home_blog_content .post_content .post_meta,.home_blog_content .post .post_content_bottom span{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_post_meta_size','novelpro_blog_title_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_post_meta_line_height','novelpro_blog_post_meta_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_post_meta_letter_spacing','novelpro_blog_post_meta_letter_spacing_responsive');
// post content
$novelpro_blog_content = get_theme_mod('novelpro_blog_content');
$novelpro_blog_conten_text_transform = get_theme_mod('novelpro_blog_conten_text_transform');
if(!empty($novelpro_blog_content)){
novelpro_enqueue_google_font($novelpro_blog_content);
$novelpro_typography_style.=".home_blog_content .post_content p{ 
   font-family:{$novelpro_blog_content};
   text-transform:{$novelpro_blog_conten_text_transform};
  }"; 
}
function novelpro_blog_content_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.home_blog_content .post_content p{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_blog_content_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.home_blog_content .post_content p{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_blog_content_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.home_blog_content .post_content p{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_content_size','novelpro_blog_content_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_content_line_height','novelpro_blog_content_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_blog_content_letter_spacing','novelpro_blog_content_letter_spacing_responsive');

/******************/
// Team content
/******************/
$novelpro_team_main_hd = get_theme_mod('novelpro_team_main_hd');
$novelpro_team_main_hd_text_transform = get_theme_mod('novelpro_team_main_hd_text_transform');
if(!empty($novelpro_team_main_hd)){
novelpro_enqueue_google_font($novelpro_team_main_hd);
$novelpro_typography_style.="#section5 h2.section-heading{ 
   font-family:{$novelpro_team_main_hd};
   text-transform:{$novelpro_team_main_hd_text_transform};
  }"; 
}
function novelpro_team_main_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section5 h2.section-heading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_team_main_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section5 h2.section-heading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_team_main_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section5 h2.section-heading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_team_main_hd_size','novelpro_team_main_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_team_main_hd_line_height','novelpro_team_main_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_team_main_hd_letter_spacing','novelpro_team_main_hd_letter_spacing_responsive');
// sub heading
$novelpro_team_sb_hd = get_theme_mod('novelpro_team_sb_hd');
$novelpro_team_sb_hd_text_transform = get_theme_mod('novelpro_team_sb_hd_text_transform');
if(!empty($novelpro_team_sb_hd)){
novelpro_enqueue_google_font($novelpro_team_sb_hd);
$novelpro_typography_style.="#section5 h3.section-subheading{ 
   font-family:{$novelpro_team_sb_hd};
   text-transform:{$novelpro_team_sb_hd_text_transform};
  }"; 
}
function novelpro_team_sb_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section5 h3.section-subheading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_team_sb_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section5 h3.section-subheading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_team_sb_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section5 h3.section-subheading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_team_sb_hd_size','novelpro_team_sb_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_team_sb_hd_line_height','novelpro_team_sb_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_team_sb_hd_letter_spacing','novelpro_team_sb_hd_letter_spacing_responsive');
// team title
$novelpro_team_title = get_theme_mod('novelpro_team_title');
$novelpro_team_title_text_transform = get_theme_mod('novelpro_team_title_text_transform');
if(!empty($novelpro_team_title)){
novelpro_enqueue_google_font($novelpro_team_title);
$novelpro_typography_style.=".team-member h4{ 
   font-family:{$novelpro_team_title};
   text-transform:{$novelpro_team_title_text_transform};
  }"; 
}
function novelpro_team_title_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.team-member h4{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_team_title_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.team-member h4{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_team_title_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.team-member h4{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_team_title_size','novelpro_team_title_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_team_title_line_height','novelpro_team_title_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_team_title_letter_spacing','novelpro_team_title_letter_spacing_responsive');
// team content
$novelpro_team_content = get_theme_mod('novelpro_team_content');
$novelpro_team_content_text_transform = get_theme_mod('novelpro_team_content_text_transform');
if(!empty($novelpro_team_content)){
novelpro_enqueue_google_font($novelpro_team_content);
$novelpro_typography_style.=".team-member p{ 
   font-family:{$novelpro_team_content};
   text-transform:{$novelpro_team_content_text_transform};
  }"; 
}
function novelpro_team_content_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.team-member p{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_team_content_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.team-member p{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_team_content_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.team-member p{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_team_content_size','novelpro_team_title_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_team_content_line_height','novelpro_team_content_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_team_content_letter_spacing','novelpro_team_content_letter_spacing_responsive');
/***************/
// Price content
/***************/
// main heading
$novelpro_price_main_hd = get_theme_mod('novelpro_price_main_hd');
$novelpro_price_main_hd_text_transform = get_theme_mod('novelpro_price_main_hd_text_transform');
if(!empty($novelpro_price_main_hd)){
novelpro_enqueue_google_font($novelpro_price_main_hd);
$novelpro_typography_style.="#section9 .price-page h1{ 
   font-family:{$novelpro_price_main_hd};
   text-transform:{$novelpro_price_main_hd_text_transform};
  }"; 
}
function novelpro_price_main_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section9 .price-page h1{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_price_main_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section9 .price-page h1{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_price_main_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section9 .price-page h1{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_main_hd_size','novelpro_price_main_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_main_hd_line_height','novelpro_price_main_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_main_hd_letter_spacing','novelpro_price_main_hd_letter_spacing_responsive');
// sub heading
$novelpro_price_sb_hd = get_theme_mod('novelpro_price_sb_hd');
$novelpro_price_sb_hd_text_transform = get_theme_mod('novelpro_price_sb_hd_text_transform');
if(!empty($novelpro_price_sb_hd)){
novelpro_enqueue_google_font($novelpro_price_sb_hd);
$novelpro_typography_style.="#section9 .price-page p{ 
   font-family:{$novelpro_price_sb_hd};
   text-transform:{$novelpro_price_sb_hd_text_transform};
  }"; 
}
function novelpro_price_sb_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section9 .price-page p{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_price_sb_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section9 .price-page p{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_price_sb_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section9 .price-page p{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_sb_hd_size','novelpro_price_sb_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_sb_hd_line_height','novelpro_price_sb_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_sb_hd_letter_spacing','novelpro_price_sb_hd_letter_spacing_responsive');
// price title
$novelpro_price_title = get_theme_mod('novelpro_price_title');
$novelpro_price_title_text_transform = get_theme_mod('novelpro_price_title_text_transform');
if(!empty($novelpro_price_title)){
novelpro_enqueue_google_font($novelpro_price_title);
$novelpro_typography_style.=".price-block ul.price-grid li.price-post h3{ 
   font-family:{$novelpro_price_title};
   text-transform:{$novelpro_price_title_text_transform};
  }"; 
}
function novelpro_price_title_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.price-block ul.price-grid li.price-post h3{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_price_title_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.price-block ul.price-grid li.price-post h3{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_price_title_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.price-block ul.price-grid li.price-post h3{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_title_size','novelpro_price_title_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_title_line_height','novelpro_price_title_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_title_letter_spacing','novelpro_price_title_letter_spacing_responsive');
// price list
$novelpro_price_list = get_theme_mod('novelpro_price_list');
$novelpro_price_list_text_transform = get_theme_mod('novelpro_price_list_text_transform');
if(!empty($novelpro_price_list)){
novelpro_enqueue_google_font($novelpro_price_list);
$novelpro_typography_style.=".price-class .plan-features li{ 
   font-family:{$novelpro_price_list};
   text-transform:{$novelpro_price_list_text_transform};
  }"; 
}
function novelpro_price_list_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.price-class .plan-features li{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_price_list_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.price-class .plan-features li{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_price_list_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.price-class .plan-features li{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_list_size','novelpro_price_list_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_list_line_height','novelpro_price_list_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_list_letter_spacing','novelpro_price_list_letter_spacing_responsive');
// price signup
$novelpro_price_signup = get_theme_mod('novelpro_price_signup');
$novelpro_price_signup_text_transform = get_theme_mod('novelpro_price_signup_text_transform');
if(!empty($novelpro_price_signup)){
novelpro_enqueue_google_font($novelpro_price_signup);
$novelpro_typography_style.=".price-class .plan-select a{ 
   font-family:{$novelpro_price_signup};
   text-transform:{$novelpro_price_signup_text_transform};
  }"; 
}
function novelpro_price_signup_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.price-class .plan-select a{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_price_signup_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.price-class .plan-select a{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_price_signup_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.price-class .plan-select a{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_signup_size','novelpro_price_signup_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_signup_line_height','novelpro_price_signup_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_price_signup_letter_spacing','novelpro_price_signup_letter_spacing_responsive');

// Brand Heading
$novelpro_brand_main_hd = get_theme_mod('novelpro_brand_main_hd');
$novelpro_brand_main_hd_text_transform = get_theme_mod('novelpro_brand_main_hd_text_transform');
if(!empty($novelpro_brand_main_hd)){
novelpro_enqueue_google_font($novelpro_brand_main_hd);
$novelpro_typography_style.="#section6 h2.section-heading{ 
   font-family:{$novelpro_brand_main_hd};
   text-transform:{$novelpro_brand_main_hd_text_transform};
  }"; 
}
function novelpro_brand_main_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section6 h2.section-heading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_brand_main_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section6 h2.section-heading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_brand_main_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section6 h2.section-heading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_brand_main_hd_size','novelpro_brand_main_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_brand_main_hd_line_height','novelpro_brand_main_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_brand_main_hd_letter_spacing','novelpro_brand_main_hd_letter_spacing_responsive');
// Brand Sub-Heading
$novelpro_brand_sub_hd = get_theme_mod('novelpro_brand_sub_hd');
$novelpro_brand_sub_hd_text_transform = get_theme_mod('novelpro_brand_sub_hd_text_transform');
if(!empty($novelpro_brand_sub_hd)){
novelpro_enqueue_google_font($novelpro_brand_sub_hd);
$novelpro_typography_style.="#section6 h3.section-subheading{ 
   font-family:{$novelpro_brand_sub_hd};
   text-transform:{$novelpro_brand_sub_hd_text_transform};
  }"; 
}
function novelpro_brand_sub_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section6 h3.section-subheading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_brand_sub_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section6 h3.section-subheading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_brand_sub_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section6 h3.section-subheading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_brand_sub_hd_size','novelpro_brand_sub_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_brand_sub_hd_line_height','novelpro_brand_sub_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_brand_sub_hd_letter_spacing','novelpro_brand_sub_hd_letter_spacing_responsive');
/********************/
// Ribbon heading
/********************/
$novelpro_ribbon_main_hd = get_theme_mod('novelpro_ribbon_main_hd');
$novelpro_ribbon_main_text_transform = get_theme_mod('novelpro_ribbon_main_text_transform');
if(!empty($novelpro_brand_sub_hd)){
novelpro_enqueue_google_font($novelpro_ribbon_main_hd);
$novelpro_typography_style.=".video-ribbon .video-title h2{ 
   font-family:{$novelpro_ribbon_main_hd};
   text-transform:{$novelpro_ribbon_main_text_transform};
  }"; 
}
function novelpro_ribbon_main_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.video-ribbon .video-title h2{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_ribbon_main_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.video-ribbon .video-title h2{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_ribbon_main_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.video-ribbon .video-title h2{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_ribbon_main_hd_size','novelpro_ribbon_main_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_ribbon_main_hd_line_height','novelpro_ribbon_main_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_ribbon_main_hd_letter_spacing','novelpro_ribbon_main_hd_letter_spacing_responsive');

/********************/
// Ribbon btn
/********************/
$novelpro_ribbon_btn = get_theme_mod('novelpro_ribbon_btn');
$novelpro_ribbon_btn_text_transform = get_theme_mod('novelpro_ribbon_btn_text_transform');
if(!empty($novelpro_ribbon_btn)){
novelpro_enqueue_google_font($novelpro_ribbon_btn);
$novelpro_typography_style.=".video-ribbon .video-title a.btn-video{ 
   font-family:{$novelpro_ribbon_btn};
   text-transform:{$novelpro_ribbon_btn_text_transform};
  }"; 
}
function novelpro_ribbon_btn_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.video-ribbon .video-title a.btn-video{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_ribbon_btn_size','novelpro_ribbon_btn_size_responsive');

/********************/
// contact heading
/********************/
$novelpro_contact_main_hd = get_theme_mod('novelpro_contact_main_hd');
$novelpro_contact_main_hd_text_transform = get_theme_mod('novelpro_contact_main_hd_text_transform');
if(!empty($novelpro_contact_main_hd)){
novelpro_enqueue_google_font($novelpro_contact_main_hd);
$novelpro_typography_style.="#section7 h2.section-heading{ 
   font-family:{$novelpro_contact_main_hd};
   text-transform:{$novelpro_contact_main_hd_text_transform};
  }"; 
}
function novelpro_contact_main_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section7 h2.section-heading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_contact_main_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section7 h2.section-heading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_contact_main_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section7 h2.section-heading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_contact_main_hd_size','novelpro_contact_main_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_contact_main_hd_line_height','novelpro_contact_main_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_contact_main_hd_letter_spacing','novelpro_contact_main_hd_letter_spacing_responsive');

/********************/
// contact subheading
/********************/
$novelpro_contact_sb_hd = get_theme_mod('novelpro_contact_sb_hd');
$novelpro_contact_sub_hd_text_transform = get_theme_mod('novelpro_contact_sub_hd_text_transform');
if(!empty($novelpro_contact_sb_hd)){
novelpro_enqueue_google_font($novelpro_contact_sb_hd);
$novelpro_typography_style.="#section7 h3.section-subheading{ 
   font-family:{$novelpro_contact_sb_hd};
   text-transform:{$novelpro_contact_sub_hd_text_transform};
  }"; 
}
function novelpro_contact_sb_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section7 h3.section-subheading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_contact_sb_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section7 h3.section-subheading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_contact_sb_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section7 h3.section-subheading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_contact_sb_hd_size','novelpro_contact_sb_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_contact_sb_hd_line_height','novelpro_contact_sb_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_contact_sb_hd_letter_spacing','novelpro_contact_sb_hd_letter_spacing_responsive');

/********************/
// Woo heading
/********************/
$novelpro_woo_main_hd = get_theme_mod('novelpro_woo_main_hd');
$novelpro_woo_main_hd_text_transform = get_theme_mod('novelpro_woo_main_hd_text_transform');
if(!empty($novelpro_woo_main_hd)){
novelpro_enqueue_google_font($novelpro_woo_main_hd);
$novelpro_typography_style.="#section8 h2.section-heading{ 
   font-family:{$novelpro_woo_main_hd};
   text-transform:{$novelpro_woo_main_hd_text_transform};
  }"; 
}
function novelpro_woo_main_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section8 h2.section-heading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_woo_main_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section8 h2.section-heading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_woo_main_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section8 h2.section-heading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_woo_main_hd_size','novelpro_woo_main_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_woo_main_hd_line_height','novelpro_woo_main_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_woo_main_hd_letter_spacing','novelpro_woo_main_hd_letter_spacing_responsive');

/********************/
// woo subheading
/********************/
$novelpro_woo_sub_hd = get_theme_mod('novelpro_woo_sub_hd');
$novelpro_woo_sub_hd_text_transform = get_theme_mod('novelpro_woo_sub_hd_text_transform');
if(!empty($novelpro_contact_sb_hd)){
novelpro_enqueue_google_font($novelpro_contact_sb_hd);
$novelpro_typography_style.="#section8 h3.section-subheading{ 
   font-family:{$novelpro_woo_sub_hd};
   text-transform:{$novelpro_woo_sub_hd_text_transform};
  }"; 
}
function novelpro_woo_sub_hd_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section8 h3.section-subheading{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_woo_sub_hd_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section8 h3.section-subheading{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_woo_sub_hd_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section8 h3.section-subheading{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_woo_sub_hd_size','novelpro_woo_sub_hd_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_woo_sub_hd_line_height','novelpro_woo_sub_hd_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_woo_sub_hd_letter_spacing','novelpro_woo_sub_hd_letter_spacing_responsive');

/********************/
// woo title
/********************/
$novelpro_woo_tle = get_theme_mod('novelpro_woo_tle');
$novelpro_woo_tle_text_transform = get_theme_mod('novelpro_woo_tle_text_transform');
if(!empty($novelpro_woo_tle)){
novelpro_enqueue_google_font($novelpro_woo_tle);
$novelpro_typography_style.="#section8 h2.woocommerce-loop-product__title{ 
   font-family:{$novelpro_woo_tle};
   text-transform:{$novelpro_woo_tle_text_transform};
  }"; 
}
function novelpro_woo_tle_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section8 h2.woocommerce-loop-product__title{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_woo_tle_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section8 h2.woocommerce-loop-product__title{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_woo_tle_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section8 h2.woocommerce-loop-product__title{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_woo_tle_size','novelpro_woo_tle_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_woo_tle_line_height','novelpro_woo_tle_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_woo_tle_letter_spacing','novelpro_woo_tle_letter_spacing_responsive');
/********************/
// woo price
/********************/
$novelpro_woo_price = get_theme_mod('novelpro_woo_price');
$novelpro_woo_price_text_transform = get_theme_mod('novelpro_woo_price_text_transform');
if(!empty($novelpro_woo_price)){
novelpro_enqueue_google_font($novelpro_woo_price);
$novelpro_typography_style.="#section8 ul.products li.product .price{ 
   font-family:{$novelpro_woo_price};
   text-transform:{$novelpro_woo_price_text_transform};
  }"; 
}
function novelpro_woo_price_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section8 ul.products li.product .price{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_woo_price_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section8 ul.products li.product .price{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_woo_price_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section8 ul.products li.product .price{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_woo_price_size','novelpro_woo_price_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_woo_price_line_height','novelpro_woo_price_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_woo_price_letter_spacing','novelpro_woo_price_letter_spacing_responsive');
/********************/
// woo btn
/********************/
$novelpro_woo_btn = get_theme_mod('novelpro_woo_btn');
$novelpro_woo_btn_text_transform = get_theme_mod('novelpro_woo_btn_text_transform');
if(!empty($novelpro_woo_btn)){
novelpro_enqueue_google_font($novelpro_woo_btn);
$novelpro_typography_style.="#section8 ul.products li.product a.button{ 
   font-family:{$novelpro_woo_btn};
   text-transform:{$novelpro_woo_btn_text_transform};
  }"; 
}
function novelpro_woo_btn_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '#section8 ul.products li.product a.button{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}

$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_woo_btn_size','novelpro_woo_btn_size_responsive');

/********************/
//MENU
/********************/
$novelpro_menu_font = get_theme_mod('novelpro_menu_font');
$novelpro_menu_font_text_transform = get_theme_mod('novelpro_menu_font_text_transform');
if(!empty($novelpro_menu_font)){
novelpro_enqueue_google_font($novelpro_menu_font);
$novelpro_typography_style.=".navigation .menu ul li a,.navigation .menu > li > a{ 
   font-family:{$novelpro_menu_font};
   text-transform:{$novelpro_menu_font_text_transform};
  }"; 
}
function novelpro_menu_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.navigation .menu ul li a,.navigation .menu > li > a{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_menu_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.navigation .menu ul li a,.navigation .menu > li > a{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_menu_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.navigation .menu ul li a,.navigation .menu > li > a{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_menu_size','novelpro_menu_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_menu_line_height','novelpro_menu_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_menu_letter_spacing','novelpro_menu_letter_spacing_responsive');

/********************/
//site title
/********************/
$novelpro_site_title_font = get_theme_mod('novelpro_site_title_font');
$novelpro_site_title_text_transform = get_theme_mod('novelpro_site_title_text_transform');
if(!empty($novelpro_site_title_font)){
novelpro_enqueue_google_font($novelpro_site_title_font);
$novelpro_typography_style.=".navbar-header h1 a{ 
   font-family:{$novelpro_site_title_font};
   text-transform:{$novelpro_site_title_text_transform};
  }"; 
}
function novelpro_site_title_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.navbar-header h1 a{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_site_title_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.navbar-header h1 a{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_site_title_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.navbar-header h1 a{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_site_title_size','novelpro_site_title_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_site_title_line_height','novelpro_site_title_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_site_title_letter_spacing','novelpro_site_title_letter_spacing_responsive');
/********************/
//site desc
/********************/
$novelpro_site_desc_font = get_theme_mod('novelpro_site_desc_font');
$novelpro_site_desc_text_transform = get_theme_mod('novelpro_site_desc_text_transform');
if(!empty($novelpro_site_desc_font)){
novelpro_enqueue_google_font($novelpro_site_desc_font);
$novelpro_typography_style.=".navbar-header p{ 
   font-family:{$novelpro_site_desc_font};
   text-transform:{$novelpro_site_desc_text_transform};
  }"; 
}
function novelpro_site_desc_size_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.navbar-header p{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_site_desc_line_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.navbar-header p{
   line-height: ' . $v3 . ';
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function novelpro_site_desc_letter_spacing_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.navbar-header p{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = novelpro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_site_desc_size','novelpro_site_desc_size_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_site_desc_line_height','novelpro_site_desc_line_height_responsive');
$novelpro_typography_style.= novelpro_responsive_slider_funct('novelpro_site_desc_letter_spacing','novelpro_site_desc_letter_spacing_responsive');
return $novelpro_typography_style;
}