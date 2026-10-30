<?php
/** Homepage: desktop 3:64 and mobile 35:40 in the supplied Figma file. */
defined( 'ABSPATH' ) || exit;
get_header();
$projects = array(
    array( 'orbit', 'Orbit', 'Автомобильный бренд · Дизайн сайта · Концепт', '09b8027e-aa1c-422f-ba8d-2cefb1b9846b.jpg', 'b1c351f5-1f04-4195-a8f1-7d314641924f.png' ),
    array( 'atelier', 'Atelier', 'Магазин обуви · Дизайн интернет-магазина · Концепт', '715d91f2-2a26-4685-8661-f1d12aa0b723.jpg', '63eccb95-9093-4640-914a-c981f29f970e.png' ),
    array( 'forma', 'Forma', 'Модный бренд · Дизайн сайта · Концепт', 'e6726154-9ba6-475b-b336-8cb56380d5e8.jpg', 'ef677afc-0da8-4421-b500-35d7e521eb06.png' ),
    array( 'daily', 'Daily objects', 'Архитектурная студия · Дизайн сайта · Концепт', 'f06004cf-dfec-4bc3-a24f-cebeb93978f9.jpg', 'a8457a25-57b1-41cf-9851-1ca6b4a188b4.png' ),
);
$services = array(
    array( 'web', 'Дизайн сайтов', 'Лендинги, корпоративные сайты и портфолио.', 'Чтобы представить бизнес, показать работы', 'и получать обращения.' ),
    array( 'shop', 'Дизайн интернет-магазинов', 'Каталог, карточки товаров и оформление заказа.', 'Чтобы покупатель легко нашёл нужное', 'и оформил покупку.' ),
    array( 'redesign', 'Редизайн сайтов', 'Обновление дизайна и структуры сайта.', 'Чтобы освежить внешний вид и сделать', 'существующий сайт удобнее.' ),
    array( 'app', 'Дизайн приложений и сервисов', 'Мобильные приложения, личные кабинеты', 'и веб-сервисы. Чтобы сложные задачи', 'решались простыми действиями.' ),
);
$steps = array(
    array( 'Обсуждаем задачу', 'Определяем цели, объём работы, сроки и стоимость.' ),
    array( 'Строим структуру', 'Продумываем страницы, навигацию и основные действия.' ),
    array( 'Создаём дизайн', 'Согласуем стиль и готовим макеты для компьютера и телефона.' ),
    array( 'Передаём макеты', 'Собираем файл Figma, состояния элементов и пояснения для разработчика.' ),
);
$faq = array(
    array( 'Чем дизайн сайта отличается от дизайна магазина?', 'Сайт помогает рассказать о компании, услугах или показать портфолио. Для магазина дополнительно продумываю каталог, выбор товара, корзину и оформление заказа.' ),
    array( 'Можно ли обновить существующий сайт?', 'Да. Обсудим, что работает сейчас и что нужно улучшить. Затем обновим структуру, визуальный стиль и нужные страницы.' ),
    array( 'Что я получу в результате?', 'Файл Figma с макетами для компьютера и телефона, состояниями элементов и пояснениями для разработчика. Точный состав согласуем до начала работы.' ),
    array( 'Сколько стоит дизайн и сколько времени он занимает?', 'Стоимость и сроки зависят от количества страниц, сложности интерфейса и объёма задачи. После обсуждения проекта подготовлю индивидуальную оценку.' ),
    array( 'Как начать работу?', 'Напишите мне и расскажите о проекте: что нужно сделать, для кого и к какому сроку. Обсудим задачу и договоримся о следующих шагах.' ),
);
?>
<main id="main">
<section class="hero" aria-labelledby="hero-heading">
    <div class="hero-art" aria-hidden="true">
        <img class="hero-art-base" src="<?php echo esc_url( elena_asset( 'images/462c5a23-b85d-4313-bc4c-d6d84aad914b.jpg' ) ); ?>" alt="" fetchpriority="high">
        <img class="hero-art-front" src="<?php echo esc_url( elena_asset( 'images/0cf67d04-7c10-4b0e-a720-066944caa61b.jpg' ) ); ?>" alt="" fetchpriority="high">
    </div>
    <div class="announcement">Елена · UI/UX-дизайнер · Открыта к новым проектам</div>
    <header class="site-nav">
        <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Елена — главная">elena.</a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-menu" aria-label="Открыть меню"><img src="<?php echo esc_url( elena_asset( 'images/menu.svg' ) ); ?>" width="24" height="24" alt=""></button>
        <nav id="primary-menu" aria-label="Основная навигация"><?php elena_navigation(); ?></nav>
        <a class="button nav-cta" href="<?php echo esc_url( elena_contact_url() ); ?>">Обсудим проект ↗</a>
    </header>
    <div class="hero-content">
        <div class="hero-intro">
            <p class="eyebrow">UI/UX-ДИЗАЙН · САЙТЫ И ПРИЛОЖЕНИЯ</p>
            <h1 id="hero-heading"><span class="desktop-copy">Дизайн который<br>помогает вашему<br>бизнесу расти</span><span class="mobile-copy">Дизайн, который помогает бизнесу расти</span></h1>
            <p class="hero-description"><span class="desktop-copy">Я Елена — UI/UX-дизайнер. Создаю понятные интерфейсы<br class="wide-break"> для бизнеса: от первого экрана до последнего шага.</span><span class="mobile-copy">Я Елена, UI/UX-дизайнер. Создаю понятные сайты, магазины и приложения.</span></p>
            <div class="hero-actions"><a class="button" href="<?php echo esc_url( elena_contact_url() ); ?>">Обсудить проект ↗</a><a class="button button-outline" href="#work">Смотреть работы</a></div>
        </div>
        <ul class="hero-directions" aria-label="Направления дизайна">
            <li>Структура и сценарии</li><li><a href="#service-web">Дизайн сайтов</a></li>
            <li class="active"><img src="<?php echo esc_url( elena_asset( 'images/75baada3-5ce0-437a-9d8f-edb4e19d0d87.svg' ) ); ?>" alt="" width="14" height="16"><a href="#service-shop">Дизайн интернет-магазинов</a></li>
            <li><a href="#service-redesign">Редизайн сайтов</a></li><li><a href="#service-app">Приложения и сервисы</a></li><li>Макеты для разработки</li>
        </ul>
    </div>
