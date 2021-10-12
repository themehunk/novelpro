<?php
function novelpro_service_content( $service_content_id, $default_name ) {
//passing the seeting ID and Default Values
$i = 1;	
	$default= Novelpro_Defaults_Models::instance()->$default_name();
	$novelpro_service_content= get_theme_mod( $service_content_id, $default );
		if ( ! empty( $novelpro_service_content ) ) :
			$novelpro_service_content = json_decode( $novelpro_service_content );
			if ( ! empty( $novelpro_service_content ) ) {
				foreach ( $novelpro_service_content as $features_item ) :
					$image    = ! empty( $features_item->image_url ) ? apply_filters( 'novelpro_translate_single_string', $features_item->image_url, 'Features section' ) : '';
					$icon   = ! empty( $features_item->icon_value ) ? apply_filters( 'novelpro_translate_single_string', $features_item->icon_value, 'Features section' ) : '';
					$title  = ! empty( $features_item->title ) ? apply_filters( 'novelpro_translate_single_string', $features_item->title, 'Features section' ) : '';
					$text   = ! empty( $features_item->text ) ? apply_filters( 'novelpro_translate_single_string', $features_item->text, 'Features section' ) : '';
					$link   = ! empty( $features_item->link ) ? apply_filters( 'novelpro_translate_single_string', $features_item->link, 'Features section' ) : '';
					$color2  = ! empty( $features_item->color2 ) ? $features_item->color2 : '';
					$titleclr  = ! empty( $features_item->titleclr ) ? $features_item->titleclr : '';
					$textclr  = ! empty( $features_item->textclr ) ? $features_item->textclr : '';
					$bgclr  = ! empty( $features_item->bgclr ) ? $features_item->bgclr : '';
					?>

             <div class="col-md-4 sevice3">
			<div class="sevice-col-wrapper">
               <a href="<?php echo esc_url($link); ?>"> 
               	<?php 
                if ($image != '') { 
               $img_path = NovelPro_image_resize($image, 360, 280);
          	   $image_url = $img_path['url']; ?>
                <img src="<?php echo esc_url($image_url); ?>"/>
                <?php	}
                else{ ?>
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary" style="color:<?php echo esc_attr($bgclr); ?>"></i>
                    <i class="<?php echo "fa ".esc_attr($icon); ?> fa-stack-1x fa-inverse" style="color:<?php echo esc_attr($color2); ?>;"></i>
                </span>
                <?php	}
                  ?>
              </a>
                <a href="<?php echo esc_url($link); ?>"><h4 class="service-heading" style="color:<?php echo esc_attr($titleclr); ?>;"><?php echo esc_html($title); ?></h4></a>
                <p class="text-muted" style="color:<?php echo esc_attr($textclr); ?>;"><?php echo esc_html($text); ?></p>
            </div>
            </div>

				<?php	
				$i++;
				endforeach;			
			}// End if().
		
	endif;	
}

function novelpro_testimonial_content( $testimonial_content_id, $default_name ) {
//passing the seeting ID and Default Values
	$default= Novelpro_Defaults_Models::instance()->$default_name();
	$novelpro_testimonial_content= get_theme_mod( $testimonial_content_id, $default );
		if ( ! empty( $novelpro_testimonial_content ) ) :
			$novelpro_testimonial_content = json_decode( $novelpro_testimonial_content );
			if ( ! empty( $novelpro_testimonial_content ) ) {
				foreach ( $novelpro_testimonial_content as $testimonial_item ) :
					$image    = ! empty( $testimonial_item->image_url ) ? apply_filters( 'novelpro_translate_single_string', $testimonial_item->image_url, 'Testimonials section' ) : '';
					$title  = ! empty( $testimonial_item->title ) ? apply_filters( 'novelpro_translate_single_string', $testimonial_item->title, 'Testimonials section' ) : '';
					$text   = ! empty( $testimonial_item->text ) ? apply_filters( 'novelpro_translate_single_string', $testimonial_item->text, 'Testimonials section' ) : '';
					$link   = ! empty( $testimonial_item->link ) ? apply_filters( 'novelpro_translate_single_string', $testimonial_item->link, 'Testimonials section' ) : '';
					$titleclr  = ! empty( $testimonial_item->titleclr ) ? $testimonial_item->titleclr : '';
					$textclr  = ! empty( $testimonial_item->textclr ) ? $testimonial_item->textclr : '';
					$borderclr  = ! empty( $testimonial_item->borderclr ) ? $testimonial_item->borderclr : '';

					?>		

		<li>
        <?php  if($image!=''){
           $img_path = NovelPro_image_resize($image, 148, 148); ?>
         <div class="testi-img" style="border-color:<?php echo esc_attr($borderclr); ?>"> <img src="<?php echo esc_url($image); ?>"></div> 
         <?php } ?>
         <div class="bx-caption">
        <span>
        <a class='arrow' style="color:<?php echo esc_attr($titleclr); ?>"></a>
        <p style="color:<?php echo esc_attr($textclr); ?>"> <?php echo esc_html($text); ?> </p>
        <a style="color:<?php echo esc_attr($titleclr); ?>" class='testimonial' href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></span>
        </div>
        </li>
		
				<?php	
				endforeach;			
			}// End if().
		
	endif;	
}

