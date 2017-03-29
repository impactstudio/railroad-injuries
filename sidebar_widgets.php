<div id="sidebar-nav">

  <!-- first widget area -->
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-widget-1')) : else : ?>

	<div class="pre-widget">
		<p><strong>Widgetized Area</strong></p>
		<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
	</div>

	<?php endif; ?>

  <!-- second widget area -->
  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-widget-2')) : else : ?>

	<div class="pre-widget">
		<p><strong>Widgetized Area</strong></p>
		<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
	</div>

	<?php endif; ?>

  <!-- third widget area -->
  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-widget-3')) : else : ?>

	<div class="pre-widget">
		<p><strong>Widgetized Area</strong></p>
		<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
	</div>

	<?php endif; ?>

</div>
