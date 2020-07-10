<?php /* Template Name: Noticias */ ?>
<?php	get_header();?>
<?php include 'includes/components/header-menu.php';  ?>

<div class="noticias">
	<div class="container no-padding">

		<div class="row">
			<div class="col-xs-12">
				<div class="title-with-square">
					<svg width="400" height="90">
						<rect class="animate" x="50" y="20" width="110" height="56"/>
						Sorry, your browser does not support inline SVG.
					</svg>
					<p class="title"><?php echo _e('Notícias', 'servix') ?></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<?php include 'includes/components/noticias-post-list.php'; ?>
			</div>
		</div>

	</div>
</div>
<!-- Footer -->
<div class="container-fluid no-padding">
	<?php get_footer(); ?>
</div>