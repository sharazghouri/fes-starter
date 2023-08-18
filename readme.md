# Full Site Editing Starter

This is a very simple start that includes the basic frameworks needed to start
with full site editing. 

## What's included
 - Local working environment using `wp-env`. 
 - The theme configured to start with full site editing.
 - A compiler using `wp-scripts` to compile all block assets to a single dependancy.
 - An autoloader for `inc` which follows WP-CS standards.
 - Support for Typescript

## Getting started
Using `wp-env` allows a quick and easy way to get started with a local
development environment.

### Prerequisites
 - [Docker](https://www.docker.com/products/docker-desktop)
 - [Node](https://nodejs.org/en/)

### Installing and Running
```bash
# Install node dependencies
npm install 

# Start the local environment
npm run wp-env start 

# Install PHP dependencies (not strictly necessary, used for linting tools)
npm run composer install

# Start the node build process
npm run start 
```

Full documentation for `wp-env` can be found [in the block-editor 
handbook](https://developer.wordpress.org/block-editor/packages/packages-env/).

### Running without Docker
If you don't want to use Docker, you can still use this starter. You'll need to
install WordPress locally and configure this folder as a theme. You'll need to 
run `npm install` at the root of this folder, and then `npm run start` to start
the node build process.

## Example Blocks

### Dynamic Block
This starter includes a dynamic block that provides a rich editing experience
using the block editor, but when rendered on the front end it uses a PHP template.
This could be used to create a block that's dynamically rendered each time the page
is loaded. 

### Static Block
The static block is a block that's rendered at the time the post is saved. This type
of block can't be altered unless the post is edited. This is the highest performance 
block type since it saves static HTML at the time the post is saved and doesn't require
any PHP rendering when outputting on the front end. 

### React Block
A react block is a block that loads a react-component on the front-end, allowing you to
add dynamic functionality on the front end. This should be used where you need to add
interactivity to a block, such as a slider or accordion.

## Creating a new block

To create a new block, a folder should be created in the `blocks` directory. Within each
folder you can create a file that registers the block. The block registration file should 
be imported into `blocks/index.ts`. If you are creating a dynamic block, you'll also need
create a PHP Class to handle the block registration and rendering. This should be created 
in `inc/Blocks/` and extend the abstract `Block` class found in `inc/Abstracts/Block.php`.

Any styles should be imported into `blocks/index.scss` to be included on the front end.

## Running Additional Commands
Within `package.json` a number of scripts are pre-configured to run common commands. There
are further docs on how to run commands in the `wp-env` documentation.

## Contributing
Contributions are welcome! Please open an issue or pull request if you have any suggestions
or improvements.

## License
This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for 
details

## Disclaimer
This is not claimed to be production ready code, but is a starter project so you can see 
how to setup a full site editing project. 
