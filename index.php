<?php defined( 'ABSPATH' ) || exit; get_header(); ?>
<main id="main" class="content-page container section">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?>><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><?php if ( is_singular() ) { the_content(); wp_link_pages(); } else { the_excerpt(); } ?></article>
<?php endwhile; the_posts_pagination(); else : ?><h1>Пока ничего нет</h1><p>Скоро здесь появятся новые материалы.</p><?php endif; ?>
</main>
<?php get_footer(); ?>
