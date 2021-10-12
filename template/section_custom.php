<?php if(!th_checkbox_filter('custom-sec','home_on_off')) : ?>
<div class="custom-section-one">	
<?php
     if ( is_active_sidebar( 'novelpro-custom' ) ):
             dynamic_sidebar( 'novelpro-custom' ); ?>
<?php else: ?>
<?php endif; ?>
</div>
 <?php endif; ?>