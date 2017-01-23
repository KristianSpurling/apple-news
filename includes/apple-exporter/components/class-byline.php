<?php
namespace Apple_Exporter\Components;

use \Apple_Exporter\Exporter as Exporter;

/**
 * A byline normally describes who wrote the article, the date, etc.
 *
 * @since 0.2.0
 */
class Byline extends Component {


    public static function node_matches( $node ) {
        if ( self::node_has_class( $node, 'byline' ) ) {
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

		//$filename = preg_replace( '/\\?.*/', '', \Apple_News::get_filename( $text ) );
		/*$this->json = array(
			'role' => 'logo',
			'URL'  => $this->maybe_bundle_source( $text, $filename ),
			'layout' 		=> array('horizontalContentAlignment' => 'left',
				'maximumContentWidth' => 100,
				'columnStart' => 0,
				'columnSpan' => 2,
				'margin' => 20),
		);*/

		$this->json = array(
			'role' => 'byline',
			'format' => 'markdown',
			'text' => $text,
			'layout' 		=> array(
									'ignoreDocumentGutter' => 'left',
									'margin' => $this->get_setting( 'byline_margin' )),
			);

		$this->set_default_style();
		//$this->set_default_layout();
	}

	/**
	 * Set the default style for the component.
	 *
	 * @access private
	 */
	private function set_default_style() {
		$this->json[ 'textStyle' ] = 'default-byline';
		$this->register_style( 'default-byline', array(
			'textAlignment' => $this->find_text_alignment(),
			'fontName' => $this->get_setting( 'byline_font' ),
			'fontSize' => intval( $this->get_setting( 'byline_size' ) ),
			'lineHeight' => intval( $this->get_setting( 'byline_line_height' ) ),
			'tracking' => intval( $this->get_setting( 'byline_tracking' ) ) / 100,
			'textColor' => $this->get_setting( 'byline_color' ),
			'fontName'      => $this->get_setting( 'byline_font' ),
			'fontSize'      => intval( $this->get_setting( 'byline_size' ) ),
			'textColor'     => $this->get_setting( 'byline_color' ),
            'textAlignment' => $this->get_setting( 'byline_alignment' )
		) );
        //	'textAlignment' => $this->find_text_alignment(),
	}

	/**
	 * Set the default layout for the component.
	 *
	 * @access private
	 */
/*	private function set_default_layout() {
		$this->json[ 'layout' ] = 'byline-layout';
		$this->register_full_width_layout( 'byline-layout', array(
			'margin' => array(
				'top' => 10,
				'bottom' => 10,
			),
		) );
	}
*/
}

