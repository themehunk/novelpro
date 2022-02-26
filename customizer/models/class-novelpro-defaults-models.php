<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
/**
 * This file stores all functions that return default content.
 *
 * @package  novelpro
 */
/**
 * Class Novelpro_Defaults_Models
 *
 * @package  novelpro
 */
class Novelpro_Defaults_Models extends Novelpro_Singleton{
/**
	 * Get default values for features section.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	/**
	 * Get default values for Brands section.

	 * @access public
	 */
public function get_brand_default() {
		return apply_filters(
			'novelpro_brand_default_content', json_encode(
				array(
					array(
						'image_url' =>	get_template_directory_uri() . '/images/logos/place-holder.jpg',
						'link'       => '#',
					),
					array(
						'image_url' =>	get_template_directory_uri() . '/images/logos/place-holder.jpg',
						'link'       => '#',
					),
					array(
						'image_url' =>	get_template_directory_uri() . '/images/logos/place-holder.jpg',
						'link'       => '#',
					),
					array(
						'image_url' =>	get_template_directory_uri() . '/images/logos/place-holder.jpg',
						'link'       => '#',
					),
					array(
						'image_url' =>	get_template_directory_uri() . '/images/logos/place-holder.jpg',
						'link'       => '#',
					),
					array(
						'image_url' =>	get_template_directory_uri() . '/images/logos/place-holder.jpg',
						'link'       => '#',
					),
					array(
						'image_url' =>	get_template_directory_uri() . '/images/logos/place-holder.jpg',
						'link'       => '#',
					),
					array(
						'image_url' =>	get_template_directory_uri() . '/images/logos/place-holder.jpg',
						'link'       => '#',
					),
					array(
						'image_url' =>	get_template_directory_uri() . '/images/logos/place-holder.jpg',
						'link'       => '#',
					),
					array(
						'image_url' =>	get_template_directory_uri() . '/images/logos/place-holder.jpg',
						'link'       => '#',
					),
				)
			)
		);
	}


	/**
	 * Get default values for features section.

	 * @access public
	 */
	public function get_feature_default() {
		return apply_filters(
			'novelpro_highlight_default_content', json_encode(
				array(
					array(
						'icon_value' => 'fa-microphone',
						'title'      => esc_html__( 'E-Commerce', 'novelpro' ),
						'text'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.', 'novelpro' ),
						'image_url' => '',
						
					),
					array(
						'icon_value' => 'fa-rocket',
						'title'      => esc_html__( 'Responsive Design', 'novelpro' ),
						'text'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.', 'novelpro' ),
						'image_url' => '',
					),
					array(
						'icon_value' => 'fa-signal',
						'title'      => esc_html__( 'Web Security', 'novelpro' ),
						'text'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.', 'novelpro' ),
						'image_url' => '',
						
					),
				)
			)
		);
	}	


