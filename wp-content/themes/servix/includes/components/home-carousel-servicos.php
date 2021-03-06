<?php
	$servicos = get_posts(
		array(
			'post_type'=> 'page',
			'meta_key' => '_wp_page_template',
			'meta_value' => 'page-servicos-solucoes.php'
		)
	);

	$itens = get_field('servicos' , $servicos[0]);
?>

<div class="home-carousel-servicos"  data-script="HomeServicosCarousel">

	<div class="title-with-square">
		<svg width="400" height="90">
			<rect class="rect-servicos" x="75" y="20" width="110" height="56"/>
			Sorry, your browser does not support inline SVG.
		</svg>
		<p class="title"><?php echo _e('Serviços', 'servix'); ?></p>
	</div>

	<!-- Swiper -->
	<div class="swiper-container home-servicos carousel-icons-text">
		<div class="swiper-wrapper">

			<?php foreach ($itens as $item): ?>
				<div class="swiper-slide carousel-item">
					<a href="<?php echo get_permalink( get_page_by_title( 'soluções/ serviços' ) ); ?>" target="_self" rel="bookmark" titile="">
						<div class="icone">
							<img src="<?php echo $item['icone_especial']['url'] ?>" alt="<?php echo 'Ícone '.$item['titulo']; ?>" class="img-responsive icon" >
						</div>
						<div class="text">
							<p><?php echo $item['titulo'];?></p>
						</div>
					</a>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
</div>