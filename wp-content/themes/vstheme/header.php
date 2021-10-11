
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <header>
      <?php
		  // Output the navigation bar.
		  get_template_part( 'template-parts/navigation' );?>
    </header>
<?php 