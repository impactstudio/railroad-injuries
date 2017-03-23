<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <li class="search-result">
    <?php echo get_the_post_thumbnail(get_the_ID(), 'large') ?>
    <p><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
    <p>Published <?php echo get_the_date(); ?></p>
    <small><?php echo wp_trim_words( get_the_content(), 50, '...' ); ?></small>
  </li>

<?php endwhile; ?>
<?php else: _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>
