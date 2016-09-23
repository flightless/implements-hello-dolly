<?php


namespace Hello_Dolly\Lyrics;

/**
 * Interface Lyric_Collection_Factory_Interface
 *
 * Creates a Lyric_Collection_Interface from a
 * multi-line string of lyrics.
 *
 * @package Hello_Dolly\Lyrics
 */
interface Lyric_Collection_Factory_Interface {
	/**
	 * @param string $lyrics A multi-line string of lyrics
	 * @return Lyric_Collection_Interface
	 */
	public function create_collection( $lyrics );
}