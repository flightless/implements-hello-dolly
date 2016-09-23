<?php

namespace Hello_Dolly\Printing;

/**
 * Interface Printer_Interface
 *
 * Prints a string
 *
 * @package Hello_Dolly\Printing
 */
interface Printer_Interface {
	/**
	 * Sends the string to stdout
	 *
	 * @param string $string
	 * @return void
	 */
	public function render( $string );
}
