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
