<?php
/**
 * Block Registration Manager
 *
 * @package FSE Theme
 */

declare ( strict_types = 1 );

namespace FSE;


/**
 * Block Miscellaneous
 */
class Block_Misc {

	/**
	 * Setup Hooks
	 *
	 * @return void
	 */
	public function setup_hooks(): void {
		
		add_action( 'init', array( $this, 'register_block_style' ) );
	}

	public function register_block_style() {

		register_block_style( 'core/button', array(
			'name'         => 'button-light',
			'label'        => __( 'Light', 'wow-cloth' ),
			'inline_style' => '.wp-block-button.is-style-button-light .wp-element-button {
				background-color: #fff;
				color: #000;
			}
			.wp-block-button.is-style-button-light .wp-element-button:hover {
				background-color: var(--wp--preset--color--gray);
				
			}'
			
			) );


		register_block_style( 'core/heading', array(
			'name'         => 'underline',
			'label'        => __( 'underline', 'wow-cloth' ),
			'inline_style' => '.wp-block-heading.is-style-underline {
				position: relative;
				margin-bottom: 10px;
			}
			.wp-block-heading.is-style-underline:after {
				content: \'\';
				width: 200px;
				background: #000;
				position: absolute;
				height: 1px;
				bottom: -8px;
				left: 40%;
				transform: translate(-50%);
		}'
			
			) );
	}
}
