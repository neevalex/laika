<?php

/**
 * Functions
 * Require all PHP files in the /setup/ directory
 */
function require_all($dir, $depth = 0)
{
	if ($depth > 3) {
		return;
	}

	// require all php files
	$scan = glob("$dir/*");
	foreach ($scan as $path) {
		if (preg_match('/\.php$/', $path)) {
			require_once $path;
		} elseif (is_dir($path)) {
			require_all($path, $depth + 1);
		}
	}
}

require_all(get_template_directory() . '/setup/');

// Customize excerpt word count length
function custom_excerpt_length() {
	return 22;
}

add_filter( 'excerpt_length', 'custom_excerpt_length' );


show_admin_bar( false );

// Checks if there are any posts in the results
function is_search_has_results() {
	return 0 != $GLOBALS['wp_query']->found_posts;
}