</section>
<section class="work section" id="work" aria-labelledby="work-heading"><div class="container">
    <div class="section-heading"><h2 id="work-heading">Проекты, в которых<br class="wide-break"> дизайн решает задачу</h2><a class="button button-dark" href="<?php echo esc_url( elena_destination( 'projects', '#projects-grid' ) ); ?>">Все проекты ↗</a></div>
    <p class="section-lead">Примеры визуальных концепций для сайтов, магазинов и сервисов.</p>
    <div class="projects-grid" id="projects-grid">
    <?php foreach ( $projects as $project ) : $target = get_theme_mod( 'elena_project_' . $project[0], '' ); ?>
        <a class="project project-<?php echo esc_attr( $project[0] ); ?>" href="<?php echo esc_url( $target ? $target : elena_asset( 'images/' . $project[4] ) ); ?>" <?php if ( ! $target ) : ?>data-project-preview data-project-title="<?php echo esc_attr( $project[1] ); ?>"<?php endif; ?>>
            <div class="project-image"><img class="project-base" src="<?php echo esc_url( elena_asset( 'images/' . $project[3] ) ); ?>" alt="" loading="lazy"><img class="project-front" src="<?php echo esc_url( elena_asset( 'images/' . $project[4] ) ); ?>" alt="Макет проекта <?php echo esc_attr( $project[1] ); ?>" loading="lazy"></div>
            <div class="project-meta"><div><h3><?php echo esc_html( $project[1] ); ?></h3><p><?php echo esc_html( $project[2] ); ?></p></div><span aria-hidden="true">↗</span></div>
        </a>
    <?php endforeach; ?>
    </div>
