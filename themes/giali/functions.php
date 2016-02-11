<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

remove_filter( 'map_meta_cap', 'flamingo_map_meta_cap' );
add_filter( 'map_meta_cap', 'mycustom_flamingo_map_meta_cap', 9, 4 );

function mycustom_flamingo_map_meta_cap( $caps, $cap, $user_id, $args ) {
    $meta_caps = array(
        'flamingo_edit_contacts' => 'publish_posts',
        'flamingo_edit_contact' => 'publish_posts',
        'flamingo_delete_contact' => 'publish_posts',
        'flamingo_edit_inbound_messages' => 'publish_posts',
        'flamingo_delete_inbound_message' => 'publish_posts',
        'flamingo_delete_inbound_messages' => 'publish_posts',
        'flamingo_spam_inbound_message' => 'publish_posts',
        'flamingo_unspam_inbound_message' => 'publish_posts' );

    $caps = array_diff( $caps, array_keys( $meta_caps ) );

    if ( isset( $meta_caps[$cap] ) )
        $caps[] = $meta_caps[$cap];

    return $caps;
}
