<?php
namespace Apple_Exporter;

/**
 * Settings used in exporting. In a WordPress context, these can be loaded
 * as WordPress options defined in the plugin.
 */
class Settings {

	/**
	 * Exporter's default settings.
	 *
	 * @var array
	 * @access private
	 */
	private $settings = array(
		// API information.
		'api_key'         				=> '',
		'api_secret'      				=> '',
		'api_channel'     				=> '',
		'api_autosync'    				=> 'yes',
		'api_autosync_update'			=> 'yes',
		'api_async'    						=> 'no',

		'post_types'      				=> array( 'post' ),
		'show_metabox'    				=> 'yes',

		'layout_columns'   				=> 11,
		'layout_margin'   				=> 50,
		'layout_gutter'   				=> 20,
		'layout_width'   				=> 1024,

		'body_font'        				=> 'AvenirNext-Regular',
		'body_size'        				=> 18,
		'body_color'       				=> '#4f4f4f',
		'body_link_color'  				=> '#428BCA',
		'body_background_color'   => '#FAFAFA',
		'body_orientation' 				=> 'left',
		'body_line_height' 				=> 24,
        'body_top_margin'               => 40,
        'body_bottom_margin'            => 40,


		'initial_dropcap' 				=> 'yes',
		'dropcap_font'    				=> 'AvenirNext-Bold',
		'dropcap_color'   				=> '#4f4f4f',

		'byline_font'     				=> 'AvenirNext-Medium',
		'byline_size'     				=> 13,
		'byline_color'    				=> '#7c7c7c',
		'byline_format'						=> 'by #author# | #M j, Y | g:i A#',
        'byline_logo'                   => 'yes',
        'byline_margin'     				=>  20,
        'byline_alignment'     				=>  'center',
		'header_font'     				=> 'AvenirNext-Bold',
		'header_color'    				=> '#333333',
        'header_size'                   => 32,
        'header_top_margin'           => 5,
        'header_bottom_margin'            => 16,
        'header_alignment'    				=> 'center',
        'header_line_height'            => 52,
        'header_all_caps'            => 'yes',
        'heading1_size'  				=> 48,
        'heading1_font'    				=> 'AvenirNext-Bold',
        'heading1_color'    				=> '#333333',
        'heading1_top_margin'               =>  5,
        'heading1_bottom_margin'              => 10,
        'heading1_alignment'    				=> 'center',
        'heading1_line_height'            => 38,

        'heading2_size'						=> 32,
        'heading2_font'     				=> 'AvenirNext-Bold',
        'heading2_color'    				=> '#333333',
        'heading2_top_margin'               =>  5,
        'heading2_bottom_margin'              => 10,
        'heading2_alignment'    				=> 'center',
        'heading2_line_height'            => 40,
        'heading2_all_caps'    				=> 'yes',
        'heading3_size'    				=> 24,
        'heading3_font'     				=> 'AvenirNext-Bold',
        'heading3_color'    				=> '#333333',
        'heading3_top_margin'               =>  5,
        'heading3_bottom_margin'              => 10,
        'heading3_alignment'    				=> 'center',
        'heading3_line_height'            => 26,

        'heading4_size'    				=> 21,
        'heading4_font'     				=> 'AvenirNext-Bold',
        'heading4_color'    				=> '#333333',
        'heading4_top_margin'               =>  5,
        'heading4_bottom_margin'              => 10,
        'heading4_alignment'    				=> 'center',
        'heading4_line_height'            => 23,

        'heading5_size'    				=> 18,
        'heading5_font'     				=> 'AvenirNext-Bold',
        'heading5_color'    				=> '#333333',
        'heading5_top_margin'               =>  5,
        'heading5_bottom_margin'              => 10,
        'heading5_alignment'    				=> 'center',
        'heading5_line_height'            => 20,

        'heading6_size'    				=> 16,
        'heading6_font'     				=> 'AvenirNext-Bold',
        'heading6_color'    				=> '#333333',
        'heading6_top_margisn'               =>  5,
        'heading6_bottom_margin'              => 10,
        'heading6_alignment'    				=> 'center',
        'heading6_line_height'            => 18,

        'pullquote_font'  				=> 'AvenirNext-Bold',
		'pullquote_size'  				=> 48,
		'pullquote_color' 				=> '#53585F',
		'pullquote_border_color' 	=> '#53585F',
		'pullquote_border_style' 	=> 'solid',
		'pullquote_border_width' 	=> '3',
		'pullquote_transform'			=> 'uppercase',
		'pullquote_line_height' 	=> 22,
        'pullquote_top_margin' 	=>  20,
        'pullquote_bottom_margin' 	=> 20,


        'component_alerts' 				=> 'none',

		'use_remote_images' 			=> 'no',

		// This can either be gallery or mosaic.
		'gallery_type'   					=> 'gallery',
        'gallery_caption_font'              => 'AvenirNext-Medium',
        'gallery_caption_size'              => 14,
        'gallery_caption_line_height'       => 16,
        'gallery_caption_text_color'        => '#000000',
        'gallery_caption_link_font_name'    => 'AvenirNext-Medium',
        'gallery_caption_link_text_color'   => '#000000',
        'gallery_caption_link_underline'    => 'yes',
		// Ad settings
		'enable_advertisement' 		=> 'yes',
		'ad_frequency' 						=> 1,
		'ad_margin' 							=> 15,

		// Default component order
		//'meta_component_order' 		=> array( 'cover', 'title', 'divider', 'byline','divider' ),
		'meta_component_order' 		=> array( 'breadcrumbcover', 'title','byline' ),
	);  //'gallery','video','cover', 'divider', 'logo', 'byline','divider'

