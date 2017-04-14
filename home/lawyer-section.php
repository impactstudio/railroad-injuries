<?php 

	$lawyer_header_black = 					get_field('lawyer_header_black');
	$lawyer_header_blue = 					get_field('lawyer_header_blue');
	$lawyer_subheader = 						get_field('lawyer_subheader');

?>

<div class="lawyer-section-wrap">
	<div class="container">
		<div class="row">
			<?php get_court_house(); ?>
			<div class="col-sm-12">
				<h2><?php echo $lawyer_header_black; ?> <span><?php echo $lawyer_header_blue ?></span></h2>
				<p><?php echo $lawyer_subheader; ?></p>
			</div>
		</div>
	</div>
</div>