<?php 

// Register Sidebars
function sorrifacil_sidebars(){

// Sidebar Widget
    register_sidebar(
        array(
            'name'          => 'Widget 1',
            'id'            => 'widget-1',
            'before_widget' => '<div class="widget-telefone">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget_title">',
            'after_title'   => '</h3>'
        )
    );

    register_sidebar(
        array(
            'name'          => 'Widget 2',
            'id'            => 'widget-2',
            'before_widget' => '<div class="widget-map">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget_title">',
            'after_title'   => '</h3>'
        )
    );

    register_sidebar(
        array(
            'name'          => 'Widget 3',
            'id'            => 'widget-3',
            'before_widget' => '<div class="widget-menu-1">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget_title">',
            'after_title'   => '</h3>'
        )
    );

    register_sidebar(
        array(
            'name'          => 'Widget 4',
            'id'            => 'widget-4',
            'before_widget' => '<div class="widget-menu-2">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget_title">',
            'after_title'   => '</h3>'
        )
    );

}
add_action('widgets_init', 'sorrifacil_sidebars');

/*********************************
* Registro Custom Post Type Slider
**********************************/
add_action('init', 'slider_registrer');
function slider_registrer(){
    $labels = array(
        'name'                  => _x('Slider', 'post type general name'),
        'singular_name'         => _x('Slider', 'post type singular name'),
        'add_new'               => _x('Adicionar Slider', 'slider'),
        'add_new_item'          => __('Adicionar Slider', 'slider'),
        'edit_item'             => __('Editar Slider'),
        'new_item'              => __ ('Novo Slider'),
        'view_item'             => __('Ver Slider'),
        'search_slider'         => __('Procurar Slider'),
        'not_found'             => __('Nada Encontrado'),
        'not_found_in_trash'    => __('Nada encontrado no lixo'),
        'parent_item_colon'     => '' 
    );
    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_uri'              => true,
        'query_var'             => true,
        'rewrite'               => true,
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-images-alt',
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'menu_position'         => 6,
        'supports'              => array('title', 'thumbnail'), 
    );
    register_post_type('slider',$args);
}
?>