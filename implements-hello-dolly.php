<?php
/**
 * @package Hello_Dolly
 * @version 2.0
 */
/*
Plugin Name: implements Hello_Dolly
Description: We start with everyone’s favorite WordPress plugin, “Hello, Dolly”. With a dramatic wave of our hands, we speak the magical word: “Refactor!” Let’s see how far we can go.
Author: Jonathan Brinley
Version: 2.0
Contributors: Matt Mullenweg
*/

namespace Hello_Dolly;
use Pimple\Container;

// Start the plugin
add_action( 'plugins_loaded', function () {
	require_once __DIR__ . '/vendor/autoload.php';
	$container = new Container();
	$container->register( new Service_Provider() );
	Hello_Dolly_Plugin::init( $container );
	do_action( 'hello_dolly/init', Hello_Dolly_Plugin::instance(), $container );
}, 1, 0 );
