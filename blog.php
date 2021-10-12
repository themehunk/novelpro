<?php
/*
  Template Name: Blog Page
 */
?>
<?php get_header();?>
<?php $layout = novelpro_blog_get_layout(); ?>
<?php if (has_post_thumbnail()) { ?>
<div data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" class="page_heading_container_images" style="background: url(<?php echo novelpro_header_thumb(); ?>) repeat center;">   
<?php }else{ ?>
<div class="page_heading_container">
<?php } ?>
  <div class="container">
        <div class="row">
		<div class="col-md-12">
<div class="page_heading_content">
<h1><?php the_title(); ?></h1>
</div>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div id="th-page" class="page-container">
    <div class="container">
        <div class="row">
            <div class="page-content <?php echo $layout; ?>">
<?php if ( $layout != 'blog-no-sidebar' ){ ?>
    <div class="col-md-9">
<?php } else { ?>
    <div class="col-md-12">
<?php } ?>
                    <div class="content-bar gallery"> 
                        <?php the_content(); ?>
                        <?php
                        $limit = get_option('posts_per_page');
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts('showposts=' . $limit . '&paged=' . $paged);
                        $wp_query->is_archive = true;
                        $wp_query->is_home = false;
                        ?>
                        <!--Start Post-->
                        <?php get_template_part('loop', 'blog'); ?>   
                        <div class="clear"></div>
                        <?php NovelPro_pagination(); ?> 
                    </div>
                </div>
		<?php if ( $layout != 'blog-no-sidebar' ) { ?>
        <div class="col-md-3">
        <!--Start Sidebar-->
        <?php get_sidebar(); ?>
        <!--End Sidebar-->
        </div> 
        <?php } ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>