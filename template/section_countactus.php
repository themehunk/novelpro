<?php if(!th_checkbox_filter('countactus','home_on_off')) : 
$contactus_shortcode = get_theme_mod('cf_shtcd_','[lead-form form-id=1 title=Contact Us]');
?>
<!-- blog title -->
<!-- blog title ends -->
<?php if (get_theme_mod('lead_parallax','on')=='on') { ?>
<?php if (get_theme_mod('cf_image','') != '') { ?>
<section data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" id="section7" class="contact_section plrx_enable" style="background: url(<?php echo esc_url(get_theme_mod('cf_image','')); ?>) center repeat fixed;">
<?php } else { ?>
<section data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" id="section7" class="contact_section plrx_enable">
 <?php } ?>
<?php } else { ?>
<?php if (get_theme_mod('cf_image','') != '') { ?>
<section id="section7" class="contact_section" style="background: url(<?php echo esc_url(get_theme_mod('cf_image','')); ?>) center repeat fixed;">
<?php } else { ?>
<section id="section7" class="contact_section">
 <?php } ?>
<?php } ?>    

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php if (get_theme_mod('cf_head_','') != '') { ?>
                    <h2 class="section-heading"><?php echo get_theme_mod('cf_head_',''); ?></h2>
                    <?php } else { ?>
                    <h2 class="section-heading"><?php _e('Contact Us','novelpro'); ?></h2>
                    <?php } ?>                  
                    <?php if (get_theme_mod('cf_desc_','') != '') { ?>
                    <h3 class="section-subheading text-muted contact"><?php echo get_theme_mod('cf_desc_',''); ?></h3>
                    <?php } else { ?>
                    <h3 class="section-subheading text-muted contact">Lorem ipsum dolor sit amet consectetur.</h3>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="cnt-div  wow fadeInRight" data-wow-delay="0s">
                <?php echo do_shortcode($contactus_shortcode); ?>
                </div>
            </div>
        </div>
        <div class="map">
<?php 
$map = get_theme_mod('map_address');
if($map !==''){
echo html_entity_decode($map);
}?>  
</div>
</section>
    <!-- contact us -->
       <?php endif; ?>