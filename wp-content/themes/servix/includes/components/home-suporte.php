<?php
		$post = get_queried_object();
		$suportes = get_field('numeros_suporte' , $post);
?>

<div class="home-suporte">
	<div id="counter" class="suporte-wrapper">
		<p class="titulo text-uppercase text-center"><?php echo _e('Suporte 1º e 2º  Níveis', 'servix') ?><br><?php echo _e('para mais de:', 'servix')?></p>
		<?php
			foreach ( $suportes as $suporte ): ?>
				<div class="suporte-item">
					<div class="icon-number">
						<div class="icon">
							<img src="<?php echo $suporte['icone']['url']; ?>" alt="<?php echo $suporte['icone']['alt']; ?>" class="img-responsive icon" >
						</div>
						<div class="number numscroller" data-min='<?php echo ($suporte['numero'] * .1); ?>' data-max='<?php echo $suporte['numero']; ?>' data-delay='5' data-increment='10'> <?php echo $suporte['numero']; ?> </div>
					</div>
					<div class="legenda"><p><?php echo $suporte['descricao']; ?></p></div>
				</div>
		<?php
			endforeach;
		?>
	</div>
</div>