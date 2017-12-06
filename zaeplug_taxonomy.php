<?php

/*
Plugin Name: Zaeplug Taxonomy
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Para hacer taxonomies
Version: 1.0
Author: Zaesar
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/
function paises ( ) {

    $labels = array(
        'name'                       => _x( 'Países', 'nombre en general' ),
        'singular_name'              => _x( 'País', 'nombre en singular' ),
        'search_items'               => __( 'Buscar Países'),
        'popular_items'              => __( 'Países populares'),
        'all_items'                  => __( 'países'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Editar País'),
        'update_item'                => __( 'Recargar País'),
        'add_new_item'               => __( 'Añadir nuevo País'),
        'new_item_name'              => __( 'Nuevo nombre de país'),
        'separate_items_with_commas' => __( 'Separar países con comas' ),
        'add_or_remove_items'        => __( 'Añadir o quitar nuevos países' ),
        'choose_from_most_used'      => __( 'Choose from the most used writers'),
        'not_found'                  => __( 'No hemos encontrado países'),
        'menu_name'                  => __( 'Países'),
    );
    $opciones = array(
        'name' => 'Países',
        'singular_name' => 'País',
        'menu_name' => 'Paises',
        'all_items' => 'Países',
        'edit_item' => 'Editar países',
        'view_item' => 'Ver País',
        'update_item' => 'Recargar País',
        'add_new_item' => 'Añadir nuevo país',
        'new_item_name' => 'Nuevo nombre de país',
        'search_items' => 'Buscar países',
        'popular_items' => 'Países populares',
        'separate_items_with_commas' => 'Separar países con comas',
        'add_or_remove_items' => 'Añadir o quitar países',
        'choose_from_most_used' => 'Escoger de los más escogidos',
        'not_found' => 'No hemos encontrado ningun país',
        'hierarchical' => false,
        'labels' => $labels,
        'show_ul' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'pais'),
        'show_in_nav_menus' => true,

    );




    register_taxonomy ('paises',array('post', 'atripby'), $opciones);
}

add_action('init', 'paises');


// Taxonomía para deportes
function Deportes ( ) {

    $labels = array(
        'name'                       => _x( 'Deportes', 'nombre en general' ),
        'singular_name'              => _x( 'deporte', 'nombre en singular' ),
        'search_items'               => __( 'Buscar Deportes'),
        'popular_items'              => __( 'Deportes populares'),
        'all_items'                  => __( 'Deportes'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Editar deporte'),
        'update_item'                => __( 'Recargar deporte'),
        'add_new_item'               => __( 'Añadir nuevo deporte'),
        'new_item_name'              => __( 'Nuevo nombre de deporte'),
        'separate_items_with_commas' => __( 'Separar Deportes con comas' ),
        'add_or_remove_items'        => __( 'Añadir o quitar nuevos Deportes' ),
        'choose_from_most_used'      => __( 'Escoge de los Deportes más usados'),
        'not_found'                  => __( 'No hemos encontrado Deportes' ),
        'menu_name'                  => __( 'Deportes'),
    );
    $opciones = array(
        'name' => 'Deportes',
        'singular_name' => 'deporte',
        'menu_name' => 'Deportes',
        'all_items' => 'Deportes',
        'edit_item' => 'Editar Deportes',
        'view_item' => 'Ver deporte',
        'update_item' => 'Recargar deporte',
        'add_new_item' => 'Añadir nuevo deporte',
        'new_item_name' => 'Nuevo nombre de deporte',
        'search_items' => 'Buscar Deportes',
        'popular_items' => 'Deportes populares',
        'separate_items_with_commas' => 'Separar Deportes con comas',
        'add_or_remove_items' => 'Añadir o quitar Deportes',
        'choose_from_most_used' => 'Escoger de los más escogidos',
        'not_found' => 'No hemos encontrado ningun deporte',
        'hierarchical' => false,
        'labels' => $labels,
        'show_ul' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'deporte'),
        'show_in_nav_menus' => true,

    );




    register_taxonomy ('Deportes',array('post', 'atripby'), $opciones);
}

add_action('init', 'Deportes');
// Taxonomía para género
function Generos ( ) {

    $labels = array(
        'name'                       => _x( 'Generos', 'nombre en general' ),
        'singular_name'              => _x( 'genero', 'nombre en singular' ),
        'search_items'               => __( 'Buscar Generos'),
        'popular_items'              => __( 'Generos populares'),
        'all_items'                  => __( 'Generos'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Editar genero'),
        'update_item'                => __( 'Recargar genero'),
        'add_new_item'               => __( 'Añadir nuevo genero'),
        'new_item_name'              => __( 'Nuevo nombre de genero'),
        'separate_items_with_commas' => __( 'Separar Generos con comas' ),
        'add_or_remove_items'        => __( 'Añadir o quitar nuevos Generos' ),
        'choose_from_most_used'      => __( 'Escoge de los Generos más usados'),
        'not_found'                  => __( 'No hemos encontrado generos' ),
        'menu_name'                  => __( 'Generos'),
    );
    $opciones = array(
        'name' => 'Generos',
        'singular_name' => 'genero',
        'menu_name' => 'Generos',
        'all_items' => 'Generos',
        'edit_item' => 'Editar Generos',
        'view_item' => 'Ver genero',
        'update_item' => 'Recargar genero',
        'add_new_item' => 'Añadir nuevo genero',
        'new_item_name' => 'Nuevo nombre de genero',
        'search_items' => 'Buscar Generos',
        'popular_items' => 'Generos populares',
        'separate_items_with_commas' => 'Separar Generos con comas',
        'add_or_remove_items' => 'Añadir o quitar Generos',
        'choose_from_most_used' => 'Escoger de los más escogidos',
        'not_found' => 'No hemos encontrado ningun genero',
        'hierarchical' => false,
        'labels' => $labels,
        'show_ul' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'genero'),
        'show_in_nav_menus' => true,

    );




    register_taxonomy ('generos',array('post', 'atripby'), $opciones);
}

add_action('init', 'generos');
// Taxonomía para edad
function Edades ( ) {

    $labels = array(
        'name'                       => _x( 'Edades', 'nombre en general' ),
        'singular_name'              => _x( 'Edad', 'nombre en singular' ),
        'search_items'               => __( 'Buscar Edades'),
        'popular_items'              => __( 'Edades populares'),
        'all_items'                  => __( 'Edades'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Editar Edad'),
        'update_item'                => __( 'Recargar Edad'),
        'add_new_item'               => __( 'Añadir nuevo Edad'),
        'new_item_name'              => __( 'Nuevo nombre de Edad'),
        'separate_items_with_commas' => __( 'Separar Edades con comas' ),
        'add_or_remove_items'        => __( 'Añadir o quitar nuevos Edades' ),
        'choose_from_most_used'      => __( 'Escoge de los Edades más usados'),
        'not_found'                  => __( 'No hemos encontrado ninguna edad' ),
        'menu_name'                  => __( 'Edades'),
    );
    $opciones = array(
        'name' => 'Edades',
        'singular_name' => 'Edad',
        'menu_name' => 'Edades',
        'all_items' => 'Edades',
        'edit_item' => 'Editar Edades',
        'view_item' => 'Ver Edad',
        'update_item' => 'Recargar Edad',
        'add_new_item' => 'Añadir nuevo Edad',
        'new_item_name' => 'Nuevo nombre de Edad',
        'search_items' => 'Buscar Edades',
        'popular_items' => 'Edades populares',
        'separate_items_with_commas' => 'Separar Edades con comas',
        'add_or_remove_items' => 'Añadir o quitar Edades',
        'choose_from_most_used' => 'Escoger de los más escogidos',
        'not_found' => 'No hemos encontrado ningun Edad',
        'hierarchical' => false,
        'labels' => $labels,
        'show_ul' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Edad'),
        'show_in_nav_menus' => true,

    );




    register_taxonomy ('Edades',array('post', 'atripby'), $opciones);
}

add_action('init', 'Edades');
/*
// Taxonomía para menos de mil
function menos_de_mil ( ) {

    $labels = array(
        'name'                       => _x( 'menos de mil', 'nombre en general' ),
        'singular_name'              => _x( 'menos de 1000', 'nombre en singular' ),
        'search_items'               => __( 'Buscar menos de mil'),
        'popular_items'              => __( 'menos de mil populares'),
        'all_items'                  => __( 'menos de 1000€'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Editar menos de mil'),
        'update_item'                => __( 'Recargar menos de mil'),
        'add_new_item'               => __( 'Añadir nuevo menos de mil'),
        'new_item_name'              => __( 'Nuevo nombre de menos de mil'),
        'separate_items_with_commas' => __( 'Separar menos de mil con comas' ),
        'add_or_remove_items'        => __( 'Añadir o quitar nuevos menos de mil' ),
        'choose_from_most_used'      => __( 'Escoge de los menos de mil más usados'),
        'not_found'                  => __( 'No menos de mil encontrado' ),
        'menu_name'                  => __( 'menos de mil'),
    );
    $opciones = array(
        'name' => 'menos de mil',
        'singular_name' => 'menos de mil',
        'menu_name' => 'menos de mil',
        'all_items' => 'menos de 1000€',
        'edit_item' => 'Editar menos de mil',
        'view_item' => 'Ver menos de mil',
        'update_item' => 'Recargar menos de mil',
        'add_new_item' => 'Añadir nuevo menos de mil',
        'new_item_name' => 'Nuevo nombre de menos de mil',
        'search_items' => 'Buscar menos de mil',
        'popular_items' => 'menos de mil populares',
        'separate_items_with_commas' => 'Separar menos de mil con comas',
        'add_or_remove_items' => 'Añadir o quitar menos de mil',
        'choose_from_most_used' => 'Escoger de los más escogidos',
        'not_found' => 'No hemos encontrado ningun menos de mil',
        'hierarchical' => false,
        'labels' => $labels,
        'show_ul' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'menos de mil'),
        'show_in_nav_menus' => true,

    );




    register_taxonomy ('menos de mil',array('post', 'atripby'), $opciones);
}

add_action('init', 'menos_de_mil');
// Taxonomía para menos de dosmil
function menos_de_dosmil ( ) {

    $labels = array(
        'name'                       => _x( 'menos de dosmil', 'nombre en general' ),
        'singular_name'              => _x( 'menos de dosmil', 'nombre en singular' ),
        'search_items'               => __( 'Buscar menos de dosmil'),
        'popular_items'              => __( 'menos de dosmil populares'),
        'all_items'                  => __( 'menos de 2000€'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Editar menos de dosmil'),
        'update_item'                => __( 'Recargar menos de dosmil'),
        'add_new_item'               => __( 'Añadir nuevo menos de dosmil'),
        'new_item_name'              => __( 'Nuevo nombre de menos de dosmil'),
        'separate_items_with_commas' => __( 'Separar menos de dosmil con comas' ),
        'add_or_remove_items'        => __( 'Añadir o quitar nuevos menos de dosmil' ),
        'choose_from_most_used'      => __( 'Escoge de los menos de dosmil más usados'),
        'not_found'                  => __( 'No menos de dosmil encontrados'),
        'menu_name'                  => __( 'menos de dosmil'),
    );
    $opciones = array(
        'name' => 'menos de dosmil',
        'singular_name' => 'menos de dosmil',
        'menu_name' => 'menos de dosmil',
        'all_items' => 'menos de 2000€',
        'edit_item' => 'Editar menos de dosmil',
        'view_item' => 'Ver menos de dosmil',
        'update_item' => 'Recargar menos de dosmil',
        'add_new_item' => 'Añadir nuevo menos de dosmil',
        'new_item_name' => 'Nuevo nombre de menos de dosmil',
        'search_items' => 'Buscar menos de dosmil',
        'popular_items' => 'menos de dosmil populares',
        'separate_items_with_commas' => 'Separar menos de dosmil con comas',
        'add_or_remove_items' => 'Añadir o quitar menos de dosmil',
        'choose_from_most_used' => 'Escoger de los más escogidos',
        'not_found' => 'No hemos encontrado ningun menos de dosmil',
        'hierarchical' => false,
        'labels' => $labels,
        'show_ul' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'me'),
        'show_in_nav_menus' => true,

    );




    register_taxonomy ('menos de dosmil',array('post', 'atripby'), $opciones);
}

add_action('init', 'menos_de_dosmil');
// Taxonomía para menos de tresmil€
function menos_de_tresmil ( ) {

    $labels = array(
        'name'                       => _x( 'menos de tresmil', 'nombre en general' ),
        'singular_name'              => _x( 'menos de tresmil', 'nombre en singular' ),
        'search_items'               => __( 'Buscar menos de tresmil'),
        'popular_items'              => __( 'menos de tresmil populares'),
        'all_items'                  => __( 'menos de 3000€'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Editar menos de tresmil'),
        'update_item'                => __( 'Recargar menos de tresmil'),
        'add_new_item'               => __( 'Añadir nuevo menos de tresmil'),
        'new_item_name'              => __( 'Nuevo nombre de menos de tresmil'),
        'separate_items_with_commas' => __( 'Separar menos de tresmil con comas' ),
        'add_or_remove_items'        => __( 'Añadir o quitar nuevos menos de tresmil' ),
        'choose_from_most_used'      => __( 'Escoge de los menos de tresmil más usados'),
        'not_found'                  => __( 'No menos de tresmil encontrado' ),
        'menu_name'                  => __( 'menos de tresmil'),
    );
    $opciones = array(
        'name' => 'menos de tresmil',
        'singular_name' => 'menos de tresmil',
        'menu_name' => 'menos de tresmil',
        'all_items' => 'menos de 3000€',
        'edit_item' => 'Editar menos de tresmil',
        'view_item' => 'Ver menos de tresmil',
        'update_item' => 'Recargar menos de tresmil',
        'add_new_item' => 'Añadir nuevo menos de tresmil',
        'new_item_name' => 'Nuevo nombre de menos de tresmil',
        'search_items' => 'Buscar menos de tresmil',
        'popular_items' => 'menos de tresmil populares',
        'separate_items_with_commas' => 'Separar menos de tresmil con comas',
        'add_or_remove_items' => 'Añadir o quitar menos de tresmil',
        'choose_from_most_used' => 'Escoger de los más escogidos',
        'not_found' => 'No hemos encontrado ningun menos de tresmil',
        'hierarchical' => false,
        'labels' => $labels,
        'show_ul' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'menos de tresmil'),
        'show_in_nav_menus' => true,

    );




    register_taxonomy ('menos de tresmil',array('post', 'atripby'), $opciones);
}

add_action('init', 'menos_de_tresmil');
// Taxonomía para mas de tresmil
function mas_de_tresmil ( ) {

    $labels = array(
        'name'                       => _x( 'mas de tresmil', 'nombre en general' ),
        'singular_name'              => _x( 'mas de tresmil', 'nombre en singular' ),
        'search_items'               => __( 'Buscar mas de tresmil'),
        'popular_items'              => __( 'mas de tresmil populares'),
        'all_items'                  => __( 'mas de 3000€'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Editar mas de tresmil'),
        'update_item'                => __( 'Recargar mas de tresmil'),
        'add_new_item'               => __( 'Añadir nuevo mas de tresmil'),
        'new_item_name'              => __( 'Nuevo nombre de mas de tresmil'),
        'separate_items_with_commas' => __( 'Separar mas de tresmil con comas' ),
        'add_or_remove_items'        => __( 'Añadir o quitar nuevos mas de tresmil' ),
        'choose_from_most_used'      => __( 'Escoge de los mas de tresmil más usados'),
        'not_found'                  => __( 'No mas de tresmil' ),
        'menu_name'                  => __( 'mas de tresmil'),
    );
    $opciones = array(
        'name' => 'mas de tresmil',
        'singular_name' => 'mas de tresmil',
        'menu_name' => 'mas de tresmil',
        'all_items' => 'más de 3000€',
        'edit_item' => 'Editar mas de tresmil',
        'view_item' => 'Ver mas de tresmil',
        'update_item' => 'Recargar mas de tresmil',
        'add_new_item' => 'Añadir nuevo mas de tresmil',
        'new_item_name' => 'Nuevo nombre de mas de tresmil',
        'search_items' => 'Buscar mas de tresmil',
        'popular_items' => 'mas de tresmil populares',
        'separate_items_with_commas' => 'Separar mas de tresmil con comas',
        'add_or_remove_items' => 'Añadir o quitar mas de tresmil',
        'choose_from_most_used' => 'Escoger de los más escogidos',
        'not_found' => 'No hemos encontrado ningun mas de tresmil',
        'hierarchical' => false,
        'labels' => $labels,
        'show_ul' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'mas de tresmil'),
        'show_in_nav_menus' => true,

    );




    register_taxonomy ('mas de tresmil',array('post', 'atripby'), $opciones);
}

add_action('init', 'mas_de_tresmil');
*/
// Taxonomía para niveles
function niveles ( ) {

    $labels = array(
        'name'                       => _x( 'niveles', 'nombre en general' ),
        'singular_name'              => _x( 'nivel', 'nombre en singular' ),
        'search_items'               => __( 'Buscar niveles'),
        'popular_items'              => __( 'niveles populares'),
        'all_items'                  => __( 'niveles'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Editar nivel'),
        'update_item'                => __( 'Recargar nivel'),
        'add_new_item'               => __( 'Añadir nuevo nivel'),
        'new_item_name'              => __( 'Nuevo nombre de nivel'),
        'separate_items_with_commas' => __( 'Separar niveles con comas' ),
        'add_or_remove_items'        => __( 'Añadir o quitar nuevos niveles' ),
        'choose_from_most_used'      => __( 'Escoge de los niveles más usados'),
        'not_found'                  => __( 'No niveles' ),
        'menu_name'                  => __( 'niveles'),
    );
    $opciones = array(
        'name' => 'niveles',
        'singular_name' => 'niveles',
        'menu_name' => 'niveles',
        'all_items' => 'niveles',
        'edit_item' => 'Editar nivel',
        'view_item' => 'Ver nivel',
        'update_item' => 'Recargar nivel',
        'add_new_item' => 'Añadir nuevo nivel',
        'new_item_name' => 'Nuevo nombre de nivel',
        'search_items' => 'Buscar niveles',
        'popular_items' => 'niveles populares',
        'separate_items_with_commas' => 'Separar niveles con comas',
        'add_or_remove_items' => 'Añadir o quitar niveles',
        'choose_from_most_used' => 'Escoger de los más escogidos',
        'not_found' => 'No hemos encontrado ningun niveles',
        'hierarchical' => false,
        'labels' => $labels,
        'show_ul' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'niveles'),
        'show_in_nav_menus' => true,

    );




    register_taxonomy ('niveles',array('post', 'atripby'), $opciones);
}

