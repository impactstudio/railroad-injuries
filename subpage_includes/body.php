<!-- layout -->
  <section class="row subpage">
    <div class="subpage-nav"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-lg-offset-0 col-sm-10 col-sm-offset-1">
          <div class="row subpage-content">
            <?php
              $args = [
                'post_type' => get_post_type()
              ];

              $custom_post = new WP_Query( $args );
            ?>
            <div class="col-md-3 content-wrapper subpage-nav-wrapper flex-order-2">
              <?php if (get_post_type() == 'capability') : ?>
                <h3 class="subpage-nav-heading"><span>Core Capabilities</span></h3>
              <?php else : ?>
                <h3 class="subpage-nav-heading"><span>Markets We Serve</span></h3>
              <?php endif ?>

              <ul class="nav-list">
                <?php if ( $custom_post->have_posts() ) : while ( $custom_post->have_posts() ) : $custom_post-> the_post(); ?>

                  <?php if (get_post_type() == 'capability') : ?>
                    <li><a href="<?php the_permalink(); ?>" class="subpage-nav-links"><i class="fa fa-<?php echo get_field('capability_icon'); ?>"></i> <?php the_title(); ?></a></li>
                  <?php else : ?>
                    <li><a href="<?php the_permalink(); ?>" class="subpage-nav-links"><i class="fa fa-<?php echo get_field('market_icon'); ?>"></i> <?php the_title(); ?></a></li>
                  <?php endif ?>

                <?php endwhile; endif; ?>
                <?php wp_reset_postdata(); ?> <!-- always reset the query so secondary loops function properly -->
              </ul>
            </div>
    <!-- layout -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="col-md-8 col-md-offset-1 content-wrapper flex-order-1 post">
                  <?php
                    $sub_hero = get_field('main_file');
                  ?>
                  <?php if (!empty($sub_hero)) :?>
                    <div class="additional-media">
                      <?php if($sub_hero['mime_type'] == 'video/webm' || $sub_hero['mime_type'] == 'video/mp4') : ?>
                        <video src="<?php echo $sub_hero['url']; ?>" autoplay loop muted></video>
                      <?php else : ?>
                        <img src="<?php echo $sub_hero['url'] ?>" alt="<?php echo $sub_hero['alt'] ?>">
                      <?php endif; ?>
                    </div>
                  <?php endif ?>
                  <h3 class="sub-headline"><span><?php the_title(); ?></span></h3>
                  <?php the_content(); ?>
                </div>
            </div>

          <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?> <!-- always reset the query so secondary loops function properly -->
  <!-- layout -->
        </div>
      </div>
    </div>
  </section>
