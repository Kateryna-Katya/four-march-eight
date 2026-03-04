<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Инновации на пальцах
    </title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%2300FF88%22/><path d=%22M30 50 L50 70 L70 30%22 stroke=%22%23121212%22 stroke-width=%2210%22 fill=%22none%22 stroke-linecap=%22round%22/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Orbitron:wght@400;700&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#about" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#about" class="nav__link">О платформе</a></li>
                    <li><a href="./#courses" class="nav__link">Программы</a></li>
                    <li><a href="./#tech" class="nav__link">Технологии</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--outline">Связаться</a>
                <button class="burger" id="burger" aria-label="Menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-up">Политика конфиденциальности</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Настоящая Политика конфиденциальности распространяется на персональные данные,
                предоставляемые клиентами платформы <strong><?= $domainTitle ?></strong>, как для оказания образовательных
                услуг и консалтинга, так и для других взаимодействий в цифровом
                формате, включая участие в экспертных программах, техподдержку и информационное сопровождение.
            </p>

            <p data-aos="fade-up" data-aos-delay="150">
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения. Эти изменения имеют приоритет над текущими. Обратите внимание, что наши инновационные инструменты могут содержать ссылки на ресурсы третьих лиц (например, сервисы визуализации или аналитики), которые имеют свои
                собственные правила. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за соблюдение
                конфиденциальности сторонними компаниями. Предоставляя свои данные, вы даете полное согласие
                на их обработку способами, предусмотренными настоящей Политикой.
            </p>

            <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения персональных данных</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает персональные данные исключительно с согласия
                пользователя для предоставления качественного доступа к платформе,
                участия в стратегических сессиях и внедрения передовых технологий. Для
                предотвращения утечки данных мы используем передовую цифровую инфраструктуру и современные протоколы шифрования.
            </p>

            <p data-aos="fade-up">
                Максимальный срок хранения персональных данных составляет 75
                лет с даты получения информации. В остальных случаях компания хранит данные клиента до
                завершения своей деятельности в Европе или до момента официального отзыва согласия пользователем.
            </p>

            <p data-aos="fade-up">
                Уничтожение, обезличивание или блокирование данных осуществляется по достижении целей сбора или по официальному запросу клиента через каналы экспертной поддержки.
            </p>

            <h2 data-aos="fade-up">Техническая информация:</h2>
            <ul data-aos="fade-up">
                <li>время доступа и IP-адрес устройства;</li>
                <li>источники обращения на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>страницы, посещаемые пользователем в рамках образовательных программ;</li>
                <li>просмотры информационных и AI-инструментов;</li>
                <li>иная техническая информация, предоставляемая браузером;</li>
                <li>номер телефона (в случае звонка по линии поддержки в Берлине).</li>
            </ul>

            <p data-aos="fade-up">
                При регистрации или заполнении форм обратной связи мы собираем данные, 
                необходимые для персонализации вашего пути развития:
            </p>
            <ul data-aos="fade-up">
                <li>имя пользователя;</li>
                <li>e-mail и номер телефона для оперативной связи с экспертами;</li>
            </ul>

            <h2 data-aos="fade-up">Информация о действиях пользователя:</h2>
            <ul data-aos="fade-up">
                <li>сведения о соглашениях и контрактах между клиентом и <strong><?= $domainTitle ?></strong>;</li>
                <li>данные о запросах, отправленных через формы на главной странице;</li>
                <li>сведения о полученных консультациях и пройденных этапах обучения;</li>
                <li>произведенные платежи и финансовая информация, согласно законодательству Германии и ЕС.</li>
            </ul>

            <h2 data-aos="fade-up">Цели обработки данных:</h2>
            <ul data-aos="fade-up">
                <li>предоставление доступа к инновационной образовательной платформе;</li>
                <li>учет пожеланий при разработке программ пассивного дохода;</li>
                <li>информирование об акциях и новых технологиях через e-mail;</li>
                <li>обеспечение экспертной поддержки на всех этапах.</li>
            </ul>

            <h2 data-aos="fade-up">Передача данных третьим лицам:</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> не предоставляет данные клиентов третьим лицам, за исключением случаев прямого согласия пользователя, требований компетентных органов Германии или в ситуациях стратегического слияния компании.
            </p>

            <h2 data-aos="fade-up">Cookies и права пользователя</h2>
            <p data-aos="fade-up">
                Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Берлин). Вы имеете право отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами <strong>GDPR</strong>.
            </p>

            <div class="pages-footer" data-aos="fade-in" data-aos-delay="300" style="margin-top: 60px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.05);">
                <p>Для связи по вопросам конфиденциальности: 
                    <a href="mailto:support@<?= $fullDomain ?>" class="highlight">support@<?= $fullDomain ?></a>
                </p>
                <p style="font-size: 0.9rem; opacity: 0.6;">Адрес офиса: Friedrichstraße 176, 10117 Berlin, Germany</p>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#about" class="logo footer__logo">
                    <span class="logo__dot"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">
                    Образовательная платформа нового поколения. Понимаем сложное, внедряем передовое.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#about">О платформе</a></li>
                    <li><a href="./#courses">Курсы</a></li>
                    <li><a href="./#tech">Технологии</a></li>
                    <li><a href="./#reviews">Отзывы</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i data-lucide="phone" class="icon-sm"></i>
                        <a href="tel:+493081215194">+49 30 8121 5194</a>
                    </li>
                    <li>
                        <i data-lucide="mail" class="icon-sm"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i data-lucide="map-pin" class="icon-sm"></i>
                        <span>Friedrichstraße 176, 10117 Berlin, Germany</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom container">
            <p>&copy;
                2026
                <?= $domainTitle ?>. Все права защищены. Предложение активно в странах ЕС.
            </p>
        </div>
    </footer>
        <div class="cookie-popup" id="cookiePopup">
            <div class="cookie-popup__content">
                <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                        политике</a>.</p>
                <button class="btn btn--primary btn--sm" id="cookieAccept">Принять</button>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="script.js"></script>
</body>

</html>