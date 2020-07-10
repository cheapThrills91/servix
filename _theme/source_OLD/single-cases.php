<?php /* Template Name: Cases Single Page */ ?>
<?php	get_header();?>
<?php include 'includes/components/header-menu.php';  ?>

<?php
	$post = get_queried_object();
?>

<div class="single">
	<div class="container no-padding ">

		<div class="breadcrumbs">
			<span class="location"> <a href="<?php echo get_permalink( get_page_by_title( 'cases' ) ); ?>" class="link"><?php echo _e('Cases', 'servix') ?></a> </span> > <span class="location"> <a href="#" class="link"><?php echo $post->post_title; ?></a> </span>
		</div>

		<div class="title-with-square">
			<svg width="400" height="90">
				<rect class="animate" x="80" y="20" width="110" height="56"/>
				Sorry, your browser does not support inline SVG.
			</svg>
			<p class="title"><?php echo _e('Cases', 'servix') ?></p>
		</div>

		<!-- Single POST : BEGIN -->
		<div class="posts-list">
			<div class="single-post">
				<div class="post">
					<div class="img-header">
						<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="<?php echo $post->post_title; ?>" class="img-responsive image">
					</div>
					<div class="clearfix"></div>
					<div class="the-post">
						<div class="post-header">
							<div class="post-date">
								<!-- <p class="date"><?php //echo strftime('%d '.__('de').' %B '.__('de').' %Y', strtotime($post->post_date)); ?></p> -->
								<p class="date"><?php the_time('j/F/Y') ?></p>
							</div>
							<div class="post-title">
								<p class="title"><?php echo $post->post_title; ?></p>
							</div>
						</div>
						<div class="post-body">
							<p class="text">
							<?php echo  $post->post_content; ?>
							</p>
						</div>
						<div class="division orange"></div>
						<div class="more-info">
							<?php include 'includes/components/share.php'; ?>
							<a href="<?php echo get_permalink( get_page_by_title( 'cases' ) ); ?>" class="voltar">
								<img src="<?php echo get_template_directory_uri().'/img/arrow-left.png' ?>" alt="Seta para a esquerda" class="arrow">
								<span class="text"><?php echo _e('Voltar para cases', 'servix') ?></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Single POST : END -->
	</div>
</div>

<!-- Footer -->
<div class="container-fluid no-padding">
	<?php get_footer(); ?>
</div>