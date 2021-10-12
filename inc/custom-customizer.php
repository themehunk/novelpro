<?php
/**
 * Sanitization for textarea field
 */
function novelpro_sanitize_textarea( $input ) {
    global $allowedposttags;
    $output = wp_kses( $input, $allowedposttags );
    return $output;
}
function novelpro_sanitize_textarea_html( $input ) {
    $output = esc_html( $input );
    return $output;
}
/**
 * Returns a sanitized filepath if it has a valid extension.
 */
function novelpro_sanitize_upload( $upload ) {
    $return = '';
    $fype = wp_check_filetype( $upload );
    if ( $fype["ext"] ) {
        $return = esc_url_raw( $upload );
    }
    return $return;
}

/**
 * vaild int.
 */
function novelpro_sanitize_int( $input ) {
$return = absint($input);
    return $return;
}


// Multiple Checkbox Show
    function th_checkbox_explode( $values ) {
    $multi_values = !is_array( $values ) ? explode( ',', $values ) : $values;
    return !empty( $multi_values ) ? array_map( 'sanitize_text_field', $multi_values ) : array();
}

//Repeater Control
/**
 * Sanitize repeater control.
 *
 * @param object $value Control output.
 *
 * @return object
 */
function novelpro_repeater_sanitize( $value ) {
    $value_decoded = json_decode( $value, true );

    if ( ! empty( $value_decoded ) ) {
        foreach ( $value_decoded as $boxk => $box ) {
            foreach ( $box as $key => $value ) {

                $value_decoded[ $boxk ][ $key ] = wp_kses_post( force_balance_tags( $value ) );

            }
        }

        return json_encode( $value_decoded );
    }

    return $value;
}


