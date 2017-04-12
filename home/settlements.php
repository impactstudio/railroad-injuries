<?php 

	$settlements_header = 								get_field('settlements_header');
	$settlements_amount = 								get_field('settlements_amount');

?>

<section class="settlements content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h3><?php echo $settlements_header; ?></h3>
				<h2 class="counter" data-count="<?php echo $settlements_amount; ?>"></h2>
			</div>
			<?php hollow_btn("View All Verdicts and Settlements", "#"); ?>
		</div>
	</div>
</section>