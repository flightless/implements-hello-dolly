<?php


namespace Hello_Dolly\Lyrics;

/**
 * Class Lyric_Collection_Factory
 *
 * Creates as Lyric_Collection instance from
 * a string of lyrics.
 *
 * @package Hello_Dolly\Lyrics
 */
class Lyric_Collection_Factory implements Lyric_Collection_Factory_Interface {
	/**
	 * @param string $lyrics
	 * @return Lyric_Collection
	 */
	public function create_collection( $lyrics ) {
		$lyrics = explode( "\n", $lyrics );
		return new Lyric_Collection( $lyrics );
	}
}