<?php /* Template Name: Cases */ ?>
<?php	get_header();?>
<?php include 'includes/components/header-menu.php';  ?>

<div class="cases">
	<div class="container no-padding">

		<div class="row">
			<div class="col-xs-12">
				<div class="title-with-square">
					<svg width="400" height="90">
						<rect class="animate" x="80" y="20" width="110" height="56"/>
						Sorry, your browser does not support inline SVG.
					</svg>
					<p class="title"><?php echo _e('Cases', 'servix');?></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<p class="text-center"><strong><?php echo _e('Soluções Servix que geram resultados', 'servix'); ?></strong></p>
				<?php include 'includes/components/cases-post-list.php'; ?>
			</div>
		</div>

	</div>
</div>

<!-- Footer -->
<div class="container-fluid no-padding">
	<?php get_footer(); ?>
</div>