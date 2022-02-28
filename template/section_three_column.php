<!-- Services Section -->
<?php if(!th_checkbox_filter('three_column','home_on_off')) : ?>

<?php if (get_theme_mod('services_parallax','on')=='on') { ?>    
<section id="section1" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="plrx_enable">
<?php } else {?>
<section id="section1"> 
<?php } ?> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <?php if (get_theme_mod('col_heading','') != '') { ?>
                <h2 class="section-heading"><?php echo stripslashes(get_theme_mod('col_heading')); ?></h2>
                <?php } else { ?>
                <h2 class="section-heading">Services</h2>
                <?php } ?>
                <?php if (get_theme_mod('col_sub','') != '') { ?>
                <h3 class="section-subheading text-muted"><?php echo stripslashes(get_theme_mod('col_sub','')); ?></h3>
                <?php } else { ?>
                <h3 class="section-subheading text-muted">Phasellus elementum odio faucibus diam sollicitudin</h3>
                <?php } ?>
            </div>
        </div>
        <div class="row text-center servies wow fadeInRight novel-pro-flex-container" data-wow-duration="1s">
           <?php
         novelpro_service_content('novelpro_service_content', 'get_feature_default');

             ?>
        </div>
    </div>
</section>
<?php endif; ?>