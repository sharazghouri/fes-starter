<?php
/**
 * Functions.php
 *
 * @packageSolutionBoxTheme
 */

declare ( strict_types = 1 );

use Solution_Box\Block_Editor_Assets;
use Solution_Box\Block_Registration;
use Solution_Box\Block_Misc;

require_once get_template_directory() . '/vendor/autoload.php';
require_once get_template_directory() . '/inc/autoload.php';

( new Block_Editor_Assets() )->setup_hooks();
( new Block_Registration() )->setup_hooks();
( new Block_Misc() )->setup_hooks();
