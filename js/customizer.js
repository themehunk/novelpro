jQuery(document).ready(function() {

    /* === Checkbox Multiple Control === */
    jQuery( '.customize-control-checkbox-multiple input[type="checkbox"]' ).on(
        'change',
        function() {
   // alert('');
            checkbox_values = jQuery( this ).parents( '.customize-control' ).find( 'input[type="checkbox"]:checked' ).map(
                function() {
                    return this.value;
                }
            ).get().join( ',' );

            jQuery( this ).parents( '.customize-control' ).find( 'input[type="hidden"]' ).val( checkbox_values ).trigger( 'change' );
        }
    );

    // section sorting
    jQuery( "#sortable" ).sortable({ 
            placeholder: "ui-sortable-placeholder" 
    });

    jQuery( "#sortable" ).sortable({
        cursor: 'move',
        opacity: 0.65,
        stop: function ( event, ui){
        var data = jQuery(this).sortable('toArray');
            //  console.log(data); // This should print array of IDs, but returns empty string/array      
            jQuery( this ).parents( '.customize-control').find( 'input[type="hidden"]' ).val( data ).trigger( 'change' );
        }
    });
// hide/show slider customizer option
// HEADER-DEFAULT-SETTING-HIDE
jQuery('#customize-control-header_textcolor, #customize-control-header_image').css('display','none' );
wp.customize('hide_hero_section', function( value ) {
        var filter_type = value.bind( function( to ) {
        if(to=='0'){
             jQuery( '#customize-control-sectn_scroll' ).css('display','block' );
            } else if(to=='1'){
             jQuery( '#customize-control-sectn_scroll' ).css('display','none' );
            }
        } );
        if(filter_type()=='0'){
               jQuery( '#customize-control-sectn_scroll' ).css('display','block' );
               
            } else if(filter_type()=='1'){
                jQuery( '#customize-control-sectn_scroll' ).css('display','none' );

            }   
    } );
wp.customize('sldr_bckg', function( value ) {
        var filter_type = value.bind( function( to ) {
        if(to=='image'){
             jQuery( '#customize-control-sldr_parallax' ).css('display','block' );
             jQuery( '#customize-control-front_extrnl_shrcd' ).css('display','none' );
             jQuery( '#customize-control-hide_hero_section' ).css('display','block' );
             jQuery( '#customize-control-sectn_scroll' ).css('display','block' );
             jQuery( '#customize-control-mask_ovrlay_img' ).css('display','block' );
             jQuery( '#customize-control-video_setting_redirect' ).css('display','none' );
             jQuery( '#customize-control-slide_setting_redirect' ).css('display','block' );
             jQuery( '#customize-control-slidr_button,#customize-control-slidr_button2' ).css('display','block' );
             jQuery( '#customize-control-active_leadform,#customize-control-active_leadform_shtcd,#customize-control-active_leadform_text' ).css('display','block' );
            } else if(to=='video'){
             jQuery( '#customize-control-sldr_parallax' ).css('display','none' );
              jQuery( '#customize-control-front_extrnl_shrcd' ).css('display','none' );
              jQuery( '#customize-control-hide_hero_section' ).css('display','block' );
             jQuery( '#customize-control-sectn_scroll' ).css('display','block' );
             jQuery( '#customize-control-mask_ovrlay_img' ).css('display','block' );
             jQuery( '#customize-control-video_setting_redirect' ).css('display','block' );
             jQuery( '#customize-control-slide_setting_redirect' ).css('display','none' );
             jQuery( '#customize-control-slidr_button,#customize-control-slidr_button2' ).css('display','block' );
             jQuery( '#customize-control-active_leadform,#customize-control-active_leadform_shtcd,#customize-control-active_leadform_text' ).css('display','block' );
            }
            else if(to=='externalplugin'){
             jQuery( '#customize-control-front_extrnl_shrcd' ).css('display','block' );
             jQuery( '#customize-control-sldr_parallax' ).css('display','none' );
             jQuery( '#customize-control-hide_hero_section' ).css('display','none' );
             jQuery( '#customize-control-sectn_scroll' ).css('display','none' );
             jQuery( '#customize-control-mask_ovrlay_img' ).css('display','none' );
             jQuery( '#customize-control-video_setting_redirect' ).css('display','none' );
             jQuery( '#customize-control-slide_setting_redirect' ).css('display','none' );
             jQuery( '#customize-control-slidr_button,#customize-control-slidr_button2' ).css('display','none' );
             jQuery( '#customize-control-active_leadform,#customize-control-active_leadform_shtcd,#customize-control-active_leadform_text' ).css('display','none' );
            }
        } );
        if(filter_type()=='image'){
               jQuery('#customize-control-sldr_parallax' ).css('display','block' );
                jQuery( '#customize-control-front_extrnl_shrcd' ).css('display','none' );
                jQuery( '#customize-control-hide_hero_section' ).css('display','block' );
             jQuery( '#customize-control-sectn_scroll' ).css('display','block' );
             jQuery( '#customize-control-mask_ovrlay_img' ).css('display','block' );
             jQuery( '#customize-control-video_setting_redirect' ).css('display','none' );
             jQuery( '#customize-control-slide_setting_redirect' ).css('display','block' );
             jQuery( '#customize-control-slidr_button,#customize-control-slidr_button2' ).css('display','block' );
             jQuery( '#customize-control-active_leadform,#customize-control-active_leadform_shtcd,#customize-control-active_leadform_text' ).css('display','block' );
               
            } else if(filter_type()=='video'){
                jQuery('#customize-control-sldr_parallax' ).css('display','none' );
                 jQuery( '#customize-control-front_extrnl_shrcd' ).css('display','none' );
                 jQuery( '#customize-control-hide_hero_section' ).css('display','block' );
             jQuery( '#customize-control-sectn_scroll' ).css('display','block' );
             jQuery( '#customize-control-mask_ovrlay_img' ).css('display','block'); 
             jQuery( '#customize-control-video_setting_redirect' ).css('display','block' ); 
             jQuery( '#customize-control-slide_setting_redirect' ).css('display','none' );            
             jQuery( '#customize-control-slidr_button,#customize-control-slidr_button2' ).css('display','block' );
             jQuery( '#customize-control-active_leadform,#customize-control-active_leadform_shtcd' ).css('display','block' );

            } else if(filter_type()=='externalplugin'){
                 jQuery('#customize-control-sldr_parallax' ).css('display','none' );
                 jQuery('#customize-control-front_extrnl_shrcd' ).css('display','block' );
                 jQuery( '#customize-control-hide_hero_section' ).css('display','none' );
                 jQuery( '#customize-control-sectn_scroll' ).css('display','none' );
                 jQuery( '#customize-control-mask_ovrlay_img' ).css('display','none' );
                 jQuery( '#customize-control-video_setting_redirect' ).css('display','none' );
                 jQuery( '#customize-control-slide_setting_redirect' ).css('display','none' );
                 jQuery( '#customize-control-slidr_button,#customize-control-slidr_button2' ).css('display','none' );
                 jQuery( '#customize-control-active_leadform,#customize-control-active_leadform_shtcd,#customize-control-active_leadform_text' ).css('display','none' );

            }  
    } );
// SERVICES
wp.customize('services_bg_background', function( value ) {
        var filter_type = value.bind( function( to ) {
        if(to=='color'){
             jQuery( '#customize-control-services_bg_image' ).css('display','none' );
             jQuery( '#customize-control-services_parallax' ).css('display','none' );
            } else if(to=='image'){
             jQuery( '#customize-control-services_bg_image' ).css('display','block' );
             jQuery( '#customize-control-services_parallax' ).css('display','block' );
            }
        } );
        if(filter_type()=='color'){
            jQuery('#customize-control-services_bg_image' ).css('display','none' );
            jQuery( '#customize-control-services_parallax' ).css('display','none' );
               
            } else if(filter_type()=='image'){
            jQuery('#customize-control-services_bg_image' ).css('display','block' );
            jQuery( '#customize-control-services_parallax' ).css('display','block' );

            }   
    } );
// portfolio
wp.customize('portfolio_bg_background', function( value ) {
        var filter_type = value.bind( function( to ) {
        if(to=='color'){
            jQuery( '#customize-control-portfolio_bg_image' ).css('display','none' );
            jQuery( '#customize-control-portfolio_parallax' ).css('display','none' );
            } else if(to=='image'){
            jQuery( '#customize-control-portfolio_bg_image' ).css('display','block' );
            jQuery( '#customize-control-portfolio_parallax' ).css('display','block' );
            }
        } );
        if(filter_type()=='color'){
            jQuery('#customize-control-portfolio_bg_image' ).css('display','none' );
            jQuery( '#customize-control-portfolio_parallax' ).css('display','none' );
               
            }else if(filter_type()=='image'){
            jQuery('#customize-control-portfolio_bg_image' ).css('display','block');
            jQuery( '#customize-control-portfolio_parallax' ).css('display','block');
            }   
    } );

// testimonial
wp.customize('testimonial_bg_background', function( value ) {
        var filter_type = value.bind( function( to ) {
        if(to=='color'){
            jQuery( '#customize-control-testimonial_bg_image' ).css('display','none' );
            jQuery( '#customize-control-testimonial_parallax' ).css('display','none' );
            } else if(to=='image'){
            jQuery( '#customize-control-testimonial_bg_image' ).css('display','block' );
            jQuery( '#customize-control-testimonial_parallax' ).css('display','block' );
            }
        } );
        if(filter_type()=='color'){
            jQuery('#customize-control-testimonial_bg_image' ).css('display','none' );
            jQuery('#customize-control-testimonial_parallax' ).css('display','none' );
               
            }else if(filter_type()=='image'){
            jQuery('#customize-control-testimonial_bg_image' ).css('display','block');
            jQuery('#customize-control-testimonial_parallax' ).css('display','block');
            }   
    } );
// blog
wp.customize('blog_bg_background', function( value ) {
        var filter_type = value.bind( function( to ) {
        if(to=='color'){
            jQuery( '#customize-control-blog_bg_image' ).css('display','none' );
            jQuery( '#customize-control-blog_parallax' ).css('display','none' );
            } else if(to=='image'){
            jQuery( '#customize-control-blog_bg_image' ).css('display','block' );
            jQuery( '#customize-control-blog_parallax' ).css('display','block' );
            }
        } );
        if(filter_type()=='color'){
            jQuery('#customize-control-blog_bg_image' ).css('display','none' );
            jQuery('#customize-control-blog_parallax' ).css('display','none' );
               
            }else if(filter_type()=='image'){
            jQuery('#customize-control-blog_bg_image' ).css('display','block');
            jQuery('#customize-control-blog_parallax' ).css('display','block');
            }   
    } );
// team
wp.customize('team_bg_background', function( value ) {
        var filter_type = value.bind( function( to ) {
        if(to=='color'){
            jQuery( '#customize-control-team_bg_image' ).css('display','none' );
            jQuery( '#customize-control-team_parallax' ).css('display','none' );
            } else if(to=='image'){
            jQuery( '#customize-control-team_bg_image' ).css('display','block' );
            jQuery( '#customize-control-team_parallax' ).css('display','block' );
            }
        } );
        if(filter_type()=='color'){
            jQuery('#customize-control-team_bg_image' ).css('display','none' );
            jQuery('#customize-control-team_parallax' ).css('display','none' );
               
            }else if(filter_type()=='image'){
            jQuery('#customize-control-team_bg_image' ).css('display','block');
            jQuery('#customize-control-team_parallax' ).css('display','block');
            }   
    } );
// price
wp.customize('price_bg_background', function( value ) {
        var filter_type = value.bind( function( to ) {
        if(to=='color'){
            jQuery( '#customize-control-price_bg_image' ).css('display','none' );
            jQuery( '#customize-control-price_parallax' ).css('display','none' );
            } else if(to=='image'){
            jQuery( '#customize-control-price_bg_image' ).css('display','block' );
            jQuery( '#customize-control-price_parallax' ).css('display','block' );
            }
        } );
        if(filter_type()=='color'){
            jQuery('#customize-control-price_bg_image' ).css('display','none' );
            jQuery('#customize-control-price_parallax' ).css('display','none' );
               
            }else if(filter_type()=='image'){
            jQuery('#customize-control-price_bg_image' ).css('display','block');
            jQuery('#customize-control-price_parallax' ).css('display','block');
            }   
    } );
// brand
wp.customize('brand_bg_background', function( value ) {
        var filter_type = value.bind( function( to ) {
        if(to=='color'){
            jQuery( '#customize-control-brand_bg_image' ).css('display','none' );
            jQuery( '#customize-control-brand_parallax' ).css('display','none' );
            } else if(to=='image'){
            jQuery( '#customize-control-brand_bg_image' ).css('display','block' );
            jQuery( '#customize-control-brand_parallax' ).css('display','block' );
            }
        } );
        if(filter_type()=='color'){
            jQuery('#customize-control-brand_bg_image' ).css('display','none' );
            jQuery('#customize-control-brand_parallax' ).css('display','none' );
               
            }else if(filter_type()=='image'){
            jQuery('#customize-control-brand_bg_image' ).css('display','block');
            jQuery('#customize-control-brand_parallax' ).css('display','block');
            }   
    } );
// woo
wp.customize('woo_bg_background', function( value ) {
        var filter_type = value.bind( function( to ) {
        if(to=='color'){
            jQuery( '#customize-control-woo_bg_image' ).css('display','none' );
            jQuery( '#customize-control-woo_parallax' ).css('display','none' );
            } else if(to=='image'){
            jQuery( '#customize-control-woo_bg_image' ).css('display','block' );
            jQuery( '#customize-control-woo_parallax' ).css('display','block' );
            }
        } );
        if(filter_type()=='color'){
            jQuery('#customize-control-woo_bg_image' ).css('display','none' );
            jQuery('#customize-control-woo_parallax' ).css('display','none' );
               
            }else if(filter_type()=='image'){
            jQuery('#customize-control-woo_bg_image' ).css('display','block');
            jQuery('#customize-control-woo_parallax' ).css('display','block');
            }   
    } );
// contact
wp.customize('lead_bg_background', function( value ) {
        var filter_type = value.bind( function( to ) {
        if(to=='color'){
            jQuery( '#customize-control-lead_bg_image' ).css('display','none' );
            jQuery( '#customize-control-lead_parallax' ).css('display','none' );
            } else if(to=='image'){
            jQuery( '#customize-control-lead_bg_image' ).css('display','block' );
            jQuery( '#customize-control-lead_parallax' ).css('display','block' );
            }
        } );
        if(filter_type()=='color'){
            jQuery('#customize-control-lead_bg_image' ).css('display','none' );
            jQuery('#customize-control-lead_parallax' ).css('display','none' );
               
            }else if(filter_type()=='image'){
            jQuery('#customize-control-lead_bg_image' ).css('display','block');
            jQuery('#customize-control-lead_parallax' ).css('display','block');
            }   
    } );
// ribbon
wp.customize('ribn_chs_', function( value ) {
        var filter_type = value.bind( function( to ) {
        if(to=='color'){
            jQuery( '#customize-control-rbn_bg_image' ).css('display','none' );
            jQuery( '#customize-control-rbn_bg_vd' ).css('display','none' );
            jQuery( '#customize-control-rbn_parallax' ).css('display','none' );
            jQuery( '#customize-control-rbn_video_image' ).css('display','none' );
            } else if(to=='image'){
            jQuery( '#customize-control-rbn_bg_image' ).css('display','block' );
            jQuery( '#customize-control-rbn_bg_vd' ).css('display','none' );
            jQuery( '#customize-control-rbn_parallax' ).css('display','block' );
             jQuery( '#customize-control-rbn_video_image' ).css('display','none' );
            }else if(to=='video'){
            jQuery( '#customize-control-rbn_bg_image' ).css('display','none' );
            jQuery( '#customize-control-rbn_bg_vd' ).css('display','block' );
            jQuery( '#customize-control-rbn_parallax' ).css('display','none' );
             jQuery( '#customize-control-rbn_video_image' ).css('display','block' );
            }
        } );
        if(filter_type()=='color'){
            jQuery( '#customize-control-rbn_bg_image' ).css('display','none' );
            jQuery( '#customize-control-rbn_bg_vd' ).css('display','none' );
            jQuery( '#customize-control-rbn_parallax' ).css('display','none' );
            jQuery( '#customize-control-rbn_video_image' ).css('display','none' );
            }else if(filter_type()=='image'){
            jQuery( '#customize-control-rbn_bg_image' ).css('display','block' );
            jQuery( '#customize-control-rbn_bg_vd' ).css('display','none' );
            jQuery( '#customize-control-rbn_parallax' ).css('display','block' );
             jQuery( '#customize-control-rbn_video_image' ).css('display','none' );
            }else if(filter_type()=='video'){
            jQuery( '#customize-control-rbn_bg_image' ).css('display','none' );
            jQuery( '#customize-control-rbn_bg_vd' ).css('display','block' );
            jQuery( '#customize-control-rbn_parallax' ).css('display','none' );
             jQuery( '#customize-control-rbn_video_image' ).css('display','block' );
            }  
    } );
});