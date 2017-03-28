<!-- display the post content for a single post THE MAIN WORDPRESS LOOP -->
<?php

  if (have_posts()) : while (have_posts()) : the_post();

    if ( get_post_type() == 'post' ) {

     get_template_part('post/layout');

   } elseif (is_page_template('page-fullwidth.php')) {

      get_template_part('fullwidth/layout');

    } elseif (is_page_template('page-subpage.php')) {

      get_template_part('page/layout');

    }

  endwhile;
  else: _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
  endif;

?>
