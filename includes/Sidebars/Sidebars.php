<?php
/**
 * Register all sidebars
 *
 * @since   1.0.0
 * @package Valko_ST
 */

namespace Valko_ST\Sidebars;

/**
 * Sidebars class
 */
class Sidebars {
	/**
	 * Class hooks
	 *
	 * @return void
	 */
	public function hooks() {
		( new Left_Sidebar() )->hooks();
		( new Right_Sidebar() )->hooks();
	}
}