</div></section>
<section class="services section" id="services" aria-labelledby="services-heading"><div class="container">
    <h2 id="services-heading">Дизайн для вашей задачи</h2><p class="section-lead">От первого сайта до обновления магазина или сервиса.</p>
    <div class="services-grid">
    <?php foreach ( $services as $i => $service ) : ?>
        <a class="service-card" id="service-<?php echo esc_attr( $service[0] ); ?>" href="<?php echo esc_url( elena_destination( 'service_' . $service[0], elena_contact_url( $service[1] ) ) ); ?>">
            <div class="service-top"><span><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></span><span class="service-icon"><img class="arrow-default" src="<?php echo esc_url( elena_asset( 'images/c8d4b5e2-d2fa-4595-974a-b6a6af577a8c.svg' ) ); ?>" width="28" height="28" alt=""><img class="arrow-hover" src="<?php echo esc_url( elena_asset( 'images/service-arrow-hover.svg' ) ); ?>" width="28" height="28" alt=""></span></div>
            <h3><?php echo esc_html( $service[1] ); ?></h3><p><?php echo esc_html( $service[2] ); ?> <br class="wide-break"><?php echo esc_html( $service[3] ); ?> <br class="wide-break"><?php echo esc_html( $service[4] ); ?></p><span class="service-more">Подробнее об услуге</span>
        </a>
    <?php endforeach; ?>
    </div>
</div></section>
<section class="about section" id="about" aria-labelledby="about-heading"><div class="container about-grid">
    <img class="about-image" src="<?php echo esc_url( elena_asset( 'images/about.png' ) ); ?>" width="504" height="478" alt="" loading="lazy">
    <div class="about-copy"><h2 id="about-heading">Немного обо мне</h2><p class="about-intro">Я Елена — UI/UX-дизайнер.<br class="wide-break"> Помогаю вашим идеям стать<br class="wide-break"> сайтами и приложениями.</p><p class="about-description">Продумываю путь пользователя, структуру страниц и визуальный стиль. Обсуждаю решения с вами на каждом этапе, чтобы результат был понятным, удобным и подходил вашему проекту.</p><a class="button button-dark" href="<?php echo esc_url( elena_destination( 'about', '#process' ) ); ?>">Больше обо мне ↗</a></div>
</div></section>
<section class="process section" id="process" aria-labelledby="process-heading"><div class="container">
    <h2 id="process-heading">От идеи до готового макета</h2><ol class="steps">
    <?php foreach ( $steps as $i => $step ) : ?><li><span class="step-number"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></span><div class="step-copy"><h3><?php echo esc_html( $step[0] ); ?></h3><p><?php echo esc_html( $step[1] ); ?></p></div></li><?php endforeach; ?>
    </ol>
</div></section>
<section class="faq section" id="faq" aria-labelledby="faq-heading"><div class="container">
    <div class="faq-heading"><div><h2 id="faq-heading">Частые вопросы</h2><p>Всё, что стоит знать перед началом проекта.</p></div><a href="<?php echo esc_url( elena_contact_url( 'Вопрос о проекте' ) ); ?>">Задать вопрос ↗</a></div>
    <div class="faq-items"><?php foreach ( $faq as $i => $item ) : ?><details <?php echo 0 === $i ? 'open' : ''; ?>><summary><?php echo esc_html( $item[0] ); ?><span class="faq-chevron" aria-hidden="true"><img class="chevron-down" src="<?php echo esc_url( elena_asset( 'images/0e4eac10-76b3-4ce3-990d-f30c96e82c08.svg' ) ); ?>" width="20" height="20" alt=""><img class="chevron-up" src="<?php echo esc_url( elena_asset( 'images/c05c8c52-6009-4104-9de0-e377808fd359.svg' ) ); ?>" width="20" height="20" alt=""></span></summary><p><?php echo esc_html( $item[1] ); ?></p></details><?php endforeach; ?></div>
</div></section>
<section class="contact section" id="contact" aria-labelledby="contact-heading"><div class="container">
    <p class="eyebrow">ОБСУДИМ ВАШУ ЗАДАЧУ</p><div class="contact-layout"><h2 id="contact-heading"><span class="desktop-copy">Давайте обсудим<br>ваш проект</span><span class="mobile-copy">Обсудим вашу задачу</span></h2><div class="contact-action"><a class="button" href="<?php echo esc_url( elena_contact_url() ); ?>">Обсудить проект ↗</a><p>Расскажите об идее —<br>найдём подходящее решение.</p></div></div>
</div></section>
</main>
<dialog class="project-dialog" aria-labelledby="project-dialog-title"><div class="dialog-heading"><h2 id="project-dialog-title">Проект</h2><button type="button" data-close-preview aria-label="Закрыть просмотр">×</button></div><img alt="" data-preview-image></dialog>
<?php get_footer(); ?>
