<?php


namespace Hello_Dolly\Formatting;

/**
 * Class String_Formatter
 *
 * A passthrough formatter that returns the given string
 *
 * @package Hello_Dolly\Formatting
 */
class String_Formatter implements String_Formatter_Interface {
	public function format( $string ) {
		return $string;
	}
}