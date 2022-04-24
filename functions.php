<?php
/**
 * Theme functions
 *
 * @package Valko_ST
 */

use Auryn\InjectionException;
use Auryn\Injector;
use Valko_ST\Theme;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Theme init
 *
 * @throws InjectionException Injection.
 */
function start_theme() {
	$injector = new Injector();
	$injector->make( Theme::class, [ $injector ] )->run();
}


try {
	start_theme();
} catch ( Exception $e ) {
	// phpcs:disable WordPress.PHP.DevelopmentFunctions
	error_log( $e->getMessage() );

	// phpcs:enable
	return false;
}
