<?php


namespace Hello_Dolly\Formatting;

/**
 * Class WP_Texturize_Formatter
 *
 * Formats a string with wptexturize()
 *
 * @see wptexturize()
 * @package Hello_Dolly\Formatting
 */
class WP_Texturize_Formatter extends String_Formatter_Decorator {
	protected function decorate( $string ) {
		return wptexturize( $string );
	}
}