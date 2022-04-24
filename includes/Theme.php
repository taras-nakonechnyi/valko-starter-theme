<?php
/**
 * Theme functions
 *
 * @since   1.0.0
 * @package Valko_ST
 */

namespace Valko_ST;

use Auryn\InjectionException;
use Auryn\Injector;
use Valko_ST\Sidebars\Sidebars;

/**
 * Main class
 */
class Theme {
	/**
	 * Dependency Injection Container.
	 *
	 * @var Injector
	 */
	private Injector $injector;

	/**
	 * Class constructor
	 *
	 * @param Injector $injector object.
	 */
	public function __construct( Injector $injector ) {
		$this->injector = $injector;
	}

	/**
	 * Run web application
	 *
	 * @throws InjectionException Injection Mistake.
	 */
	public function run(): void {
		$this->sidebars();
	}

	/**
	 * Sidebars registration
	 *
	 * @throws InjectionException Injection Mistake.
	 */
	public function sidebars() {
		$this->injector->make( Sidebars::class )->hooks();
	}
}
