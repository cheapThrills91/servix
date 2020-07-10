<div class="cases-post-list posts-list">

	<?php
		$per_page = 3;
		$pg=0;
		if(!empty($_GET['pg'])){
			$pg = $_GET['pg']-1;
		}
		$posts = get_posts(array(
			'post_type'=>'cases',
			'posts_per_page'=>$per_page,
			'offset'=>$pg*$per_page,
			'suppress_filters' => false,
			'orderby' => 'date',
  		'order' => 'DESC'
		));


		foreach ($posts as $post) : ?>


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
								<?php
									$content = $post->post_content;
									echo strip_tags(mb_strimwidth( $content, 0, 150, '...' ));
								?>
							</p>
							<a href="<?php echo get_permalink( $post ); ?>" class="leia-mais"> <span class="text"><?php echo _e('Leia mais', 'servix') ?></span> <span class="icon icon-arrow-right"></span> </a>
						</div>
					</div>
				</div>
			</div>

		<?php
		endforeach
	?>

<?php
		$posts_all = get_posts(array(
			'post_type'=>'cases',
			'posts_per_page'=>-1,
			'suppress_filters' => false,
		));

		$total_pages = count($posts_all)/$per_page;
		$ex_p = explode('.', $total_pages);

		if(!empty($ex_p[1])){
			$total_pages = $total_pages+1;
		}

		if(empty($pg)){
			$pg=1;
		}

	?>
	<?php if(!empty($total_pages-1)): ?>
	<ul class="pagination">
		<?php if(($pg-1)>=1): ?>
			<li><a href="<?php echo site_url('cases'); ?>?pg=<?php echo $pg-1; ?>">&laquo;</a></li>
		<?php endif; ?>
		<?php for ($p=1; $p <= $total_pages; $p++) : ?>
		<li>
			<a href="<?php echo site_url('cases').'?pg='.$p;?>"><?php echo $p; ?></a>
		</li>
		<?php endfor;?>
		<?php if(($pg+1)<$total_pages): ?>
			<li><a href="<?php echo site_url('cases'); ?>?pg=<?php echo $pg+1; ?>">&raquo;</a></li>
		<?php endif; ?>
	</ul>
	<?php endif; ?>

</div>