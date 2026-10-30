<?php
/** Theme setup, assets and editable destinations. */
defined( 'ABSPATH' ) || exit;

function elena_setup() {
    load_theme_textdomain( 'elena-design', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    register_nav_menus( array( 'primary' => 'Основная навигация' ) );
}
add_action( 'after_setup_theme', 'elena_setup' );

function elena_asset( $path ) {
    return get_theme_file_uri( '/assets/' . ltrim( $path, '/' ) );
}
function elena_assets() {
    wp_enqueue_style( 'elena-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_style( 'elena-main', elena_asset( 'css/main.css' ), array( 'elena-style' ), (string) filemtime( get_theme_file_path( '/assets/css/main.css' ) ) );
    wp_enqueue_script( 'elena-main', elena_asset( 'js/main.js' ), array(), (string) filemtime( get_theme_file_path( '/assets/js/main.js' ) ), true );
    wp_script_add_data( 'elena-main', 'strategy', 'defer' );
}
add_action( 'wp_enqueue_scripts', 'elena_assets' );

function elena_nav_items() {
    return array( 'work' => 'Работы', 'services' => 'Услуги', 'about' => 'Обо мне', 'process' => 'Процесс', 'contact' => 'Контакты' );
}
function elena_navigation() {
    foreach ( elena_nav_items() as $anchor => $label ) {
        printf( '<a href="%s">%s</a>', esc_url( home_url( '/#' . $anchor ) ), esc_html( $label ) );
    }
}
function elena_email() {
    return sanitize_email( get_theme_mod( 'elena_email', get_option( 'admin_email' ) ) );
}
function elena_contact_url( $subject = '' ) {
    return 'mailto:' . elena_email() . ( $subject ? '?subject=' . rawurlencode( $subject ) : '' );
}
function elena_destination( $key, $fallback ) {
    $url = get_theme_mod( 'elena_' . $key, '' );
    return $url ? $url : $fallback;
}
function elena_customize( $customizer ) {
    $customizer->add_section( 'elena_links', array( 'title' => 'Елена — контакты и ссылки', 'priority' => 30 ) );
    $fields = array(
        'email' => array( 'Почта для заявок', 'email', 'sanitize_email', get_option( 'admin_email' ) ),
        'telegram' => array( 'Telegram (полная ссылка)', 'url', 'esc_url_raw', '' ),
        'linkedin' => array( 'LinkedIn (полная ссылка)', 'url', 'esc_url_raw', '' ),
        'projects' => array( 'Страница всех проектов', 'url', 'esc_url_raw', '' ),
        'about' => array( 'Страница «Обо мне»', 'url', 'esc_url_raw', '' ),
        'blog' => array( 'Страница блога', 'url', 'esc_url_raw', '' ),
    );
    foreach ( array( 'orbit', 'atelier', 'forma', 'daily' ) as $key ) {
        $fields[ 'project_' . $key ] = array( 'Ссылка на проект ' . ucfirst( $key ), 'url', 'esc_url_raw', '' );
    }
    foreach ( array( 'web' => 'Дизайн сайтов', 'shop' => 'Интернет-магазины', 'redesign' => 'Редизайн', 'app' => 'Приложения' ) as $key => $label ) {
        $fields[ 'service_' . $key ] = array( 'Страница услуги: ' . $label, 'url', 'esc_url_raw', '' );
    }
    foreach ( $fields as $key => $field ) {
        $customizer->add_setting( 'elena_' . $key, array( 'default' => $field[3], 'sanitize_callback' => $field[2], 'transport' => 'refresh' ) );
        $customizer->add_control( 'elena_' . $key, array( 'label' => $field[0], 'type' => $field[1], 'section' => 'elena_links' ) );
    }
}
add_action( 'customize_register', 'elena_customize' );
