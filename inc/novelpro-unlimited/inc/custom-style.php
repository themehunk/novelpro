<?php
 // custom header background
add_action('wp_head','novelpro_unlimited_custom_style');
function novelpro_unlimited_custom_style(){ 
//header
$hd_bg_color      = get_theme_mod('hd_bg_color');
$hd_shnk_bg_color = get_theme_mod('hd_shnk_bg_color');
$site_title_color = get_theme_mod('site_title_color','#fff');
$hd_menu_color    = get_theme_mod('hd_menu_color','#fff');
$hd_menu_hvr_bg_color = get_theme_mod('hd_menu_hvr_bg_color','#fec503');
$drp_menu_lnk = get_theme_mod('drp_menu_lnk','#4d4d4d');
$drp_menu_bg = get_theme_mod('drp_menu_bg','#fff');
$menu_icon_clr = get_theme_mod('menu_icon_clr','#fff');
$mobile_menu_bg_color = get_theme_mod('mobile_menu_bg_color','#fff');
$footer_bg_color = get_theme_mod('footer_bg_color','#eee');
$footer_info_bg_color = get_theme_mod('footer_info_bg_color','#fff');
$copyright_txt_color = get_theme_mod('copyright_txt_color','#333');
$social_icon_color = get_theme_mod('social_icon_color','#222');
$site_loader_clr = get_theme_mod('site_loader_clr','#fed136');
//slider
$sldr_bckg = get_theme_mod('sldr_bckg');
$sld_bg_video_poster = get_theme_mod('sld_bg_video_poster',NOVELPRO_POSTER_BG);
$slider_heading_color = get_theme_mod('slider_heading_color','#fff');
$slider_subheading_color = get_theme_mod('slider_subheading_color','#fff');
// btn1
$slider_btn_border_color = get_theme_mod('slider_btn_border_color','#fff');
$slider_btn_txt_color = get_theme_mod('slider_btn_txt_color','#fff');
$slider_btn_bg_color = get_theme_mod('slider_btn_bg_color','rgba(255, 255, 255, 0.2)');

$slider_btn_border_hvr_color = get_theme_mod('slider_btn_border_hvr_color','#fff');
$slider_btn_txt_hvr_color = get_theme_mod('slider_btn_txt_hvr_color','#fff');
$slider_btn_bg_hover_color = get_theme_mod('slider_btn_bg_hover_color','rgba(255, 255, 255, 0.7)');
// btn2
$slider_btn2_border_color = get_theme_mod('slider_btn2_border_color','#fff');
$slider_btn2_txt_color    = get_theme_mod('slider_btn2_txt_color','#fff');
$slider_btn2_bg_color     = get_theme_mod('slider_btn2_bg_color','rgba(255, 255, 255, 0.2)');

$slider_btn2_border_hvr_color = get_theme_mod('slider_btn2_border_hvr_color','#fff');
$slider_btn2_txt_hvr_color    = get_theme_mod('slider_btn2_txt_hvr_color','#fff');
$slider_btn2_bg_hover_color   = get_theme_mod('slider_btn2_bg_hover_color','rgba(255, 255, 255, 0.7)');

$slider_bg_ovrly_color = get_theme_mod('slider_bg_ovrly_color','rgba(0, 0,0, 0.1)');
$sliderptrn = get_theme_mod('',NOVELPRO_UNL_SLDOVRY_BG);
$mask_ovrlay_img = get_theme_mod('mask_ovrlay_img');

// slider contact from color 
$sldr_contact_bg_color = get_theme_mod('sldr_contact_bg_color','#f7f7f7');
$sldr_contact_hd_color = get_theme_mod('sldr_contact_hd_color','#333');
$sldr_contact_txt_color = get_theme_mod('sldr_contact_txt_color','#333');
$sldr_contact_btn_bg_color = get_theme_mod('sldr_contact_btn_bg_color','#7202bb');
$sldr_contact_btn_txt_color = get_theme_mod('sldr_contact_btn_txt_color','#fff');
$sldr_contact_input_bg_color = get_theme_mod('sldr_contact_input_bg_color','#fff');
$sldr_contact_input_txt_color = get_theme_mod('sldr_contact_input_txt_color','#333');
//services
$services_bg_background = get_theme_mod('services_bg_background','color');
$services_bg_image = get_theme_mod('services_bg_image');
$service_img_overly_color = get_theme_mod('service_img_overly_color','rgba(0, 0,0, 0)');
$service_heading_color = get_theme_mod('service_heading_color','#333');
$service_subheading_color = get_theme_mod('service_subheading_color','#777');

//portfolio
$portfolio_bg_background = get_theme_mod('portfolio_bg_background','color');
$portfolio_bg_image = get_theme_mod('portfolio_bg_image');
$portfolio_img_overly_color = get_theme_mod('portfolio_img_overly_color','');
$portfolio_heading_color = get_theme_mod('portfolio_heading_color','#333');
$portfolio_subheading_color = get_theme_mod('portfolio_subheading_color','#777');

//testimonials
$testimonial_bg_background = get_theme_mod('testimonial_bg_background','image');
$testimonial_bg_image = get_theme_mod('testimonial_bg_image',NOVELPRO_UNL_TESTIMONIAL_BG);
$testimonial_img_overly_color = get_theme_mod('testimonial_img_overly_color','rgba(219,131,0,0.12)');
$testimonial_heading_color = get_theme_mod('testimonial_heading_color','#fff');

//latest post
$blog_bg_background = get_theme_mod('blog_bg_background','color');
$blog_bg_image = get_theme_mod('blog_bg_image');
$blog_img_overly_color = get_theme_mod('blog_img_overly_color','');
$blog_heading_color = get_theme_mod('blog_heading_color','#333');
$blog_subheading_color = get_theme_mod('blog_subheading_color','#777');

//team
$team_bg_background = get_theme_mod('team_bg_background','color');
$team_bg_image = get_theme_mod('team_bg_image');
$team_img_overly_color = get_theme_mod('team_img_overly_color','');
$team_heading_color = get_theme_mod('team_heading_color','#333');
$team_subheading_color = get_theme_mod('team_subheading_color','#777');


//pricing
$price_bg_background = get_theme_mod('price_bg_background','image');
$price_bg_image = get_theme_mod('price_bg_image',NOVELPRO_UNL_PRICE_BG);
$price_img_overly_color = get_theme_mod('price_img_overly_color','');
$price_heading_color = get_theme_mod('price_heading_color','#fff');
$price_subheading_color = get_theme_mod('price_subheading_color','#fff');

//brand
$brand_bg_background = get_theme_mod('brand_bg_background','color');
$brand_bg_image = get_theme_mod('brand_bg_image');
$brand_img_overly_color = get_theme_mod('brand_img_overly_color','');
$brand_heading_color = get_theme_mod('brand_heading_color','#333');
$brand_subheading_color = get_theme_mod('brand_subheading_color','#777');

//woocommerce
$woo_bg_background = get_theme_mod('woo_bg_background','color');
$woo_bg_image = get_theme_mod('woo_bg_image');
$woo_img_overly_color = get_theme_mod('woo_img_overly_color','');
$woo_heading_color = get_theme_mod('woo_heading_color','#333');
$woo_subheading_color = get_theme_mod('woo_subheading_color','#777');

// conatct-lead
$lead_bg_background = get_theme_mod('lead_bg_background','image');
$lead_bg_image = get_theme_mod('lead_bg_image',NOVELPRO_UNL_LEAD_BG);
$lead_img_overly_color = get_theme_mod('lead_img_overly_color','');
$lead_heading_color = get_theme_mod('lead_heading_color','#fff');
$lead_subheading_color = get_theme_mod('lead_subheading_color','#fff');
//ribbon
$rbn_bg_background = get_theme_mod('ribn_chs_','color');
$rbn_bg_image = get_theme_mod('rbn_bg_image',NOVELPRO_UNL_RIBBON_BG);
$rbn_video_image = get_theme_mod('rbn_video_image',NOVELPRO_UNL_RIBBON_BG);
$rbn_img_overly_color = get_theme_mod('rbn_img_overly_color','rgba(0, 0,0, 0.1)');
$rbn_tle_color = get_theme_mod('rbn_heading_color','#fff');
$rbn_btn_color = get_theme_mod('rbn_bnt_color','#fec503');

echo "<style type='text/css'>"; ?>
/*** header **/
.navbar-default{background-color:<?php echo $hd_bg_color;?>}
.navbar-default.navbar-shrink, .home .navbar-default.hdr-transparent.navbar-shrink {
    background-color:<?php echo $hd_shnk_bg_color;?>
}
.navbar-header h1 a, 
.navbar-header p,
li.logo-cent a, 
li.logo-cent p{
color:<?php echo $site_title_color;?>
}
.navigation .menu > li > a, 
.menu-item-has-children > a:after {
color:<?php echo $hd_menu_color;?>	
}
.menu li .active, .navigation .menu > li:hover, .sub-menu li:hover, .sub-menu .menu-item-has-children:hover, li.page_item.current_page_item, 
.sub-menu .menu-item-has-children ul li a:hover,#menu li:hover,.menu-item.current-menu-item, .navigation .menu > li:hover, .navigation .menu > li a:focus{
background:<?php echo $hd_menu_hvr_bg_color; ?>	
}
.navigation ul ul a,.navigation ul ul a:link{
color:<?php echo $drp_menu_lnk; ?>!important;	
}
.navigation ul ul li{
background:<?php echo $drp_menu_bg; ?>	
}
.navigation .menu > li > a i.fa{color:<?php echo $menu_icon_clr;?>}
@media screen and (max-width: 1024px){
.home .last-btn .navigation ul#menu > li:last-child:hover{
background:<?php echo $hd_menu_hvr_bg_color; ?>		
}
a#pull:after, .mobile-menu-active a#pull:after{
color:<?php echo $mobile_menu_bg_color;?>
}
}
.outer-footer{
background:<?php echo $footer_bg_color;?>	
}
footer{
background:<?php echo $footer_info_bg_color;?>		
}
footer span.copyright{
color:<?php echo $copyright_txt_color; ?>	
}
ul.social-buttons li a{
background:<?php echo $social_icon_color; ?>	
}
.loader {
  border-top: 2px solid <?php echo $site_loader_clr; ?>	
 }
