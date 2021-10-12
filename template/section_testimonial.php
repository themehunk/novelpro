<?php if(!th_checkbox_filter('testimonial','home_on_off')) : ?>
<input type="hidden" id="testimonial_slidespeed" value="<?php if (get_theme_mod('test_slider_speed','') != '') { echo stripslashes(get_theme_mod('test_slider_speed')); } else { ?>3000<?php } ?>"/>
<!-- *** Testimonial Slider Starts *** -->
<?php if (get_theme_mod('testimonial_parallax','on')=='on') { ?> 
<?php if (get_theme_mod('testimonial_bg_image','') != '') { ?>
<section class="testimonial-wrapper plrx_enable" id="section3" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" style="background: url(<?php echo get_theme_mod('testimonial_bg_image',''); ?>) center repeat fixed;">
    <?php } else { ?>
<section class="testimonial-wrapper plrx_enable" id="section3" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;">
<?php } ?>
<?php } else {?>
<?php if (get_theme_mod('testimonial_bg_image','') != '') { ?>
<section class="testimonial-wrapper" id="section3" style="background: url(<?php echo get_theme_mod('testimonial_bg_image',''); ?>">
    <?php } else { ?>
<section class="testimonial-wrapper" id="section3">
<?php } ?>
<?php } ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-inner animated bottom-to-top">
                        <?php if (get_theme_mod('testimonial_heading','') != '') { ?>
                        <h1 class="testimonial-header"><?php echo get_theme_mod('testimonial_heading',''); ?></h1>
                        <?php } else { ?>
                        <h1 class="testimonial-header wow fadeInUp" data-wow-duration="2s">Show Multiple Testimonials.</h1>
                        <?php } ?>
                        <ul class="bxslider">
                            <?php
         novelpro_testimonial_content('novelpro_testimonial_content', 'get_testimonials_default');
             ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>