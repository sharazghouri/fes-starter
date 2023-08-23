import { useState } from 'react';
import ReactDom from 'react-dom';

function Component( { content }: { content: string } ) {
	const [ open, setOpen ] = useState( false );
	return (
		<div>
			<button onClick={ () => setOpen( ! open ) }>Toggle</button>
			{ open && <p>{ content }</p> }
		</div>
	);
}

/**
 * Create a root React component for each block.
 */
export default function initExampleComponent(): void {
	const elements = document.querySelectorAll(
		'[data-react-component="Example"]'
	);
	
	elements.forEach( ( element ) => {
		const props = JSON.parse(
			element.getAttribute( 'data-attributes' ) ?? ''
		);

		const root = ReactDom.createRoot( element );
		root.render( <Component { ...props } /> );
	} );
}
