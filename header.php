<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<?php if ( ! function_exists( '_wp_render_title_tag' ) ) :
function novelpro_render_title() {
?>
<title><?php wp_title( '-', true, 'right' ); ?></title>
<?php
    }
    add_action( 'wp_head', 'novelpro_render_title' );
endif; ?>	
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		        <?php wp_head(); ?>
</head>
<body  <?php body_class('index'); ?>>	
<?php 
if (get_theme_mod('_loader_disable','')!=='1') { ?> 	
<div class="overlayloader">
<div class="loader">&nbsp;</div>
</div>
<?php } ?>
<input type="hidden" id="back_to_top" value="<?php echo get_theme_mod( '_backtotop_disable'); ?>"/> 
<?php
$last_btn ='';
$hdr_trnsprnt ='';
if(get_theme_mod('hdr_bg_trnsparent_active')=='1'){
    $hdr_trnsprnt ='hdr-transparent';
    }else{
    $hdr_trnsprnt ='';
    }
if(get_theme_mod('last_menu_btn')=='1'){
    $last_btn ='last-btn';
    }else{
    $last_btn ='';
    }
?>
<!-- Navigation -->
<?php 
if (get_theme_mod('header_fxd','on')=='on') { ?> 
<?php if (get_theme_mod('header_hide')==''){?>
  <a class="skip-link screen-reader-text" href="#th-page"><?php _e( 'Skip to content', 'novelpro' ); ?></a>
<nav class="navbar navbar-default navbar-fixed-top <?php if (!is_front_page()) { echo "not_home"; } ?> <?php echo $hdr_trnsprnt;?> <?php echo $last_btn;?>">
<?php } else {?>
<nav class="navbar hide navbar-default navbar-fixed-top <?php if (!is_front_page()) { echo "not_home"; } ?> <?php echo $hdr_trnsprnt;?> <?php echo $last_btn;?>">
<?php } ?>
<?php } else { ?>
<?php if (get_theme_mod('header_hide')==''){?>
<nav class="navbar navbar-default navbar-static navbar-fixed-top <?php if (!is_front_page()) { echo "not_home"; } ?> <?php echo $hdr_trnsprnt;?> <?php echo $last_btn;?>">
<?php } else { ?>
<nav class="navbar hide navbar-default navbar-static navbar-fixed-top <?php if (!is_front_page()) { echo "not_home"; } ?> <?php echo $hdr_trnsprnt;?> <?php echo $last_btn;?>">
<?php } ?>
<?php } ?>
	<div class="header_container">
        <div class="container">		
	<div class="row">
  <!-- script to split menu -->
 <?php 
if (get_theme_mod('menu_style')=='split') { ?>    
  <script>
    jQuery(document).ready(function() {
    // hides home from navigation
     var position = jQuery("ul.menu > li").length;
     var middle = Math.round(position/2);
     var i = 0;
     jQuery('ul.menu > li').each(function() {
         if(i == middle) {
                <?php
              if(get_theme_mod( 'logo_upload')!=''){?>

            jQuery(this).before("<li class='logo-cent'><a href='<?php echo esc_url( home_url( '/' ) ); ?>'><img src='<?php echo esc_url(get_theme_mod('logo_upload'));?>'/></a></li>");
            <?php } else { ?>
      jQuery(this).before("<li class='logo-cent'><h1><a href='<?php echo esc_url( home_url( '/' ) ); ?>'><?php bloginfo('name'); ?></a></h1><p><?php bloginfo('description'); ?></p></li>");

            <?php } ?>

        }
         i++;
     });
 });
  </script>
  <?php } ?>  
   <!-- script to split menu --> 
   <!-- Toggle get grouped for better mobile display -->
<?php 
if (get_theme_mod('menu_style','on')=='on') { ?>     
<div class="col-lg-4 col-md-4 col-sm-8 col-xs-10">
<?php } elseif(get_theme_mod('menu_style','split')=='split') { ?>
      <div class="col-lg-8 col-md-8 col-sm-4 col-xs-2 col-center split-menu"> 
<?php } else { ?>
<div class="col-lg-4 col-md-4 col-sm-8 col-xs-10 col-center">
<?php } ?>      
          <div class="navbar-header page-scroll">
				 <?php
              if(get_theme_mod( 'logo_upload')!=''){?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_theme_mod( 'logo_upload')); ?>" alt="logo"></a>
              <?php }else{ ?>
              <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
              <p><?php bloginfo('description'); ?></p>
              <?php } ?>
				</div>
        </div>

 <?php 
if (get_theme_mod('menu_style','on')=='on') { ?>       				
			<div class="col-lg-8 col-md-8 col-sm-4 col-xs-2">
<?php } elseif(get_theme_mod('menu_style','split')=='split') { ?>
      <div class="col-lg-8 col-md-8 col-sm-4 col-xs-2 col-center split-menu">
<?php } else { ?>  
      <div class="col-lg-8 col-md-8 col-sm-4 col-xs-2 col-center">
<?php } ?>    
				<?php if (is_front_page()) { ?>
				 <div id="main-menu-wrapper">
              <a href="#" id="pull" class="toggle-mobile-menu"></a>
              <nav class="navigation clearfix mobile-menu-wrapper">
                <?php th_front_nav_menu(); ?>
              </nav>
                  <div class="clearfix"></div>
            </div>
				<!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php novelpromenu_frontpage_nav() ?>
				</div> -->
				<?php } else { ?>
				 <div id="main-menu-wrapper">
              <a href="#" id="pull" class="toggle-mobile-menu"></a>
              <nav class="navigation clearfix mobile-menu-wrapper">
                <?php th_nav_menu(); ?>
              </nav>
                  <div class="clearfix"></div>
            </div>
				<!-- 
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php novelpromenu_nav(); ?>
				</div> -->
				<?php } ?>
				</div>            <!-- Collect the nav links, forms, and other content for toggling -->
			</div>
        </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
		</div>
    </nav>
	 <?php if (current_user_can('manage_options')) { ?>
	<style>
	.navbar-default {
	margin-top: 32px;
	}
	</style>
  
	<?php } ?>