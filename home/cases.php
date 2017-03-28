<?php

  // Cases Section - Contains Repeater Field

  $cases_header =                     get_field('cases_header');
  $cases_subheader =                  get_field('cases_subheader');

?>

<section class="cases content-wrapper">
  <div class="container">
    <div class="row">

      <?php get_court_house(); ?> <!-- Remember that the court house funciton returns a col-sm-12 -->

      <div class="col-sm-12">
        <h2><?php echo $cases_header; ?></h2>
        <p><?php echo $cases_subheader; ?></p>
      </div>

      <?php if(have_rows('')) : ?>

        <?php while(have_rows('')) : the_row(); ?>

          <div class="col-sm-3">
            <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">
            <div class="cta-banner-wrapper">
              <h3><?php echo get_sub_field('banner_text'); ?></h3>
            </div>
          </div>

        <?php endwhile; ?>

      <?php endif; ?>

    </div>
  </div>
</section>