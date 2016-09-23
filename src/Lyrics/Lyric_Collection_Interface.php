<?php


namespace Hello_Dolly\Lyrics;

/**
 * Interface Lyric_Collection_Interface
 *
 * Implementors will return a single line of lyrics
 *
 * @package Hello_Dolly\Lyrics
 */
interface Lyric_Collection_Interface {
	/**
	 * @return string A single line of lyrics
	 */
	public function get_lyric();
}