	public function get_faq_default() {
		return apply_filters(
			'jotshop_faq_default_content', json_encode(
				array( 
					array(
						'title'     => esc_html__( 'What do you want to know', 'novelpro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'novelpro' ),
					),

					array(
						'title'     => esc_html__( 'What do you want to know', 'novelpro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'novelpro' ),
					),
					
					array(
						'title'     => esc_html__( 'What do you want to know', 'novelpro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'novelpro' ),
					),

					array(
						'title'     => esc_html__( 'What do you want to know', 'novelpro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'novelpro' ),
					),

					array(
						'title'     => esc_html__( 'What do you want to know', 'novelpro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'novelpro' ),
					),

					array(
						'title'     => esc_html__( 'What do you want to know', 'novelpro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'novelpro' ),
					),

					array(
						'title'     => esc_html__( 'What do you want to know', 'novelpro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'novelpro' ),
					),

					array(
						'title'     => esc_html__( 'What do you want to know', 'novelpro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'novelpro' ),
					),

				)
			)
		);	
	}

	/**
	 * Get default values for features section.

	 * @access public
	 */
	public function get_service_default() {
		return apply_filters(
			'novelpro_service_default_content', json_encode(
				array(
					array(
						'icon_value' => 'fa-diamond',
						'title'      => esc_html__( 'Development', 'novelpro' ),
						'text'       => esc_html__( 'Nam varius mauris eget sodales tempus. Quisque sollicitudin consectetur accumsan. Ut imperdiet mi velit, ut congue justo sagittis eget',
							'novelpro' ),
						'link'       => '#',
						'color'      => '#ff214f',
					),
					array(
						'icon_value' => 'fa-heart',
						'title'      => esc_html__( 'Design', 'novelpro' ),
						'text'       => esc_html__( 'Nam varius mauris eget sodales tempus. Quisque sollicitudin consectetur accumsan. Ut imperdiet mi velit, ut congue justo sagittis eget',
							'novelpro' ),
						'link'       => '#',
						'color'      => '#00bcd4',
					),
					array(
						'icon_value' => 'fa-globe',
						'title'      => esc_html__( 'Seo', 'novelpro' ),
						'text'       => esc_html__( 'Nam varius mauris eget sodales tempus. Quisque sollicitudin consectetur accumsan. Ut imperdiet mi velit, ut congue justo sagittis eget',
							'novelpro' ),
						'link'       => '#',
						'color'      => '#4caf50',
					),
				)
			)
		);
	}	

	/**
	 * Get default values for Testimonials section.

	 * @access public
	 */
public function get_testimonials_default() {
		return apply_filters(
			'novelpro_testimonials_default_content', json_encode(
				array(
					array(
						'image_url' =>	get_template_directory_uri().'/images/testimonial-image.png',
						'title'     => esc_html__( 'Surbhi', 'novelpro' ),
						'subtitle'  => esc_html__( 'Business Owner', 'novelpro' ),
						'text'      => esc_html__( '"Nunc eu elementum libero. Etiam egestas leo eget urna ultrices, in finibus eros gravida. Donec scelerisque pulvinar dapibus. Nam pretium risus sed metus ultrices blandit. Pellentesque rhoncus est non nunc ultricies accumsan. Nullam gravida turpis et lacinia cursus. Fusce iaculis mattis consectetur."', 'novelpro' ),
						'link'		=>	'#',
						'id'        => 'customizer_repeater_56d7ea7f40d56',
					),
					array(
						'image_url' =>	get_template_directory_uri().'/images/testimonial-image.png',
						'title'     => esc_html__( 'Nataliya', 'novelpro' ),
						'subtitle'  => esc_html__( 'Artist', 'novelpro' ),
						'text'      => esc_html__( '"Nunc eu elementum libero. Etiam egestas leo eget urna ultrices, in finibus eros gravida. Donec scelerisque pulvinar dapibus. Nam pretium risus sed metus ultrices blandit. Pellentesque rhoncus est non nunc ultricies accumsan. Nullam gravida turpis et lacinia cursus. Fusce iaculis mattis consectetur."', 'novelpro' ),
						'link'		=>	'#',
						'id'        => 'customizer_repeater_56d7ea7f40d66',
					),

					array(
						'image_url' =>	get_template_directory_uri().'/images/testimonial-image.png',
						'title'     => esc_html__( 'Ramedrin', 'novelpro' ),
						'subtitle'  => esc_html__( 'Business Owner', 'novelpro' ),
						'text'      => esc_html__( '"Nunc eu elementum libero. Etiam egestas leo eget urna ultrices, in finibus eros gravida. Donec scelerisque pulvinar dapibus. Nam pretium risus sed metus ultrices blandit. Pellentesque rhoncus est non nunc ultricies accumsan. Nullam gravida turpis et lacinia cursus. Fusce iaculis mattis consectetur."', 'novelpro' ),
						'link'		=>	'#',
						'id'        => 'customizer_repeater_56d7ea7f40d56',
					),
				)
			)
		);
	}


public function get_team_default() {
		return apply_filters(
			'novelpro_team_default_content', json_encode(
				array( 
					array(
						'title'     => esc_html__( 'Kay Garland', 'novelpro' ),					
						'subtitle'  => esc_html__( 'Lead Designer', 'novelpro' ),
						'text'      => esc_html__( 'Phasellus elementum odio faucibus diam sollicitudin, in bibendum quam feugiat.', 'novelpro' ),
						'image_url' => get_template_directory_uri() . '/images/team/Team-Placeholder.jpg',
						'link'       => '#',
						'social_repeater' => json_encode(
							array(
									array(
									
									'link' => 'youtube.com',
									'icon' => 'fa-youtube',
									),
									array(
									
									'link' => 'twitter.com',
									'icon' => 'fa-twitter',
									),
								array(
									
									'link' => 'linkedin.com',
									'icon' => 'fa-linkedin',
								),
							)
						),
					),

					array(
						'title'     => esc_html__( 'Larry Parker', 'novelpro' ),					
						'subtitle'  => esc_html__( 'Lead Marketer', 'novelpro' ),
						'text'      => esc_html__( 'Phasellus elementum odio faucibus diam sollicitudin, in bibendum quam feugiat.', 'novelpro' ),
						'image_url' => get_template_directory_uri() . '/images/team/Team-Placeholder.jpg',
						'link'       => '#',
						'social_repeater' => json_encode(
							array(
									array(
									
									'link' => 'youtube.com',
									'icon' => 'fa-youtube',
									),
									array(
									
									'link' => 'twitter.com',
									'icon' => 'fa-twitter',
									),
								array(
									
									'link' => 'linkedin.com',
									'icon' => 'fa-linkedin',
								),
							)
						),
					),

					array(
						'title'     => esc_html__( 'Diana Pertersen', 'novelpro' ),					
						'subtitle'  => esc_html__( 'Lead Developer', 'novelpro' ),
						'text'      => esc_html__( 'Phasellus elementum odio faucibus diam sollicitudin, in bibendum quam feugiat.', 'novelpro' ),
						'image_url' => get_template_directory_uri() . '/images/team/Team-Placeholder.jpg',
						'link'       => '#',
						'social_repeater' => json_encode(
							array(
									array(
									
									'link' => 'youtube.com',
									'icon' => 'fa-youtube',
									),
									array(
									
									'link' => 'twitter.com',
									'icon' => 'fa-twitter',
									),
								array(
									
									'link' => 'linkedin.com',
									'icon' => 'fa-linkedin',
								),
							)
						),
					),		

				)///	
			)	
		);
	}
	/**
	 * Get default values for pricing section.

	 * @access public
	 */
	public function get_pricing_default() {
		return apply_filters(
			'novelpro_pricing_default_content', json_encode(
				array( 
					array(
						'icon_value' => 'fa-check',
						'title'     => esc_html__( 'SINGLE THEME', 'novelpro' ),
						'price'     => esc_html__( '$51', 'novelpro' ),
						'text'      => esc_html__( '5GB Linux Web Space<br />5 MySQL Databases<br />Unlimited Email<br />250Gb mo Transfer<br />24/7 Tech Support<br />Daily Backups', 'novelpro' ),
						'link'       => '#',
						'text2'		 => 'SignUp',

					),
					array(
						'icon_value' => 'fa-cart-plus',
						'title'     => esc_html__( 'SINGLE THEME', 'novelpro' ),
						'price'     => esc_html__( '$79', 'novelpro' ),
						'text'      => esc_html__( '5GB Linux Web Space<br />5 MySQL Databases<br />Unlimited Email<br />250Gb mo Transfer<br />24/7 Tech Support<br />Daily Backups', 'novelpro' ),
						'link'       => '#',
						'text2'		 => 'SignUp',

					),
					array(
						'icon_value' => 'fa-reply-all',
						'title'     => esc_html__( 'SINGLE THEME', 'novelpro' ),
						'price'     => esc_html__( '$108', 'novelpro' ),
						'text'      => esc_html__( '5GB Linux Web Space<br />5 MySQL Databases<br />Unlimited Email<br />250Gb mo Transfer<br />24/7 Tech Support<br />Daily Backups', 'novelpro' ),
						'link'       => '#',
						'text2'		 => 'SignUp',
					),
				)
			)
		);
	}
}
