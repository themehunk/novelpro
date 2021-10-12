
<?php if(!th_checkbox_filter('ribbon','home_on_off')) : ?>	
<?php $rbn_bg_background = get_theme_mod('ribn_chs_','color');?>	
<?php $rbn_video_image = get_theme_mod('rbn_video_image','');?>	
<?php $rbn_video = get_theme_mod('rbn_bg_vd');?>		
<!-- start ribbon-video -->
<div class="clearfix"></div>
<?php 
if (get_theme_mod('rbn_parallax','on')=='on') { ?> 
<section id="section10" class="video-ribbon plrx_enable" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;">
<?php } else {?>
<section id="section10" class="video-ribbon">	
<?php } ?>	
<div class="over-lay">
<?php if($rbn_bg_background =='video'){
if(novelpro_mobile_user_agent_switch()==false): ?>
<video id="video" preload="yes" autoplay="autoplay" loop="loop" id="bgvid" poster="<?php echo $rbn_video_image; ?>" src="<?php echo $rbn_video; ?>" controls="true" >
<source src="<?php echo $rbn_video; ?>" type="video/mp4"/> 	
</video>
<?php endif ?>
<?php if(novelpro_mobile_user_agent_switch()):?>
<video id="video" preload="yes" poster="<?php echo $rbn_video_image; ?>" autoplay="autoplay" loop="loop" id="bgvid">
<source src="#" type="video/mp4"/> 
</video>
<?php endif ?>
<?php } ?>
<div class="title-wrap">
<div class="video-title">
<?php if (get_theme_mod('ribn_head_','')!= '') { ?>
<h2><?php echo stripslashes(get_theme_mod('ribn_head_')); ?></h2>
<?php } else { ?>
<h2>Video Background Show Your Website Visually</h2>
<?php } ?>
<?php if (get_theme_mod('ribn_btn_txt','') != '') { ?>
<a href="<?php echo get_theme_mod('ribn_btn_link') ; ?>" class="btn-video"><?php echo stripslashes(get_theme_mod('ribn_btn_txt','')); ?></a>
<?php } else { ?>
<a href="#" class="btn-video">Button</a>	
<?php } ?>	
</div>
</div>
</div>	
</section>
<!-- end ribbon-video -->
<?php endif; ?>