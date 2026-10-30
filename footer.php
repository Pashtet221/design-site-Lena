<?php defined( 'ABSPATH' ) || exit; ?>
<footer class="site-footer"><div class="container">
    <div class="footer-columns">
        <div class="footer-brand"><a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">elena.</a><p class="desktop-copy">Я Елена — UI/UX-дизайнер. Создаю сайты, магазины и приложения с вниманием к людям и деталям.</p><p class="mobile-copy">UI/UX-дизайн сайтов и приложений</p><a class="button footer-cta" href="<?php echo esc_url( elena_contact_url() ); ?>">Обсудим проект ↗</a></div>
        <nav class="footer-nav" aria-label="Навигация в подвале"><h2>Навигация</h2><a class="footer-extra" href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a><a href="<?php echo esc_url( home_url( '/#work' ) ); ?>">Работы</a><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">Обо мне</a><a class="footer-extra" href="<?php echo esc_url( home_url( '/#process' ) ); ?>">Процесс</a><?php if ( get_theme_mod( 'elena_blog' ) ) : ?><a class="footer-extra" href="<?php echo esc_url( get_theme_mod( 'elena_blog' ) ); ?>">Блог</a><?php endif; ?><a class="footer-extra" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Контакты</a></nav>
        <nav class="footer-services" aria-label="Услуги"><h2>Услуги</h2><?php foreach ( array( 'web' => 'Дизайн сайтов', 'shop' => 'Дизайн интернет-магазинов', 'redesign' => 'Редизайн сайтов', 'app' => 'Приложения и сервисы' ) as $key => $label ) : ?><a href="<?php echo esc_url( elena_destination( 'service_' . $key, home_url( '/#service-' . $key ) ) ); ?>"><?php echo esc_html( $label ); ?></a><?php endforeach; ?><a href="<?php echo esc_url( elena_contact_url() ); ?>">Обсудить задачу</a></nav>
        <div class="footer-contact"><h2>Связаться</h2><p>Есть идея проекта?<br>Найдём понятную точку старта.</p><div class="social-links"><a href="<?php echo esc_url( elena_contact_url() ); ?>">Почта ↗</a><?php foreach ( array( 'telegram' => 'Telegram', 'linkedin' => 'LinkedIn' ) as $key => $label ) : ?><?php if ( get_theme_mod( 'elena_' . $key ) ) : ?><a href="<?php echo esc_url( get_theme_mod( 'elena_' . $key ) ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $label ); ?> ↗</a><?php else : ?><span class="unconfigured-social" title="Контакт пока не указан"><?php echo esc_html( $label ); ?> ↗</span><?php endif; ?><?php endforeach; ?></div></div>
    </div>
    <div class="footer-bottom"><p>© <?php echo esc_html( wp_date( 'Y' ) ); ?> Елена. Все права защищены.</p><a href="#top">Наверх ↑</a></div>
</div></footer>
<?php wp_footer(); ?>
</body>
</html>
