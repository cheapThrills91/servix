<?php
	$solucoesServicos = get_queried_object();
	$solucoes = get_field('solucoes' , $solucoesServicos);
	$servicos = get_field('servicos' , $solucoesServicos);

?>
<div class="solucoes-servicos-tabs accordion tabs" data-script="ChangeIcon">

	<div role="tabpanel" class="tabpanel" >
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
						<a href="#solucoes" aria-controls="solucoes" role="tab" data-toggle="tab"><?php echo _e('Soluções', 'servix'); ?></a>
				</li>
				<li role="presentation">
						<a href="#servicos" aria-controls="servicos" role="tab" data-toggle="tab"><?php echo _e('Serviços', 'servix'); ?></a>
				</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<!-- Conteudo Soluções & Accordion -->
			<div role="tabpanel" class="tab-pane active accordion-container" id="solucoes">

				<div class="title-with-square hidden-xs hidden-sm">
					<svg width="400" height="90">
						<rect class="animate" x="50" y="20" width="110" height="56"/>
						Sorry, your browser does not support inline SVG.
					</svg>
					<p class="title"><?php echo _e('Soluções', 'servix'); ?></p>
				</div>

				<div class="lista listaSolucoes row panel-group" id="listaSolucoes">

					<?php
						$i = 0;
						foreach ( $solucoes as $solucao) :
					?>
						<div class="panel col-xs-12 col-md-3">
							<a href="<?php echo '#'.$post->ID.$i; ?>" data-parent="#listaSolucoes" data-toggle="collapse" class="accordion-link">
								<div class="item">
									<img src="<?php echo $solucoes[$i]['icone']['url']; ?>" alt="<?php echo 'Ícone '.$solucoes['titulo']; ?>" class="icone">
									<span class="texto"><?php echo $solucao['titulo']; ?></span>
								</div>
							</a>
							<div id="<?php echo $post->ID.$i; ?>" class="collapse accordion-item">
								<div class="accordion-body">
									<button data-toggle="collapse" data-target="<?php echo '#'.$post->ID.$i; ?>" class="close hidden-xs hidden-sm">X</button>
									<div class="body">
										<p class="texto"><?php echo $solucao['descricao'];?></p>
									</div>
								</div>
							</div>
						</div>
					<?php
						$i++;
						endforeach;
					?>

				</div>
			</div>

			<!-- ======================================= -->
			<!-- 					Conteudo Serviços -->
			<!-- ======================================= -->
			<div role="tabpanel" class="tab-pane accordion-container" id="servicos">

				<div class="title-with-square hidden-xs hidden-sm">
					<svg width="400" height="90">
						<rect class="animate" x="50" y="20" width="110" height="56"/>
						Sorry, your browser does not support inline SVG.
					</svg>
					<p class="title"><?php echo _e('Serviços', 'servix'); ?></p>
				</div>

				<div class="lista row panel-group listaServicos" id="listaServicos">
					<?php $i = 9; foreach ($servicos as $servico) : ?>
						<div class="panel col-xs-12 col-md-4">
							<a href="<?php echo '#'.$post->ID.$i; ?>" data-parent="#listaServicos"  data-toggle="collapse" class="accordion-link">
								<li class="item">
									<img src="<?php echo $servico['icone']['url']; ?>" alt="<?php echo 'Ícone '.$servico['titulo']; ?>" class="icone">
									<span class="texto"><?php echo $servico['titulo']; ?></span>
								</li>
							</a>
							<div id="<?php echo $post->ID.$i; ?>" class="collapse accordion-item">
								<div class="accordion-body">
									<button data-toggle="collapse" data-target="<?php echo '#'.$post->ID.$i; ?>" class="close hidden-xs hidden-sm">X</button>
									<div class="body">
										<p class="texto"><?php echo $servico['descricao']; ?></p>
									</div>
								</div>
							</div>
						</div>
					<?php $i++; endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>