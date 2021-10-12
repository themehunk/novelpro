
<div class="outer-footer">
<div class="container">
<div class="footer-widget-area">
        <?php
        /* A sidebar in the footer? Yep. You can can customize
         * your footer with four columns of widgets.
         */
        get_sidebar('footer');
        ?>
		</div>
    </div>
	</div>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
				<?php if (get_theme_mod('footertext','') != '') { ?>
		<span class="copyright"><?php echo get_theme_mod('footertext',''); ?></span> 
			<?php } else { ?>
                    <span class="copyright"><p><a href="<?php echo esc_url('http://www.themehunk.com'); ?>"><?php _e('novelpro Theme', 'novelpro'); ?></a> <?php _e('Powered By ', 'novelpro'); ?><a href="http://www.wordpress.org"><?php _e(' WordPress', 'novelpro'); ?></a></p>
					<?php } ?></span> 
                    </div>
                           <div class="col-md-6">
                    <ul class="list-inline social-buttons">
                        <?php if (get_theme_mod('social_link_twitter') != '') { ?>
                        <li><a href="<?php echo get_theme_mod('social_link_twitter'); ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>                 
                    <?php } if (get_theme_mod('social_link_facebook') != '') { ?>
                        <li><a href="<?php echo get_theme_mod('social_link_facebook'); ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <?php } if (get_theme_mod('social_link_pintrest') != '') { ?>
                        <li><a href="<?php echo get_theme_mod('social_link_pintrest'); ?>" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i> </a></li>
                    <?php } if (get_theme_mod('social_link_instagram') != '') { ?>
                        <li><a href="<?php echo get_theme_mod('social_link_instagram'); ?>" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    <?php } if (get_theme_mod('social_link_dribbble') != '') { ?>
                        <li><a href="<?php echo get_theme_mod('social_link_dribbble'); ?>" target="_blank" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                    <?php } if (get_theme_mod('social_link_google') != '') { ?>
                        <li><a href="<?php echo get_theme_mod('social_link_google'); ?>" target="_blank" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    <?php } if (get_theme_mod('social_link_linkedin') != '') { ?>
                        <li><a href="<?php echo get_theme_mod('social_link_linkedin'); ?>" target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <?php } ?>
                    </ul>
                </div>
                    </div>
        </div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>