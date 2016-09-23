<?php


namespace Hello_Dolly;

use Hello_Dolly\Lyrics\Lyric_Collection_Interface;
use Hello_Dolly\Printing\Printer_Interface;
use Hello_Dolly\Styles\Style_Printer_Interface;
use Hello_Dolly\Styles\Style_Rules_Interface;
use Pimple\Container;

/**
 * Class Hello_Dolly_Plugin
 *
 * @package Hello_Dolly
 *
 * Initializes the Hello, Dolly plugin
 */
class Hello_Dolly_Plugin {
	/** @var static */
	private static $instance;

	/** @var Container */
	private $container;

	/**
	 * Hook into WordPress
	 *
	 * @return void
	 */
	private function hooks() {
		add_action( 'admin_head', [ $this, 'print_admin_css' ] );
		add_action( 'admin_notices', [ $this, 'print_admin_notice' ] );
	}

	public function print_admin_css() {
		$style_rules = $this->get_style_rules();
		$printer = $this->get_style_printer();
		$printer->print_styles( $style_rules );
	}

	public function print_admin_notice() {
		$lyrics = $this->get_lyric_collection();
		$printer = $this->get_lyric_printer();
		$printer->render( $lyrics->get_lyric() );
	}


	/**
	 * @return Style_Rules_Interface
	 */
	private function get_style_rules() {
		if ( is_rtl() ) {
			$style_rules = $this->container[ 'style_rules.rtl' ];
		} else {
			$style_rules = $this->container[ 'style_rules.ltr' ];
		}
		return apply_filters( 'hello_dolly/style_rules', $style_rules );
	}

	/**
	 * @return Style_Printer_Interface
	 */
	private function get_style_printer() {
		$printer = $this->container[ 'style_printer' ];
		return apply_filters( 'hello_dolly/style_printer', $printer );
	}

	/**
	 * @return Lyric_Collection_Interface
	 */
	private function get_lyric_collection() {
		$collection = $this->container[ 'lyrics.collection' ];
		return apply_filters( 'hello_dolly/lyric_collection', $collection );
	}

	/**
	 * @return Printer_Interface
	 */
	private function get_lyric_printer() {
		$printer = $this->container[ 'lyrics.printer' ];
		return apply_filters( 'hello_dolly/printer', $printer );
	}

	/**
	 * Initialize the plugin
	 *
	 * @return void
	 */
	public static function init( Container $container ) {
		$instance = self::instance();
		$instance->container = $container;
		$instance->hooks();
	}

	/**
	 * Get the global instance of the class
	 *
	 * @return static
	 */
	public static function instance() {
		if ( empty( static::$instance ) ) {
			static::$instance = new static();
		}
		return static::$instance;
	}
}