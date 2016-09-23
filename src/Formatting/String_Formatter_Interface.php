<?php


namespace Hello_Dolly\Formatting;

/**
 * Interface String_Formatter_Interface
 *
 * Implementors will format and return a string.
 *
 * @package Hello_Dolly\Formatting
 */
interface String_Formatter_Interface {
	/**
	 * @param string $string The string to be formatted
	 * @return string The formatted string
	 */
	public function format( $string );
}