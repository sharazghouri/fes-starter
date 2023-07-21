<?php
/**
 * Block Registration Manager
 *
 * @package FSE Theme
 */

declare ( strict_types = 1 );

namespace FSE;

use FSE\Blocks\Dynamic_SSR;

/**
 * Block Registration Manager
 */
class Block_Registration {

	/**
	 * Setup Hooks
	 *
	 * @return void
	 */
	public function setup_hooks(): void {
		add_action( 'after_setup_theme', array( $this, 'register_theme_support' ) );
		add_action( 'init', array( $this, 'register_blocks' ) );
	}

	/**
	 * Register Theme Support
	 *
	 * @return void
	 */
	public function register_theme_support(): void {
		add_theme_support( 'wp-block-styles' );
	}

	/**
	 * Register Blocks
	 *
	 * @return void
	 */
	public function register_blocks(): void {
		$blocks = array(
			new Dynamic_SSR(),
		);

		foreach ( $blocks as $block ) {
			$block->register();
		}
	}
}
