<?php if(!th_checkbox_filter('portfolio','home_on_off')) : ?>
    <!-- Portfolio Grid Section -->
<?php if (get_theme_mod('portfolio_parallax','on')=='on') { ?>     
    <section id="section2" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="bg-light-gray plrx_enable">
<?php } else {?>
    <section id="section2" class="bg-light-gray">
 <?php } ?>    
        <div class="container" id="portfolio">
            <div class="row">
                <div class="col-lg-12 text-center">  
                    <?php if (get_theme_mod('portfolio_head_','') != '') { ?>
                                <h2 class="section-heading"><?php echo stripslashes(get_theme_mod('portfolio_head_','')); ?></h2>
                            <?php } else { ?>
                                  <h2 class="section-heading">Our Portfolio</h2>
                            <?php } ?>
                            <?php if (get_theme_mod('portfolio_desc_','') != '') { ?>
                                <h3 class="section-subheading text-muted"><?php echo stripslashes(get_theme_mod('portfolio_desc_','')); ?></h3>
                            <?php } else { ?>
                                <h3 class="section-subheading text-muted">Proin vel diam id dui pharetra commodo. Praesent commodo enim non molestie varius.</h3>
                            <?php } ?>
                </div>
            </div>
            <div class="row">
            <?php
            global $post;
            $loop = new WP_Query(array('post_type' => 'gallery_post', 'posts_per_page' => 12));
            if ($loop->have_posts()) {
            ?>              
            <?php
            $i = 0;
            while ($loop->have_posts()) : $loop->the_post();
                $i++;
                $z = .2 * $i;
                    
                    //This is required to set to Null
                        $img_source = '';
                        $permalink = get_permalink($id);
                        ob_start();
                        ob_end_clean();
                        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
                        if (isset($matches [1] [0])) {
                            $img_source = $matches [1] [0];
                        }else{
                        $img_source =wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                        }
                        ?>
                <div class="col-md-4 col-sm-6 portfolio-item gallery_portfolio wow fadeInUp" data-wow-duration="2s">
                    <div class="portfolio-link" >
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <a rel="prettyPhoto[gallery2]" href='<?php echo $img_source ?>'><span class="image_link"><i class="fa fa-plus fa-3x"></i></span></a>
                        </div>
                    </div>
                    <div class="post_thumbnil">
                    <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                        <?php
                        
                        the_post_thumbnail('portfolio-thumbnail');
                        ?>
<!--    <a rel='prettyPhoto[gallery2]' href="<php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail')); ?>"></a>  
 -->                        <?php } else { ?>
                        <?php 
                        the_post_thumbnail('portfolio-thumbnail');
                        ?>                      
                        <?php
                    }
                    ?>
                    </div>
                    </div>                  
                    <div class="portfolio-caption">
                        <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                        
                    </div>
                </div>
                  <?php
                 endwhile;
                 } ?>
            </div>
        </div>
    </section>
    <?php endif; ?>