/*** slider **/
<?php if($mask_ovrlay_img =='1'){?>
.novelpro_slider .slider_overlay, #slider-div .video-over-lay{background:<?php echo $slider_bg_ovrly_color;?> url();}
<?php } else { ?>
.novelpro_slider .slider_overlay, #slider-div .video-over-lay {background:<?php echo $slider_bg_ovrly_color;?> url('<?php echo $sliderptrn;?>');}
<?php } ?>

.novelpro_slider .container h1 a, #slider-div .container h1 a{
	color:<?php echo $slider_heading_color; ?>;
}
.novelpro_slider .container p, #slider-div .container p{
	color:<?php echo $slider_subheading_color; ?>;
}

.novel_sldr_form_active .sldr-contact-wrap .leadform-show-form form{
	background:<?php echo $sldr_contact_bg_color; ?>;
}
.novel_sldr_form_active .sldr-contact-wrap .leadform-show-form h1{
	color:<?php echo $sldr_contact_hd_color; ?>;
}
.novel_sldr_form_active .sldr-contact-wrap .leadform-show-form label{
	color:<?php echo $sldr_contact_txt_color;?>;
}
.novel_sldr_form_active .sldr-contact-wrap .leadform-show-form input[type="submit"]{
	background:<?php echo $sldr_contact_btn_bg_color;?>;
    border: 2px solid <?php echo $sldr_contact_btn_bg_color;?>;
    color:<?php echo $sldr_contact_btn_txt_color;?>;
}
.novel_sldr_form_active .sldr-contact-wrap .leadform-show-form input,.novel_sldr_form_active .sldr-contact-wrap .leadform-show-form textarea,.novel_sldr_form_active .sldr-contact-wrap .leadform-show-form input::placeholder,.novel_sldr_form_active .sldr-contact-wrap .leadform-show-form textarea::placeholder {
	background:<?php echo $sldr_contact_input_bg_color;?>;
	color:<?php echo $sldr_contact_input_txt_color;?>;
	border: 1px solid <?php echo $sldr_contact_input_bg_color;?>;
}
<?php if($sldr_bckg =='video'){?>
@media screen and (-webkit-min-device-pixel-ratio:0) { 
/* Safari only override */
::i-block-chrome,#slider-div{
	background-image:url(<?php echo $sld_bg_video_poster; ?>);
  }
}
<?php } ?>

