<?php


namespace Hello_Dolly\Formatting;


use Codeception\TestCase\WPTestCase;

class Paragraph_Tag_Test extends WPTestCase {
	public function test_paragraph_tag() {
		$string = rand_str();
		$id = rand_str();

		$formatter = new Paragraph_Tag( new String_Formatter(), $id );

		$expected = sprintf( '<p id="%s">%s</p>', $id, $string );
		$this->assertEquals( $expected, $formatter->format( $string ) );
	}

	public function test_escaped_id() {
		$string = rand_str();
		$id = rand_str(8) . ' ' . rand_str(8);
		$escaped_id = sanitize_html_class( $id );
		$this->assertNotEquals( $id, $escaped_id );

		$formatter = new Paragraph_Tag( new String_Formatter(), $id );

		$expected = sprintf( '<p id="%s">%s</p>', $escaped_id, $string );
		$this->assertEquals( $expected, $formatter->format( $string ) );
	}
}