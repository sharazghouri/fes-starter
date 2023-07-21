import { warning } from '@wordpress/icons';
import { registerBlockType, getBlockType } from '@wordpress/blocks';

import Edit from './Edit';

if ( ! getBlockType( 'example/dynamic-ssr' ) ) {
	registerBlockType( 'example/dynamic-ssr', {
		icon: warning,
		edit: Edit,
		apiVersion: 3,
		title: 'Dynamic Server Side Rendered Block',
		category: 'widgets',
		attributes: {
			content: {
				type: 'string',
			},
			type: {
				type: 'string',
				default: 'info',
			},
		},
		supports: {
			html: false,
		},
	} );
}
