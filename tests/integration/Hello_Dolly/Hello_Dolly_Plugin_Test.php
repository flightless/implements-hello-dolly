<?php


namespace Hello_Dolly;


use Codeception\TestCase\WPTestCase;

class Hello_Dolly_Plugin_Test extends WPTestCase {
	public function test_get_instance() {
		$instance = Hello_Dolly_Plugin::instance();
		$this->assertInstanceOf( 'Hello_Dolly\\Hello_Dolly_Plugin', $instance );
	}
}