<?php
namespace Apple_Exporter\Components;

use \Apple_Exporter\Exporter as Exporter;

/**
 * A cover is optional and displayed at the very top of the article. It's
 * loaded from the Exporter_Content's cover attribute, if present.
 * This component does not need a node so no need to implement match_node.
 *
 * In a WordPress context, the Exporter_Content's cover attribute is a post's
 * thumbnail, a.k.a featured image.
 *
 * @since 0.2.0
 */
class Breadcrumbcover extends Component {

	/**
	 * Build the component.
	 *
	 * @param string $text
	 * @access protected
	 */
	protected function build( $text ) {
		$this->json = array(
			'role' 			=> 'heading1',
			'text'          => strtoupper($text),
			'layout' 		=> array( 'margin' => array ('top' => $this->get_setting('heading1_top_margin'),
                'bottom' => $this->get_setting('heading1_bottom_margin'),
                ),
                'textAlignment' => $this->get_setting('heading1_alignment')
            )
		);
		/* $this->json = array(
			'role' 			=> 'header',
			'layout' 		=> 'headerPhotoLayout',
			'components' 	=> array( array(
				'role' 			=> 'photo',
				'layout' 		=> 'headerPhotoLayout',
				'URL' 			=> $this->maybe_bundle_source( $url ),
			) ),
			'behavior' 		=> array(
				'type' 			=> 'parallax',
				'factor' 		=> 0.8,
			),
		);
*/
		//$this->set_default_layout();
        $this->set_style();

	}
	/**
	 * Set the style for the component.
	 *
	 * @access private
	 */
	private function set_style() {
		$this->json[ 'textStyle' ] = 'default-heading1';
		$this->register_style( 'default-heading1', array(
			'fontName'      => $this->get_setting( 'heading1_font' ),
			'fontSize'      => intval( $this->get_setting( 'heading1_size' ) ),
			'lineHeight'    => intval( $this->get_setting( 'heading1_line_height' )),
			'textColor'     => $this->get_setting( 'heading1_color' ),
			'textAlignment' =>  $this->get_setting( 'heading1_alignment' ),
        ));
	}

	/**
	 * Set the default layout for the component.
	 *
	 * @access private
	 */
	private function set_default_layout() {
		$this->register_full_width_layout( 'headerPhotoLayout', array(
			'ignoreDocumentMargin' => true,
			'columnStart' => 0,
			'columnSpan' => 11,
		) );

		$this->register_full_width_layout( 'headerBelowTextPhotoLayout', array(
			'ignoreDocumentMargin' => true,
			'columnStart' => 0,
			'columnSpan' => 11,
			'margin' => array(
				'top' => 30,
				'bottom' => 0,
			),
		) );
	}

}