.theme-slider-button{
	background: <?php echo $slider_btn_bg_color; ?>;
	color:<?php echo $slider_btn_txt_color; ?>;
	border-color:<?php echo $slider_btn_border_color; ?>;
}
.theme-slider-button:hover{
	    background: <?php echo $slider_btn_bg_hover_color; ?>;
	    color:<?php echo $slider_btn_txt_hvr_color; ?>;
	    border-color:<?php echo $slider_btn_border_hvr_color;?>
}
/*** one-button **/
.button-one .theme-slider-button{
color:<?php echo $slider_btn_txt_color; ?>;
background: <?php echo $slider_btn_bg_color; ?>;
webkit-box-shadow: 0px 3px 0px <?php echo $slider_btn_border_color; ?>;
    box-shadow: 0px 3px 0px <?php echo $slider_btn_border_color; ?>;	
}
.button-one .theme-slider-button:hover{
background: <?php echo $slider_btn_bg_hover_color; ?>;	
color:<?php echo $slider_btn_txt_hvr_color; ?>;
webkit-box-shadow: 0px 3px 0px <?php echo $slider_btn_border_hvr_color; ?>;
box-shadow: 0px 3px 0px <?php echo $slider_btn_border_hvr_color; ?>;	
}
/*** two-button **/
.button-two .theme-slider-button{
color:<?php echo $slider_btn_txt_color; ?>;
background: <?php echo $slider_btn_bg_color; ?>;	
}
.button-two .theme-slider-button:hover{
color:<?php echo $slider_btn_txt_hvr_color; ?>;
background: <?php echo $slider_btn_bg_hover_color; ?>;	
-webkit-box-shadow: 0 14px 26px -12px <?php echo hex2rgba($slider_btn_bg_hover_color,0.42); ?>, 
0 4px 23px 0 <?php echo hex2rgba($slider_btn_bg_hover_color,0.12); ?>, 
0 8px 10px -5px <?php echo hex2rgba($slider_btn_bg_hover_color,0.2); ?>;
box-shadow: 0 14px 26px -12px <?php echo hex2rgba($slider_btn_bg_hover_color,0.42); ?>, 0 4px 23px 0 <?php echo hex2rgba($slider_btn_bg_hover_color,0.12); ?>, 0 8px 10px -5px <?php echo hex2rgba($slider_btn_bg_hover_color,0.2); ?>;
}
/*** three-button **/
.button-three .theme-slider-button{
border-color: <?php echo $slider_btn_border_color; ?>;
background-color:<?php echo $slider_btn_bg_color; ?>;	
color:<?php echo $slider_btn_txt_color; ?>;
}
.button-three .theme-slider-button:hover{
border-color: <?php echo $slider_btn_border_hvr_color; ?>;
background-color:<?php echo $slider_btn_bg_hover_color; ?>;	
color:<?php echo $slider_btn_txt_hvr_color; ?>;
}
/*** four-button **/
.button-four .main-slider-button .theme-slider-button{
border-color: <?php echo $slider_btn_border_color; ?>;
background-color:<?php echo $slider_btn_bg_color; ?>;	
color:<?php echo $slider_btn_txt_color; ?>;	
}
.button-four .main-slider-button .theme-slider-button:before{
color:<?php echo $slider_btn_txt_hvr_color; ?>;	
}
.button-four .main-slider-button .theme-slider-button:hover{
border-color: <?php echo $slider_btn_border_hvr_color; ?>;
background-color:<?php echo $slider_btn_bg_hover_color; ?>;	
color:<?php echo $slider_btn_txt_hvr_color; ?>;
}
/*** five-button **/
.button-five .main-slider-button .theme-slider-button{
border-color: <?php echo $slider_btn_border_color; ?>;
color:<?php echo $slider_btn_txt_color; ?>;	
background-color:<?php echo $slider_btn_bg_color; ?>;
}
.button-five .main-slider-button .theme-slider-button:hover{
border-color: <?php echo $slider_btn_border_hvr_color; ?>;
background-color:<?php echo $slider_btn_bg_hover_color; ?>;	
color:<?php echo $slider_btn_txt_hvr_color; ?>;
}
/*** btn2 **/
.theme-slider-button2{
	background: <?php echo $slider_btn2_bg_color; ?>;
	color:<?php echo $slider_btn2_txt_color; ?>;
	border-color:<?php echo $slider_btn2_border_color; ?>;
}
.theme-slider-button2:hover{
	    background: <?php echo $slider_btn2_bg_hover_color; ?>;
	    color:<?php echo $slider_btn2_txt_hvr_color; ?>;
	    border-color:<?php echo $slider_btn2_border_hvr_color;?>
}
/*** one-button-2 **/
.button-one-2 .theme-slider-button2{
color:<?php echo $slider_btn2_txt_color; ?>;
background: <?php echo $slider_btn2_bg_color; ?>;
webkit-box-shadow: 0px 3px 0px <?php echo $slider_btn2_border_color; ?>;
    box-shadow: 0px 3px 0px <?php echo $slider_btn2_border_color; ?>;	
}
.button-one-2 .theme-slider-button2:hover{
background: <?php echo $slider_btn2_bg_hover_color; ?>;	
color:<?php echo $slider_btn2_txt_hvr_color; ?>;
webkit-box-shadow: 0px 3px 0px <?php echo $slider_btn2_border_hvr_color; ?>;
box-shadow: 0px 3px 0px <?php echo $slider_btn2_border_hvr_color; ?>;	
}
/*** two-button-2 **/
.button-two-2 .theme-slider-button2{
color:<?php echo $slider_btn2_txt_color; ?>;
background: <?php echo $slider_btn2_bg_color; ?>;	
}
.button-two-2 .theme-slider-button2:hover{
color:<?php echo $slider_btn2_txt_hvr_color; ?>;
background: <?php echo $slider_btn2_bg_hover_color; ?>;	
-webkit-box-shadow: 0 14px 26px -12px <?php echo hex2rgba($slider_btn2_bg_hover_color,0.42); ?>, 
0 4px 23px 0 <?php echo hex2rgba($slider_btn2_bg_hover_color,0.12); ?>, 
0 8px 10px -5px <?php echo hex2rgba($slider_btn2_bg_hover_color,0.2); ?>;
box-shadow: 0 14px 26px -12px <?php echo hex2rgba($slider_btn2_bg_hover_color,0.42); ?>, 0 4px 23px 0 <?php echo hex2rgba($slider_btn2_bg_hover_color,0.12); ?>, 0 8px 10px -5px <?php echo hex2rgba($slider_btn2_bg_hover_color,0.2); ?>;
}
/*** three-button-2 **/
.button-three-2 .theme-slider-button2{
border-color: <?php echo $slider_btn2_border_color; ?>;
background-color:<?php echo $slider_btn2_bg_color; ?>;	
color:<?php echo $slider_btn2_txt_color; ?>;
}
.button-three-2 .theme-slider-button2:hover{
border-color: <?php echo $slider_btn2_border_hvr_color; ?>;
background-color:<?php echo $slider_btn2_bg_hover_color; ?>;	
color:<?php echo $slider_btn2_txt_hvr_color; ?>;
}
/*** four-button-2 **/
.button-four-2 .main-slider-button .theme-slider-button2{
border-color: <?php echo $slider_btn2_border_color; ?>;
background-color:<?php echo $slider_btn2_bg_color; ?>;	
color:<?php echo $slider_btn2_txt_color; ?>;	
}
.button-four-2 .main-slider-button .theme-slider-button2:before{
color:<?php echo $slider_btn2_txt_hvr_color; ?>;	
}
.button-four-2 .main-slider-button .theme-slider-button2:hover{
border-color: <?php echo $slider_btn2_border_hvr_color; ?>;
background-color:<?php echo $slider_btn2_bg_hover_color; ?>;	
color:<?php echo $slider_btn2_txt_hvr_color; ?>;
}
/*** five-button-2 **/
.button-five-2 .main-slider-button .theme-slider-button2{
border-color: <?php echo $slider_btn2_border_color; ?>;
color:<?php echo $slider_btn2_txt_color; ?>;	
background-color:<?php echo $slider_btn2_bg_color; ?>;
}
.button-five-2 .main-slider-button .theme-slider-button-2:hover{
border-color: <?php echo $slider_btn2_border_hvr_color; ?>;
background-color:<?php echo $slider_btn2_bg_hover_color; ?>;	
color:<?php echo $slider_btn2_txt_hvr_color; ?>;
}
/*** services **/
<?php if($services_bg_background=='image'){?>
#section1{
background-image:url(<?php echo $services_bg_image; ?>);
}
#section1:before{
background-color:<?php echo $service_img_overly_color; ?>;
	}
