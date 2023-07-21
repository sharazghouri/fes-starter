import { __ } from '@wordpress/i18n';
import { RichText } from '@wordpress/block-editor';

export default function Save( {
	attributes,
}: {
	attributes: { content: string };
} ) {
	return <RichText.Content tagName="p" value={ attributes.content } />;
}
