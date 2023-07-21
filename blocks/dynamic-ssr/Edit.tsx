import { __ } from '@wordpress/i18n';
import { RichText, useBlockProps } from '@wordpress/block-editor';

export default function Edit( { attributes, setAttributes } ) {
	const blockProps = useBlockProps();

	return (
		<RichText
			{ ...blockProps }
			tagName="p"
			placeholder={ __( 'Type in your content…' ) }
			value={ attributes.content }
			onChange={ ( content: string ) => setAttributes( { content } ) }
		/>
	);
}
