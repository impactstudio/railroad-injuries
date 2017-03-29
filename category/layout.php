<main class="container-fluid content-wrapper">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="row">
        <div class="col-md-8">
        <h1>Category Results for: <?php echo single_cat_title() ?></h1>
        <p><?php echo category_description(); ?></p>
        <ul class="search-results">
          <?php get_template_part('category/loop'); ?>
        </ul>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>
