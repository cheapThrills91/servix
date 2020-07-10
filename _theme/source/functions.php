<?php

if ( get_site_url() == 'http://localhost/wp-servix' || get_site_url() == 'http://localhost:3000/wp-servix') {
	$site_url = get_site_url() . '/index.php';
} else {
	$site_url = get_site_url();
}

//===================================
//				Adding Thumnnails
//===================================
add_theme_support('post-thumbnails');

//===================================
//			Removing admi bar
//===================================
show_admin_bar(false);

//===================================
//				Post Type Cases
//===================================
function post_type_cases(){

	$nomeSingular = 'Case';
	$nomePlural = 'Cases';
	$description = 'Cases da Servix';

	$labels = array(
		'name' => $nomePlural,
		'name_singular' => $nomeSingular,
		'add_new_item' => 'Adicionar novo ' . $nomeSingular,
		'edit_item' => 'Eidtar ' . $nomeSingular,
		'new_item' => 'Novo ' . $nomeSingular
	);

	$supports = array(
		'title',
		'editor',
		'author',
		'thumbnail',
		'custom-fields',
		'page-attributes'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'description' => $description,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => $supports
	);

	register_post_type ( 'cases' , $args);
};

add_action('after_setup_theme', 'post_type_cases');

//===================================
//					Adding Menu
//===================================
function servix_register_nav_menus() {
	register_nav_menus( array(
		'primary' => __( 'header-menu', 'main-menu' ),
		'footer' => __( 'footer-menu', 'footer-menu' )
	));
}
add_action( 'after_setup_theme', 'servix_register_nav_menus' );


//===================================
//						Widget
//===================================
function servix_widgets_init() {
	register_sidebar( array (
		'name' => __( 'Main Sidebar', 'your-text-domain' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'your-text-domain' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'servix_widgets_init' );


//===================================
//Change name Posto Noticias Noticias
//===================================
function revcon_change_post_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'Notícias';
	$submenu['edit.php'][5][0] = 'Notícias';
	$submenu['edit.php'][10][0] = 'Adicionar Notícias';
	$submenu['edit.php'][16][0] = 'Notícias Tags';
}
function revcon_change_post_object() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'Notícias';
	$labels->singular_name = 'Notícias';
	$labels->add_new = 'Adicionar Notícia';
	$labels->add_new_item = 'Adicionar Notícia';
	$labels->edit_item = 'Editar Notícia';
	$labels->new_item = 'Notícias';
	$labels->view_item = 'Visualizar Notícia';
	$labels->search_items = 'Procurar Notícias';
	$labels->not_found = 'Nenhuma notícia encontrada';
	$labels->not_found_in_trash = 'Nenhuma notícia encontrada na lixeira';
	$labels->all_items = 'Todas as Notícias';
	$labels->menu_name = 'Notícias';
	$labels->name_admin_bar = 'Notícias';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );