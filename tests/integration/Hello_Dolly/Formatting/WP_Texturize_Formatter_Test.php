<?php


namespace Hello_Dolly\Formatting;


use Codeception\TestCase\WPTestCase;

class WP_Texturize_Formatter_Test extends WPTestCase {
	public function test_texturization() {
		$string = "You're lookin' swell, Dolly";
		$texturized_string = wptexturize( $string );
		$this->assertNotEquals( $string, $texturized_string );

		$formatter = new WP_Texturize_Formatter( new String_Formatter() );
		$this->assertEquals( $texturized_string, $formatter->format( $string ) );
	}
}