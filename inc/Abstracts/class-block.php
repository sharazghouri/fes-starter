<?php
/**
 * Abstract Block Registration Class
 *
 * @package SolutionBoxTheme
 */

declare ( strict_types = 1 );

namespace Solution_Box\Abstracts;

/**
 * Abstract Block Registration Class
 */
abstract class Block {

	/**
	 * The name of the block registered with WordPress.
	 *
	 * @var string
	 */
	protected string $name;

	/**
	 * Register
	 *
	 * @return void
	 */
	public function register(): void {
		register_block_type(
			$this->name,
			array(
				'render_callback' => array( $this, 'render' ),
			)
		);
	}

	/**
	 * Render
	 *
	 * @param array $attributes The block attributes.
	 *
	 * @return string
	 */
	public function render( array $attributes ): string {
		ob_start();
		$this->render_block( $attributes );
		return ob_get_clean();
	}

	/**
	 * Render Block
	 *
	 * @param array $attributes The block attributes.
	 *
	 * @return void
	 */
	abstract public function render_block( array $attributes ): void;
}
