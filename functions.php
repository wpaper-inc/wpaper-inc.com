<?php
  add_theme_support( 'post-thumbnails' );

  function my_excerpt_more($more) {
    return '...';
  }
  add_filter('excerpt_more', 'my_excerpt_more');
?>
