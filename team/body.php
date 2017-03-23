<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!-- layout -->
    <section class="row">
      <div class="container content-wrapper">
        <div class="row">
          <div class="col-lg-12 col-lg-offset-0 col-sm-10 col-sm-offset-1">
    <!-- layout -->
            <h2 class="main-headline"><span><?php the_title(); ?><span></h2>
              <?php the_content(); ?>
              <?php if( have_rows('team_members') ): ?>
                <div class="container-fluid">
                  <div class="row team">
                    <?php while( have_rows('team_members') ): the_row();

                    $first_name = get_sub_field('first_name');
                    $last_name = get_sub_field('last_name');
                    $employee_role = get_sub_field('employee_role');
                    $headshot = get_sub_field('headshot');
                    $favorite_quote = get_sub_field('favorite_quote');

                    ?>

                    <div class="col-md-3 col-sm-6 col-xs-6 team-member">
                      <?php if ($headshot) : ?>
                        <img class="team-headshot" src="<?php echo $headshot['url']; ?>">
                      <?php endif; ?>

                      <h2 class="team-member-name"><?php echo $first_name . ' ' . $last_name; ?></h2>
                      <small class="team-member-role"><?php echo $employee_role; ?></small>
                      <p class="team-member-quote"><?php echo $favorite_quote; ?></p>
                    </div>

                  <?php endwhile; endif; ?>
                  </div>
                </div>
    <!-- layout -->
          </div>
        </div>
      </div>
    </section>
    <!-- layout -->
<?php endwhile; endif; ?>