<?php } else { ?>
#section1{
background:<?php echo $service_img_overly_color; ?>
}
<?php } ?>
#section1 h2.section-heading{
	color:<?php echo $service_heading_color; ?>;
}
#section1 h3.section-subheading{
	color:<?php echo $service_subheading_color; ?>;
}

/*** portfolio **/
<?php if($portfolio_bg_background=='image'){?>
#section2{
	background-image:url(<?php echo $portfolio_bg_image; ?>);
}
#section2:before{
	background-color:<?php echo $portfolio_img_overly_color; ?>;
	}
<?php } else{ ?>
#section2{
background:<?php echo $portfolio_img_overly_color; ?>
}
<?php } ?>
#section2 h2.section-heading{
	color:<?php echo $portfolio_heading_color; ?>;
}
#section2 h3.section-subheading{
	color:<?php echo $portfolio_subheading_color; ?>;
}

/*** testimonial **/
<?php if($testimonial_bg_background=='image'){?>
#section3{
	background-image:url(<?php echo $testimonial_bg_image; ?>);
}
#section3:before{
	background-color:<?php echo $testimonial_img_overly_color; ?>;
	}
<?php } else{ ?>
#section3{
background:<?php echo $testimonial_img_overly_color; ?>
}
<?php } ?>
#section3 h1.testimonial-header{
	color:<?php echo $testimonial_heading_color; ?>;
}

