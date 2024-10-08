<?php

/**
 * Register/enqueue custom scripts and styles
 */
add_action('wp_enqueue_scripts', function () {
  // Enqueue your files on the canvas & frontend, not the builder panel. Otherwise custom CSS might affect builder)
  if (!bricks_is_builder_main()) {
    wp_enqueue_style('bricks-child', get_stylesheet_uri(), ['bricks-frontend'], filemtime(get_stylesheet_directory() . '/style.css'));
  }
});

/**
 * Register custom elements
 */
function smoothflowsolutions_register_custom_element()
{
  $element_files = [
    __DIR__ . '/elements/title.php',
    __DIR__ . '/template-parts/header/custom-header.php',
  ];

  foreach ($element_files as $file) {
    if (file_exists($file)) {
      \Bricks\Elements::register_element($file);
    } else {
      error_log("File not found: $file");
    }
  }
}
add_action('init', 'smoothflowsolutions_register_custom_element', 11);

/**
 * Add text strings to builder
 */
add_filter('bricks/builder/i18n', function ($i18n) {
  // For element category 'custom'
  $i18n['custom'] = esc_html__('Custom', 'bricks');

  return $i18n;
});

// Debugging: Add this at the end of your functions.php
error_log('functions.php file loaded successfully');
