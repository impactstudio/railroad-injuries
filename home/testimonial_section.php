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
			
			<div class="col-sm-12 text-center">
				<div class="owl-carousel owl-theme">
					<?php if(have_rows('testimonials', 'option')) : ?>
						<?php while(have_rows('testimonials', 'option')) : the_row();
							$testimonial = 		get_sub_field('testimonial');
							$client_name = 		get_sub_field('client_name');
							$client_title = 	get_sub_field('client_title');
						?>

							<div class="item">
								<p><?php echo $testimonial; ?></p>
								<p>-<?php echo $client_name; ?>
									<?php if($client_title) : ?>
										<?php echo ' (' . $client_title . ')'; ?>
									<?php endif; ?>
								</p>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>