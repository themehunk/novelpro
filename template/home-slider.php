<input type="hidden" id="txt_slidespeed" value="<?php if (get_theme_mod('novelpro_slider_speed','') != '') { echo stripslashes(get_theme_mod('novelpro_slider_speed')); } else { ?>3000<?php } ?>"/> 
<input type="hidden" id="vidi" value="<?php echo get_theme_mod( 'sld_bg_video'); ?>"/> 
<?php 
$bnt_style = get_theme_mod('slidr_button','default');
$bnt_style2 = get_theme_mod('slidr_button2','default');
$i=0;
$poster = get_theme_mod('sld_bg_video_poster',NOVELPRO_POSTER_BG); 
if (get_theme_mod('video_muted')==''){
    $muted = "";
} else{
    $muted = "muted";
}
// lead form setting
if(get_theme_mod('active_leadform')==true){
$leadclass ='novel_sldr_form_active';  
}else{
$leadclass =''; 
}
?>
<?php if (get_theme_mod('sldr_bckg')=='video'){ ?>
<div id="slider-div" class="<?php echo $bnt_style;?> <?php echo $bnt_style2;?> <?php echo $leadclass;?>">
<?php if(get_theme_mod('active_leadform')==true){?>
<div class="sldr-contact-wrap"> 
   <div id="popup1" class="sldr-contactform-show overlay">
    <div class="popup">
         <a class="close" href="#">&times;</a>
        <?php echo do_shortcode(get_theme_mod('active_leadform_shtcd','[lead-form form-id=1 title=Contact Us]'));?>
    </div>
  </div>
  <p><a class="button" href="#popup1"><?php echo get_theme_mod('active_leadform_text','Contact Us');?></a></p>
</div>
<?php }?>
<div id="page-top" class="slider">    
<!-- video -->
<div class="video-over-lay">
<?php if (get_theme_mod('sld_bg_video','')!=='') {
if(novelpro_mobile_user_agent_switch()==false): ?>
<video class="plrx_enable" id="video" playsinline autoplay="autoplay" loop="loop" id="bgvid" <?php echo $muted; ?> poster="<?php echo $poster; ?>">
<source src="<?php echo get_theme_mod( 'sld_bg_video',''); ?>" type="video/mp4" />
</video>
<?php endif ?>
<?php if(novelpro_mobile_user_agent_switch()):?>
<video class="plrx_enable" id="video" playsinline autoplay="autoplay" loop="loop" id="bgvid" <?php echo $muted; ?> poster="<?php echo $poster; ?>">
<source src="#" type="video/mp4" />
</video>
<?php endif ?>
<?php } else { ?>
<video class="plrx_enable" id="video" autoplay="autoplay" loop="loop" id="bgvid" <?php echo $muted; ?> poster="<?php echo $poster; ?>">
</video>
<?php } ?>
<div class="container slider1 container_caption wow fadeInDown" data-wow-duration="2s" >
            <?php 
            if (get_theme_mod('video_slider_heading','') != '') { ?>
                    <h1><a href="<?php
                        if (get_theme_mod('video_slider_link','') != '') {
                            echo get_theme_mod('video_slider_link');
                        }
                        ?>"><?php echo get_theme_mod('video_slider_heading'); ?></a></h1>
                    <?php } else { ?>
                    <h1><a href="#">Business Theme</a></h1>
                <?php } ?> 
            <div class="clearfix"></div>
            <?php if (get_theme_mod('video_slider_desc') != '') { ?>
                    <p>                    
                        <?php echo get_theme_mod('video_slider_desc'); ?>
                    </p>
                <?php } else { ?>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <?php } ?>
<div class="clearfix"></div>
            <div class="main-slider-button">
               <?php if (get_theme_mod('video_button_text','') != '') { ?>
                <a href="<?php
                                if (get_theme_mod('video_button_link','') != '') {
                                    echo stripslashes(get_theme_mod('video_button_link'));
                                } else {
                                    echo "#";
                                }
                                ?>" class="theme-slider-button">
                <?php echo stripslashes(get_theme_mod('video_button_text')); ?>
                </a>
                <?php } else { ?>
                <a href="#" class="theme-slider-button">Buy Now!</a>
                <?php } ?>
                 <?php if (get_theme_mod('video_button2_text','') != '') { ?>
                <a href="<?php
                                if (get_theme_mod('video_button2_link','') != '') {
                                    echo stripslashes(get_theme_mod('video_button2_link'));
                                } else {
                                    echo "#";
                                }
                                ?>" class="theme-slider-button2">
                <?php echo stripslashes(get_theme_mod('video_button2_text')); ?>
                </a>
                <?php } ?>
           </div>  
      </div>
</div>
</div>
<?php $hero_section_hide = get_theme_mod('hide_hero_section','0');
 if($hero_section_hide=='1'){?>
<a class="hero-id" href="#" style="display:none;"><span></span></a>
 <?php }else{ ?> 
 <?php $heroid = get_theme_mod('sectn_scroll','section1');?>
 <a  class="hero-id" href="#<?php echo $heroid; ?>"><span></span></a>
 <?php } ?>
</div>
<!-- video -->
<?php } else if(get_theme_mod('sldr_bckg','image')=='image'){ ?>
<div id="slider-div" class="<?php echo $bnt_style;?> <?php echo $bnt_style2;?> <?php echo $leadclass;?> <?php echo get_theme_mod('sldr_bckg','image');?>">
    <?php if(get_theme_mod('active_leadform')==true){?>
<div class="sldr-contact-wrap">
   
   <div id="popup1" class="sldr-contactform-show overlay">
    <div class="popup">
         <a class="close" href="#">&times;</a>
        <?php echo do_shortcode(get_theme_mod('active_leadform_shtcd','[lead-form form-id=1 title=Contact Us]'));?>
    </div>
  </div>
  <p><a class="button" href="#popup1"><?php echo get_theme_mod('active_leadform_text','Contact Us');?></a></p>
</div>
<?php }?>
<div id="page-top" class="slider">     
<div class="flexslider novelpro_slider">
<ul class="slides">
<!-- #1 Slider -->
<?php if (get_theme_mod('sldr_parallax','on')=='on') { ?>  
<?php if (get_theme_mod('first_slider_image','') != '') { $i++; ?>     
<li class="plrx_enable" style="background:url('<?php echo get_theme_mod('first_slider_image'); ?>')" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;">
     <?php } else { ?>
     <li class="plrx_enable" style="background:url('<?php echo get_template_directory_uri(); ?>/images/slider1.jpg')" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;">
    <?php } ?> 
<?php } else{ ?>
<?php if (get_theme_mod('first_slider_image','') != '') { $i++; ?>     
<li style="background:url('<?php echo get_theme_mod('first_slider_image'); ?>')">
<?php } else { ?>
<li style="background:url('<?php echo get_template_directory_uri(); ?>/images/slider1.jpg')">
    <?php } ?> 
    <?php }?>    
            <div class="slider_overlay"></div>
            <div class="container slider1 container_caption wow fadeInDown" data-wow-duration="2s">
                <?php if (get_theme_mod('first_slider_heading','') != '') { ?>
                    <h1><a href="<?php
                        if (get_theme_mod('first_slider_link','') != '') {
                            echo get_theme_mod('first_slider_link');
                        }
                        ?>"><?php echo get_theme_mod('first_slider_heading'); ?></a></h1>
                    <?php } else { ?>
                    <h1>Business Theme</h1>
                <?php } ?> 
                <div class="clearfix"></div>
                <?php if (get_theme_mod('first_slider_desc') != '') { ?>
                    <p>                    
                        <?php echo get_theme_mod('first_slider_desc'); ?>
                    </p>
                <?php } else { ?>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <?php } ?>
                
                
                <div class="clearfix"></div>
                <div class="main-slider-button">
            <?php if (get_theme_mod('first_button_text','') != '') { ?>
                <a href="<?php
                                if (get_theme_mod('first_button_link','') != '') {
                                    echo stripslashes(get_theme_mod('first_button_link'));
                                } else {
                                    echo "#";
                                }
                                ?>" class="theme-slider-button">
                <?php echo stripslashes(get_theme_mod('first_button_text')); ?>
                </a>
                
                <?php } else { ?>
                <a href="#" class="theme-slider-button">Buy Now!</a>

                <?php } ?>


                <?php if (get_theme_mod('first_button2_text','') != '') { ?>
                <a href="<?php
                                if (get_theme_mod('first_button2_link','') != '') {
                                    echo stripslashes(get_theme_mod('first_button2_link'));
                                } else {
                                    echo "#";
                                }
                                ?>" class="theme-slider-button2">
                <?php echo stripslashes(get_theme_mod('first_button2_text')); ?>
                </a>
                
                <?php } ?>
                
                </div>  
            </div>
        </li>
 <!-- second Slider -->
<?php 
         if (get_theme_mod('second_slider_image','')) { $i++; ?>
            <?php if (get_theme_mod('sldr_parallax','on')=='on') { ?>
            <li class="plrx_enable" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" style="background:url('<?php echo get_theme_mod('second_slider_image'); ?>')">
              <?php } else { ?>
              <li style="background:url('<?php echo get_theme_mod('second_slider_image'); ?>')">
            <?php } ?>

                <div class="slider_overlay"></div>
                <?php if (get_theme_mod('second_slider_heading','') != '') { ?>
                    <div class="container slider2 container_caption">
                        <?php if (get_theme_mod('second_slider_heading','') != '') { ?>
                            <h1><a href="<?php
                                if (get_theme_mod('second_slider_link','') != '') {
                                    echo get_theme_mod('second_slider_link');
                                }
                                ?>"><?php echo stripslashes(get_theme_mod('second_slider_heading')); ?></a></h1>
                                <div class="clearfix"></div>
                                <?php } ?>
                            <p>                    
                                <?php echo stripslashes(get_theme_mod('second_slider_desc')); ?>
                            </p>
                <div class="clearfix"></div>
                <div class="main-slider-button">
            <?php if (get_theme_mod('second_button_text','') != '') { ?>
                <a href="<?php  if (get_theme_mod('second_button_link','') != '') {
                                    echo stripslashes(get_theme_mod('second_button_link'));
                                } else { echo "#"; }
                                ?>" class="theme-slider-button">
                <?php echo stripslashes(get_theme_mod('second_button_text')); ?>
                </a>
                <?php } else { ?>
                <a href="#" class="theme-slider-button">Buy Now!</a>
                <?php } ?>
               <?php if (get_theme_mod('second_button2_text','') != '') { ?>
                <a href="<?php  if (get_theme_mod('second_button2_link','') != '') {
                                    echo stripslashes(get_theme_mod('second_button2_link'));
                                } else { echo "#"; }
                                ?>" class="theme-slider-button2">
                <?php echo stripslashes(get_theme_mod('second_button2_text')); ?>
                </a>
                <?php } ?>

                </div>
                </div>
                <?php } ?>
            </li>
        <?php } ?>
        <!-- Third Slider -->
