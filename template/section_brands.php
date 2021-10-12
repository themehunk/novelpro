<?php if(!th_checkbox_filter('brands','home_on_off')) : ?>
<!-- brand image and link -->
<input type="hidden" id="slidenumber" value="<?php if (get_theme_mod('slider_numb','') != '') { echo stripslashes(get_theme_mod('slider_numb')); } else { ?>6<?php } ?>"/>
<?php if (get_theme_mod('brand_parallax','on')=='on') { ?> 
<section id="section6" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="plrx_enable">
<?php } else { ?>
<section id="section6">  
<?php } ?>    
    <div class="container">
        <div class="brands">
           
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <?php if (get_theme_mod('brand_head_','') != '') { ?>
                        <h2 class="section-heading"><?php echo stripslashes(get_theme_mod('brand_head_','')); ?></h2>
                        <?php } else { ?>
                        <h2 class="section-heading">Our Brands</h2>
                        <?php } ?>
                        <?php if (get_theme_mod('brand_desc_','') != '') { ?>
                        <h3 class="section-subheading text-muted"><?php echo stripslashes(get_theme_mod('brand_desc_','')); ?></h3>
                        <?php } else { ?>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php } ?>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--Start of content-->
               <div class="content">
                   <!--carousel slider-->
        <div id="owl-demo" class="owl-carousel">
       <?php
         novelpro_brand_content('novelpro_brand_content', 'get_brand_default');
             ?>
      </div>
                                    <!-- /End Carousel -->
     </div>
                                <!--    End of carousel wrapper-->
        </div>
      </div>
               
            </div>
        </div>
    </section>
    <?php endif; ?>