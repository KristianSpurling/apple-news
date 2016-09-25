<?php
namespace Apple_Exporter\Components;

/**
 * An image gallery is just a container with 'gallery' class and some images
 * inside. The container should be a div, but can be anything as long as it has
 * a 'gallery' class.
 *
 * @since 0.2.0
 */
class Gallery extends Component {

	/**
	 * Look for node matches for this component.
	 *
	 * @param DomNode $node
	 * @return mixed
	 * @static
	 * @access public
	 */
	public static function node_matches( $node ) {
		if ( self::node_has_class( $node, 'gallery' ) ) {
			return $node;
		}

		return null;
		}

	/**
	 * Build the component.
	 *
	 * @param string $text
	 * @access protected
	 */
	protected function build( $text ) {
		preg_match_all( '/src="([^"]+)"/', $text, $matches );
		preg_match_all( '/class="caption">([^<]+)</', $text, $capmatches );

		$urls  = $matches[1];
		$captions = $capmatches[1];

/*		foreach ( $urls as $url ) {
			// Collect into to items array
			$items[] = array(
				'URL' => $this->maybe_bundle_source( $url ),
			);
		}*/

		$items = array();
		$sub = 0;

		foreach ( $urls as $url ) {
			// Collect into to items array
			if (count($urls) != count($captions))
			{
				$items[] = array(
					'URL' => $this->maybe_bundle_source($url)
				);
			}
			else
			{
				$items[] = array(
					'URL' => $this->maybe_bundle_source($url),
					'caption' => array(
						'text' => $captions[$sub],
						'format' => 'markdown',
						'textStyle' => 'scalableCaption')
				);
				$sub ++;
			}
		}

		$this->json = array(
			'role'   => $this->get_setting( 'gallery_type' ),
			'layout' => array ( 'ignoreDocumentMargin' => true ),
			'items'  => $items,
		);


		/*$this->json = array(
			'role'   => $this->get_setting( 'gallery_type' ),
			'items'  => $items,
		);

*/
		$this->set_style();
		//$this->set_layout();
	}
	private function set_style() {
	//	$this->json[ 'textStyle' ] = 'scalableCaption';
		$this->register_style( 'scalableCaption', array(
			'fontName'      => $this->get_setting( 'gallery_caption_font' ),
			'fontSize'      => intval( $this->get_setting( 'gallery_caption_size' ) ),
			'lineHeight'    => intval( $this->get_setting( 'gallery_caption_line_height' ) ),
			'textColor'     => $this->get_setting( 'gallery_caption_text_color' ),
			'linkStyle' 		=> array(
				'fontName'      => $this->get_setting( 'gallery_caption_link_font_name' ),
				'textColor'     => $this->get_setting( 'gallery_caption_link_text_color' ),
				'underline' 	=> true,  //gallery_caption_link_underline
			),


		) );
	}
    //	'textAlignment' => $this->find_text_alignment(),
	/*"fontName": "BrandonGrotesque-Bold",
			"fontSize": 14,
			"lineHeight": 16,
			"textColor": "#555555",
			"linkStyle": {
				"fontName": "ProximaNova-Regular",
				"textColor": "#CC9900",
				"underline": true
			}*/
	/**
	 * Set the layout for the component.
	 *
	 * @access private
	 */
	private function set_layout() {
		$this->json['layout'] = 'gallery-layout';
		$this->register_full_width_layout( 'gallery-layout', array(
			'margin' => array( 'top' => 25, 'bottom' => 25 )
		) );
	}

}

