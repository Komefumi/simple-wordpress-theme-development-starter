<?php
/*
 * This is development configuration for /wp-config.php to be used as
 * needed
 *
 */

/*
 * Search for WP_DEBUG, when you find the 'define' statement,
 * replace the statement with the code below
 */
// original
// define( 'WP_DEBUG', false );
// now
define('WP_DISABLE_FATAL_ERROR_HANDLER', true);
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
?>
