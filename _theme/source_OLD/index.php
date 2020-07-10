<?php	get_header();?>

<?php include 'includes/components/header-menu.php';  ?>

<div class="container-flui">
	<?php include 'includes/components/carousel-with-bullets.php'; ?>
</div>

<div class="container">
	<div class="row">
		<div class="col">
		<h1 class="square-title">Bem vindo a servix!</h1>


		</div>
	</div>

	<div class="row">
		<div class="col">
		<?php
			if( have_posts() ){
				while ( have_posts() ) {
					the_post();
		?>
				<h2><?php the_title(); ?></h2>

				<div>
					<?php the_content(); ?>
				</div>

		<?php
				}
			}
		?>
		</div>
	</div>
	<?php get_footer(); ?>
</div>



