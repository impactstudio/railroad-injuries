<main class="container-fluid content-wrapper">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="row">
        <div class="col-md-8">

          <h2><?php the_title(); ?></h2>

          <span><?php echo get_the_date(); ?></span>
          <!-- output cateogories and post tags -->
          <span><?php the_category(", "); ?></span>

          <?php the_content(); ?>
          <!-- show comment and allow users to leave comments. simply invoke this the comments template tag -->
          <?php comments_template(); ?>

        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>
  </div>
</main>
