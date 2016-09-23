<?php


namespace Hello_Dolly\Styles;

/**
 * Class Style_Printer
 *
 * Prints the given style rules for the element with the given ID
 *
 * @package Hello_Dolly\Styles
 */
class Style_Printer implements Style_Printer_Interface {
	protected $html_id;

	/**
	 * Style_Printer constructor.
	 *
	 * @param string $html_id The ID of the targetted DOM element
	 */
	public function __construct( $html_id ) {
		$this->html_id = $html_id;
	}

	/**
	 * @param Style_Rules_Interface $styles
	 * @return void
	 */
	public function print_styles( Style_Rules_Interface $styles ) {
		$rules = $styles->get_styles();
		if ( ! empty( $rules ) ) {
			printf ("
		<style type='text/css'>
		#%s {
			%s
		}
		</style>
		", $this->html_id, $rules );
		}
	}
}