<?php
/*
    Plugin Name: TerraForma - Post Types
    Plugin URI: https://github.com/ManuelPeJu
    Description: Añade Post Types al sitio TerraForma
    Version: 1.0.0
    Author: Manuel Pérez Jurado
    Author URI: https://github.com/ManuelPeJu
    Text Domain: terraforma
*/

if(!defined('ABSPATH')) die(); // protect from anyone that try to join and seek to the plugin info

function terraforma_servicios_post_type() {

	$labels = array(
		'name'                  => _x( 'Servicios', 'Post Type General Name', 'terraforma' ),
		'singular_name'         => _x( 'servicio', 'Post Type Singular Name', 'terraforma' ),
		'menu_name'             => __( 'Servicios', 'terraforma' ),
		'name_admin_bar'        => __( 'servicio', 'terraforma' ),
		'archives'              => __( 'Archivo', 'terraforma' ),
		'attributes'            => __( 'Atributos', 'terraforma' ),
		'parent_item_colon'     => __( 'Servicio Padre', 'terraforma' ),
		'all_items'             => __( 'Todas Los Servicios', 'terraforma' ),
		'add_new_item'          => __( 'Agregar Servicio', 'terraforma' ),
		'add_new'               => __( 'Agregar Servicio', 'terraforma' ),
		'new_item'              => __( 'Nueva Servicio', 'terraforma' ),
		'edit_item'             => __( 'Editar Servicio', 'terraforma' ),
		'update_item'           => __( 'Actualizar Servicio', 'terraforma' ),
		'view_item'             => __( 'Ver Servicio', 'terraforma' ),
		'view_items'            => __( 'Ver Servicios', 'terraforma' ),
		'search_items'          => __( 'Buscar Servicio', 'terraforma' ),
		'not_found'             => __( 'No Encontrado', 'terraforma' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'terraforma' ),
		'featured_image'        => __( 'Imagen Destacada', 'terraforma' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'terraforma' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'terraforma' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'terraforma' ),
		'insert_into_item'      => __( 'Insertar en Servicio', 'terraforma' ),
		'uploaded_to_this_item' => __( 'Agregado en Servicio', 'terraforma' ),
		'items_list'            => __( 'Lista de Servicios', 'terraforma' ),
		'items_list_navigation' => __( 'Navegación de Servicios', 'terraforma' ),
		'filter_items_list'     => __( 'Filtrar Servicios', 'terraforma' ),
	);
	$args = array(
		'label'                 => __( 'Servicio', 'terraforma' ),
		'description'           => __( 'Servicios para el Sitio Web', 'terraforma' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'terraforma_servicios', $args);

}
add_action( 'init', 'terraforma_servicios_post_type', 0 );