<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Novel_Pro_Button_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . 'inc/pro-button/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Novel_Pro_Button_Customize_Section' );

		// Register sections.
		$manager->add_section(
			new Novel_Pro_Button_Customize_Section(
				$manager,
				'pro_button',
				array(
					'title'    => esc_html__( 'Themehunk Pro Themes', 'novelpro' ),
					'pro_text' => esc_html__( 'View','novelpro' ),
					'pro_url'  => '//www.themehunk.com',
					'priority' => 1,
				)
			)
		);

		$manager->add_section(
			new Novel_Pro_Button_Customize_Section(
				$manager,
				'Docs_button',
				array(
					'title'    => esc_html__( 'Theme Documentation', 'novelpro' ),
					'pro_text' => esc_html__( 'View Docs','novelpro' ),
					'pro_url'  => 'http://www.themehunk.com/docs/novelpro-theme/',
					'priority' => 1,
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'Novelpro-customize-controls', trailingslashit( get_template_directory_uri() ) . 'inc/pro-button/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'Novelpro-customize-controls', trailingslashit( get_template_directory_uri() ) . 'inc/pro-button/customize-controls.css' );
	}
}

// Doing this customizer thang!
Novel_Pro_Button_Customize::get_instance();
