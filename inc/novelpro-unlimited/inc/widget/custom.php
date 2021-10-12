<?php
/*
 *  Custom Widget
 *
 */
// register widget
add_action('widgets_init', 'novelpro_custom_widget');
function novelpro_custom_widget() {
    register_widget( 'novelpro_custom' );
}

// novelpro_custom widget class
class novelpro_custom extends WP_Widget {
    
    function __construct() {
        $widget_ops = array('classname' => 'novelpro-custom');
        parent::__construct('novelpro-custom-widget', __('Novelpro : Custom Widget','novelpro'), $widget_ops);
    }

    function widget($args, $instance) {
        extract($args);

   // widget content
echo $before_widget;
$id = isset($instance['id'])?$instance['id']:'';
$heading = isset($instance['heading'])?$instance['heading']:'';
$subheading = isset($instance['subheading'])?$instance['subheading']:'';
$textar = isset($instance['textar'])?$instance['textar']:''; 
$headingclr = isset($instance['headingclr'])?$instance['headingclr']:'#333'; 
$subheadingclr = isset($instance['subheadingclr'])?$instance['subheadingclr']:'#777';   
$background = isset($instance['background'])?$instance['background']:'color'; 
$parallax = isset($instance['parallax'])?$instance['parallax']:'ON';  
$bgcolor = isset($instance['bgcolor'])?$instance['bgcolor']:'#fff';
$backimage = isset($instance['backimage'])?$instance['backimage']:'';
$backvideo = isset($instance['backvideo'])?$instance['backvideo']:'';
?>
<!-- start-custom-section -->
<div class="clearfix"></div> 

<section <?php 
if($background=='color'){?> style="background:<?php echo $bgcolor; }
?>" 
<?php
$image_url = '';
if($backimage!=''){
          $img_path = NovelPro_image_resize($backimage, 0, 0);
          $image_url = $img_path['url'];
 } 
if($background=='image'){?> style="background-image:url(<?php echo $image_url; ?>) <?php }
?>" 
<?php if($parallax=='ON'){?>
id="<?php echo $id; ?>" class="custom-section plrx_enable" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;"> 
<?php } else{?>
id="<?php echo $id; ?>" class="custom-section"> 
<?php }?>
<div class="over-lay">
<video id="video" poster="<?php echo $image_url; ?>" autoplay="autoplay" loop="loop" id="bgvid">
<?php
$video_url = '';
if($backvideo!=''){
          $vd_path = NovelPro_image_resize($backvideo, 0, 0);
          $video_url = $vd_path['url'];
 } 

 if($background=='video'){ ?>
<source src="<?php echo $video_url; ?>"/> 
<?php } ?>
</video>
<div class="container">
<div class="row">
<div class="title-wrap">
<div class="video-title">
         <div class="col-lg-12 text-center">  
          <h2 class="section-heading" style="color:<?php echo $headingclr;?>"><?php echo $heading;?></h2>
        <h3 class="section-subheading text-muted" style="color:<?php echo $subheadingclr;?>"><?php echo $subheading; ?></h3>
          </div>
                <div class="cstm-cde">
                <?php echo do_shortcode($textar); ?>
                <div>
              
        </div>
</div>
</div>
</div>
</div>  
</section>
<!-- start-custom-section -->

<?php
        echo $after_widget;

    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['id'] = $new_instance['id'];
        $instance['heading'] = $new_instance['heading'];
        $instance['subheading'] = $new_instance['subheading'];
        $instance['textar'] = $new_instance['textar'];
        $instance['headingclr'] = $new_instance['headingclr'];
        $instance['subheadingclr'] = $new_instance['subheadingclr'];
        $instance['background'] = $new_instance['background'];
        $instance['parallax'] = $new_instance['parallax'];
        $instance['bgcolor'] = $new_instance['bgcolor'];
        $instance['backimage'] = $new_instance['backimage'];
        $instance['backvideo'] = $new_instance['backvideo'];
        return $instance;
    }

    function form($instance) {
        if( $instance) {
        $id = $instance['id'];    
        $heading = $instance['heading'];
        $subheading = $instance['subheading'];
        $textar = $instance['textar'];
        $headingclr = $instance['headingclr'];
        $subheadingclr = $instance['subheadingclr'];
        $background = $instance['background'];
        $parallax = $instance['parallax'];
        $bgcolor = $instance['bgcolor'];
        $backimage = $instance['backimage'];
        $backvideo = $instance['backvideo'];

    } else {
        $id = '';
        $heading = '';
        $subheading = '';
        $textar = '';
        $headingclr = '#333';
        $subheadingclr = '#777';
        $background = 'color';
        $parallax = 'ON';
        $bgcolor = '#fff';
        $backimage = '';
        $backvideo = '';
    }
    ?>
        <div class="clearfix"></div>
    <p>
      <label for="<?php echo $this->get_field_id('id'); ?>"><?php _e('Section Id','novelpro'); ?>
      </label>
      <input type="text" class="widefat" name="<?php echo $this->get_field_name('id'); ?>" id="<?php echo $this->get_field_id('id'); ?>" value="<?php  echo $id; ?>" style="margin-top:5px;">
    </p>
   <p>
      <label for="<?php echo $this->get_field_id('heading'); ?>"><?php _e('Heading','novelpro'); ?>
      </label>
      <textarea  name="<?php echo $this->get_field_name('heading'); ?>" id="<?php echo $this->get_field_id('heading'); ?>"  class="widefat" ><?php echo $heading; ?></textarea>
    </p>
   <p>
     <label for="<?php echo $this->get_field_id('subheading'); ?>"><?php _e('Subheading','novelpro'); ?></label>
     <textarea  name="<?php echo $this->get_field_name('subheading'); ?>" id="<?php echo $this->get_field_id('subheading'); ?>"  class="widefat" ><?php echo $subheading; ?></textarea>
    </p>

    <p>
     <label for="<?php echo $this->get_field_id('textar'); ?>"><?php _e('Textarea','novelpro'); ?></label>
     <textarea  name="<?php echo $this->get_field_name('textar'); ?>" id="<?php echo $this->get_field_id('textar'); ?>"  class="widefat" ><?php echo $textar; ?></textarea>
    </p>
    
<p><label for="<?php echo $this->get_field_id('background'); ?>"><?php _e('Select Background','novelpro'); ?></label><br/>
       <input <?php 
if($background=='color'){?> checked <?php } 
  ?> style="margin-right:5px;margin-left:5px;" type="radio" id="role_info" class="widefat role_info" name="<?php echo $this->get_field_name('background'); ?>"  value="color" <?php checked( $background, 'color' ); ?> >color
       <input style="margin-right:5px;margin-left:5px;" type="radio" id="role_info" class="widefat <?php echo $this->get_field_name('background'); ?>" name="<?php echo $this->get_field_name('background'); ?>"  value="image" <?php checked( $background, 'image' ); ?> >image
       <input style="margin-right:5px;margin-left:5px;" type="radio" id="role_info" class="widefat <?php echo $this->get_field_name('background'); ?>" name="<?php echo $this->get_field_name('background'); ?>"  value="video" <?php checked( $background, 'video' ); ?> >video
       </p>

<p><label for="<?php echo $this->get_field_id('backimage'); ?>"><?php _e('Background Image','novelpro'); ?></label>
                <?php
            if ( isset($instance['backimage']) && $instance['backimage'] != '' ) :
                echo '<img class="'.$this->get_field_id('backimage').'" src="' . $instance['backimage'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" /><br />';
            endif;
        ?>
        <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('backimage'); ?>" id="<?php echo $this->get_field_id('backimage'); ?>" value="<?php  echo $backimage; ?>" style="margin-top:5px;">
        <input type="button" class="button button-primary custom_media_button" id="<?php echo $this->get_field_id('backimage'); ?>_button" name="<?php echo $this->get_field_name('backimage'); ?>" value="<?php _e('Upload Image','novelpro'); ?>" style="margin-top:5px;" /></p>

<p><label for="<?php echo $this->get_field_id('backvideo'); ?>"><?php _e('Background Video','novelpro'); ?></label>
                <?php
            if ( isset($instance['backvideo']) && $instance['backvideo'] != '' ) :
                echo '<img class="'.$this->get_field_id('backvideo').'" src="' . $instance['backvideo'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" /><br />';
            endif;
        ?>
        <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('backvideo'); ?>" id="<?php echo $this->get_field_id('backvideo'); ?>" value="<?php  echo $backvideo; ?>" style="margin-top:5px;">
        <input type="button" class="button button-primary custom_media_button" id="<?php echo $this->get_field_id('backvideo'); ?>_button" name="<?php echo $this->get_field_name('backvideo'); ?>" value="<?php _e('Upload Video','novelpro'); ?>" style="margin-top:5px;" /></p>
<!-- color section -->
   <p>
<label for="<?php echo $this->get_field_id( 'headingclr' ); ?>" style="display:block;"><?php _e( 'Heading Color','novelpro' ); ?></label> 
    <input class="widefat color-picker" id="<?php echo $this->get_field_id( 'headingclr' ); ?>" name="<?php echo $this->get_field_name( 'headingclr' ); ?>" type="text" value="<?php echo esc_attr( $headingclr ); ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id( 'subheadingclr' ); ?>" style="display:block;"><?php _e( 'Sub-Heading Color','novelpro' ); ?></label> 
    <input class="widefat color-picker" id="<?php echo $this->get_field_id( 'subheadingclr' ); ?>" name="<?php echo $this->get_field_name( 'subheadingclr' ); ?>" type="text" value="<?php echo esc_attr( $subheadingclr ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'bgcolor' ); ?>" style="display:block;"><?php _e( 'Background Color','novelpro' ); ?></label> 
    <input class="widefat color-picker" id="<?php echo $this->get_field_id( 'bgcolor' ); ?>" name="<?php echo $this->get_field_name( 'bgcolor' ); ?>" type="text" value="<?php echo esc_attr( $bgcolor ); ?>" />
</p>
<p><label for="<?php echo $this->get_field_id('parallax'); ?>"><?php _e('Parallax Option','novelpro'); ?></label><br/>
       <input <?php if($parallax =='ON'){?> checked <?php } ?> style="margin-right:5px;margin-left:5px;" type="radio" id="role_info" class="widefat" name="<?php echo $this->get_field_name('parallax'); ?>"  value="ON" <?php checked( $parallax, 'ON' ); ?> ><?php _e('ON','novelpro'); ?>
       <input style="margin-right:5px;margin-left:5px;" type="radio" id="role_info" class="widefat" name="<?php echo $this->get_field_name('parallax'); ?>"  value="OFF" <?php checked( $background, 'OFF' ); ?> ><?php _e('OFF','novelpro'); ?>
       
       </p>
        <?php
    }
}
?>