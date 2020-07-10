<?php /* Template Name: Home */ ?>

<?php	get_header();?>

<div class="menu-home" data-script="homeAnimation">
	<?php include 'includes/components/header-menu.php';  ?>
</div>
<div class="container-fluid no-padding">
	<?php include 'includes/components/carousel-with-bullets.php'; ?>
</div>
<div class="container-fluid no-padding">
	<?php include 'includes/components/home-carousel-solucoes.php'; ?>
	<?php include 'includes/components/home-carousel-servicos.php'; ?>
	<?php include 'includes/components/home-noticias.php'; ?>
	<?php include 'includes/components/home-suporte.php'; ?>
</div>



<div class="container-fluid no-padding">
	<?php get_footer(); ?>
</div>

<style>
 .footer{margin-top: 0;}
</style>