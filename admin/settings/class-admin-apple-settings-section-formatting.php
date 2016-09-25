<?php

/**
 * Describes a WordPress setting section
 *
 * @since 0.6.0
 */
class Admin_Apple_Settings_Section_Formatting extends Admin_Apple_Settings_Section {

	/**
	 * Slug of the formatting settings section.
	 *
	 * @var string
	 * @access protected
	 */
	protected $slug = 'formatting-options';

	/**
	 * Constructor.
	 *
	 * @param string $page
	 */
	function __construct( $page ) {
		// Set the name
		$this->name =  __( 'Formatting', 'apple-news' );

		// Add the settings
		$this->settings = array(
			'layout_columns' => array(
				'label'   => __( 'Layout columns', 'apple-news' ),
				'type'    => 'integer',
			),
			'layout_margin' => array(
				'label'   => __( 'Layout margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'layout_gutter' => array(
				'label'   => __( 'Layout gutter', 'apple-news' ),
				'type'    => 'integer',
			),
			'layout_width' => array(
				'label'   => __( 'Layout width', 'apple-news' ),
				'type'    => 'integer',
			),
			'body_font' => array(
				'label'   => '',
				'type'    => 'font',
			),
			'body_size' => array(
				'label'   => __( 'Body font size', 'apple-news' ),
				'type'    => 'integer',
			),
			'body_color' => array(
				'label'   => __( 'Body font color', 'apple-news' ),
				'type'    => 'color',
			),
			'body_link_color' => array(
				'label'   => __( 'Body font hyperlink color', 'apple-news' ),
				'type'    => 'color',
			),
			'body_background_color' => array(
				'label'   => __( 'Body background color', 'apple-news' ),
				'type'    => 'color',
			),
			'body_orientation' => array(
				'label'   => __( 'Body alignment', 'apple-news' ),
				'type'    => array( 'left', 'center', 'right' ),
			),
			'body_top_margin' => array(
				'label'   => __( 'Body top  margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'body_bottom_margin' => array(
				'label'   => __( 'Body bottom  margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'initial_dropcap' => array(
				'label'   => __( 'Use initial dropcap', 'apple-news' ),
				'type'    => array( 'yes', 'no' ),
			),
			'dropcap_font' => array(
				'label'   => '',
				'type'    => 'font',
			),
			'dropcap_color' => array(
				'label'   => __( 'Dropcap font color', 'apple-news' ),
				'type'    => 'color',
			),
			'byline_font' => array(
				'label'   => '',
				'type'    => 'font',
			),
			'byline_size' => array(
				'label'   => __( 'Byline font size', 'apple-news' ),
				'type'    => 'integer',
			),
			'byline_color' => array(
				'label'   => __( 'Byline font color', 'apple-news' ),
				'type'    => 'color',
			),
			'byline_format' => array(
				'label'				=> __( 'Byline format', 'apple-news' ),
				'type' 				=> 'text',
				'description' => __( 'Set the byline format. Two tokens can be present, #author# to denote the location of the author name and a <a href="http://php.net/manual/en/function.date.php" target="blank">PHP date format</a> string also encapsulated by #. The default format is "by #author# | #M j, Y | g:i A#".', 'apple-news' ),
				'size'				=> 40,
				'required'		=> false,
			),
			'byline_logo' => array(
				'label'   => __( 'Show photo with Byline', 'apple-news' ),
				'type'    => array( 'yes', 'no' ),
			),

			'byline_margin' => array(
				'label'   => __( 'Byline margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'byline_alignment' => array(
				'label'   => __( 'Byline text alignment', 'apple-news' ),
				'type'    => array( 'left', 'center', 'right' ),
			),
			'header_font' => array(
				'label'   => 'Header (Title) Font',
				'type'    => 'font',
			),
			'header_color' => array(
				'label'   => __( 'Header font color', 'apple-news' ),
				'type'    => 'color',
			),
			'header_size' => array(
				'label'   => __( 'Header font size', 'apple-news' ),
				'type'    => 'integer',
			),
			'header_top_margin' => array(
				'label'   => __( 'Header top margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'header_bottom_margin' => array(
				'label'   => __( 'Header bottom margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'header_alignment' => array(
				'label'   => __( 'Header alignment', 'apple-news' ),
				'type'    => array( 'left', 'center', 'right' ),
			),
			'header_all_caps' => array(
				'label'   => __( 'Header all caps?', 'apple-news' ),
				'type'    => array( 'yes', 'no' ),
			),

			'heading1_font' => array(
				'label'   => __( 'Heading 1','apple-news'),
				'type'    => 'font',
			),

			'heading1_color' => array(
				'label'   => __( 'Heading 1 font color', 'apple-news' ),
				'type'    => 'color',
			),
			'heading1_size' => array(
				'label'   => __( 'Heading 1 font size', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading1_top_margin' => array(
				'label'   => __( 'Heading 1 top margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading1_bottom_margin' => array(
				'label'   => __( 'Heading 1 bottom margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading1_alignment' => array(
				'label'   => __( 'Heading 1 alignment', 'apple-news' ),
				'type'    => array( 'left', 'center', 'right' ),
			),
			'heading2_font' => array(
				'label'   => __( 'Heading 2','apple-news'),
				'type'    => 'font',
			),

			'heading2_color' => array(
				'label'   => __( 'Heading 2 font color', 'apple-news' ),
				'type'    => 'color',
			),
			'heading2_size' => array(
				'label'   => __( 'Heading 2 font size', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading2_top_margin' => array(
				'label'   => __( 'Heading 2 top margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading2_bottom_margin' => array(
				'label'   => __( 'Heading 2 bottom margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading2_alignment' => array(
				'label'   => __( 'Heading 1 alignment', 'apple-news' ),
				'type'    => array( 'left', 'center', 'right' ),
			),
			'heading3_font' => array(
				'label'   => __( 'Heading 3','apple-news'),
				'type'    => 'font',
			),
			'heading3_color' => array(
				'label'   => __( 'Heading 3 font color', 'apple-news' ),
				'type'    => 'color',
			),
			'heading3_size' => array(
				'label'   => __( 'Heading 3 font size', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading3_top_margin' => array(
				'label'   => __( 'Heading 3 top margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading3_bottom_margin' => array(
				'label'   => __( 'Heading 3 bottom margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading3_alignment' => array(
				'label'   => __( 'Heading 3 alignment', 'apple-news' ),
				'type'    => array( 'left', 'center', 'right' ),
			),
			'heading4_font' => array(
				'label'   => __( 'Heading 4','apple-news'),
				'type'    => 'font',
			),

			'heading4_color' => array(
				'label'   => __( 'Heading 4 font color', 'apple-news' ),
				'type'    => 'color',
			),
			'heading4_size' => array(
				'label'   => __( 'Heading 4 font size', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading4_top_margin' => array(
				'label'   => __( 'Heading 4 top margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading4_bottom_margin' => array(
				'label'   => __( 'Heading 4 bottom margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading4_alignment' => array(
				'label'   => __( 'Heading 4 alignment', 'apple-news' ),
				'type'    => array( 'left', 'center', 'right' ),
			),
			'heading5_font' => array(
				'label'   => __( 'Heading 5','apple-news'),
				'type'    => 'font',
			),
			'heading5_color' => array(
				'label'   => __( 'Heading 5 font color', 'apple-news' ),
				'type'    => 'color',
			),
			'heading5_size' => array(
				'label'   => __( 'Heading 5 font size', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading5_top_margin' => array(
				'label'   => __( 'Heading 5 top margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading5_bottom_margin' => array(
				'label'   => __( 'Heading 5 bottom margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading5_alignment' => array(
				'label'   => __( 'Heading 5 alignment', 'apple-news' ),
				'type'    => array( 'left', 'center', 'right' ),
			),
			'heading6_font' => array(
				'label'   => __( 'Heading 6',' apple-news'),
				'type'    => 'font',
			),

			'heading6_color' => array(
				'label'   => __( 'Heading 6 font color', 'apple-news' ),
				'type'    => 'color',
			),
			'heading6_size' => array(
				'label'   => __( 'Heading 6 font size', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading6_top_margin' => array(
				'label'   => __( 'Heading 6 top margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading6_bottom_margin' => array(
				'label'   => __( 'Heading 6 bottom margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'heading6_alignment' => array(
				'label'   => __( 'Heading 6 alignment', 'apple-news' ),
				'type'    => array( 'left', 'center', 'right' ),
			),

			'pullquote_font' => array(
				'label'   => '',
				'type'    => 'font',
			),
			'pullquote_size' => array(
				'label'   => __( 'Pull quote font size', 'apple-news' ),
				'type'    => 'integer',
			),
			'pullquote_color' => array(
				'label'   => __( 'Pull quote color', 'apple-news' ),
				'type'    => 'color',
			),
			'pullquote_border_color' => array(
				'label'   => __( 'Pull quote border color', 'apple-news' ),
				'type'    => 'color',
			),
			'pullquote_border_style' => array(
				'label'   => __( 'Pull quote border style', 'apple-news' ),
				'type'    => array( 'solid', 'dashed', 'dotted' ),
			),
			'pullquote_border_width' => array(
				'label'   => __( 'Pull quote border width', 'apple-news' ),
				'type'    => 'integer',
			),
			'pullquote_transform' => array(
				'label'   => __( 'Pull quote transformation', 'apple-news' ),
				'type'    => array( 'none', 'uppercase' ),
			),
			'pullquote_top_margin' => array(
				'label'   => __( 'Pullquotetop margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'pullquote_bottom_margin' => array(
				'label'   => __( 'Pullquote bottom margin', 'apple-news' ),
				'type'    => 'integer',
			),

			'gallery_type' => array(
				'label'   => __( 'Gallery type', 'apple-news' ),
				'type'    => array( 'gallery', 'mosaic' ),
			),
			'gallery_caption_font' => array(
				'label'   => __( 'Gallery Caption Font', 'apple-news' ),
				'type'    => 'font',
			),
			'gallery_caption_size' => array(
				'label'   => __( 'Gallery Caption Font size', 'apple-news' ),
				'type'    => 'integer',
			),
			'gallery_caption_line_height' => array(
				'label'   => __( 'Gallery Caption Line Height', 'apple-news' ),
				'type'    => 'integer',
			),
			'gallery_caption_text_color' => array(
				'label'   => __( 'Gallery Caption Text Color', 'apple-news' ),
				'type'    => 'color',
			),
			'gallery_caption_link_font_name' => array(
				'label'   => __( 'Gallery Caption Link Font', 'apple-news' ),
				'type'    => 'font',
			),
			'gallery_caption_link_text_color' => array(
				'label'   => __( 'Gallery Caption Link Text Color', 'apple-news' ),
				'type'    => 'color',
			),
			'gallery_caption_link_underline' => array(
				'label'   => __( 'Gallery Cpation Link Underline?', 'apple-news' ),
				'type'    => array( 'yes', 'no' ),
			),
			'enable_advertisement' => array(
				'label'   => __( 'Enable advertisements', 'apple-news' ),
				'type'    => array( 'yes', 'no' ),
			),
			'ad_frequency' => array(
				'label'   		=> __( 'Ad Frequency', 'apple-news' ),
				'type'    		=> 'integer',
				'description'	=> __( 'A number between 1 and 10 defining the frequency for automatically inserting Banner Advertisement components into articles. For more information, see the <a href="https://developer.apple.com/library/ios/documentation/General/Conceptual/Apple_News_Format_Ref/AdvertisingSettings.html#//apple_ref/doc/uid/TP40015408-CH93-SW1" target="_blank">Apple News Format Reference</a>.', 'apple-news' ),
			),
			'ad_margin' => array(
				'label'   => __( 'Ad Margin', 'apple-news' ),
				'type'    => 'integer',
				'description'	=> __( 'The margin to use above and below inserted ads.', 'apple-news' ),
			),
			'meta_component_order' => array(
				'callback'	=> array( get_class( $this ), 'render_meta_component_order' ),
				'sanitize' 	=> array( $this, 'sanitize_array' ),
			),
		);

		// Add the groups
		$this->groups = array(
			'layout' => array(
				'label'       => __( 'Layout Spacing', 'apple-news' ),
				'description' => __( 'The spacing for the base layout of the exported articles', 'apple-news' ),
				'settings'    => array( 'layout_columns', 'layout_margin', 'layout_gutter', 'layout_width' ),
			),
			'body' => array(
				'label'       => __( 'Body', 'apple-news' ),
				'settings'    => array( 'body_font', 'body_size', 'body_color', 'body_link_color', 'body_background_color', 'body_orientation', 'body_top_margin', 'body_bottom_margin' ),
			),
			'dropcap' => array(
				'label'       => __( 'Dropcap', 'apple-news' ),
				'settings'    => array( 'dropcap_font', 'initial_dropcap', 'dropcap_color' ),
			),
			'byline' => array(
				'label'       => __( 'Byline', 'apple-news' ),
				'description' => __( "The byline displays the article's author and date", 'apple-news' ),
				'settings'    => array( 'byline_font', 'byline_size', 'byline_color', 'byline_format', 'byline_logo','byline_margin','byline_alignment' ),
			),
			'headings' => array(
				'label'       => __( 'Headings', 'apple-news' ),
				'settings'    => array( 'header_font', 'header_color', 'header_size', 'header_top_margin','header_bottom_margin', 'header_alignment', 'header_all_caps' ,
					'heading1_font', 'heading1_color', 'heading1_size', 'heading1_top_margin','heading1_bottom_margin', 'heading1_alignment',
					'heading2_font', 'heading2_color', 'heading2_size', 'heading2_top_margin','heading2_bottom_margin', 'heading2_alignment',
					'heading3_font', 'heading3_color', 'heading3_size', 'heading3_top_margin','heading3_bottom_margin', 'heading3_alignment',
					'heading4_font', 'heading4_color', 'heading4_size', 'heading4_top_margin','heading4_bottom_margin', 'heading4_alignment',
					'heading5_font', 'heading5_color', 'heading5_size', 'heading5_top_margin','heading5_bottom_margin', 'heading5_alignment',
					'heading6_font', 'heading6_color', 'heading6_size', 'heading6_top_margin','heading6_bottom_margin', 'heading6_alignment',),
			),
			'pullquote' => array(
				'label'       => __( 'Pull quote', 'apple-news' ),
				'description' => sprintf(
					'%s <a href="https://en.wikipedia.org/wiki/Pull_quote">%s</a>.',
					__( 'Articles can have an optional', 'apple-news' ),
					__( 'Pull quote', 'apple-news' )
				),
				'settings'    => array( 'pullquote_font', 'pullquote_size', 'pullquote_color', 'pullquote_border_color', 'pullquote_border_style', 'pullquote_border_width', 'pullquote_transform' , 'pullquote_top_margin', 'pullquote_bottom_margin'),
			),
			'gallery' => array(
				'label'       => __( 'Gallery', 'apple-news' ),
				'description' => __( 'Can either be a standard gallery, or mosaic.', 'apple-news' ),
				'settings'    => array( 'gallery_type', 'gallery_caption_font', 'gallery_caption_size','gallery_caption_line_height', 'gallery_caption_text_color', 'gallery_caption_link_font_name', 'gallery_caption_link_text_color', 'gallery_caption_link_underline' ),
			),

			'advertisement' => array(
				'label'       => __( 'Advertisement', 'apple-news' ),
				'settings'    => array( 'enable_advertisement', 'ad_frequency', 'ad_margin' ),
			),
			'component_order' => array(
				'label'       => __( 'Component Order', 'apple-news' ),
				'settings'    => array( 'meta_component_order' ),
			),
		);

		parent::__construct( $page );
	}

	/**
	 * Gets section info.
	 *
	 * @return string
	 * @access public
	 */
	public function get_section_info() {
		return __( 'Configuration for the visual appearance of the generated articles', 'apple-news' );
	}

	/**
	 * Renders the component order field.
	 *
	 * @static
	 * @access public
	 */
	public static function render_meta_component_order() {
		?>
		<ul id="meta-component-order-sort" class="component-order ui-sortable">
			<?php
				// Get the current order
			//$component_order = self::get_value( 'meta_component_order' ) ?: array( 'breadcrumbcover','cover', 'title', 'divider', 'logo','byline','divider' );
			$component_order = array( 'breadcrumbcover', 'title','byline'); // 'gallery','video','cover', 'divider','logo','byline','divider' );
			//$component_order = self::get_value( 'meta_component_order' ) ?: array( 'breadcrumbcover','title', 'divider', 'logo','byline','divider' );
				if ( ! empty( $component_order ) && is_array( $component_order ) ) {
					foreach ( $component_order as $component_name ) {
						echo sprintf(
							'<li id="%s" class="ui-sortable-handle">%s</li>',
							esc_attr( $component_name ),
							esc_html( ucwords( $component_name ) )
						);
					}
				}
			?>
		</ul>
		<p class="description"><?php esc_html_e( 'Drag to set the order of the meta components at the top of the article. These include the title, the cover (i.e. featured image) and byline which also includes the date.', 'apple-news' ) ?></p>
		<?php
	}

}
