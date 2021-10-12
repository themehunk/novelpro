<?php if(!th_checkbox_filter('pricing','home_on_off')) : ?>
<?php if (get_theme_mod('price_parallax','on')=='on') { ?>   
<section data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" id="section9" class="price-package plrx_enable" <?php if(get_theme_mod('pricing_img_first')!='') { ?>style="background-image: url(<?php echo get_theme_mod('pricing_img_first',''); ?>);" <?php } ?>>
<?php } else { ?>
<section id="section9" class="price-package" <?php if(get_theme_mod('pricing_img_first')!='') { ?>style="background-image: url(<?php echo get_theme_mod('pricing_img_first',''); ?>);" <?php } ?>> 
<?php } ?>  
  <div class="container">
    <div class="price-page">
      <div class="post-title">
        <?php if (get_theme_mod('pricing_head_') != '') { ?>
        <h1><?php echo get_theme_mod('pricing_head_'); ?></h1>
        <?php }else { ?>
        <h1>Price and Packages</h1>
        <?php } ?>
        <?php if (get_theme_mod('pricing_desc_') != '') { ?>
        <p><?php echo get_theme_mod('pricing_desc_'); ?></p>
        <?php }else { ?>
        <p>In posuere consequat purus ut venenatis. Maecenas mattis mattis </p>
        <?php } ?>
      </div>
      <div class="price-block">
        <div class="price-class">
          <ul class="price-grid">
            <?php
         novelpro_pricing_content('novelpro_pricing_content', 'get_pricing_default');
             ?>
                              </ul><!-- price-grid -->
                              </div><!--price-class-->
                              </div><!-- price-block -->
                              </div><!-- price-page -->
                              </div><!-- container -->
                            </section>
                            <?php endif; ?>