add_action('init', 'niveles');
// Taxonomía para Precios
function precios ( ) {

    $labels = array(
        'name'                       => _x( 'precios', 'nombre en general' ),
        'singular_name'              => _x( 'precio', 'nombre en singular' ),
        'search_items'               => __( 'Buscar precios'),
        'popular_items'              => __( 'precios populares'),
        'all_items'                  => __( 'precios'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Editar precio'),
        'update_item'                => __( 'Recargar precio'),
        'add_new_item'               => __( 'Añadir nuevo precio'),
        'new_item_name'              => __( 'Nuevo nombre de precio'),
        'separate_items_with_commas' => __( 'Separar precios con comas' ),
        'add_or_remove_items'        => __( 'Añadir o quitar nuevos precios' ),
        'choose_from_most_used'      => __( 'Escoge de los precios más usados'),
        'not_found'                  => __( 'No precios' ),
        'menu_name'                  => __( 'precios'),
    );
    $opciones = array(
        'name' => 'precios',
        'singular_name' => 'precios',
        'menu_name' => 'precios',
        'all_items' => 'precios',
        'edit_item' => 'Editar precio',
        'view_item' => 'Ver precio',
        'update_item' => 'Recargar precio',
        'add_new_item' => 'Añadir nuevo precio',
        'new_item_name' => 'Nuevo nombre de precio',
        'search_items' => 'Buscar precios',
        'popular_items' => 'precios populares',
        'separate_items_with_commas' => 'Separar precios con comas',
        'add_or_remove_items' => 'Añadir o quitar precios',
        'choose_from_most_used' => 'Escoger de los más escogidos',
        'not_found' => 'No hemos encontrado ningun precios',
        'hierarchical' => false,
        'labels' => $labels,
        'show_ul' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'precios'),
        'show_in_nav_menus' => true,

    );




    register_taxonomy ('precios',array('post', 'atripby'), $opciones);
}

add_action('init', 'precios');

