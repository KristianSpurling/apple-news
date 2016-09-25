<?php

namespace Apple_Actions\Index;

require_once plugin_dir_path( __FILE__ ) . '../class-action.php';
require_once plugin_dir_path( __FILE__ ) . '../../../includes/apple-exporter/autoload.php';

use Apple_Actions\Action as Action;
use Apple_Exporter\Exporter as Exporter;
use Apple_Exporter\Exporter_Content as Exporter_Content;
use Apple_Exporter\Exporter_Content_Settings as Exporter_Content_Settings;

class Export extends Action {

	/**
	 * ID of the post being exported.
	 *
	 * @var int
	 * @access private
	 */
	private $id;

	/**
	 * Constructor.
	 *
	 * @param Settings $settings
	 * @param int $id
	 */
	function __construct( $settings, $id ) {
		parent::__construct( $settings );
		$this->id = $id;
	}

	/**
	 * Perform the export and return the results.
	 *
	 * @return string The JSON data
	 * @access public
	 */
	public function perform() {
		$exporter = $this->fetch_exporter();
		return $exporter->export();
	}

	/**
	 * Fetches an instance of Exporter.
	 *
	 * @return Exporter
	 * @access public
	 */
	public function fetch_exporter()
    {

        do_action('apple_news_do_fetch_exporter', $this->id);

        // Fetch WP_Post object, and all required post information to fill up the
        // Exporter_Content instance.
        $post = get_post($this->id);

        // Build the excerpt if required
        if (empty($post->post_excerpt)) {
            $excerpt = wp_trim_words(strip_tags(strip_shortcodes($post->post_content)), 55, '...');
        } else {
            $excerpt = strip_tags($post->post_excerpt);
        }

        // Get the post thumbnail
        $post_thumb = wp_get_attachment_url(get_post_thumbnail_id($this->id)) ?: null;

        // Get the author
        $author = ucfirst(get_the_author_meta('display_name', $post->post_author));

        $userDataBlob = get_user_by('id', $post->post_author);
        $photoauthor = get_field('_ui_photo', 'user_' . $userDataBlob->ID);
        if (is_array($photoauthor))
            $logo = dmarge_get_image($photoauthor[0], 'nano');
        else
            $logo = dmarge_get_image($photoauthor, 'nano');
        //$logo = dmarge_get_image(ucfirst( get_the_author_meta( '_ui_photo', $post->post_author ) ),'thumbnail','alignleft');
        //$logo = null;
        // Set the default date format
        $date_format = 'M j, Y | g:i A';

        // Check for a custom byline format
        $byline_format = $this->get_setting('byline_format');
        if (!empty($byline_format)) {
            // Find and replace the author format placeholder name with a temporary placeholder
            // This is because some bylines could contain hashtags!
            $temp_byline_placeholder = 'AUTHOR' . time();
            $byline = str_replace('#author#', $temp_byline_placeholder, $byline_format);

            // Attempt to parse the date format from the remaining string
            $matches = array();
            preg_match('/#(.*?)#/', $byline, $matches);
            if (!empty($matches[1])) {
                // Set the date using the custom format
                $byline = str_replace($matches[0], date($matches[1], strtotime($post->post_date)), $byline);
            }

            // Replace the temporary placeholder with the actual byline
            $byline = str_replace($temp_byline_placeholder, $author, $byline);

        } else {
            // Use the default format
            $byline = sprintf(
                'by %1$s | %2$s',
                $author,
                date($date_format, strtotime($post->post_date))
            );
        }
        $content = '';
        // Filter each of our items before passing into the exporter class.
        $title = apply_filters('apple_news_exporter_title', $post->post_title, $post->ID);
        $excerpt = apply_filters('apple_news_exporter_excerpt', $excerpt, $post->ID);
        $post_thumb = apply_filters('apple_news_exporter_post_thumb', $post_thumb, $post->ID);

        //$logo = get_field('_ui_photo');
        //$logo = apply_filters('apple_news_exporter_logo', $logo, $post->ID);

        $breadcrumbcover = get_heading1_for_apple($post);
        $breadcrumbcover = apply_filters('apple_news_exporter_breadcrumbcover', $breadcrumbcover, $post->ID);

        //  $post_galleries = get_post_galleries( $post );
        $pf = get_post_format($post->ID);
        $gallery = null;
        if (($pf == 'gallery')) {
            $list = get_field('_gl', $post->ID);

            //if (is_array($list)) {
            $gallery = get_gallery_html_for_apple($list);
            // if (get_setting("dividers") == 'yes')
            //     $gallery .= '<hr>';
            $content .= apply_filters('apple_news_exporter_gallery', $gallery, $post->ID);
            //}
        } else {
            if ($pf == 'video') {
                if ($v_id = get_field('_v_id', $post->ID)) {
                    $video = '<div class="video"><iframe width="1280" height="720" src="https://www.youtube.com/embed/' . $v_id . '?feature=player_detailpage&VQ=HD1080" frameborder="0" allowfullscreen></iframe></div>';
                    //if (get_setting("dividers") == 'yes')
                    //    $video .= '<hr>';
                    $content .= apply_filters('apple_news_exporter_webvideo', $video, $post->ID);

                }
            } else {
                $content .= '<div class="cover"><img src="' . $post_thumb . '" /></div>';
            }
        }

	//	$content .= '<div class="author-container">';
       // if (get_setting("byline_logo") == 'yes') {
        //    if ($logo) $content .= '<div class="logo">' . $logo . '</div>';
       // }
	//	$content     .= '<div class="byline">'  . apply_filters('apple_news_exporter_byline', $byline, $post->ID) .  '</div>';
     //   $content .= '</div>';
        // The post_content is not raw HTML, as WordPress editor cleans up
		// paragraphs and new lines, so we need to transform the content to
		// HTML. We use 'the_content' filter for that.
		$content    .= apply_filters( 'apple_news_exporter_content_pre', $post->post_content, $post->ID );
		$content    = apply_filters( 'the_content', $content );
		$content    = apply_filters( 'apple_news_exporter_content', $content, $post->ID );

        $myfile2 = fopen("applenewsdebug0.txt", "w") or die("Unable to open file!");
        fwrite($myfile2, serialize($content) );
        fclose($myfile2);
        // Now pass all the variables into the Exporter_Content array.
		$base_content = new Exporter_Content(
			$post->ID,
			$title,
			$content,
			$excerpt,
			$post_thumb,
			$breadcrumbcover,
			$gallery,
			$logo,
			$byline,
			$this->fetch_content_settings()
		);

		return new Exporter( $base_content, null, $this->settings );
	}

	/**
	 * Loads settings for the Exporter_Content from the WordPress post metadata.
	 *
	 * @since 0.4.0
	 * @return Settings
	 * @access private
	 */
	private function fetch_content_settings() {
		$settings = new Exporter_Content_Settings();
		foreach ( get_post_meta( $this->id ) as $name => $value ) {
			if ( 0 === strpos( $name, 'apple_news_' ) ) {
				$name  = str_replace( 'apple_news_', '', $name );
				$value = $value[0];
				$settings->set( $name, $value );
			}
		}
		return apply_filters( 'apple_news_content_settings', $settings );
	}

}