<?php if (get_theme_mod('third_slider_image','') != '') { $i++; ?>
            <?php if (get_theme_mod('sldr_parallax','on')=='on') { ?>
            <li class="plrx_enable" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" style="background:url('<?php echo get_theme_mod('third_slider_image'); ?>')">
              <?php } else { ?>
               <li style="background:url('<?php echo get_theme_mod('third_slider_image'); ?>')"> 
              <?php } ?>  
                <div class="slider_overlay"></div>
                <?php if (get_theme_mod('third_slider_heading','') != '') { ?>
                    <div class="container slider3 container_caption" >
                        <?php if (get_theme_mod('third_slider_heading','') != '') { ?>
                            <h1><a href="<?php
                                if (get_theme_mod('third_slider_link','') != '') {
                                    echo get_theme_mod('third_slider_link');
                                }
                                ?>"><?php echo stripslashes(get_theme_mod('third_slider_heading')); ?></a></h1>
                                <div class="clearfix"></div>
                                <?php } ?>
                            <p>                    
                                <?php echo stripslashes(get_theme_mod('third_slider_desc')); ?>
                            </p>
                <div class="clearfix"></div>
                <div class="main-slider-button">
            <?php if (get_theme_mod('third_button_text','') != '') { ?>
                <a href="<?php  if (get_theme_mod('third_button_link','') != '') {
                                    echo stripslashes(get_theme_mod('third_button_link'));
                                } else { echo "#"; }
                                ?>" class="theme-slider-button">
                <?php echo stripslashes(get_theme_mod('third_button_text')); ?>
                </a>
                <?php } else { ?>
                <a href="#" class="theme-slider-button">Buy Now!</a>
                <?php } ?>

                 <?php if (get_theme_mod('third_button2_text','') != '') { ?>
                <a href="<?php  if (get_theme_mod('third_button2_link','') != '') {
                                    echo stripslashes(get_theme_mod('third_button2_link'));
                                } else { echo "#"; }
                                ?>" class="theme-slider-button2">
                <?php echo stripslashes(get_theme_mod('third_button2_text')); ?>
                </a>
                <?php } ?>
                </div>
                </div>
                <?php } ?>
            </li>
        <?php } ?>
 <!-- Fourth Slider -->