	/**
	 * Get a setting.
	 *
	 * @param string $name
	 * @return mixed
	 * @access public
	 */
	public function get( $name ) {
		// Check for computed settings
		if ( method_exists( $this, $name ) ) {
			return $this->$name();
		}

		// Check for regular settings
		if ( ! array_key_exists( $name, $this->settings ) ) {
			return null;
		}

		return $this->settings[ $name ];
	}

	/**
	 * Set a setting.
	 *
	 * @param string $name
	 * @param mixed $value
	 * @return mixed
	 * @access public
	 */
	public function set( $name, $value ) {
		$this->settings[ $name ] = $value;
		return $value;
	}

	/**
	 * Get all settings.
	 *
	 * @return array
	 * @access public
	 */
	public function all() {
		return $this->settings;
	}

	// COMPUTED SETTINGS are those settings which are not shown in the frontend
	// and cannot be changed directly, instead, they are a logical representation
	// of a combination of other settings. For example, if the body orientation
	// is "center", the layout_width computed property is 768, otherwise, it's
	// 1024.
	// -------------------------------------------------------------------------

	/**
	 * Get the layout width.
	 *
	 * @return string
	 * @access public
	 */
	public function layout_width() {
		return 1024;//'center' == $this->get( 'body_orientation' ) ? 768 : 1024;
	}

	/**
	 * Get the layout columns.
	 *
	 * @return string
	 * @access public
	 */
	public function layout_columns() {
		return 11;//'center' == $this->get( 'body_orientation' ) ? 9 : 7;
	}

	/**
	 * Get the body column span.
	 *
	 * @return string
	 * @access public
	 */
	public function body_column_span() {
		return 9;//'center' == $this->get( 'body_orientation' ) ? 7 : 5;
	}

	/**
	 * When a component is displayed aligned relative to another one, slide the
	 * other component a few columns. This varies for centered and non-centered
	 * layouts, as centered layouts have more columns.
	 *
	 * @since 0.4.0
	 * @return string
	 * @access public
	 */
	public function alignment_offset() {
		return 'center' == $this->get( 'body_orientation' ) ? 3 : 2;
	}

}
