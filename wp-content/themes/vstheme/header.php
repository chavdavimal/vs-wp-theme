<?php wp_head(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    

    <title>vs-theme</title>
  </head>
  <body  <?php body_class(); ?>>

    <header>
      <?php
		// Output the menu modal.
		  get_template_part( 'template-parts/navigation' );?>
    </header>

    

  </body>
</html>