<?php if (get_theme_mod('fourth_slider_image','') != '') { $i++; ?>
         <?php if (get_theme_mod('sldr_parallax','on')=='on') { ?>    
     <li class="plrx_enable" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" style="background:url('<?php echo get_theme_mod('fourth_slider_image'); ?>')">
                <?php } else { ?>
      <li style="background:url('<?php echo get_theme_mod('fourth_slider_image'); ?>')">    
<?php } ?>  
                <div class="slider_overlay"></div>
                <?php if (get_theme_mod('fourth_slider_heading','') != '') { ?>
                    <div class="container slider4 container_caption" >
                        <?php if (get_theme_mod('fourth_slider_heading','') != '') { ?>
                            <h1><a href="<?php
                                if (get_theme_mod('fourth_slider_link','') != '') {
                                    echo get_theme_mod('fourth_slider_link');
                                }
                                ?>"><?php echo stripslashes(get_theme_mod('fourth_slider_heading')); ?></a></h1>
                                <div class="clearfix"></div>
                                <?php } ?>
                            <p>                    
                                <?php echo stripslashes(get_theme_mod('fourth_slider_desc')); ?>
                            </p>
                <div class="clearfix"></div>
                <div class="main-slider-button">
            <?php if (get_theme_mod('fourth_button_text','') != '') { ?>
                <a href="<?php  if (get_theme_mod('fourth_button_link','') != '') {
                                    echo stripslashes(get_theme_mod('fourth_button_link'));
                                } else { echo "#"; }
                                ?>" class="theme-slider-button">
                <?php echo stripslashes(get_theme_mod('fourth_button_text')); ?>
                </a>
                <?php } else { ?>
                <a href="#" class="theme-slider-button">Buy Now!</a>
                <?php } ?>

                <?php if (get_theme_mod('fourth_button2_text','') != '') { ?>
                <a href="<?php  if (get_theme_mod('fourth_button2_link','') != '') {
                                    echo stripslashes(get_theme_mod('fourth_button2_link'));
                                } else { echo "#"; }
                                ?>" class="theme-slider-button2">
                <?php echo stripslashes(get_theme_mod('fourth_button2_text')); ?>
                </a>
                <?php } ?>
                </div>
                </div>
                <?php } ?>
            </li>
        <?php } ?>
