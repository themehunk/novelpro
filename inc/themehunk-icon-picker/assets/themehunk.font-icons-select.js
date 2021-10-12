/* Routines to manage font icons in theme settings and custom panel. */

;var Themehunk_Icons = {};

(function($){

	'use strict';

	Themehunk_Icons = {

		target: '',

		init: function() {

			var $body = $('body');

			$body.on('click', '.themehunk_fa_toggle', function(e){
				$('body').css('overflow', 'hidden');
				e.preventDefault();
				var $self = $( this );
				if( $self.attr('data-target') ) {
					Themehunk_Icons.target = $( $self.attr('data-target') );
				} else {
					Themehunk_Icons.target = $self.prev();
				}
				Themehunk_Icons.showLightbox( Themehunk_Icons.target.val() );
			});

			$body.on('click', '#themehunk_lightbox_fa .lightbox_container a', function(e){
				e.preventDefault();
				Themehunk_Icons.setIcon( $( this ).data( 'icon' ) );

			});

			$body.on('click', '#themehunk_lightbox_overlay, #themehunk_lightbox_fa .close_lightbox', function(e){
				e.preventDefault();
				Themehunk_Icons.closeLightbox();
				$('body').css('overflow', 'visible');
			});
			$body.on('change', '.tf-icon-group-select input', function(e){
				var group = $(this).val();
				$( '#themehunk_lightbox_fa .tf-font-group' ).hide().filter( '[data-group="' + group + '"]' ).show();
			});
			Themehunk_Icons.Category();
			Themehunk_Icons.Search();

		},

		getDocHeight: function() {
			var D = document;
			return Math.max(
				Math.max(D.body.scrollHeight, D.documentElement.scrollHeight),
				Math.max(D.body.offsetHeight, D.documentElement.offsetHeight),
				Math.max(D.body.clientHeight, D.documentElement.clientHeight)
			);
		},

		showLightbox: function( selected ) {
			Themehunk_Icons.loadIconsList( function(){
				var top = $(document).scrollTop() + 80,
					$lightbox = $("#themehunk_lightbox_fa"),
					$lightboxOverlay = $('#themehunk_lightbox_overlay'),
					$body = $('body');

				$lightboxOverlay.show();
				$lightbox
				.show()
				.css('top', Themehunk_Icons.getDocHeight())
				.animate({
					'top': top
				}, 800 );
				if( selected ) {
					$('a', $lightbox)
					.removeClass('selected')
					.find('.' + selected)
					.closest('a')
						.addClass('selected');
				}

				// set active font group
				if( $lightbox.find( 'a.selected' ).length ) {
					var group = $lightbox.find( 'a.selected' ).closest( '.tf-font-group' ).data( 'group' );
					$( '#themehunk_lightbox_fa .tf-icon-group-select input[value="' + group + '"]' ).click();
				} else {
					$( '#themehunk_lightbox_fa .tf-icon-group-select input:first' ).click();
				}

				// Position lightbox correctly in Builder
				if ( $body.hasClass('themehunk_builder_active') && $body.hasClass('frontend') ) {
					var $tbOverlay = $('#themehunk_builder_overlay');
					if ( $tbOverlay.length > 0 ) {
						$lightboxOverlay.insertAfter($tbOverlay);
						$lightbox.insertAfter($tbOverlay);
					}
				}
				$('#themehunk-search-icon-input').val('').trigger('keyup');
				$('#themehunk_lightbox_fa .themehunk-lightbox-icon').find('.selected').trigger('click');
			});
		},

		loadIconsList : function( callback ){
			if( $( '#themehunk_lightbox_fa' ).length ) {
				callback();
			} else {
				$.ajax({
					url : ajaxurl,
					data : { action : 'tf_icon_picker' },
					type : 'POST',
					success : function( data ){
						$( 'body' ).append( data );
						callback();
					}
				});
			}
		},

		setIcon: function(iconName) {
			var $target = $(Themehunk_Icons.target);
			$target.val( iconName );
			if ( $('.fa:not(.icon-close)', $target.parent().parent()).length > 0 ) {
				$('.fa:not(.icon-close)', $target.parent().parent()).removeClass().addClass( 'fa fa-' + iconName );
			}
			Themehunk_Icons.closeLightbox();
		},

		closeLightbox: function() {
			$('#themehunk_lightbox_fa').animate({
				'top': Themehunk_Icons.getDocHeight()
			}, 800, function() {
				$('#themehunk_lightbox_overlay').hide();
				$('#themehunk_lightbox_fa').hide();
			});
		},
		Category:function(){
		   
			$('body').delegate('.themehunk-lightbox-icon li','click',function(e){
				e.preventDefault();
				var $selected =  $(this).closest('.themehunk-lightbox-icon').find('.selected');
				if(!$(this).hasClass('selected')){
				   $selected.removeClass('selected');
					var $id = $(this).data('id');
					if($('#'+$id).length>0){
						$(this).closest('.lightbox_container').find('section').not('#'+$id).fadeOut('fast',function(){
							$('#'+$id).fadeIn('normal');
						});
						$(this).addClass('selected');
					}
				}
				else {
					$selected.removeClass('selected');
					$(this).closest('.lightbox_container').find('section').fadeIn('fast',function(){
						$('#themehunk-search-icon-input').trigger('keyup');
					});
				}
			});
		},
		Search:function(){
			$.expr[":"].contains = $.expr.createPseudo(function(arg) {
				return function( elem ) {
					return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
				};
			});
			$('body').delegate('#themehunk-search-icon-input','keyup',function(){
				var $text = $.trim($(this).val()),
					$container = $('#themehunk_lightbox_fa').find('.tf-font-group a'),
					$sections  = $('#themehunk_lightbox_fa').find('section');
				if($text){
					$container.hide();
					$sections.hide();

					$container.filter(':contains(' + $text.toUpperCase()  + ')').show().each( function(){
						$( this ).closest( 'section' ).show();
					} );
				}
				else{
				   
					$sections.show();
					$container.show();
				}
			});
		}
	};
	if( typeof tbLoaderVars !== 'undefined' ) {
		//is frontend
		$( 'body' ).on( 'builderscriptsloaded.themehunk', Themehunk_Icons.init );
	} else {
		$( document ).ready( Themehunk_Icons.init );
	}
})(jQuery);