/*** Blog Section **/
<?php if($blog_bg_background=='image'){?>
#section4{
	background-image:url(<?php echo $blog_bg_image; ?>);
}
#section4:before{
	background-color:<?php echo $blog_img_overly_color; ?>;
	}
<?php } else{ ?>
#section4{
background:<?php echo $blog_img_overly_color; ?>
}
<?php } ?>
#section4 h2.section-heading{
	color:<?php echo $blog_heading_color; ?>;
}
#section4 h3.section-subheading{
	color:<?php echo $blog_subheading_color; ?>;
}

/*** Team Section **/
<?php if($team_bg_background=='image'){?>
#section5{
	background-image:url(<?php echo $team_bg_image; ?>);
}
#section5:before{
	background-color:<?php echo $team_img_overly_color; ?>;
	}
<?php } else{ ?>
#section5{
background:<?php echo $team_img_overly_color; ?>
}
<?php } ?>
#section5 h2.section-heading{
	color:<?php echo $team_heading_color; ?>;
}
#section5 h3.section-subheading{
	color:<?php echo $team_subheading_color; ?>;
}

/*** Price Section **/
<?php if($price_bg_background=='image'){?>
.price-package{
	background-image:url(<?php echo $price_bg_image; ?>);
}
#section9:before{
	background-color:<?php echo $price_img_overly_color; ?>;
	}
