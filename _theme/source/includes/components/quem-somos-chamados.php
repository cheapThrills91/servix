<div class="quem-somos-chamados" data-script="QuemSomosChamados">
	<div class="tooltips top gray"></div>
		<div class="container">
			<div class="row icon-row">

				<div class="col-xs-4 col-md-2 icon-container">
					<img src="<?php echo get_template_directory_uri().'/img/icon-talk.png'?>" alt="Icone de pessoa com fone" class="img-responsive">
				</div>
				<div class="col-xs-8 col-md-2">
					<div class="chamados-dados">
						<span class="block plus"><?php echo _e('+ de', 'servix'); ?></span>
						<span class="block number"><?php echo get_field('chamados_anuais'); ?></span>
						<span class="block text"><?php echo _e('chamados anuais', 'servix'); ?></span>
					</div>
				</div>

				<div class="col-xs-12 col-md-7 no-padding the-bars">
					<div class="chamados-atendidos">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="90"
							aria-valuemin="20" aria-valuemax="100" >
								<?php echo _e('chamados atendidos', 'servix'); ?>
							</div>
						</div>
						<div class="percentage">
							<span><?php echo get_field('chamados_atendidos').'%'; ?></span>
						</div>
					</div>

					<div class="tempo-resolucao">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="90"
							aria-valuemin="0" aria-valuemax="100">
								<?php echo _e('com tempo de resolução', 'servix'); ?>
							</div>
						</div>
						<div class="percentage">
							<span><?php echo _e('inferior a ', 'servix')?> <span class="big-text"><?php echo get_field('tempo_de_resolucao').'%'?></span><br><?php echo _e('do SLA contratado', 'servix'); ?></span>
						</div>
					</div>

				</div>

		</div>
	</div>
</div>