<?php


namespace Hello_Dolly\Styles;


use Codeception\TestCase\WPTestCase;

class Style_Printer_Test extends WPTestCase {
	public function test_style_printer() {
		$random_id = rand_str( 12 );
		$rules = new Directional_Style_Rules( 'left' );
		$printer = new Style_Printer( $random_id );
		$expected = "
		<style type='text/css'>
		#$random_id {
			
			float: left;
			padding-left: 15px;
			padding-top: 5px;
			margin: 0;
			font-size: 11px;
		
		}
		</style>
		";
		$this->expectOutputString( $expected );
		$printer->print_styles( $rules );
	}
}