<!-- Fifth Slider -->
<?php if (get_theme_mod('fifth_slider_image','') != '') { $i++; ?>
  <?php if (get_theme_mod('sldr_parallax','on')=='on') { ?>          
<li class="plrx_enable" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" style="background:url('<?php echo get_theme_mod('fifth_slider_image'); ?>')">
      <?php } else { ?>
<li style="background:url('<?php echo get_theme_mod('fifth_slider_image'); ?>')">

      <?php } ?>           
                <div class="slider_overlay"></div>
                <?php if (get_theme_mod('fifth_slider_heading','') != '') { ?>
                    <div class="container slider5 container_caption">
                        <?php if (get_theme_mod('fifth_slider_heading','') != '') { ?>
                            <h1><a href="<?php
                                if (get_theme_mod('fifth_slider_link','') != '') {
                                    echo get_theme_mod('fifth_slider_link');
                                }
                                ?>"><?php echo stripslashes(get_theme_mod('fifth_slider_heading')); ?></a></h1>
                                <div class="clearfix"></div>
                                <?php } ?>
                            <?php if (get_theme_mod('fifth_slider_desc','') != '') { ?>
                            <p>                    
                                <?php echo stripslashes(get_theme_mod('fifth_slider_desc')); ?>
                            </p>
                            <?php } ?>  
                <div class="clearfix"></div>
                <div class="main-slider-button">
            <?php if (get_theme_mod('fifth_button_text','') != '') { ?>
                <a href="<?php  if (get_theme_mod('fifth_button_link','') != '') {
                                    echo stripslashes(get_theme_mod('fifth_button_link'));
                                } else { echo "#"; }
                                ?>" class="theme-slider-button">
                <?php echo stripslashes(get_theme_mod('fifth_button_text')); ?>
                </a>
                <?php } else { ?>
                <a href="#" class="theme-slider-button">Buy Now!</a>
                <?php } ?>

                <?php if (get_theme_mod('fifth_button2_text','') != '') { ?>
                <a href="<?php  if (get_theme_mod('fifth_button2_link','') != '') {
                                    echo stripslashes(get_theme_mod('fifth_button2_link'));
                                } else { echo "#"; }
                                ?>" class="theme-slider-button2">
                <?php echo stripslashes(get_theme_mod('fifth_button2_text')); ?>
                </a>
                <?php }?>
                </div>
                </div>
                <?php } ?>
            </li>
        <?php } ?>