<?php } else{ ?>
.price-package{
background:<?php echo $price_img_overly_color; ?>
}
<?php } ?>
#section9 .price-page h1{
	color:<?php echo $price_heading_color; ?>;
}
#section9 .price-page p{
	color:<?php echo $price_subheading_color; ?>;
}

/*** Brand Section **/
<?php if($brand_bg_background=='image'){?>
#section6{
	background-image:url(<?php echo $brand_bg_image; ?>);
}
#section6:before{
	background-color:<?php echo $brand_img_overly_color; ?>;
	}
<?php } else{ ?>
#section6{
background-color:<?php echo $brand_img_overly_color; ?>
}
<?php } ?>
#section6 h2.section-heading{
	color:<?php echo $brand_heading_color; ?>;
}
#section6 h3.section-subheading{
	color:<?php echo $brand_subheading_color; ?>;
}

/*** Woo Section **/
<?php if($woo_bg_background=='image'){?>
#section8{
	background-image:url(<?php echo $woo_bg_image; ?>);
}
#section8:before{
	background-color:<?php echo $woo_img_overly_color; ?>;
	}
<?php } else{ ?>
#section8{
background-color:<?php echo $woo_img_overly_color; ?>
}
<?php } ?>
#section8 h2.section-heading{
	color:<?php echo $woo_heading_color; ?>;
}
#section8 h3.section-subheading{
	color:<?php echo $woo_subheading_color; ?>;
}

