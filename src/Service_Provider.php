<?php


namespace Hello_Dolly;


use Hello_Dolly\Formatting\Paragraph_Tag;
use Hello_Dolly\Formatting\String_Formatter;
use Hello_Dolly\Formatting\WP_Texturize_Formatter;
use Hello_Dolly\Lyrics\Lyric_Collection_Factory;
use Hello_Dolly\Printing\Formatted_Printer;
use Hello_Dolly\Styles\Directional_Style_Rules;
use Hello_Dolly\Styles\Style_Printer;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class Service_Provider implements ServiceProviderInterface {
	public function register( Container $container ) {
		$container[ 'html_id' ] = 'dolly';

		$container[ 'lyrics' ] = "Hello, Dolly
Well, hello, Dolly
It's so nice to have you back where you belong
You're lookin' swell, Dolly
I can tell, Dolly
You're still glowin', you're still crowin'
You're still goin' strong
We feel the room swayin'
While the band's playin'
One of your old favourite songs from way back when
So, take her wrap, fellas
Find her an empty lap, fellas
Dolly'll never go away again
Hello, Dolly
Well, hello, Dolly
It's so nice to have you back where you belong
You're lookin' swell, Dolly
I can tell, Dolly
You're still glowin', you're still crowin'
You're still goin' strong
We feel the room swayin'
While the band's playin'
One of your old favourite songs from way back when
Golly, gee, fellas
Find her a vacant knee, fellas
Dolly'll never go away
Dolly'll never go away
Dolly'll never go away again";

		$container[ 'style_rules.ltr' ] = function( Container $container ) {
			return new Directional_Style_Rules( 'right' );
		};
		$container[ 'style_rules.rtl' ] = function( Container $container ) {
			return new Directional_Style_Rules( 'left' );
		};

		$container[ 'style_printer' ] = function( Container $container ) {
			return new Style_Printer( $container[ 'html_id' ] );
		};

		$container[ 'lyrics.formatter' ] = function( Container $container ) {
			$formatter = new String_Formatter();
			$formatter = new WP_Texturize_Formatter( $formatter );
			$formatter = new Paragraph_Tag( $formatter, $container[ 'html_id' ] );
			return $formatter;
		};

		$container[ 'lyrics.printer' ] = function( Container $container ) {
			return new Formatted_Printer( $container[ 'lyrics.formatter' ] );
		};

		$container[ 'lyrics.collection' ] = function( Container $container ) {
			$factory = $container[ 'lyrics.collection.factory' ];
			$lyrics = $container[ 'lyrics' ];
			return $factory->create_collection( $lyrics );
		};

		$container[ 'lyrics.collection.factory' ] = function( Container $container ) {
			return new Lyric_Collection_Factory();
		};

	}
}