<!-- Sixth slider -->
 <?php if (get_theme_mod('sixth_slider_image','') != '') { $i++; ?>
  <?php if (get_theme_mod('sldr_parallax','on')=='on') { ?>          
            <li class="plrx_enable" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" style="background:url('<?php echo get_theme_mod('sixth_slider_image'); ?>')">
     <?php } else { ?>
     <li style="background:url('<?php echo get_theme_mod('sixth_slider_image'); ?>')">   
     <?php } ?>           
                <div class="slider_overlay"></div>
                <?php if (get_theme_mod('sixth_slider_heading','') != '') { ?>
                    <div class="container slider6 container_caption">
                        <?php if (get_theme_mod('sixth_slider_heading','') != '') { ?>
                            <h1><a href="<?php
                                if (get_theme_mod('sixth_slider_link','') != '') {
                                    echo get_theme_mod('sixth_slider_link');
                                }
                                ?>"><?php echo stripslashes(get_theme_mod('sixth_slider_heading')); ?></a></h1>
                                <div class="clearfix"></div>
                                <?php } ?>
                            <?php if (get_theme_mod('sixth_slider_desc','') != '') { ?>
                            <p>                    
                                <?php echo stripslashes(get_theme_mod('sixth_slider_desc')); ?>
                            </p>
                            <?php } ?>  
                <div class="clearfix"></div>
                <div class="main-slider-button">
            <?php if (get_theme_mod('sixth_button_text','') != '') { ?>
                <a href="<?php  if (get_theme_mod('sixth_button_link','') != '') {
                                    echo stripslashes(get_theme_mod('sixth_button_link'));
                                } else { echo "#"; }
                                ?>" class="theme-slider-button">
                <?php echo stripslashes(get_theme_mod('sixth_button_text')); ?>
                </a>
                <?php } else { ?>
                <a href="#" class="theme-slider-button">Buy Now!</a>
                <?php } ?>

                <?php if (get_theme_mod('sixth_button2_text','') != '') { ?>
                <a href="<?php  if (get_theme_mod('sixth_button2_link','') != '') {
                                    echo stripslashes(get_theme_mod('sixth_button2_link'));
                                } else { echo "#"; }
                                ?>" class="theme-slider-button2">
                <?php echo stripslashes(get_theme_mod('sixth_button2_text')); ?>
                </a>
                <?php }?>
                </div>
                </div>
                <?php } ?>
            </li>
        <?php } ?>
            </ul>
           </div>
          </div>
           <?php $hero_section_hide = get_theme_mod('hide_hero_section','0');
 if($hero_section_hide=='1'){?>
<a class="hero-id" href="#" style="display:none;"><span></span></a>
 <?php }else{ ?> 
 <?php $heroid = get_theme_mod('sectn_scroll','section1');?>
 <a  class="hero-id" href="#<?php echo $heroid; ?>"><span></span></a>
 <?php } ?>
        </div>
   <?php }else if(get_theme_mod('sldr_bckg')=='externalplugin'){?>
        <div id="hero-slide-plugin" class="top-hero hero-slide-plugin">
         <?php $front_extrnl_shrcd = get_theme_mod('front_extrnl_shrcd');
         echo do_shortcode($front_extrnl_shrcd); ?>
         </div> 
   <?php } ?>

<div class="clearfix"></div>
<input type="hidden" id="novelpro_slidernav" value="<?php echo esc_attr($i); ?>" />