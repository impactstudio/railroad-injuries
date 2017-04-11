<main class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <img
          class="img-responsive img-featured"
          src="<?php the_post_thumbnail_url(); ?>"
          alt="<?php the_title(); ?>">
        <?php the_content(); ?>
      </div>
        <?php get_sidebar(); ?>
    </div>
  </div>
</main>
