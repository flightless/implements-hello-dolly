<?php


namespace Hello_Dolly\Formatting;

/**
 * Class String_Formatter_Decorator
 *
 * Base class for string decorators.
 *
 * @package Hello_Dolly\Formatting
 */
abstract class String_Formatter_Decorator implements String_Formatter_Interface {
	/** @var String_Formatter_Interface */
	protected $formatter;
	public function __construct( String_Formatter_Interface $formatter ) {
		$this->formatter = $formatter;
	}

	public function format( $string ) {
		$string = $this->formatter->format( $string );
		return $this->decorate( $string );
	}

	abstract protected function decorate( $string );
}