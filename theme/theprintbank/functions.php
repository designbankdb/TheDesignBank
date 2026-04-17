<?php 
  function include_theme() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'); 
    wp_enqueue_style( 'print-back-style', get_stylesheet_uri() );
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
  }
  add_action('wp_enqueue_scripts', 'include_theme');
?>
