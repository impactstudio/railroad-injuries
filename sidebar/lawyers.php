<?php

$args = [
  'post_type' => 'lawyer'
];

$lawyers = new WP_Query($args);

?>

<?php if ($lawyers->have_posts()) :  while($lawyers->have_posts()) : $lawyers->the_post(); ?>
  <a href="<?php the_permalink(); ?>">
    <img
      class="sidebar-lawyer"
      src="<?php the_post_thumbnail_url(); ?>"
      alt="<?php the_title(); ?>">
  </a>
  <h5>
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h5>
  <p class="role">President of RVPC</p>
<?php endwhile; endif; ?>
