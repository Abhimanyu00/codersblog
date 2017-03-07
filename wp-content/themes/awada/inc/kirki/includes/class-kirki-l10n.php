<?php
/**
 * Internationalization helper.
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

if ( ! class_exists( 'Kirki_l10n' ) ) {

	/**
	 * Handles translations
	 */
	class Kirki_l10n {

		/**
		 * The plugin textdomain
		 *
		 * @access protected
		 * @var string
		 */
		protected $textdomain = 'awada';

		/**
		 * The class constructor.
		 * Adds actions & filters to handle the rest of the methods.
		 *
		 * @access public
		 */
		public function __construct() {

			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		}

		/**
		 * Load the plugin textdomain
		 *
		 * @access public
		 */
		public function load_textdomain() {

			if ( null !== $this->get_path() ) {
				load_textdomain( $this->textdomain, $this->get_path() );
			}
			load_plugin_textdomain( $this->textdomain, false, Kirki::$path . '/languages' );

		}

		/**
		 * Gets the path to a translation file.
		 *
		 * @access protected
		 * @return string Absolute path to the translation file.
		 */
		protected function get_path() {
			$path_found = false;
			$found_path = null;
			foreach ( $this->get_paths() as $path ) {
				if ( $path_found ) {
					continue;
				}
				$path = wp_normalize_path( $path );
				if ( file_exists( $path ) ) {
					$path_found = true;
					$found_path = $path;
				}
			}

			return $found_path;

		}

		/**
		 * Returns an array of paths where translation files may be located.
		 *
		 * @access protected
		 * @return array
		 */
		protected function get_paths() {

			return array(
				WP_LANG_DIR . '/' . $this->textdomain . '-' . get_locale() . '.mo',
				Kirki::$path . '/languages/' . $this->textdomain . '-' . get_locale() . '.mo',
			);

		}

		/**
		 * Shortcut method to get the translation strings
		 *
		 * @static
		 * @access public
		 * @param string $config_id The config ID. See Kirki_Config.
		 * @return array
		 */
		public static function get_strings( $config_id = 'global' ) {

			$translation_strings = array(
				'background-color'      => esc_attr__( 'Background Color', 'awada' ),
				'background-image'      => esc_attr__( 'Background Image', 'awada' ),
				'no-repeat'             => esc_attr__( 'No Repeat', 'awada' ),
				'repeat-all'            => esc_attr__( 'Repeat All', 'awada' ),
				'repeat-x'              => esc_attr__( 'Repeat Horizontally', 'awada' ),
				'repeat-y'              => esc_attr__( 'Repeat Vertically', 'awada' ),
				'inherit'               => esc_attr__( 'Inherit', 'awada' ),
				'background-repeat'     => esc_attr__( 'Background Repeat', 'awada' ),
				'cover'                 => esc_attr__( 'Cover', 'awada' ),
				'contain'               => esc_attr__( 'Contain', 'awada' ),
				'background-size'       => esc_attr__( 'Background Size', 'awada' ),
				'fixed'                 => esc_attr__( 'Fixed', 'awada' ),
				'scroll'                => esc_attr__( 'Scroll', 'awada' ),
				'background-attachment' => esc_attr__( 'Background Attachment', 'awada' ),
				'left-top'              => esc_attr__( 'Left Top', 'awada' ),
				'left-center'           => esc_attr__( 'Left Center', 'awada' ),
				'left-bottom'           => esc_attr__( 'Left Bottom', 'awada' ),
				'right-top'             => esc_attr__( 'Right Top', 'awada' ),
				'right-center'          => esc_attr__( 'Right Center', 'awada' ),
				'right-bottom'          => esc_attr__( 'Right Bottom', 'awada' ),
				'center-top'            => esc_attr__( 'Center Top', 'awada' ),
				'center-center'         => esc_attr__( 'Center Center', 'awada' ),
				'center-bottom'         => esc_attr__( 'Center Bottom', 'awada' ),
				'background-position'   => esc_attr__( 'Background Position', 'awada' ),
				'background-opacity'    => esc_attr__( 'Background Opacity', 'awada' ),
				'on'                    => esc_attr__( 'ON', 'awada' ),
				'off'                   => esc_attr__( 'OFF', 'awada' ),
				'all'                   => esc_attr__( 'All', 'awada' ),
				'cyrillic'              => esc_attr__( 'Cyrillic', 'awada' ),
				'cyrillic-ext'          => esc_attr__( 'Cyrillic Extended', 'awada' ),
				'devanagari'            => esc_attr__( 'Devanagari', 'awada' ),
				'greek'                 => esc_attr__( 'Greek', 'awada' ),
				'greek-ext'             => esc_attr__( 'Greek Extended', 'awada' ),
				'khmer'                 => esc_attr__( 'Khmer', 'awada' ),
				'latin'                 => esc_attr__( 'Latin', 'awada' ),
				'latin-ext'             => esc_attr__( 'Latin Extended', 'awada' ),
				'vietnamese'            => esc_attr__( 'Vietnamese', 'awada' ),
				'hebrew'                => esc_attr__( 'Hebrew', 'awada' ),
				'arabic'                => esc_attr__( 'Arabic', 'awada' ),
				'bengali'               => esc_attr__( 'Bengali', 'awada' ),
				'gujarati'              => esc_attr__( 'Gujarati', 'awada' ),
				'tamil'                 => esc_attr__( 'Tamil', 'awada' ),
				'telugu'                => esc_attr__( 'Telugu', 'awada' ),
				'thai'                  => esc_attr__( 'Thai', 'awada' ),
				'serif'                 => _x( 'Serif', 'font style', 'awada' ),
				'sans-serif'            => _x( 'Sans Serif', 'font style', 'awada' ),
				'monospace'             => _x( 'Monospace', 'font style', 'awada' ),
				'font-family'           => esc_attr__( 'Font Family', 'awada' ),
				'font-size'             => esc_attr__( 'Font Size', 'awada' ),
				'font-weight'           => esc_attr__( 'Font Weight', 'awada' ),
				'line-height'           => esc_attr__( 'Line Height', 'awada' ),
				'font-style'            => esc_attr__( 'Font Style', 'awada' ),
				'letter-spacing'        => esc_attr__( 'Letter Spacing', 'awada' ),
				'top'                   => esc_attr__( 'Top', 'awada' ),
				'bottom'                => esc_attr__( 'Bottom', 'awada' ),
				'left'                  => esc_attr__( 'Left', 'awada' ),
				'right'                 => esc_attr__( 'Right', 'awada' ),
				'center'                => esc_attr__( 'Center', 'awada' ),
				'justify'               => esc_attr__( 'Justify', 'awada' ),
				'color'                 => esc_attr__( 'Color', 'awada' ),
				'add-image'             => esc_attr__( 'Add Image', 'awada' ),
				'change-image'          => esc_attr__( 'Change Image', 'awada' ),
				'no-image-selected'     => esc_attr__( 'No Image Selected', 'awada' ),
				'add-file'              => esc_attr__( 'Add File', 'awada' ),
				'change-file'           => esc_attr__( 'Change File', 'awada' ),
				'no-file-selected'      => esc_attr__( 'No File Selected', 'awada' ),
				'remove'                => esc_attr__( 'Remove', 'awada' ),
				'select-font-family'    => esc_attr__( 'Select a font-family', 'awada' ),
				'variant'               => esc_attr__( 'Variant', 'awada' ),
				'subsets'               => esc_attr__( 'Subset', 'awada' ),
				'size'                  => esc_attr__( 'Size', 'awada' ),
				'height'                => esc_attr__( 'Height', 'awada' ),
				'spacing'               => esc_attr__( 'Spacing', 'awada' ),
				'ultra-light'           => esc_attr__( 'Ultra-Light 100', 'awada' ),
				'ultra-light-italic'    => esc_attr__( 'Ultra-Light 100 Italic', 'awada' ),
				'light'                 => esc_attr__( 'Light 200', 'awada' ),
				'light-italic'          => esc_attr__( 'Light 200 Italic', 'awada' ),
				'book'                  => esc_attr__( 'Book 300', 'awada' ),
				'book-italic'           => esc_attr__( 'Book 300 Italic', 'awada' ),
				'regular'               => esc_attr__( 'Normal 400', 'awada' ),
				'italic'                => esc_attr__( 'Normal 400 Italic', 'awada' ),
				'medium'                => esc_attr__( 'Medium 500', 'awada' ),
				'medium-italic'         => esc_attr__( 'Medium 500 Italic', 'awada' ),
				'semi-bold'             => esc_attr__( 'Semi-Bold 600', 'awada' ),
				'semi-bold-italic'      => esc_attr__( 'Semi-Bold 600 Italic', 'awada' ),
				'bold'                  => esc_attr__( 'Bold 700', 'awada' ),
				'bold-italic'           => esc_attr__( 'Bold 700 Italic', 'awada' ),
				'extra-bold'            => esc_attr__( 'Extra-Bold 800', 'awada' ),
				'extra-bold-italic'     => esc_attr__( 'Extra-Bold 800 Italic', 'awada' ),
				'ultra-bold'            => esc_attr__( 'Ultra-Bold 900', 'awada' ),
				'ultra-bold-italic'     => esc_attr__( 'Ultra-Bold 900 Italic', 'awada' ),
				'invalid-value'         => esc_attr__( 'Invalid Value', 'awada' ),
				'add-new'           	=> esc_attr__( 'Add new', 'awada' ),
				'row'           		=> esc_attr__( 'row', 'awada' ),
				'limit-rows'            => esc_attr__( 'Limit: %s rows', 'awada' ),
				'open-section'          => esc_attr__( 'Press return or enter to open this section', 'awada' ),
				'back'                  => esc_attr__( 'Back', 'awada' ),
				'reset-with-icon'       => sprintf( esc_attr__( '%s Reset', 'awada' ), '<span class="dashicons dashicons-image-rotate"></span>' ),
				'text-align'            => esc_attr__( 'Text Align', 'awada' ),
				'text-transform'        => esc_attr__( 'Text Transform', 'awada' ),
				'none'                  => esc_attr__( 'None', 'awada' ),
				'capitalize'            => esc_attr__( 'Capitalize', 'awada' ),
				'uppercase'             => esc_attr__( 'Uppercase', 'awada' ),
				'lowercase'             => esc_attr__( 'Lowercase', 'awada' ),
				'initial'               => esc_attr__( 'Initial', 'awada' ),
				'select-page'           => esc_attr__( 'Select a Page', 'awada' ),
				'open-editor'           => esc_attr__( 'Open Editor', 'awada' ),
				'close-editor'          => esc_attr__( 'Close Editor', 'awada' ),
				'switch-editor'         => esc_attr__( 'Switch Editor', 'awada' ),
				'hex-value'             => esc_attr__( 'Hex Value', 'awada' ),
			);

			// Apply global changes from the kirki/config filter.
			// This is generally to be avoided.
			// It is ONLY provided here for backwards-compatibility reasons.
			// Please use the kirki/{$config_id}/l10n filter instead.
			$config = apply_filters( 'kirki/config', array() );
			if ( isset( $config['i18n'] ) ) {
				$translation_strings = wp_parse_args( $config['i18n'], $translation_strings );
			}

			// Apply l10n changes using the kirki/{$config_id}/l10n filter.
			return apply_filters( 'kirki/' . $config_id . '/l10n', $translation_strings );

		}
	}
}
