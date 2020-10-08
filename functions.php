<?php
// Register a Navigation Menu for Header and Footer
register_nav_menus( 
    array( 
        'main_menu' => 'Main Menu (Header)', 
        'footer_menu' => 'Footer Menu' 
    )
);
/**
 * Enqueue theme stylesheets and scripts.
 */
add_action( 'wp_enqueue_scripts', function ()
{
  // Enqueue our JavaScript!
  wp_enqueue_script(
    // An ID / name for our script.
    'my-theme-scripts',
    // The "public" path to the script file.
    get_theme_file_uri( '/assets/js/scripts.js' ),
    // Dependencies (jQuery, Bootstrap, etc.)
    array(),
    // Version number of the file (based on time to fight browser cache!)
    strftime( get_theme_file_uri( '/assets/js/scripts.js' ) ),
    // Should we output this script in the wp_footer()?
    FALSE
  );
  // Enqueue our stylesheet!
  wp_enqueue_style(
    'my-theme-main-styles',
    get_theme_file_uri( '/assets/css/main.css' ),
    strftime( get_theme_file_uri( '/assets/css/main.css' ) ),
    // The type of media we're targeting (media query label.)
    'all'
  );
} );