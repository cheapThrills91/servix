<?php
	$post =  get_queried_object();
	$parceiros = get_field('parceiros' , $post);
	//$descricoes = get_field('descricoes' , $post);
?>

<div class="parceiros-accordion accordion tabs" data-script="ChangeIcon">

		<!-- Parceiros -->
		<div class="accordion-container tab-content" id="parceiros">
			<div class="lista panel-group" id="listaParceiros">

				<?php $i = 0; foreach ( $parceiros as $parceiro ) : ?>

					<!-- Item : BEGIN -->
					<div class="panel col-xs-12 col-md-3">
						<a href="<?php echo '#'.$post->ID.$i; ?>" data-parent="#listaParceiros" data-toggle="collapse" class="accordion-link collapsed">
							<div class="item">
								<img src="<?php echo $parceiro['logo']['url']; ?>" alt="<?php echo $parceiro['logo']['alt']; ?> " class="logo">
								<!-- <span class="texto plus text-right">+</span> -->

								<!-- Tooltip : BEGIN -->
								<div class="parceiros-tooltips ">
									<?php foreach ($parceiro['descricoes'] as $descricao) : ?>
										<div class="col-md-4 text-center tooltips-body">
											<div class="icone">
												<img src="<?php echo $descricao['icone']['url']; ?>" alt="Ícone" class="img-responsive" >
											</div>
											<div class="descricao">
												<?php echo $descricao['descricao']; ?>
											</div>
										</div>
									<?php endforeach;	?>
								</div>
								<!-- Tooltip : END -->

							</div>
						</a>

						<div id="<?php echo $post->ID.$i; ?>" class="collapse accordion-item">
							<div class="accordion-body">
								<!-- <button data-toggle="collapse" data-target="<?php // echo '#'.$post->ID.$i; ?>" class="close hidden-md hidden-lg">X</button> -->
								<div class="body">
									<div class="row">

										<?php foreach ($parceiro['descricoes'] as $descricao) : ?>
											<div class="col-xs-6 col-sm-6 text-center icone-text">
												<div class="icone">
													<img src="<?php echo $descricao['icone']['url']; ?>" alt="Ícone" class="img-responsive" >
												</div>
												<div class="descricao">
													<?php echo $descricao['descricao']; ?>
												</div>
											</div>
										<?php endforeach; ?>

									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Item : END -->

				<?php $i++; endforeach; ?>

			</div>
	</div>
</div>