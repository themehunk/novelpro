<?php if(!th_checkbox_filter('woo_commerce','home_on_off') && class_exists( 'WooCommerce' )) : ?>
<?php if (get_theme_mod('brand_parallax','on')=='on') { ?>     
<section id="section8" class="woo-wrapper plrx_enable" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" >
<?php } else { ?>
<section id="section8" class="woo-wrapper">      
<?php } ?> 
<?php $woo_product = get_theme_mod('woo_shortcode','[recent_products]');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <?php if (get_theme_mod('woo_head_','') != '') { ?>
                <h2 class="section-heading"><?php echo stripslashes(get_theme_mod('woo_head_','')); ?></h2>
                <?php } else { ?>
                <h2 class="section-heading">Latest Woo Commerce Product</h2>
                <?php } ?>
                <?php if (get_theme_mod('woo_desc_','') != '') { ?>
                <h3 class="section-subheading text-muted"><?php echo stripslashes(get_theme_mod('woo_desc_','')); ?></h3>
                <?php } else { ?>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                <?php } ?>
            </div>
        </div>
        <div class="row wow fadeInRight" data-wow-duration="2s">
            <div class="col-lg-12">
                <div class="woo_content">
                    <?php   echo do_shortcode($woo_product); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>