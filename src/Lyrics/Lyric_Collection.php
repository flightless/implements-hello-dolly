<?php


namespace Hello_Dolly\Lyrics;

/**
 * Class Lyric_Collection
 *
 * @package Hello_Dolly\Lyrics
 */
class Lyric_Collection implements Lyric_Collection_Interface {
	/** @var string[] */
	protected $lyrics;

	/** @var int */
	protected $count = 0;

	/**
	 * Lyric_Collection constructor.
	 *
	 * @param array $lyrics An array of single-line strings
	 */
	public function __construct( array $lyrics ) {
		$this->lyrics = array_values( $lyrics );
		$this->count = count( $this->lyrics );
	}

	public function get_lyric() {
		return $this->get_random_lyric();
	}

	/**
	 * Get a random item from the list of lyrics
	 *
	 * @return string
	 */
	private function get_random_lyric() {
		return $this->lyrics[ $this->get_random_key() ];
	}

	/**
	 * Get a random integer within the range of keys
	 * for the list of lyrics
	 *
	 * @return int
	 */
	private function get_random_key() {
		return mt_rand( 0, $this->count - 1 );
	}
}