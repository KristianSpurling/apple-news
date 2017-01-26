<?php
/**
 * Publish to Apple News Includes: Apple_Exporter\Settings class
 *
 * Contains a class which is used to manage user-defined and computed settings.
 *
 * @package Apple_News
 * @subpackage Apple_Exporter
 * @since 0.4.0
 */

namespace Apple_Exporter;

/**
 * Manages user-defined and computed settings used in exporting.
 *
 * In a WordPress context, these can be loaded as WordPress options defined in the
 * plugin.
 *
 * @since 0.4.0
 */
class Settings
{

    /**
     * Exporter's default settings.
     *
     * These settings can be overridden on the plugin settings screen.
     *
     * @var array
     * @access private
     */
    private $_settings = array(

        // API information.
        'api_key' => '',
        'api_secret' => '',
        'api_channel' => '',
        'api_autosync' => 'yes',
        'api_autosync_update' => 'yes',
        'api_async' => 'no',

        'post_types' => array('post'),
        'show_metabox' => 'yes',

        'layout_columns' => 11,
        'layout_margin' => 50,
        'layout_gutter' => 20,
        'layout_width' => 1024,

        'body_font' => 'AvenirNext-Regular',
        'body_size' => 18,
        'body_color' => '#4f4f4f',
        'body_link_color' => '#428BCA',
        'body_background_color' => '#FAFAFA',
        'body_orientation' => 'left',
        'body_line_height' => 24,
        'body_top_margin' => 40,
        'body_bottom_margin' => 40,
        'body_tracking' => 0,


        'initial_dropcap' => 'yes',
        'dropcap_font' => 'AvenirNext-Bold',
        'dropcap_color' => '#4f4f4f',

        'byline_font' => 'AvenirNext-Medium',
        'byline_size' => 13,
        'byline_line_height' => 24,
        'byline_tracking' => 0,
        'byline_color' => '#7c7c7c',
        'byline_format' => 'by #author# | #M j, Y | g:i A#',

        'header1_font' => 'AvenirNext-Bold',
        'header2_font' => 'AvenirNext-Bold',
        'header3_font' => 'AvenirNext-Bold',
        'header4_font' => 'AvenirNext-Bold',
        'header5_font' => 'AvenirNext-Bold',
        'header6_font' => 'AvenirNext-Bold',
        'header1_color' => '#333333',
        'header2_color' => '#333333',
        'header3_color' => '#333333',
        'header4_color' => '#333333',
        'header5_color' => '#333333',
        'header6_color' => '#333333',
        'header1_size' => 48,
        'header2_size' => 32,
        'header3_size' => 24,
        'header4_size' => 21,
        'header5_size' => 18,
        'header6_size' => 16,
        'header1_line_height' => 52,
        'header2_line_height' => 36,
        'header3_line_height' => 28,
        'header4_line_height' => 26,
        'header5_line_height' => 24,
        'header6_line_height' => 22,
        'header1_tracking' => 0,
        'header2_tracking' => 0,
        'header3_tracking' => 0,
        'header4_tracking' => 0,
        'header5_tracking' => 0,
        'header6_tracking' => 0,
        'byline_logo' => 'yes',
        'byline_margin' => 20,
        'byline_alignment' => 'center',
        'header_font' => 'AvenirNext-Bold',
        'header_color' => '#333333',
        'header_size' => 32,
        'header_top_margin' => 5,
        'header_bottom_margin' => 16,
        'header_alignment' => 'center',
        'header_line_height' => 52,
        'header_all_caps' => 'yes',
        'heading1_size' => 48,
        'heading1_font' => 'AvenirNext-Bold',
        'heading1_color' => '#333333',
        'heading1_top_margin' => 5,
        'heading1_bottom_margin' => 10,
        'heading1_alignment' => 'center',
        'heading1_line_height' => 38,

        'heading2_size' => 32,
        'heading2_font' => 'AvenirNext-Bold',
        'heading2_color' => '#333333',
        'heading2_top_margin' => 5,
        'heading2_bottom_margin' => 10,
        'heading2_alignment' => 'center',
        'heading2_line_height' => 40,
        'heading2_all_caps' => 'yes',
        'heading3_size' => 24,
        'heading3_font' => 'AvenirNext-Bold',
        'heading3_color' => '#333333',
        'heading3_top_margin' => 5,
        'heading3_bottom_margin' => 10,
        'heading3_alignment' => 'center',
        'heading3_line_height' => 26,

        'heading4_size' => 21,
        'heading4_font' => 'AvenirNext-Bold',
        'heading4_color' => '#333333',
        'heading4_top_margin' => 5,
        'heading4_bottom_margin' => 10,
        'heading4_alignment' => 'center',
        'heading4_line_height' => 23,

        'heading5_size' => 18,
        'heading5_font' => 'AvenirNext-Bold',
        'heading5_color' => '#333333',
        'heading5_top_margin' => 5,
        'heading5_bottom_margin' => 10,
        'heading5_alignment' => 'center',
        'heading5_line_height' => 20,

        'heading6_size' => 16,
        'heading6_font' => 'AvenirNext-Bold',
        'heading6_color' => '#333333',
        'heading6_top_margisn' => 5,
        'heading6_bottom_margin' => 10,
        'heading6_alignment' => 'center',
        'heading6_line_height' => 18,

        'pullquote_font' => 'AvenirNext-Bold',
        'pullquote_size' => 48,
        'pullquote_color' => '#53585f',
        'pullquote_border_color' => '#53585f',
        'pullquote_border_style' => 'solid',
        'pullquote_border_width' => '3',
        'pullquote_transform' => 'uppercase',
        'pullquote_line_height' => 48,
        'pullquote_tracking' => 0,

        'monospaced_font' => 'Menlo-Regular',
        'monospaced_size' => 16,
        'monospaced_color' => '#4f4f4f',
        'monospaced_line_height' => 20,
        'monospaced_tracking' => 0,
        'pullquote_top_margin' => 20,
        'pullquote_bottom_margin' => 20,


        'component_alerts' => 'none',
        'json_alerts' => 'warn',

        'use_remote_images' => 'no',
        'full_bleed_images' => 'no',
        'html_support' => 'no',

        // This can either be gallery or mosaic.
        'gallery_type' => 'gallery',
        'gallery_caption_font' => 'AvenirNext-Medium',
        'gallery_caption_size' => 14,
        'gallery_caption_line_height' => 16,
        'gallery_caption_text_color' => '#000000',
        'gallery_caption_link_font_name' => 'AvenirNext-Medium',
        'gallery_caption_link_text_color' => '#000000',
        'gallery_caption_link_underline' => 'yes',
        // Ad settings
        'enable_advertisement' => 'yes',
        'ad_frequency' => 1,
        'ad_margin' => 15,

        // Default component order
        'meta_component_order' => array('breadcrumbcover', 'title', 'byline')
    );
    //	'meta_component_order' => array( 'cover', 'title', 'byline' ),
    //'meta_component_order' 		=> array( 'cover', 'title', 'divider', 'byline','divider' ),

