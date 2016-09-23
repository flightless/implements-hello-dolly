<?php


namespace Hello_Dolly\Styles;

/**
 * Interface Style_Printer_Interface
 *
 * Prints CSS styles
 *
 * @package Hello_Dolly\Styles
 */
interface Style_Printer_Interface {
	/**
	 * @param Style_Rules_Interface $styles
	 * @return void
	 */
	public function print_styles( Style_Rules_Interface $styles );
}