/*** Lead Section **/
<?php if($lead_bg_background=='image'){?>
.contact_section{
	background-image:url(<?php echo $lead_bg_image; ?>);
}
#section7:before{
	background-color:<?php echo $lead_img_overly_color; ?>;
	}
<?php } else{ ?>
#section7{
background-color:<?php echo $lead_img_overly_color; ?>
}
<?php } ?>
#section7 h2.section-heading{
	color:<?php echo $lead_heading_color; ?>;
}
#section7 h3.section-subheading{
	color:<?php echo $lead_subheading_color; ?>;
}
.home .contact_section .leadform-show-form.small, .leadform-show-form.medium{
position:relative;	
}

/*** ribbon Section **/
.video-ribbon .video-title h2 {
color:<?php echo $rbn_tle_color; ?>;	
}
.video-ribbon .video-title a.btn-video {
background: <?php echo $rbn_btn_color; ?>;	
}
.video-ribbon .video-title a.btn-video:hover {
color: <?php echo $rbn_btn_color; ?>;	
}
<?php if($rbn_bg_background=='image' || $rbn_bg_background=='video' || $rbn_bg_background=='color'){ ?>
.video-ribbon .over-lay {
 background:<?php echo $rbn_img_overly_color;?>;
}
<?php } ?>
<?php if($rbn_bg_background=='image'){?>
.video-ribbon{
background: url(<?php echo $rbn_bg_image; ?>) no-repeat;	
}	
<?php } ?>	
<?php if($rbn_bg_background=='video'){?>
@media screen and (-webkit-min-device-pixel-ratio:0) { 
/* Safari only override */
::i-block-chrome,.video-ribbon{
background: url(<?php echo $rbn_video_image; ?>) no-repeat;	
}	
}
<?php } ?>
<?php
 echo get_theme_mod('custom_css_text');
 echo "</style>";
    }
?>