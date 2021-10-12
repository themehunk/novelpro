<?php
/*
  Template Name: Fullwidth Page
 */
?>
<?php get_header(); ?>
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
            <div class="page-content">
             <div class="col-md-12">
              <div class="fullwidth">           
            <?php if (have_posts()) : the_post(); ?>
				<?php the_content(); ?>	
			<?php endif; ?>	  
				</div>
			</div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>