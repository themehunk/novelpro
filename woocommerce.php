 <?php
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site will use a
* different template.
*
*/
?>
<?php get_header(); ?>
<?php $layout = novelpro_woo_get_layout(); ?>
<?php if (has_post_thumbnail() || is_shop() || is_product()) { ?>
<div data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="page_heading_container_images" style="background: url(<?php echo get_theme_mod('shop_hrdimg',''); ?>) repeat center;">   
<?php }else{ ?>
<div class="page_heading_container">
<?php } ?>
  <div class="container">
        <div class="row">
        <div class="col-md-12">
<div class="page_heading_content">
<h1><?php the_title(); ?></h1>
</div>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div id="th-page" class="page-container">
    <div class="container">
        <div class="row">
            <div class="page-content <?php echo $layout; ?>">
                <?php if ( $layout != 'woo-no-sidebar' ){ ?>
    <div class="col-md-9">
<?php } else { ?>
    <div class="col-md-12">
<?php } ?>
                    <div class="content-bar gallery">
                        <?php woocommerce_content(); ?>
                    </div>
                </div>
                <?php if ( $layout != 'woo-no-sidebar' ) { ?>
                <div class="col-md-3">
                    <!--Start Sidebar-->
                    <div class="sidebar">
                        <?php
                        if ( is_active_sidebar( 'th-woo-widget-area' ) ) :
                        dynamic_sidebar( 'th-woo-widget-area' );
                        endif;
                        ?>
                    </div>
                    <!--End Sidebar-->
                </div>
                 <?php } ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>