function novelpro_teams_content( $team_content_id, $default_name ) {
//passing the seeting ID and Default Values
$i = 1;
	$default= Novelpro_Defaults_Models::instance()->$default_name();
	$novelpro_teams_content= get_theme_mod( $team_content_id, $default );
		if ( ! empty( $novelpro_teams_content ) ) :
			$novelpro_teams_content = json_decode( $novelpro_teams_content );
			if ( ! empty( $novelpro_teams_content ) ) {
				foreach ( $novelpro_teams_content as $team_item ) :
					$image    = ! empty( $team_item->image_url ) ? apply_filters( 'novelpro_translate_single_string', $team_item->image_url, 'Team section' ) : '';
					$title  = ! empty( $team_item->title ) ? apply_filters( 'novelpro_translate_single_string', $team_item->title, 'Team section' ) : '';
					$subtitle = ! empty( $team_item->subtitle ) ? apply_filters( 'novelpro_translate_single_string', $team_item->subtitle, 'Team section' ) : '';
					$text   = ! empty( $team_item->text ) ? apply_filters( 'novelpro_translate_single_string', $team_item->text, 'Team section' ) : '';
					$link   = ! empty( $team_item->link ) ? apply_filters( 'novelpro_translate_single_string', $team_item->link, 'Team section' ) : '';
					$titleclr  = ! empty( $team_item->titleclr ) ? $team_item->titleclr : '';
					$textclr  = ! empty( $team_item->textclr ) ? $team_item->textclr : '';
					$buttonbg  = ! empty( $team_item->buttonbg ) ? $team_item->buttonbg : '';
					$buttonhvrbg  = ! empty( $team_item->buttonhvrbg ) ? $team_item->buttonhvrbg : '';
					$buttonclr  = ! empty( $team_item->buttonclr ) ? $team_item->buttonclr : '';
					$buttonhvrclr  = ! empty( $team_item->buttonhvrclr ) ? $team_item->buttonhvrclr : '';
					?>
					
					<style>
					.team-member.teamli<?php echo ($i); ?> ul.social-buttons li a:hover{
						background: <?php echo ($buttonhvrbg); ?>!important;
						color:<?php echo ($buttonhvrclr); ?>!important;
					}
					</style>
					 <div class="col-sm-4 team3">
                <div class="team-member teamli<?php echo esc_attr($i); ?>">
                 <div class="team-img">
                <a href="<?php echo esc_url($link); ?>">
                    <img src="<?php echo esc_url($image); ?>" class="img-responsive img-circle" alt="">
                    </a>   
                </div>
                    <a href="<?php echo esc_url($link); ?>"><h4 style="color:<?php echo esc_attr($titleclr); ?>"><?php echo esc_html($title); ?></h4></a>
                    <p class="text-muted" style="color:<?php echo esc_attr($titleclr); ?>"><?php echo esc_html($subtitle); ?></p>
                    <p class="team-desc" style="color:<?php echo esc_attr($textclr); ?>"> <?php echo esc_html($textclr); ?></p>
                    <ul class="list-inline social-buttons">
                 <?php 
if ( ! empty( $team_item->social_repeater ) ) :
$icons = html_entity_decode( $team_item->social_repeater );
$icons_decoded = json_decode( $icons, true );
if ( ! empty( $icons_decoded ) ) :
				foreach ($icons_decoded as $key => $value) {
				$social_icon = ! empty( $value['icon'] ) ? apply_filters( '
					novelpro_translate_single_string', $value['icon'], 'Team section' ) : '';
					$social_link = ! empty( $value['link'] ) ? apply_filters( 'novelpro_translate_single_string', $value['link'], 'Team section' ) : '';	
					if ( ! empty( $social_icon ) ) {
					?>

						<li><a style="background-color:<?php echo esc_attr($buttonbg);?>;color:<?php echo esc_attr($buttonclr); ?>;"href="<?php echo esc_url($social_link);?>" target="_blank" ><i class="fa <?php echo esc_attr($social_icon);?>"></i></a></li>
						<?php
					}
						}
						endif;
						endif;
						?>
                    </ul>
                    
                    <!-- Third social icon -->
                    
                </div>
            </div>


				<?php	
				$i++;
				endforeach;			
			}// End if().
		
	endif;	
}

function novelpro_pricing_content( $novelpro_pricing_content_id, $default_name ) {
//passing the seeting ID and Default Values
$i = 1;
$popular ='';
	$default= Novelpro_Defaults_Models::instance()->$default_name();
	$novelpro_pricing_content= get_theme_mod( $novelpro_pricing_content_id, $default );
	if ( ! empty( $novelpro_pricing_content ) ) :
		$novelpro_pricing_content = json_decode( $novelpro_pricing_content );

		if ( ! empty( $novelpro_pricing_content ) ) {
			foreach ( $novelpro_pricing_content as $pricing_item ) :

				$title    = ! empty( $pricing_item->title ) ? apply_filters( 'novelpro_translate_single_string', $pricing_item->title, 'Pricing section' ) : '';

				$subtitle    = ! empty( $pricing_item->subtitle ) ? apply_filters( 'novelpro_translate_single_string', $pricing_item->subtitle, 'Pricing section' ) : '';

				$price    = ! empty( $pricing_item->price ) ? apply_filters( 'novelpro_translate_single_string', $pricing_item->price, 'Pricing section' ) : '';
						
				$subtitle = ! empty( $pricing_item->subtitle ) ? apply_filters( 'novelpro_translate_single_string', $pricing_item->subtitle, 'Pricing section' ) : '';
						
				$text     = ! empty( $pricing_item->text ) ? apply_filters( 'novelpro_translate_single_string', $pricing_item->text, 'Pricing section' ) : '';
						
				$link     = ! empty( $pricing_item->link ) ? apply_filters( 'novelpro_translate_single_string', $pricing_item->link, 'Pricing section' ) : '';
				$text2     = ! empty( $pricing_item->text2 ) ? apply_filters( 'novelpro_translate_single_string', $pricing_item->text2, 'Pricing section' ) : '';
				$bgclr  = ! empty( $pricing_item->bgclr ) ? $pricing_item->bgclr : '';

				$buttonclr  = ! empty( $pricing_item->buttonclr ) ? $pricing_item->buttonclr : '';
				
				$buttonhvrclr  = ! empty( $pricing_item->buttonhvrclr ) ? $pricing_item->buttonhvrclr : '';

				$buttonbg  = ! empty( $pricing_item->buttonbg ) ? $pricing_item->buttonbg : '';
				
				$buttonhvrbg  = ! empty( $pricing_item->buttonhvrbg ) ? $pricing_item->buttonhvrbg : '';

				$titleclr  = ! empty( $pricing_item->titleclr ) ? $pricing_item->titleclr : '';

				$textclr  = ! empty( $pricing_item->textclr ) ? $pricing_item->textclr : ''; 

				$priceclr  = ! empty( $pricing_item->priceclr ) ? $pricing_item->priceclr : '';

				$popular_pricing = get_theme_mod('novelpro_pricing_popular', 2);

				if ($i == $popular_pricing) {
					$popular = 'featured';
				} 
				else{
					$popular = '';
				}
				?>
				<style>
					.price-post.pricinglist<?php echo ($i); ?>:hover .plan-select a{
						background:<?php echo ($buttonhvrbg); ?>;
						color:<?php echo ($buttonhvrclr); ?>;
					}
				</style>
				 <li class="price-post pricinglist<?php echo esc_attr($i); ?>">
                          <div class="plan <?php echo esc_attr($popular); ?> wow fadeInRight" data-wow-duration="2s">
                            <div class="header-package" style="background:<?php echo esc_attr($bgclr); ?>;">
                              <span class="plan-title"><h3 style="color:<?php echo esc_attr($titleclr); ?>;"><?php echo esc_html($title); ?></h3></span>
                              <span class="price" style="color:<?php echo esc_attr($priceclr); ?>;"><?php echo esc_html($price); ?><span class="sup-down"><?php echo esc_html($subtitle); ?></span></span>
                            </div>
                            <ul class="plan-features">
                            	<li style="color:<?php echo esc_attr($textclr); ?>;">
                              <?php echo html_entity_decode($text);?>
                          		</li>
                              </ul><!-- plan-features -->
                              <div class="plan-select"><a href="<?php echo esc_url($link); ?>" style="background:<?php echo esc_attr($buttonbg); ?>;color:<?php echo esc_attr($buttonclr); ?>;"><?php echo esc_html($text2); ?></a></div>
                              </div><!-- plan -->
                              </li><!-- price-post -->

            <?php
            $i++;
			endforeach;
		}
	endif;
}

function novelpro_brand_content( $brand_content_id, $default_name ) {
//passing the seeting ID and Default Values
	$default= Novelpro_Defaults_Models::instance()->$default_name();
	$novelpro_brand_content= get_theme_mod( $brand_content_id, $default );
		if ( ! empty( $novelpro_brand_content ) ) :
			$novelpro_brand_content = json_decode( $novelpro_brand_content );
			if ( ! empty( $novelpro_brand_content ) ) {
				foreach ( $novelpro_brand_content as $brand_item ) :
					$image    = ! empty( $brand_item->image_url ) ? apply_filters( 'novelpro_translate_single_string', $brand_item->image_url, 'Brand section' ) : '';
					$link   = ! empty( $brand_item->link ) ? apply_filters( 'novelpro_translate_single_string', $brand_item->link, 'Brand section' ) : '';
					?>

					 <div class="item">
					 <a href="<?php echo esc_url($link); ?>"><img src="<?php echo esc_url($image); ?>"/></a></div>
				
		
				<?php	
				endforeach;			
			}// End if().
		
	endif;	
}

