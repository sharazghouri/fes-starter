/**
 * Webpack Config.
 *
 * @package
 */

const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );
const path = require( 'path' );

module.exports = {
	...defaultConfig,
	entry: {
		scripts: path.resolve( process.cwd(), 'blocks', 'index.ts' ),
	},
	output: {
		path: path.resolve( process.cwd(), 'assets' ),
		filename: 'index.js',
	},
	module: {
		...defaultConfig.module,
		rules: [
			...defaultConfig.module.rules,
			{
				test: /\.tsx?$/,
				use: [
					{
						loader: 'ts-loader',
						options: {
							configFile: 'tsconfig.json',
							transpileOnly: true,
						},
					},
				],
			},
		],
	},
	resolve: {
		...defaultConfig.resolve,
		extensions: [
			'.ts',
			'.tsx',
			...( defaultConfig.resolve
				? defaultConfig.resolve.extensions || [ '.js', '.jsx' ]
				: [] ),
		],
	},
};
