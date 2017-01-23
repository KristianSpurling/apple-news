<?php
/**
 * Publish to Apple News Includes: Apple_Exporter\Settings class
 *
 * Contains a class which is used to manage user-defined and computed settings.
 *
 * @package Apple_News
 * @subpackage Apple_Exporter
 * @since 0.6.0
 */

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
				'label' => __( 'Layout margin', 'apple-news' ),
				'type' => 'integer',
			),
			'layout_gutter' => array(
				'label' => __( 'Layout gutter', 'apple-news' ),
				'type' => 'integer',
			),
			'layout_width' => array(
				'label'   => __( 'Layout width', 'apple-news' ),
				'type'    => 'integer',
			),
			'body_font' => array(
				'label' => __( 'Body font face', 'apple-news' ),
				'type' => 'font',
			),
			'body_size' => array(
				'label' => __( 'Body font size', 'apple-news' ),
				'type' => 'integer',
			),
			'body_color' => array(
				'label' => __( 'Body font color', 'apple-news' ),
				'type' => 'color',
			),
			'body_line_height' => array(
				'label' => __( 'Body line height', 'apple-news' ),
				'type' => 'float',
				'sanitize' => 'floatval',
			),
			'body_link_color' => array(
				'label' => __( 'Body font hyperlink color', 'apple-news' ),
				'type' => 'color',
			),
			'body_background_color' => array(
				'label' => __( 'Body background color', 'apple-news' ),
				'type' => 'color',
			),
			'body_orientation' => array(
				'label' => __( 'Body orientation', 'apple-news' ),
				'type' => array( 'left', 'center', 'right' ),
				'description' => __( 'Controls margins on larger screens. Left orientation includes one column of margin on the right, right orientation includes one column of margin on the left, and center orientation includes one column of margin on either side.', 'apple-news' ),
			),
			'body_tracking' => array(
				'label' => __( 'Body tracking', 'apple-news' ),
				'type' => 'integer',
				'description' => __( '(Percentage of font size)', 'apple-news' ),
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
				'label' => __( 'Use initial drop cap', 'apple-news' ),
				'type' => array( 'yes', 'no' ),
			),
			'dropcap_font' => array(
				'label' => __( 'Dropcap font face', 'apple-news' ),
				'type' => 'font',
			),
			'dropcap_color' => array(
				'label' => __( 'Drop cap font color', 'apple-news' ),
				'type' => 'color',
			),
			'byline_font' => array(
				'label' => __( 'Byline font face', 'apple-news' ),
				'type' => 'font',
			),
			'byline_size' => array(
				'label' => __( 'Byline font size', 'apple-news' ),
				'type' => 'integer',
			),
			'byline_line_height' => array(
				'label' => __( 'Byline line height', 'apple-news' ),
				'type' => 'float',
				'sanitize' => 'floatval',
			),
			'byline_tracking' => array(
				'label' => __( 'Byline tracking', 'apple-news' ),
				'type' => 'integer',
				'description' => __( '(Percentage of font size)', 'apple-news' ),
			),
			'byline_color' => array(
				'label' => __( 'Byline font color', 'apple-news' ),
				'type' => 'color',
			),
			'byline_format' => array(
				'label' => __( 'Byline format', 'apple-news' ),
				'type' => 'text',
				'description' => __( 'Set the byline format. Two tokens can be present, #author# to denote the location of the author name and a <a href="http://php.net/manual/en/function.date.php" target="blank">PHP date format</a> string also encapsulated by #. The default format is "by #author# | #M j, Y | g:i A#". Note that byline format updates only preview on save.', 'apple-news' ),
				'size' => 40,
				'required' => false,
			),
			'header1_font' => array(
				'label' => __( 'Header 1 font face', 'apple-news' ),
				'type' => 'font',
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
			'header2_font' => array(
				'label' => __( 'Header 2 font face', 'apple-news' ),
				'type' => 'font',
			),
			'header3_font' => array(
				'label' => __( 'Header 3 font face', 'apple-news' ),
				'type' => 'font',
			),
			'header4_font' => array(
				'label' => __( 'Header 4 font face', 'apple-news' ),
				'type' => 'font',
			),
			'header5_font' => array(
				'label' => __( 'Header 5 font face', 'apple-news' ),
				'type' => 'font',
			),
			'header6_font' => array(
				'label' => __( 'Header 6 font face', 'apple-news' ),
				'type' => 'font',
			),
			'header1_line_height' => array(
				'label' => __( 'Header 1 line height', 'apple-news' ),
				'type' => 'float',
				'sanitize' => 'floatval',
			),
			'header2_line_height' => array(
				'label' => __( 'Header 2 line height', 'apple-news' ),
				'type' => 'float',
				'sanitize' => 'floatval',
			),
			'header3_line_height' => array(
				'label' => __( 'Header 3 line height', 'apple-news' ),
				'type' => 'float',
				'sanitize' => 'floatval',
			),
			'header4_line_height' => array(
				'label' => __( 'Header 4 line height', 'apple-news' ),
				'type' => 'float',
				'sanitize' => 'floatval',
			),
			'header5_line_height' => array(
				'label' => __( 'Header 5 line height', 'apple-news' ),
				'type' => 'float',
				'sanitize' => 'floatval',
			),
			'header6_line_height' => array(
				'label' => __( 'Header 6 line height', 'apple-news' ),
				'type' => 'float',
				'sanitize' => 'floatval',
			),
			'header1_tracking' => array(
				'label' => __( 'Header 1 tracking', 'apple-news' ),
				'type' => 'integer',
				'description' => __( '(Percentage of font size)', 'apple-news' ),
			),
			'header2_tracking' => array(
				'label' => __( 'Header 2 tracking', 'apple-news' ),
				'type' => 'integer',
				'description' => __( '(Percentage of font size)', 'apple-news' ),
			),
			'header3_tracking' => array(
				'label' => __( 'Header 3 tracking', 'apple-news' ),
				'type' => 'integer',
				'description' => __( '(Percentage of font size)', 'apple-news' ),
			),
			'header4_tracking' => array(
				'label' => __( 'Header 4 tracking', 'apple-news' ),
				'type' => 'integer',
				'description' => __( '(Percentage of font size)', 'apple-news' ),
			),
			'header5_tracking' => array(
				'label' => __( 'Header 5 tracking', 'apple-news' ),
				'type' => 'integer',
				'description' => __( '(Percentage of font size)', 'apple-news' ),
			),
			'header6_tracking' => array(
				'label' => __( 'Header 6 tracking', 'apple-news' ),
				'type' => 'integer',
				'description' => __( '(Percentage of font size)', 'apple-news' ),
			),
			'header1_color' => array(
				'label' => __( 'Header 1 font color', 'apple-news' ),
				'type' => 'color',
			),
			'header_size' => array(
				'label'   => __( 'Header font size', 'apple-news' ),
				'type'    => 'integer',
			'header2_color' => array(
				'label' => __( 'Header 2 font color', 'apple-news' ),
				'type' => 'color',
			),
			'header3_color' => array(
				'label' => __( 'Header 3 font color', 'apple-news' ),
				'type' => 'color',
			),
			'header4_color' => array(
				'label' => __( 'Header 4 font color', 'apple-news' ),
				'type' => 'color',
			),
			'header5_color' => array(
				'label' => __( 'Header 5 font color', 'apple-news' ),
				'type' => 'color',
			),
			'header6_color' => array(
				'label' => __( 'Header 6 font color', 'apple-news' ),
				'type' => 'color',
			),
			'header1_size' => array(
				'label' => __( 'Header 1 font size', 'apple-news' ),
				'type' => 'integer',
			),
			'header_top_margin' => array(
				'label'   => __( 'Header top margin', 'apple-news' ),
				'type'    => 'integer',
			'header2_size' => array(
				'label' => __( 'Header 2 font size', 'apple-news' ),
				'type' => 'integer',
			),
			'header_bottom_margin' => array(
				'label'   => __( 'Header bottom margin', 'apple-news' ),
				'type'    => 'integer',
			'header3_size' => array(
				'label' => __( 'Header 3 font size', 'apple-news' ),
				'type' => 'integer',
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
			'header4_size' => array(
				'label' => __( 'Header 4 font size', 'apple-news' ),
				'type' => 'integer',
			),
			'header5_size' => array(
				'label' => __( 'Header 5 font size', 'apple-news' ),
				'type' => 'integer',
			'heading1_top_margin' => array(
				'label'   => __( 'Heading 1 top margin', 'apple-news' ),
				'type'    => 'integer',
			),
			'header6_size' => array(
				'label' => __( 'Header 6 font size', 'apple-news' ),
				'type' => 'integer',
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
				'label' => __( 'Pullquote font face', 'apple-news' ),
				'type' => 'font',
			),
			'pullquote_size' => array(
				'label' => __( 'Pull quote font size', 'apple-news' ),
				'type' => 'integer',
			),
			'pullquote_color' => array(
				'label' => __( 'Pull quote color', 'apple-news' ),
				'type' => 'color',
			),
			'pullquote_border_color' => array(
				'label' => __( 'Pull quote border color', 'apple-news' ),
				'type' => 'color',
			),
			'pullquote_border_style' => array(
				'label' => __( 'Pull quote border style', 'apple-news' ),
				'type' => array( 'solid', 'dashed', 'dotted' ),
			),
			'pullquote_border_width' => array(
				'label' => __( 'Pull quote border width', 'apple-news' ),
				'type' => 'integer',
			),
			'pullquote_line_height' => array(
				'label' => __( 'Pull quote line height', 'apple-news' ),
				'type' => 'float',
				'sanitize' => 'floatval',
			),
			'pullquote_tracking' => array(
				'label' => __( 'Pullquote tracking', 'apple-news' ),
				'type' => 'integer',
				'description' => __( '(Percentage of font size)', 'apple-news' ),
			),
			'pullquote_transform' => array(
				'label' => __( 'Pull quote transformation', 'apple-news' ),
				'type' => array( 'none', 'uppercase' ),
			),
			'monospaced_font' => array(
				'label' => __( 'Monospaced font face', 'apple-news' ),
				'type' => 'font',
			),
			'monospaced_size' => array(
				'label' => __( 'Monospaced font size', 'apple-news' ),
				'type' => 'integer',
			),
			'monospaced_color' => array(
				'label' => __( 'Monospaced font color', 'apple-news' ),
				'type' => 'color',
			),
			'monospaced_line_height' => array(
				'label' => __( 'Monospaced line height', 'apple-news' ),
				'type' => 'float',
				'sanitize' => 'floatval',
			),
			'monospaced_tracking' => array(
				'label' => __( 'Monospaced tracking', 'apple-news' ),
				'type' => 'integer',
				'description' => __( '(Percentage of font size)', 'apple-news' ),
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
				'label' => __( 'Gallery type', 'apple-news' ),
				'type' => array( 'gallery', 'mosaic' ),
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
				'label' => __( 'Enable advertisements', 'apple-news' ),
				'type' => array( 'yes', 'no' ),
			),
			'ad_frequency' => array(
				'label' => __( 'Ad Frequency', 'apple-news' ),
				'type' => 'integer',
				'description' => __( 'A number between 1 and 10 defining the frequency for automatically inserting Banner Advertisement components into articles. For more information, see the <a href="https://developer.apple.com/library/ios/documentation/General/Conceptual/Apple_News_Format_Ref/AdvertisingSettings.html#//apple_ref/doc/uid/TP40015408-CH93-SW1" target="_blank">Apple News Format Reference</a>.', 'apple-news' ),
			),
			'ad_margin' => array(
				'label' => __( 'Ad Margin', 'apple-news' ),
				'type' => 'integer',
				'description' => __( 'The margin to use above and below inserted ads.', 'apple-news' ),
			),
			'meta_component_order' => array(
				'callback' => array(
					get_class( $this ),
					'render_meta_component_order'
				),
				'sanitize' => array( $this, 'sanitize_array' ),
			),
		);

		// Add the groups
		$this->groups = array(
			'layout' => array(
				'label' => __( 'Layout Spacing', 'apple-news' ),
				'description' => __( 'The spacing for the base layout of the exported articles', 'apple-news' ),
				'settings' => array( 'layout_margin', 'layout_gutter' ),
				'settings'    => array( 'layout_columns', 'layout_margin', 'layout_gutter', 'layout_width' ),
			),
			'body' => array(
				'label' => __( 'Body', 'apple-news' ),
				'settings' => array(
					'body_font',
					'body_size',
					'body_line_height',
					'body_tracking',
					'body_color',
					'body_link_color',
					'body_background_color',
					'body_orientation'
				),
				'label'       => __( 'Body', 'apple-news' ),
				'settings'    => array( 'body_font', 'body_size', 'body_color', 'body_link_color', 'body_background_color', 'body_orientation', 'body_top_margin', 'body_bottom_margin' ),
			),
			'dropcap' => array(
				'label' => __( 'Drop Cap', 'apple-news' ),
				'settings' => array(
					'dropcap_font',
					'initial_dropcap',
					'dropcap_color'
				),
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
				'label' => __( 'Byline', 'apple-news' ),
				'description' => __( "The byline displays the article's author and publish date", 'apple-news' ),
				'settings' => array(
					'byline_font',
					'byline_size',
					'byline_line_height',
					'byline_tracking',
					'byline_color',
					'byline_format'
				),
			),
			'heading1' => array(
				'label' => __( 'Heading 1', 'apple-news' ),
				'settings' => array(
					'header1_font',
					'header1_color',
					'header1_size',
					'header1_line_height',
					'header1_tracking',
				),
			),
			'heading2' => array(
				'label' => __( 'Heading 2', 'apple-news' ),
				'settings' => array(
					'header2_font',
					'header2_color',
					'header2_size',
					'header2_line_height',
					'header2_tracking',
				),
			),
			'heading3' => array(
				'label' => __( 'Heading 3', 'apple-news' ),
				'settings' => array(
					'header3_font',
					'header3_color',
					'header3_size',
					'header3_line_height',
					'header3_tracking',
				),
			),
			'heading4' => array(
				'label' => __( 'Heading 4', 'apple-news' ),
				'settings' => array(
					'header4_font',
					'header4_color',
					'header4_size',
					'header4_line_height',
					'header4_tracking',
				),
			),
			'heading5' => array(
				'label' => __( 'Heading 5', 'apple-news' ),
				'settings' => array(
					'header5_font',
					'header5_color',
					'header5_size',
					'header5_line_height',
					'header5_tracking',
				),
			),
			'heading6' => array(
				'label' => __( 'Heading 6', 'apple-news' ),
				'settings' => array(
					'header6_font',
					'header6_color',
					'header6_size',
					'header6_line_height',
					'header6_tracking',
				),
			),
			'pullquote' => array(
				'label' => __( 'Pull quote', 'apple-news' ),
				'description' => sprintf(
					'%s <a href="https://en.wikipedia.org/wiki/Pull_quote">%s</a>.',
					__( 'Articles can have an optional', 'apple-news' ),
					__( 'Pull quote', 'apple-news' )
				),
				'settings' => array(
					'pullquote_font',
					'pullquote_size',
					'pullquote_line_height',
					'pullquote_tracking',
					'pullquote_color',
					'pullquote_border_color',
					'pullquote_border_style',
					'pullquote_border_width',
					'pullquote_transform'
				),
			),
			'monospaced' => array(
				'label' => __( 'Monospaced (<pre>, <code>, <samp>)', 'apple-news' ),
				'settings' => array(
					'monospaced_font',
					'monospaced_size',
					'monospaced_line_height',
					'monospaced_tracking',
					'monospaced_color',
				),
				'settings'    => array( 'pullquote_font', 'pullquote_size', 'pullquote_color', 'pullquote_border_color', 'pullquote_border_style', 'pullquote_border_width', 'pullquote_transform' , 'pullquote_top_margin', 'pullquote_bottom_margin'),
			),
			'gallery' => array(
				'label' => __( 'Gallery', 'apple-news' ),
				'description' => __( 'Can either be a standard gallery, or mosaic.', 'apple-news' ),
				'settings' => array( 'gallery_type' ),
				'settings'    => array( 'gallery_type', 'gallery_caption_font', 'gallery_caption_size','gallery_caption_line_height', 'gallery_caption_text_color', 'gallery_caption_link_font_name', 'gallery_caption_link_text_color', 'gallery_caption_link_underline' ),
			),

			'advertisement' => array(
				'label' => __( 'Advertisement', 'apple-news' ),
				'settings' => array(
					'enable_advertisement',
					'ad_frequency',
					'ad_margin'
				),
			),
			'component_order' => array(
				'label' => __( 'Component Order', 'apple-news' ),
				'settings' => array( 'meta_component_order' ),
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
		return __( 'Configuration for the visual appearance of the generated articles. Updates to these settings will not change the appearance of any articles previously published to your channel in Apple News unless you republish them.', 'apple-news' );
	}

	/**
	 * HTML to display before the section.
	 *
	 * @return string
	 * @access public
	 */
	public function before_section() {
		?>
		<div id="apple-news-formatting">
			<div class="apple-news-settings-left">
		<?php
	}

	/**
	 * HTML to display after the section.
	 *
	 * @return string
	 * @access public
	 */
	public function after_section() {
		?>
			</div>
			<div class="apple-news-settings-preview">
				<?php
					// Build sample content
					$settings = new Admin_Apple_Settings();

					$title = sprintf(
						'<h1 class="apple-news-title apple-news-component apple-news-meta-component">%s</h1>',
						__( 'Sample Article', 'apple-news' )
					);

					$cover = sprintf(
						'<div class="apple-news-cover apple-news-meta-component">%s</div>',
						__( 'Cover', 'apple-news' )
					);

					// Build the byline
					$author = __( 'John Doe', 'apple-news' );
					$date = date( 'M j, Y g:i A' );
					$export = new Apple_Actions\Index\Export( $settings->fetch_settings() );
					$byline = sprintf(
						'<div class="apple-news-byline apple-news-component apple-news-meta-component">%s</div>',
						$export->format_byline( null, $author, $date )
					);

					// Get the order of the top components
					$component_order = self::get_value( 'meta_component_order' );
					foreach ( $component_order as $component ) {
						echo wp_kses( $$component, self::$allowed_html );
					}
				?>
				<div class="apple-news-component">
				<p><span class="apple-news-dropcap">L</span>orem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis, <a href="#">augue vitae iaculis euismod</a>, libero nulla pellentesque quam, non venenatis massa odio id dolor.</p>
				<p>Praesent eget odio vel sapien scelerisque euismod. Phasellus eros sapien, rutrum ac nibh nec, tristique commodo neque.</p>
				<?php printf(
						'<div class="apple-news-image">%s</div>',
						esc_html__( 'Image', 'apple-news' )
					);
				?>
				<p>Maecenas tortor dui, pellentesque ac ullamcorper quis, malesuada sit amet turpis. Nunc in tellus et justo dapibus sollicitudin.</p>
				<h2>Quisque efficitur</h2>
				<p>Quisque efficitur sit amet ex et venenatis. Morbi nisi nisi, ornare id iaculis eget, pulvinar ac dolor.</p>
				<p>In eu la	cus porttitor, pellentesque diam et, tristique elit. Mauris justo odio, efficitur sit amet aliquet id, aliquam placerat turpis.</p>
				<div class="apple-news-pull-quote">Lorem ipsum dolor sit amet.</div>
				<p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque ipsum mi, sagittis eget sodales et, volutpat at felis.</p>
                <pre>
.code-sample {
    font-family: monospace;
    white-space: pre;
}
                </pre>
				</div>
			</div>
		</div>
		<?php
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
				$component_order = self::get_value( 'meta_component_order' );
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
