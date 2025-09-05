<?php
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('sac-theme', get_stylesheet_directory_uri() . '/assets/theme.css', [], '1.0');
  wp_enqueue_script('sac-theme', get_stylesheet_directory_uri() . '/assets/theme.js', [], '1.0', true);
});