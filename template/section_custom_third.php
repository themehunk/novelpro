<?php 
if(!th_checkbox_filter('custom-section-third','home_on_off')) :?>
<div class="custom-section-third">
		<?php 
    if ( is_active_sidebar( 'novelpro-custom-third' ) ):
             dynamic_sidebar( 'novelpro-custom-third' ); 
     else: 
     	?>
 <?php endif;?>
</div>
 <?php endif;?>
