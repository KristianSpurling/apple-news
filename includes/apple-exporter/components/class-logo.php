<?php
namespace Apple_Exporter\Components;

use \Apple_Exporter\Exporter as Exporter;

/**
 * Represents a simple image.
 *
 * @since 0.2.0
 */
class Logo extends Component {

	/**
	 * Look for node matches for this component.
	 *
	 * @param DomNode $node
	 * @return mixed
	 * @static
	 * @access public
	 */
    public static function node_matches( $node ) {
        if ( self::node_has_class( $node, 'logo' ) ) {
            return $node;
        }

        return null;
    }

	/**
	 * Build the component.
	 *
	 * @param string $url
	 * @internal param string $text
	 * @access protected
	 * }
	 */
	protected function build( $text ) {
        preg_match_all( '/src="([^"]+)"/', $text, $matches );
        $url      = esc_url_raw( apply_filters( 'apple_news_build_logo_src', $matches[1][0], $text ) );
        $filename = preg_replace( '/\\?.*/', '', \Apple_News::get_filename( $url ) );
        $this->json = array(
			'role' => 'logo',
			'URL'  => $this->maybe_bundle_source( $url ),
			'layout' 		=> array('horizontalContentAlignment' => 'left',
				'maximumContentWidth' => 100,
				'columnStart' => 0,
				'columnSpan' => 2,
				'margin' => 20),
		);

	}
}
