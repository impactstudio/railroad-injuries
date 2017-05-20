<main class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">

        <?php if(the_post_thumbnail()) : ?>
          <img
          class="img-responsive img-featured"
          src="<?php the_post_thumbnail_url(); ?>"
          alt="<?php the_title(); ?>">
        <?php endif; ?>

        <div class="post-details">
          <h1><?php the_title(); ?></h1>
          <div class="post-meta">
            <span>
              <i class="fa fa-user" aria-hidden="true"></i> <?php the_author_posts_link(); ?>
              <i class="fa fa-pencil" aria-hidden="true"></i><?php echo get_the_date(); ?>
              <p id="categories"><i class="fa fa-tag" aria-hidden="true"></i> <?php the_category(' <i class="fa fa-tag" aria-hidden="true"></i> '); ?></p>
              <p>
                <?php
                echo do_shortcode("[wp_social_sharing social_options='facebook,twitter,googleplus,linkedin' icon_order='f,t,g,l' show_icons='1']");
                ?>
              </p>
              <hr>
            </span><!--/span-->
          </div>
        </div>

        <div class="post-content-wrapper">
          <?php the_content(); ?>
        </div>
      </div>
        <?php get_sidebar(); ?>
    </div>
  </div>
</main>