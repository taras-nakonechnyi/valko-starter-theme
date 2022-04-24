<?php
/**
 * Register right sidebar
 *
 * @since   1.0.0
 * @package Valko_ST
 */

namespace Valko_ST\Sidebars;

/**
 * Right sidebar class
 */
class Right_Sidebar {
	/**
	 * Class hooks
	 *
	 * @return void
	 */
	public function hooks() {
		add_action( 'widgets_init', [ $this, 'add_left_sidebar' ] );
	}

	/**
	 * Add left sidebar
	 *
	 * @return void
	 */
	public function add_left_sidebar() {
		register_sidebar(
			[
				'name'          => __( 'Right Sidebar', 'valko-starter-theme' ),
				'id'            => 'right-sidebar',
				'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'valko-starter-theme' ),
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
			]
		);
	}
}
