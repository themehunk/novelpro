 /* 
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.navbar-header h1 a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.navbar-header p' ).text( to );
		} );
	} );
	//slider1
	wp.customize( 'first_slider_heading', function( value ) {
		value.bind( function( to ) {
			$( '.slider1 h1 a' ).text( to );
		} );
	} );
	wp.customize( 'first_slider_desc', function( value ) {
		value.bind( function( to ) {
			$( '.slider1 p' ).text( to );
		} );
	} );	
	wp.customize( 'first_button_text', function( value ) {
		value.bind( function( to ) {
			$( '.slider1 .theme-slider-button' ).text( to );
		} );
	} );

	//slider2
	wp.customize( 'second_slider_heading', function( value ) {
		value.bind( function( to ) {
			$( '.slider2 h1 a' ).text( to );
		} );
	} );
	wp.customize( 'second_slider_desc', function( value ) {
		value.bind( function( to ) {
			$( '.slider2 p' ).text( to );
		} );
	} );	
	wp.customize( 'second_button_text', function( value ) {
		value.bind( function( to ) {
			$( '.slider2 .theme-slider-button' ).text( to );
		} );
	} );
	//slider3
	wp.customize( 'third_slider_heading', function( value ) {
		value.bind( function( to ) {
			$( '.slider3 h1 a' ).text( to );
		} );
	} );
	wp.customize( 'third_slider_desc', function( value ) {
		value.bind( function( to ) {
			$( '.slider3 p' ).text( to );
		} );
	} );	
	wp.customize( 'third_button_text', function( value ) {
		value.bind( function( to ) {
			$( '.slider3 .theme-slider-button' ).text( to );
		} );
	} );

	//slider4
	wp.customize( 'fourth_slider_heading', function( value ) {
		value.bind( function( to ) {
			$( '.slider4 h1 a' ).text( to );
		} );
	} );
	wp.customize( 'fourth_slider_desc', function( value ) {
		value.bind( function( to ) {
			$( '.slider4 p' ).text( to );
		} );
	} );	
	wp.customize( 'fourth_button_text', function( value ) {
		value.bind( function( to ) {
			$( '.slider4 .theme-slider-button' ).text( to );
		} );
	} );
//slider5
	wp.customize( 'fifth_slider_heading', function( value ) {
		value.bind( function( to ) {
			$( '.slider5 h1 a' ).text( to );
		} );
	} );
	wp.customize( 'fifth_slider_desc', function( value ) {
		value.bind( function( to ) {
			$( '.slider5 p' ).text( to );
		} );
	} );	
	wp.customize( 'fifth_button_text', function( value ) {
		value.bind( function( to ) {
			$( '.slider5 .theme-slider-button' ).text( to );
		} );
	} );
//slider6
	wp.customize( 'sixth_slider_heading', function( value ) {
		value.bind( function( to ) {
			$( '.slider6 h1 a' ).text( to );
		} );
	} );
	wp.customize( 'sixth_slider_desc', function( value ) {
		value.bind( function( to ) {
			$( '.slider6 p' ).text( to );
		} );
	} );	
	wp.customize( 'sixth_button_text', function( value ) {
		value.bind( function( to ) {
			$( '.slider6 .theme-slider-button' ).text( to );
		} );
	} );
// video	
wp.customize( 'video_slider_heading', function( value ) {
		value.bind( function( to ) {
			$( '#slider-div .container h1 a' ).text( to );
		} );
	} );
wp.customize('video_slider_desc', function( value ) {
		value.bind( function( to ) {
			$( '#slider-div .container p' ).text( to );
		} );
	} );
wp.customize('video_button_text', function( value ) {
		value.bind( function( to ) {
			$( '.main-slider-button .theme-slider-button' ).text( to );
		} );
	} );
	// three column
	wp.customize( 'col_heading', function( value ) {
		value.bind( function( to ) {
			$( '#section1 .section-heading' ).text( to );
		} );
	} );

	wp.customize( 'col_sub', function( value ) {
		value.bind( function( to ) {
			$( '#section1 .section-subheading' ).text( to );
		} );
	} );
	//service1
    wp.customize( 'first_feature_heading', function( value ) {
		value.bind( function( to ) {
			$( '.sevice1 .service-heading' ).text( to );
		} );
	} );
	wp.customize( 'first_feature_desc', function( value ) {
		value.bind( function( to ) {
			$( '.sevice1 .text-muted' ).text( to );
		} );
	} );
		//service2
	  wp.customize( 'second_feature_heading', function( value ) {
		value.bind( function( to ) {
			$( '.sevice2 .service-heading' ).text( to );
		} );
	} );
	wp.customize( 'second_feature_desc', function( value ) {
		value.bind( function( to ) {
			$( '.sevice2 .text-muted' ).text( to );
		} );
	} );

		//service3
	  wp.customize( 'third_feature_heading', function( value ) {
		value.bind( function( to ) {
			$( '.sevice3 .service-heading' ).text( to );
		} );
	} );
	wp.customize( 'third_feature_desc', function( value ) {
		value.bind( function( to ) {
			$( '.sevice3 .text-muted' ).text( to );
		} );
	} );

		// portfolio section
	wp.customize( 'portfolio_head_', function( value ) {
		value.bind( function( to ) {
			$( '#section2 .section-heading' ).text( to );
		} );
	} );

	wp.customize( 'portfolio_desc_', function( value ) {
		value.bind( function( to ) {
			$( '#section2 .section-subheading' ).text( to );
		} );
	} );

	// testimonial section
	wp.customize( 'testimonial_heading', function( value ) {
		value.bind( function( to ) {
			$( '#section3 .testimonial-header' ).text( to );
		} );
	} );
	wp.customize( 'testimonial_parallax_image', function( value ) {
		value.bind( function( to ) {
			$( '.testimonial-wrapper' ).attr('style', 'background: url(' + to + ') no-repeat fixed center !important');
		} );
	} );
	

		// blog section
	wp.customize( 'blog_head_', function( value ) {
		value.bind( function( to ) {
			$( '#section4 .section-heading' ).text( to );
		} );
	} );
	wp.customize( 'blog_desc_', function( value ) {
		value.bind( function( to ) {
			$( '#section4 .section-subheading' ).text( to );
		} );
	} );

	// our team section
	wp.customize( 'team_head_', function( value ) {
		value.bind( function( to ) {
			$( '#section5 .section-heading' ).text( to );
		} );
	} );
	wp.customize( 'team_desc_', function( value ) {
		value.bind( function( to ) {
			$( '#section5 .section-subheading' ).text( to );
		} );
	} );
	//team1
	wp.customize( 'our_team_img_first', function( value ) {
		value.bind( function( to ) {
			$( '.team1 img' ).attr("src",to);
		} );
	} );
	wp.customize( 'our_team_heading_first', function( value ) {
		value.bind( function( to ) {
			$( '.team1 a h4' ).text( to );
		} );
	} );
	wp.customize( 'our_team_subhead_first', function( value ) {
		value.bind( function( to ) {
			$( '.team1 .text-muted' ).text( to );
		} );
	} );
	wp.customize( 'our_team_desc_first', function( value ) {
		value.bind( function( to ) {
			$( '.team1 .team-desc' ).text( to );
		} );
	} );

	//team2
	wp.customize( 'our_team_img_second', function( value ) {
		value.bind( function( to ) {
			$( '.team2 img' ).attr("src",to);
		} );
	} );
	wp.customize( 'our_team_heading_second', function( value ) {
		value.bind( function( to ) {
			$( '.team2 a h4' ).text( to );
		} );
	} );
	wp.customize( 'our_team_subhead_second', function( value ) {
		value.bind( function( to ) {
			$( '.team2 .text-muted' ).text( to );
		} );
	} );
	wp.customize( 'our_team_desc_second', function( value ) {
		value.bind( function( to ) {
			$( '.team2 .team-desc' ).text( to );
		} );
	} );

	//team3
	wp.customize( 'our_team_img_third', function( value ) {
		value.bind( function( to ) {
			$( '.team3 img' ).attr("src",to);
		} );
	} );
	wp.customize( 'our_team_heading_third', function( value ) {
		value.bind( function( to ) {
			$( '.team3 a h4' ).text( to );
		} );
	} );
	wp.customize( 'our_team_subhead_third', function( value ) {
		value.bind( function( to ) {
			$( '.team3 .text-muted' ).text( to );
		} );
	} );
	wp.customize( 'our_team_desc_third', function( value ) {
		value.bind( function( to ) {
			$( '.team3 .team-desc' ).text( to );
		} );
	} );

	// our brands
	wp.customize( 'brand_head_', function( value ) {
		value.bind( function( to ) {
			$( '#section6 .section-heading' ).text( to );
		} );
	} );
	wp.customize( 'brand_desc_', function( value ) {
		value.bind( function( to ) {
			$( '#section6 .section-subheading' ).text( to );
		} );
	} );

	// contact us
	wp.customize( 'cf_head_', function( value ) {
		value.bind( function( to ) {
			$( '#section7 .section-heading' ).text( to );
		} );
	} );
	wp.customize( 'cf_desc_', function( value ) {
		value.bind( function( to ) {
			$( '#section7 .section-subheading' ).text( to );
		} );
	} );
	wp.customize( 'cf_image', function( value ) {
		value.bind( function( to ) {
			$( '.contact_section' ).attr('style', 'background: url(' + to + ') fixed');
		} );
	} );


	// pricing
	wp.customize( 'pricing_head_', function( value ) {
		value.bind( function( to ) {
			$( '#section9 .post-title h1' ).text( to );
		} );
	} );
	wp.customize( 'pricing_desc_', function( value ) {
		value.bind( function( to ) {
			$( '#section9 .post-title p' ).text( to );
		} );
	} );
	wp.customize( 'pricing_img_first', function( value ) {
		value.bind( function( to ) {
			$( '.price-package' ).attr('style', 'background-image: url(' + to + ')');
		} );
	} );
 // footer
 	wp.customize( 'footertext', function( value ) {
		value.bind( function( to ) {
			$( '.copyright' ).html( to );
		} );
	} );	

	} )( jQuery );