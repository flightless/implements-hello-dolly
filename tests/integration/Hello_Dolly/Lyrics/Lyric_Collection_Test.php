<?php


namespace Hello_Dolly\Lyrics;


use Codeception\TestCase\WPTestCase;

class Lyric_Collection_Test extends WPTestCase {
	public function test_get_lyric() {
		$lyrics = [];
		for ( $i = 0 ; $i < 10 ; $i++ ) {
			$lyrics[] = rand_str( mt_rand( 0, 32 ) ) . ' ' . rand_str( mt_rand( 0, 32 ) ) . ' ' . rand_str( mt_rand( 0, 32 ) );
		}

		$collection = new Lyric_Collection( $lyrics );
		for ( $i = 0 ; $i < 20 ; $i++ ) {
			$this->assertContains( $collection->get_lyric(), $lyrics );
		}
	}
}