<h2 class="main-headline"><span>Search Results: <?php echo get_search_query(); ?></span></h2>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <li class="search-result">
    <div class="search-result-excerpt">
      <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
      <hr>
      <small><?php echo wp_trim_words( get_the_content(), 50, '' ); ?><a href="<?php echo get_permalink(); ?>"> Learn More...</a></small>
    </div>
  </li>
  <hr>

<?php endwhile; ?>
<?php else: _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>
