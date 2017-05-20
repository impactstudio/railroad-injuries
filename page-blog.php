<?php

/*

Template Name: Blog

*/

?>

<?php get_header(); ?>

<main class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        
        <?php
                    $latest_args = [
                      'post_type' => 'post',
                      'ignore_sticky_posts'    => true,
                      'posts_per_page' => '1'
                    ];

                    $latest_post = new WP_Query( $latest_args );
                    if ( $latest_post->have_posts() ) : while ( $latest_post->have_posts() ) : $latest_post->the_post();

                    $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                  ?>
                <div class="row">
                              <div id="post-<?php echo $post->ID; ?>" class="latest-post">
                                  <div class="featured-tag">
                                    <h4>Featured</h4>
                                  </div>
                                  <?php if ( $feat_image != NULL ) { ?>
                                    <div class="post-image">
                                      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $feat_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                                    </div><!--/.post-image-->
                                    <?php } else { ?>
                                      <div class="post-image">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img_featured.jpg" /></a>
                                      </div><!--/.post-image-->
                                    <?php } ?>
                                  <div class="post-details">
                                    <h3>
                                      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                      </a><!--/a-->
                                    </h3><!--/h3-->
                                    <div class="post-meta">
                                      <span>
                                        <i class="fa fa-user" aria-hidden="true"></i> <?php the_author_posts_link(); ?>
                                        <i class="fa fa-pencil" aria-hidden="true"></i><?php echo get_the_date(); ?>
                                      </span><!--/span-->
                                      <div class="post-excerpt">
                                        <p><?php the_excerpt(); ?></p>
                                      </div>
                                      <span>
                                        <hr class="post-category-seperator">
                                        <span class="tag"><i class="fa fa-tag" aria-hidden="true"></i> <?php the_category(' <i class="fa fa-tag" aria-hidden="true"></i> '); ?></span>
                                      </span>
                                    </div><!--/div .post-meta-->
                                  </div>
                              </div>

                            <?php endwhile; endif; wp_reset_postdata(); ?>


                    <?php  
                      $args = [
                        'post_type' => 'post',
                        'order' => 'ASC',
                        'offset' => 1
                      ];

                      // The Query
                      $posts = new WP_Query( $args );
                    ?>

                      <?php if ( $posts->have_posts() ) : ?>
                        <?php while ( $posts->have_posts() ) : $posts->the_post();
                          $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

                          <div id="post-<?php the_ID(); ?>" class="col-sm-6 <?php post_class( 'post' ); ?>">
                            <?php
                              if ( $feat_image != NULL ) { ?>
                                <div class="post-image">
                                  <img class="img-responsive" src="<?php echo $feat_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                </div><!--/.post-image-->
                              <?php } else { ?>
                                <div class="post-image">
                                  <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img_featured.jpg" />
                                </div><!--/.post-image-->
                              <?php } ?>
                            <div class="post-details">
                              <h3>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                  <?php the_title(); ?>
                                </a><!--/a-->
                              </h3><!--/h3-->
                              <div class="post-meta">
                                <span>
                                  <i class="fa fa-user" aria-hidden="true"></i> <?php the_author_posts_link(); ?>
                                  <i class="fa fa-pencil" aria-hidden="true"></i><?php echo get_the_date(); ?>
                                </span><!--/span-->
                                <span>
                                  <hr class="post-category-seperator">
                                  <span class="tag"><i class="fa fa-tag" aria-hidden="true"></i> <?php the_category(' <i class="fa fa-tag" aria-hidden="true"></i> '); ?></span>
                                </span>
                              </div><!--/div .post-meta-->
                            </div>
                          </div><!--/div .post-->
                    
                        <?php endwhile; ?>
                      <?php else: ?>
                      
                        <h1>No Posts Found</h1>

                      <?php endif; ?>
                  </div>
                </div>
        <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>