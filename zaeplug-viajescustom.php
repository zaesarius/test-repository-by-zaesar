<?php

/*
Plugin Name: Zaeplug Link Img Post
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: Zaesar
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

if ( ! function_exists('custom_viajes') ) {

// Register Custom Post Type
    function custom_viajes()
    {

        $labels = array(
            'name' => _x('Viajes', 'Post Type General Name', 'custom_viajes'),
            'singular_name' => _x('Viaje', 'Post Type Singular Name', 'custom_viajes'),
            'menu_name' => __('Viajes', 'custom_viajes'),
            'name_admin_bar' => __('Viajes', 'custom_viajes'),
            'archives' => __('Archivos de viajes', 'custom_viajes'),
            'attributes' => __('Atributos de viajes', 'custom_viajes'),
            'parent_item_colon' => __('Viajes Padre', 'custom_viajes'),
            'all_items' => __('Todos los viajes', 'custom_viajes'),
            'add_new_item' => __('Añadir nuevo viaje', 'custom_viajes'),
            'add_new' => __('Añadir nuevo', 'custom_viajes'),
            'new_item' => __('Nuevo viaje', 'custom_viajes'),
            'edit_item' => __('Editar viaje', 'custom_viajes'),
            'update_item' => __('Actualizar viaje', 'custom_viajes'),
            'view_item' => __('Ver viaje', 'custom_viajes'),
            'view_items' => __('Ver viajes', 'custom_viajes'),
            'search_items' => __('Buscar viaje', 'custom_viajes'),
            'not_found' => __('No encontrado', 'custom_viajes'),
            'not_found_in_trash' => __('No encontrado en papelera', 'custom_viajes'),
            'featured_image' => __('Featured Image', 'custom_viajes'),
            'set_featured_image' => __('Set featured image', 'custom_viajes'),
            'remove_featured_image' => __('Remove featured image', 'custom_viajes'),
            'use_featured_image' => __('Use as featured image', 'custom_viajes'),
            'insert_into_item' => __('Insertar dentro del viaje', 'custom_viajes'),
            'uploaded_to_this_item' => __('Carga a este viaje', 'custom_viajes'),
            'items_list' => __('Lista de viajes', 'custom_viajes'),
            'items_list_navigation' => __('Lista de navegación de viajes', 'custom_viajes'),
            'filter_items_list' => __('Filtrar lista de viajes', 'custom_viajes'),
        );
        $rewrite = array(
            'slug' => 'viaje',
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        );
        $args = array(
            'label' => __('Viaje', 'custom_viajes'),
            'description' => __('Viajes de organizadores', 'custom_viajes'),
            'labels' => $labels,
            'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
            'taxonomies' => array('category', 'post_tag'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-admin-site',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => false,
            'has_archive' => true,
            'exclude_from_search' => true,
            'publicly_queryable' => true,
            'rewrite' => $rewrite,
            'capability_type' => 'post',
        );
        register_post_type('atripby', $args);

    }

    add_action('init', 'custom_viajes', 0);

}
