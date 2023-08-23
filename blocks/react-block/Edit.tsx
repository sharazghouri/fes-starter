import { __ } from '@wordpress/i18n';
import { RichText, useBlockProps } from '@wordpress/block-editor';

export default function Edit( { attributes, setAttributes } ) {
	const blockProps = useBlockProps();

	return (
		<RichText
			{ ...blockProps }
			tagName="p"
			className="example--react-block"
			placeholder={ __( 'Type in your content…' ) }
			valuet={ attributes.content }
			onChange={ ( content: string ) => setAttributes( { content } ) }
		/>
	);
}
