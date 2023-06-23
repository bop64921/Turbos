<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {
    $parenthandle = 'hello-elementor'; // This is 'hello-elementor' for the Hello Elementor theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

// Asignar imagen por defecto a productos nuevos en WooCommerce
function asignar_imagen_destacada_por_defecto( $post_id ) {
    // ID de la imagen por defecto
    $imagen_por_defecto_id = 282;

    // Verificar si es un producto de WooCommerce
    if ( 'product' === get_post_type( $post_id ) && !has_post_thumbnail( $post_id ) ) {
        // Asignar la imagen por defecto como imagen destacada
        set_post_thumbnail( $post_id, $imagen_por_defecto_id );
    }
}
add_action( 'save_post', 'asignar_imagen_destacada_por_defecto' );

function mostrar_iniciales_turbo_shortcode() {
    ob_start(); // Iniciar el almacenamiento en búfer de salida
    
    mostrar_iniciales_turbo(); // Llamar a la función mostrar_iniciales_turbo
    
    return ob_get_clean(); // Obtener y limpiar el contenido del búfer de salida
}
add_shortcode('mostrar_iniciales', 'mostrar_iniciales_turbo_shortcode');

function custom_add_to_cart_shortcode() {
    return generate_custom_add_to_cart_form();
}
add_shortcode('custom_add_to_cart', 'custom_add_to_cart_shortcode');
?>