<?php


namespace Hello_Dolly\Printing;


use Codeception\TestCase\WPTestCase;
use Hello_Dolly\Formatting\String_Formatter;
use Hello_Dolly\Formatting\WP_Texturize_Formatter;

class Formatted_Printer_Test extends WPTestCase {
	public function test_formatted_printer() {
		$string = "You're lookin' swell, Dolly";
		$texturized_string = wptexturize( $string );

		$formatter = new WP_Texturize_Formatter( new String_Formatter() );
		$printer = new Formatted_Printer( $formatter );
		$this->expectOutputString( $texturized_string );
		$printer->render( $string );
	}
}