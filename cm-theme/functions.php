<?php
/**
 * Funções e definições do tema C&M Global Services
 */

function cm_global_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'cm-global'),
    ));
}
add_action('after_setup_theme', 'cm_global_setup');

/**
 * SEGURANÇA E LIMPEZA (HARDENING)
 */

// Remover versão do WordPress e links desnecessários do header
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

// Ocultar erros de login (Evita descoberta de usernames)
add_filter('login_errors', function() {
    return 'Erro: As credenciais informadas estão incorretas.';
});

// Desativar XML-RPC (Prevenção contra ataques de força bruta)
add_filter('xmlrpc_enabled', '__return_false');

// Remover links de REST API e oEmbed do header
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

// Desativar Emojis para limpar o fonte e melhorar a performance
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

function cm_global_scripts() {
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false);
    wp_add_inline_script('tailwind-cdn', "
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        slate: { 900: '#0f172a', 800: '#1e293b' },
                        blue: { 600: '#3b82f6' },
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Space Grotesk', 'sans-serif'],
                    }
                }
            }
        }
    ");
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@400;700&display=swap', array(), null);
    wp_enqueue_style('cm-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'cm_global_scripts');
