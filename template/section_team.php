<?php if(!th_checkbox_filter('team','home_on_off')) : ?>
<!-- Team Section -->
<?php if (get_theme_mod('team_parallax','on')=='on') { ?>   
<section id="section5" class="bg-light-gray plrx_enable" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;">
<?php } else { ?>
<section id="section5">   
<?php } ?>  
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <?php if (get_theme_mod('team_head_','') != '') { ?>
                <h2 class="section-heading"><?php echo stripslashes(get_theme_mod('team_head_','')); ?></h2>
                <?php } else { ?>
                <h2 class="section-heading">Our Amazing Team</h2>
                <?php } ?>
                <?php if (get_theme_mod('team_desc_','') != '') { ?>
                <h3 class="section-subheading text-muted"><?php echo stripslashes(get_theme_mod('team_desc_','')); ?></h3>
                <?php } else { ?>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                <?php } ?> 
            </div>
        </div>
        <div class="row wow fadeInRight novel-pro-flex-container" data-wow-duration="2s">
           <?php
         novelpro_teams_content('novelpro_teams_content', 'get_team_default');

         ?>
        </div>
    </div>
</section>
<?php endif; ?>