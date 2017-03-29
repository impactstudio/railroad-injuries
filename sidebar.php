<aside class="col-sm-4 sidebar">
  <div class="widget">
    <h4>Contact Us</h4>
    <?php get_template_part('sidebar/form'); ?>
  </div>

  <!-- The Loop -->
  <?php get_template_part( 'sidebar_widgets' ); ?>

  <div class="widget">
    <h4>Our Attorneys</h4>
    <?php get_template_part('sidebar/lawyers'); ?>
  </div>
</aside>
