<?php


namespace Hello_Dolly\Styles;

/**
 * Interface Style_Rules_Interface
 *
 * Generates a list of CSS properties
 *
 * @package Hello_Dolly\Styles
 */
interface Style_Rules_Interface {

	/**
	 * @return string
	 */
	public function get_styles();
}