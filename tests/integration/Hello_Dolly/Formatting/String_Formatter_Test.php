<?php


namespace Hello_Dolly\Formatting;


use Codeception\TestCase\WPTestCase;

class String_Formatter_Test extends WPTestCase {
	public function test_passthrough() {
		$string = rand_str();
		$passthrough = new String_Formatter();

		$this->assertEquals( $string, $passthrough->format( $string ) );
	}
}