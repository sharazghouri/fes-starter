<?php
/**
 * Block Handler for SSR
 *
 * @package FSE Theme
 */

declare ( strict_types = 1 );

namespace FSE\Blocks;

use FSE\Abstracts\Block;

/**
 * Block Handler for SSR
 */
class Dynamic_SSR extends Block {

	/**
	 * The name of the block registered with WordPress.
	 *
	 * @var string
	 */
	protected string $name = 'example/dynamic-ssr';

	/**
	 * Render Block
	 *
	 * @param array $attributes The block attributes.
	 *
	 * @return void
	 */
	public function render_block( array $attributes ): void {
		$attributes = $attributes ?? array();
		printf(
			"<p class='dynamic-ssr'>%s</p>",
			esc_html( $attributes['content'] )
		);
	}
}