add_action('customize_register','th_custom_customize_register');
function th_custom_customize_register( $wp_customize ) {
/**
 * Multiple checkbox customize control class.
 *
 * @since  1.0.0
 * @access public
 */
class TH_Customize_Control_Checkbox_Multiple extends WP_Customize_Control {


    /**
     * The type of customize control being rendered.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $type = 'checkbox-multiple';

    /**
     * Enqueue scripts/styles.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue() {
       
    }

    /**
     * Displays the control content.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function render_content() {

        if ( empty( $this->choices ) ){
            return;   }
            ?>
      

        <?php if ( !empty( $this->label ) ) : ?>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <?php endif; ?>
        <?php if ( !empty( $this->description ) ) : ?>
            <span class="description customize-control-description"><?php echo $this->description; ?></span>
        <?php endif; ?>
        <?php $multi_values = !is_array( $this->value() ) ? explode( ',', $this->value() ) : $this->value(); ?>
        <ul>
            <?php foreach ( $this->choices as $value => $label ) : ?>

                <li>
                    <label>
                        <input type="checkbox" value="<?php echo esc_attr( $value ); ?>" <?php checked( in_array( $value, $multi_values ) ); ?> /> 
                        <?php echo esc_html( $label ); ?>
                    </label>
                </li>
            <?php endforeach; ?>
        </ul>
        <input type="hidden" <?php $this->link(); ?> value="<?php echo esc_attr( implode( ',', $multi_values ) ); ?>" />
    <?php }
}

class TH_Customize_Sort_List extends WP_Customize_Control {


    /**
     * The type of customize control being rendered.
     */
    public $type = 'sort-list';

    public function enqueue() {
       
    }
    public function render_content() {
          if ( empty( $this->choices ) ){
            return;
               }
            ?>
      <?php if ( !empty( $this->label ) ) : ?>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <?php endif; ?>
        <?php if ( !empty( $this->description ) ) : ?>
            <span class="description customize-control-description"><?php echo $this->description; ?></span>
        <?php endif;

        $sort_arr = $this->value();
        $default_arr = explode( ',',implode(',',array_keys($this->choices)));
        $new_arr =  array_unique(array_merge($sort_arr,$default_arr));

        $multi_values = (!empty($sort_arr)) ? explode( ',',implode(',',$new_arr )) : explode( ',',implode(',',array_keys($this->choices)));  ?>
        <ul id="sortable">
        <?php foreach ( $multi_values as $value => $label ) :
         ?>
            <li class="ui-state-default" id='<?php echo $label; ?>' ><label><?php echo $this->choices[$label]; ?></label></li>
          <?php endforeach; ?>
        </ul>
                <input type="hidden" <?php $this->link(); ?> value="" />
            <?php }
        }

class Novelpro_Customize_Misc_Control extends WP_Customize_Control {

    /**
     * Render the control's content.
     *
     * Allows the content to be overriden without having to rewrite the wrapper.
     *
     * @since   1.0.0
     * @return  void
     */
    public function render_content() {

        switch ( $this->type ) {

            case 'content' :
                if ( isset( $this->input_attrs['divider'] ) ) {
                    echo '<hr>';
                }
                if ( isset( $this->label ) ) {
                    echo '<span class="customize-control-title">' . $this->label . '</span>';
                }


                if ( isset( $this->input_attrs['content'] ) ) {
                    echo $this->input_attrs['content'];
                }

                if ( isset( $this->description ) ) {
                    echo '<span class="description customize-control-description">' . $this->description . '</span>';
                }

               

                break;

            case 'divider' :
                echo '<hr>';
                break;

        }

    }

}    

/**
 *widget-redirect
 *
 */
class Novelpro_Widegt_Redirect extends WP_Customize_Control {
    /**
     * Control id
     *
     * @var string $id Control id.
     */
    public $id = '';

    /**
     * Button class.
     *
     * @var mixed|string
     */
    public $button_class = '';

    /**
     * Icon class.
     *
     * @var mixed|string
     */
    public $icon_class = '';

    /**
     * Button text.
     *
     * @var mixed|string
     */
    public $button_text = '';

    /**
     * Hestia_Display_Text constructor.
     *
     * @param WP_Customize_Manager $manager Customizer manager.
     * @param string               $id Control id.
     * @param array                $args Argument.
     */
    public function __construct( $manager, $id, $args = array() ) {
        parent::__construct( $manager, $id, $args );
        $this->id = $id;
        if ( ! empty( $args['button_class'] ) ) {
            $this->button_class = $args['button_class'];
        }
        if ( ! empty( $args['icon_class'] ) ) {
            $this->icon_class = $args['icon_class'];
        }
        if ( ! empty( $args['button_text'] ) ) {
            $this->button_text = $args['button_text'];
        }
    }

    /**
     * Render content for the control.
     *
     * @since Hestia 1.1.42
     */
    public function render_content() {
        if ( ! empty( $this->button_text ) ) {
            echo '<button type="button" class="button menu-shortcut ' . esc_attr( $this->button_class ) . '" tabindex="0">';
            if ( ! empty( $this->button_class ) ) {
                echo '<span class="dashicons dashicons-admin-generic" style="margin-right: 10px;margin-top:3PX;
    color:#999;"></span>';
            }
                echo esc_html( $this->button_text );
            echo '</button>';
        }
    }
}
    

}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function novelpro_customize_preview_js() {
    wp_enqueue_script( 'novelpro_live_customizer', get_template_directory_uri() . '/js/live-customizer.js', array( 'customize-preview' ), '', true );
}

add_action( 'customize_preview_init', 'novelpro_customize_preview_js' );



function novelpro_registers() {
    wp_enqueue_script( 'novelpro_customizer_script', get_template_directory_uri() . '/js/customizer.js', array("jquery"), '', true  );
     
}
add_action( 'customize_controls_enqueue_scripts', 'novelpro_registers' );

function novelpro_customizer_styles() {

    wp_enqueue_style('novelpro_customizer_styles', get_template_directory_uri() . '/css/customizer_styles.css');

}
add_action('customize_controls_print_styles', 'novelpro_customizer_styles');


// single page post meta
function th_checkbox_filter($search,$theme_mod,$default=false){
 $filter = get_theme_mod($theme_mod);
$value = (!empty($filter) && !empty($filter[0]))?in_array($search, $filter):$default;
return $value;
}
?>