<?php 

	$testimonial_header = 				get_field('testimonial_header', 'option');

?>

<div class="testimonial-section-wrap content-wrapper">
	<div class="container">
		<div class="row">
			<?php get_court_house(); ?>
			<div class="col-sm-12 text-center">
				<h2 class="top30"><?php echo $testimonial_header; ?></h2>
			</div>
		</div>
	</div>
</div>