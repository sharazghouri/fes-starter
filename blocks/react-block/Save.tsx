import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function Save( {
	attributes,
}: {
	attributes: { content: string };
} ) {
	return (
		<div
			{ ...useBlockProps.save() }
			data-react-component="Example"
			data-attributes={ JSON.stringify( attributes ) }
		/>
	);
}
