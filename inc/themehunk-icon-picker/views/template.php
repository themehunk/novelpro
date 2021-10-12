<?php
/**
 * @var $icon_fonts
 */
?>
<div id="themehunk_lightbox_fa" class="themehunk-admin-lightbox clearfix">
	
	<h3 class="themehunk_lightbox_title"><?php _e( 'Choose Font Awesome icon', 'novelpro' ); ?></h3>
	<input type="text" id="themehunk-search-icon-input" placeholder="<?php _e( 'Search', 'novelpro' ); ?>" />
	<a href="#" class="close_lightbox">
	<span class="ti-close"></span>
	</a>
	<div class="tf-icon-group-select">
		<?php foreach( $icon_fonts as $class => $font ) : ?>
			<label hidden><input name="icon-font-group" type="radio" value="<?php echo $font->get_id(); ?>"><?php echo $font->get_label(); ?></input></label> 
		<?php endforeach; ?>
	</div>

	<div class="lightbox_container">

		<?php foreach( $icon_fonts as $class => $font ) : ?>
			<div class="tf-font-group" data-group="<?php echo $font->get_id(); ?>">

				<ul class="themehunk-lightbox-icon">
					<?php foreach( $font->get_icons() as $category ) : ?>
						<li data-id="<?php echo $font->get_id() . '-' . $category['key']; ?>">
							<span><?php echo $category['label']; ?></span>
						</li>
					<?php endforeach; ?>
				</ul>

				<?php foreach( $font->get_icons() as $category ) : ?>
					<section id="<?php echo $font->get_id() . '-' . $category['key']; ?>">
						<h2 class="page-header"><?php echo $category['label']; ?></h2>
						<div class="row">
							<?php foreach( $category['icons'] as $icon_key => $icon_label ) : ?>
								<a href="#" data-icon="<?php echo $icon_key; ?>">
									<i class="<?php echo $font->get_classname( $icon_key ); ?>" aria-hidden="true"></i>
									<?php echo $icon_label; ?>
								</a>
							<?php endforeach; ?>
						</div>
					</section><!-- #<?php echo $font->get_id() . '-' . $category['key']; ?> -->
				<?php endforeach; ?>

			</div><!-- .tf-font-group -->
		<?php endforeach; ?>

	</div><!-- .lightbox_container -->
</div>
<div id="themehunk_lightbox_overlay"></div>