<?php
/**
 * Functions.php
 *
 * @package FSE Theme
 */

declare ( strict_types = 1 );

use FSE\Block_Editor_Assets;
use FSE\Block_Registration;

require_once get_template_directory() . '/vendor/autoload.php';
require_once get_template_directory() . '/inc/autoload.php';

( new Block_Editor_Assets() )->setup_hooks();
( new Block_Registration() )->setup_hooks();
