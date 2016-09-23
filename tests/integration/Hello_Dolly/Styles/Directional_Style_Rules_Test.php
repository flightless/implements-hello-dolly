<?php


namespace Hello_Dolly\Styles;


use Codeception\TestCase\WPTestCase;

class Directional_Style_Rules_Test extends WPTestCase {
	public function test_ltr_styles() {
		$rules = new Directional_Style_Rules( 'left' );
		$expected = "
			float: left;
			padding-left: 15px;
			padding-top: 5px;
			margin: 0;
			font-size: 11px;
		";
		$this->assertEquals( $expected, $rules->get_styles() );
	}

	public function test_rtl_styles() {
		$rules = new Directional_Style_Rules( 'right' );
		$expected = "
			float: right;
			padding-right: 15px;
			padding-top: 5px;
			margin: 0;
			font-size: 11px;
		";
		$this->assertEquals( $expected, $rules->get_styles() );
	}

	public function test_exception_on_empty_side() {
		$this->expectException( 'InvalidArgumentException' );
		$rules = new Directional_Style_Rules( '' );
		$rules->get_styles();
	}
}