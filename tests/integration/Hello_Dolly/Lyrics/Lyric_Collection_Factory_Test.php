<?php


namespace Hello_Dolly\Lyrics;


use Codeception\TestCase\WPTestCase;

class Lyric_Collection_Factory_Test extends WPTestCase {
	public function test_create_collection() {
		$lyrics = [];
		for ( $i = 0 ; $i < 10 ; $i++ ) {
			$lyrics[] = rand_str( mt_rand( 0, 32 ) ) . ' ' . rand_str( mt_rand( 0, 32 ) ) . ' ' . rand_str( mt_rand( 0, 32 ) );
		}
		$string = implode( "\n", $lyrics );
		$factory = new Lyric_Collection_Factory();
		$collection = $factory->create_collection( $string );

		for ( $i = 0 ; $i < 20 ; $i++ ) {
			$this->assertContains( $collection->get_lyric(), $lyrics );
		}
	}
}