<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>

</head>
<body class="<?php body_class(); ?>">
  <header class="container-fluid">

    <!-- layout: use this for properly layout in include files where necessary -->
    <section class="header row">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-lg-offset-0 col-sm-10 col-sm-offset-1 flexbox center-children header-wrapper">
    <!-- layout -->

            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>
              <a href="<?php echo get_home_url(); ?>">
                <img
                  class="logo"
                  src="<?php echo $logo[0]; ?>"
                  alt="<?php echo get_option('companyname'); ?> logo">
              </a>

            <?php get_template_part('header/header-info') ?>

    <!-- layout -->
          </div>
        </div>
      </div>
    </section>
    <!-- layout -->

  </header>
  <nav class="container-fluid">
    <?php get_template_part('navigation') ?>
  </nav>
