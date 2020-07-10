<header class="header-menu" data-script="HeaderMenu">
	<div class="container-fluid no-padding">

		<nav class="navbar navbar-default  navbar-fixed-top" role="navigation">
			<?php wp_nav_menu(['menu' => 'main-menu']); ?>

			<!-- <select class="selectpicker" data-width="fit">
				<option  data-content='<span class="flag-icon flag-icon-br"></span> '>Português</option>
				<option data-content='<span class="flag-icon flag-icon-us"></span> '>English</option>
			</select> -->
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button id="headerNavbar" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse"  aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>
				<a class="navbar-brand nav-logo" href="<?php echo get_home_url(); ?>">
					<img src="<?php echo get_template_directory_uri() ?>/img/logo-servix.png" alt="Logo Servix" class="img-responsive brand-logo">
				</a>

				<a href="https://www.servix.sistema.adm.br" target="_blank" class="button-login" rel="noopener" title="Acesse a área de suporte">
					<?php echo _e('Login de Suporte', 'servix'); ?>
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse" aria-expanded="false">
				<ul class="nav navbar-nav navbar-right menu-navbar">
					<?php $pages_menu = get_posts(array('post_type'=>'page', 'posts_per_page'=>-1,'post_parent'=>0, 'orderby' => 'menu_order', 'order' => 'ASC', 'suppress_filters' => false)); ?>
					<?php foreach($pages_menu as $page): ?>
						<li class="<?php if(get_queried_object_id()==$page->ID){echo'active';} ?>"><a href="<?php echo get_permalink($page); ?>"><?php echo $page->post_title; ?></a>
						<?php $sub_pages = get_posts(array('post_type'=>'page', 'posts_per_page'=>-1,'post_parent'=>$page->ID, 'orderby' => 'menu_order', 'order' => 'ASC','suppress_filters' => false)); ?>
						<?php if(!empty($sub_pages)): ?>
							<ul class="dropdown-menu">
							<?php foreach($sub_pages as $sub): ?>
								<li><a href="<?php echo get_permalink($sub); ?>" class="menu-navbar-item"><?php echo $sub->post_title; ?></a></li>
							<?php endforeach; ?>
							</ul>
						<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
</header>