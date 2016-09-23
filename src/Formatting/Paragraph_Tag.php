<?php


namespace Hello_Dolly\Formatting;

/**
 * Class Paragraph_Tag
 *
 * Wraps a string in a paragraph tag with an ID
 *
 * @package Hello_Dolly\Formatting
 */
class Paragraph_Tag extends String_Formatter_Decorator {
	/** @var string */
	private $html_id;

	/**
	 * Paragraph_Tag constructor.
	 *
	 * @param String_Formatter_Interface $formatter
	 * @param                            $html_id
	 */
	public function __construct( String_Formatter_Interface $formatter, $html_id ) {
		parent::__construct( $formatter );
		$this->html_id = $html_id;
	}

	protected function decorate( $string ) {
		return sprintf( '<p id="%s">%s</p>', sanitize_html_class( $this->html_id), $string );
	}
}