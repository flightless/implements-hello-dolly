<?php


namespace Hello_Dolly\Printing;

use Hello_Dolly\Formatting\String_Formatter_Interface;

/**
 * Class Formatted_Printer
 *
 * Prints a string after it is formatted
 *
 * @package Hello_Dolly\Printing
 */
class Formatted_Printer implements Printer_Interface  {
	/** @var String_Formatter_Interface */
	private $formatter;

	/**
	 * Formatted_Printer constructor.
	 *
	 * @param String_Formatter_Interface $formatter The object responsible for formatting the string
	 */
	public function __construct( String_Formatter_Interface $formatter ) {
		$this->formatter = $formatter;
	}

	public function render( $string ) {
		echo $this->formatter->format( $string );
	}
}