<aside class="col-sm-4 sidebar">
  <img
    class="img-responsive img-featured"
    src="<?php the_post_thumbnail_url(); ?>"
    alt="<?php the_title(); ?>">

  <h1 class="sidebar-headline"><?php the_title(); ?></h1>

  <h4 class="sidebar-headline">Get in Touch</h4>
  <?php get_template_part('sidebar/form'); ?>

  <?php if(have_rows('awards')) : ?>

    <h4 class="sidebar-headline">Awards and Accolades</h4>

    <?php while(have_rows('awards')) : the_row(); ?>

      <div class="col-sm-6 center-text">
        <img
          class="img-responsive award"
          src="<?php echo get_sub_field('image')['url']; ?>"
          alt="<?php echo get_sub_field('image')['alt']; ?>">
      </div>

    <?php endwhile; ?>

  <?php endif; ?>
</aside>
