<?php
/**
 * Funções e definições do tema filho RSA Infralink.
 */

// Impede o acesso direto ao arquivo
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enfileira os estilos do tema pai e do tema filho
 */
function rsa_infralink_enqueue_styles() {
    // Enfileira o estilo do tema pai (GeneratePress)
    wp_enqueue_style( 'generatepress-style', get_template_directory_uri() . '/style.css' );
    
    // Enfileira o estilo do tema filho
    wp_enqueue_style( 'rsa-infralink-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'generatepress-style' ), '1.0.0' );

    // Enfileira as fontes do Google (Space Grotesk, Manrope e JetBrains Mono)
    wp_enqueue_style( 'rsa-infralink-google-fonts', 'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Manrope:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;600&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'rsa_infralink_enqueue_styles' );

/**
 * Enfileira scripts JavaScript específicos do tema filho
 */
function rsa_infralink_enqueue_scripts() {
    // Carrega o script de filtros dinâmicos do portfólio
    // Apenas carrega na página de portfólio (slug: 'portfolio' ou 'casos-de-sucesso')
    if ( is_page( 'portfolio' ) || is_page( 'casos-de-sucesso' ) || is_post_type_archive( 'post' ) || is_category() ) {
        wp_enqueue_script( 
            'rsa-portfolio-filter', 
            get_stylesheet_directory_uri() . '/js/portfolio-filter.js', 
            array(), 
            '1.0.0', 
            true 
        );
    }
}
add_action( 'wp_enqueue_scripts', 'rsa_infralink_enqueue_scripts' );

/**
 * Adiciona suporte para SVG na biblioteca de mídia do WordPress
 */
function rsa_infralink_allow_svg_uploads( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'rsa_infralink_allow_svg_uploads' );

/**
 * Corrige a exibição de miniaturas de SVG na biblioteca de mídia
 */
function rsa_infralink_svg_display_aspect_ratio( $response, $attachment, $meta ) {
    if ( $response['type'] === 'image' && $response['subtype'] === 'svg+xml' && empty( $response['sizes'] ) ) {
        $response['sizes'] = array(
            'full' => array(
                'url' => $response['url'],
                'width' => 150, // largura padrão simulada
                'height' => 150,
                'orientation' => 'landscape',
            ),
        );
    }
    return $response;
}
add_filter( 'wp_prepare_attachment_for_js', 'rsa_infralink_svg_display_aspect_ratio', 10, 3 );

/**
 * Desativa a exibição da barra lateral (sidebar) em todo o site
 */
add_filter( 'generate_sidebar_layout', function( $layout ) {
    return 'no-sidebar';
} );

/**
 * Desativa o título nativo das páginas e posts para evitar duplicidades visuais
 */
add_filter( 'generate_show_title', '__return_false' );

