import { warning } from '@wordpress/icons';
import { registerBlockType, getBlockType } from '@wordpress/blocks';

import Edit from './Edit';
import Save from './Save';

if ( ! getBlockType( 'example/react-block' ) ) {
	registerBlockType( 'example/react-block', {
		icon: warning,
		edit: Edit,
		save: Save,
		apiVersion: 3,
		title: 'React Block',
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
