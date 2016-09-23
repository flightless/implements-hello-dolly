<?php


namespace Hello_Dolly\Styles;

/**
 * Class Directional_Style_Rules
 *
 * Generates styles for the given text direction
 *
 * @package Hello_Dolly\Styles
 */
class Directional_Style_Rules implements Style_Rules_Interface {
	protected $side;

	/**
	 * Directional_Style_Rules constructor.
	 *
	 * @param string $side The side text floats to. 'left' or 'right'
	 */
	public function __construct( $side ) {
		if ( empty( $side ) ) {
			throw new \InvalidArgumentException( __( '$this->side must be set to a non-empty value' ) );
		}
		$this->side = $side;
	}

	public function get_styles() {
		return "
			float: {$this->side};
			padding-{$this->side}: 15px;
			padding-top: 5px;
			margin: 0;
			font-size: 11px;
		";
	}
}