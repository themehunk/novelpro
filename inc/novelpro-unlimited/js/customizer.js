jQuery(document).ready(function() {
// our service  widget

wp.customize.section( 'sidebar-widgets-novelpro-custom' ).panel('cust_panel');
wp.customize.section( 'sidebar-widgets-novelpro-custom' ).priority('3');

wp.customize.section( 'sidebar-widgets-novelpro-custom-second' ).panel('cust_panel');
wp.customize.section( 'sidebar-widgets-novelpro-custom-second' ).priority('4');

wp.customize.section( 'sidebar-widgets-novelpro-custom-third' ).panel('cust_panel');
wp.customize.section( 'sidebar-widgets-novelpro-custom-third' ).priority('5');


jQuery( '.focus-customizer-slide-image-redirect' ).on( 'click', function (e){
            e.preventDefault();
             wp.customize.section( 'section_slider_first' ).focus();
} );
jQuery( '.focus-customizer-video-redirect' ).on( 'click', function (e){
            e.preventDefault();
             wp.customize.section( 'slider_video_cap' ).focus();
} );

});