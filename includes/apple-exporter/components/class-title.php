<?php
namespace Apple_Exporter\Components;

class Title extends Component {

	/**
	 * Build the component.
	 *
	 * @param string $text
	 * @access protected
	 */
	protected function build( $text ) {
	    if ($this->get_setting( 'header_all_caps' ) == 'yes')
                $text = strtoupper($text);
		$this->json = array(
			'role' => 'title',
			'text' => $text,
            'layout' => array (
                'margin' => array (
                    'top' => intval( $this->get_setting( 'header_top_margin' ) ),
                    'bottom' => intval( $this->get_setting( 'header_bottom_margin' ) )
           )
            )
            );

		$this->set_style();
		//$this->set_layout();
	}

	/**
	 * Set the style for the component.
	 *
	 * @access private
	 */
	private function set_style() {
		$this->json[ 'textStyle' ] = 'default-title';
		$this->register_style( 'default-title', array(
			'fontName' => $this->get_setting( 'header1_font' ),
			'fontSize' => intval( $this->get_setting( 'header1_size' ) ),
			'lineHeight' => intval( $this->get_setting( 'header1_line_height' ) ),
			'tracking' => intval( $this->get_setting( 'header1_tracking' ) ) / 100,
			'textColor' => $this->get_setting( 'header1_color' ),
			'textAlignment' => $this->find_text_alignment(),
			'fontName'      => $this->get_setting( 'header_font' ),
			'fontSize'      => intval( $this->get_setting( 'header_size' ) ),
			'lineHeight'    => intval( $this->get_setting( 'header_line_height' ) ),
			'textColor'     => $this->get_setting( 'header_color' ),
			'textAlignment' => $this->get_setting( 'header_alignment')
		) );
	}

	/**
	 * Set the layout for the component.
	 *
	 * @access private
	 */
	private function set_layout() {
		$this->json[ 'layout' ] = 'title-layout';
		$this->register_layout( 'title-layout', array(
      'margin' => array(
        'bottom' => 5,
      ),
		) );
	}
//'top' => 30,

}

