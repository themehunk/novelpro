<?php
/*
  Template Name: Fullwidth Page
 */
?>
<?php get_header(); ?>
<?php $layout = novelpro_blog_get_layout(); ?>
<div class="page_heading_container">
  <div class="container">
        <div class="row">
		<div class="col-md-12">
<div class="page_heading_content">
<?php the_title(); ?></h1>
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
                <div class="fullwidth">
				<h1 class="page-title-gall"><?php the_title(); ?></h1>
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