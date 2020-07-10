<?php /* Template Name: Quem Somos */ ?>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<?php	get_header();?>
<?php include 'includes/components/header-menu.php';  ?>

<div class="quem-somos">
	<div class="container">

		<div class="title-with-square">
			<svg width="400" height="90">
				<rect class="animate" x="50" y="20" width="110" height="56"/>
				Sorry, your browser does not support inline SVG.
			</svg>
			<p class="title"><?php echo _e('Quem somos', 'servix'); ?></p>
		</div>

		<div class="description"><?php echo get_field('descricao-principal');?> </div>
	</div>

	<div class="container-fluid no-padding">
		<?php include 'includes/components/quem-somos-mapa.php'; ?>
		<?php include 'includes/components/quem-somos-colaboradores.php'; ?>
		<?php include 'includes/components/quem-somos-integrador.php'; ?>
		<?php include 'includes/components/quem-somos-petabytes.php'; ?>
		<?php include 'includes/components/quem-somos-chamados.php'; ?>
	</div>
</div>
<!-- Footer -->
<div class="container-fluid no-padding">
	<?php get_footer(); ?>
</div>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script> -->
<script>
 setTimeout(function(){ AOS.init(); }, 1500);
</script>