    //'gallery','video','cover', 'divider', 'logo', 'byline','divider'

	/**
	 * Magic method to get a computed or stored settings value.
	 *
	 * @param string $name The setting name to retrieve.
	 *
	 * @access public
	 * @return mixed The value for the setting.
	 */
	public function __get( $name ) {

		// Check for computed settings.
		if ( method_exists( $this, $name ) ) {
			return $this->$name();
		}

		// Check for regular settings.
		if ( isset( $this->_settings[ $name ] ) ) {
			return $this->_settings[ $name ];
		}

		return null;
	}

	/**
	 * Magic method to determine whether a given property is set.
	 *
	 * @param string $name The setting name to check.
	 *
	 * @access public
	 * @return bool Whether the property is set or not.
	 */
	public function __isset( $name ) {

		// Check for computed settings.
		if ( method_exists( $this, $name ) ) {
			return true;
		}

		// Check for regular settings.
		if ( isset( $this->_settings[ $name ] ) ) {
			return true;
		}

		return false;
	}

	/**
	 * Magic method for setting property values.
	 *
	 * @param string $name The setting name to update.
	 * @param mixed $value The new value for the setting.
	 *
	 * @access public
	 */
	public function __set( $name, $value ) {
		$this->_settings[ $name ] = $value;
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
	 *
	 * @access public
	 * @return int The number of columns for aligned components to span.
	 */
	public function alignment_offset() {
		return ( 'center' === $this->body_orientation ) ? 5 : 3;
	}

	/**
	 * Get all settings.
	 *
	 * @access public
	 * @return array The array of all settings defined in this class.
	 */
	public function all() {
		return $this->_settings;
	}

	/**
	 * Get the body column span.
	 *
	 * @access public
	 * @return int The number of columns for the body to span.
	 */
	//public function body_column_span() {
	//	return ( 'center' === $this->body_orientation ) ? 7 : 6;
	//}

	/**
	 * Get the left margin column offset.
	 *
	 * @access public
	 * @return int The number of columns to offset on the left.
	 */
	public function body_offset() {
		switch ( $this->body_orientation ) {
			case 'right':
				return $this->layout_columns - $this->body_column_span;
			case 'center':
				return floor(
					( $this->layout_columns - $this->body_column_span ) / 2
				);
				break;
			default:
				return 0;
		}
	}

	/**
	 * Get a setting.
	 *
	 * @param string $name The setting key to retrieve.
	 *
	 * @deprecated 1.2.1 Replaced by magic __get() method.
	 *
	 * @see \Apple_Exporter\Settings::__get()
	 *
	 * @access public
	 * @return mixed The value for the requested setting.
	 */
	public function get( $name ) {
		return $this->$name;
	}

	/**
	 * Get the computed layout columns.
	 *
	 * @access public
	 * @return int The number of layout columns to use.
	 */
	//public function layout_columns() {
	//	return ( 'center' === $this->body_orientation ) ? 9 : 7;
	//}

	/**
	 * Set a setting.
	 *
	 * @param string $name The setting key to modify.
	 * @param mixed $value The new value for the setting.
	 *
	 * @deprecated 1.2.1 Replaced by magic __set() method.
	 *
	 * @see \Apple_Exporter\Settings::__set()
	 *
	 * @access public
	 * @return mixed The new value for the setting.
	 */
	public function set( $name, $value ) {
		$this->$name = $value;

		return $value;
	}
}
