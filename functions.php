<?php 

// Carregando nossos scripts e folhas de estilos
function load_scripts(){
	//JS
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '4.5.3', true );

	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.0', true );

	//CSS
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), '4.5.3', 'all' );

	wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/css/app.css', array(), '1.0', 'all' );

}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Função de Configuração do Tema
function sorri_config(){

	// Registrando menus
	register_nav_menus(
		array(
			'primary' => 'Menu Topo',
			'footer_menu_1' => 'Menu Rodape 1',
			'footer_menu_2' => 'Menu Rodape 2'
		)
);
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );	
	add_theme_support( 'title-tag');
}
add_action( 'after_setup_theme', 'sorri_config', 0 );

// Register Custom Post Type
require_once get_template_directory() . '/includes/cpt.php';

// Limitando o Excerpt em 35 caracteres.
function limit_caracter( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'limit_caracter', 999 );
