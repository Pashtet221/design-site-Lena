<?php defined( 'ABSPATH' ) || exit; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">
<?php wp_body_open(); ?>
<a class="skip-link" href="#main">Перейти к содержимому</a>
<?php if ( ! is_front_page() ) : ?>
<header class="inner-header"><div class="site-nav"><a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">elena.</a><nav aria-label="Основная навигация"><?php elena_navigation(); ?></nav></div></header>
<?php endif; ?>
