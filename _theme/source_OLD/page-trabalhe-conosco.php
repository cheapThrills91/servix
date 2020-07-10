<?php /* Template Name: Trabalhe conosco */ ?>
<?php	get_header();?>
<?php include 'includes/components/header-menu.php';  ?>

<div class="trabalhe-conosco">

	<div class="container-fluid no-padding">
		<div class="row">
			<div class="col-xs-12">

				<div class="title-with-square">
					<svg width="400" height="90">
						<rect class="animate" x="50" y="20" width="110" height="56"/>
						Sorry, your browser does not support inline SVG.
					</svg>
					<p class="title"><?php echo _e('Trabalhe conosco', 'servix');?></p>
				</div>

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">

				<div class="contact-form forms">
					<?php the_content();?>
				</div>

			</div>
		</div>
	</div>

</div>

<!-- Footer -->
<div class="container-fluid no-padding">
	<?php get_footer(); ?>
</div>