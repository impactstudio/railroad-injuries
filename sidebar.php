<aside class="col-md-3">
  <!-- NOTES: It's important to note that apart from using the main wordpress loop it is a best practice to NOT reuse the same wordpress loop to output secondary queries to the posts database. This could have weird side effects. Therefore, each time new queries must be made you should create new instances of posts object and then parse the data. -->

  <?php get_search_form(); ?>

  <!-- The Loop -->
  <?php get_template_part( 'sidebar_widgets' ); ?>

</aside>
