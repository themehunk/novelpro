<?php 
if(!th_checkbox_filter('custom-section-second','home_on_off')) :?>
<div class="custom-section-two">
    <?php if ( is_active_sidebar( 'novelpro-custom-second' ) ):
             dynamic_sidebar( 'novelpro-custom-second' ); 
     else: ?>
<?php endif;?>
</div>
<?php endif;?>
