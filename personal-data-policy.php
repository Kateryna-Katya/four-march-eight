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
            <h1 data-aos="fade-up">Политика касаемо обработки персональных данных</h1>

            <h2 data-aos="fade-up" data-aos-delay="100">1. Общие положения</h2>
            <p data-aos="fade-up" data-aos-delay="150">
                Настоящая политика обработки персональных данных (далее —
                «Политика») определяет порядок и условия обработки персональных
                данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                устанавливает меры по обеспечению безопасности этих данных в соответствии с регламентами ЕС.
            </p>
            <p data-aos="fade-up" data-aos-delay="200">
                1.1. Важнейшей целью и условием осуществления своей деятельности
                Оператор считает соблюдение прав и свобод человека и гражданина при
                обработке его персональных данных, включая защиту прав на
                неприкосновенность частной жизни и личную тайну.
            </p>
            <p data-aos="fade-up" data-aos-delay="250">
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2 data-aos="fade-up">2. Основные понятия, используемые в Политике</h2>
            <ul>
                <li data-aos="fade-up">
                    <strong>Веб-сайт</strong> — совокупность графических и
                    информационных материалов, а также программ для ЭВМ,
                    обеспечивающих их доступность в сети интернет по адресу
                    <strong><?= $fullDomain ?></strong>.
                </li>
                <li data-aos="fade-up"><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                <li data-aos="fade-up">
                    <strong>Персональные данные</strong> — любая информация,
                    относящаяся прямо или косвенно к определенному Пользователю.
                </li>
                <li data-aos="fade-up">
                    <strong>Обработка персональных данных</strong> — любое действие, совершаемое с 
                    использованием средств автоматизации или без них с персональными данными.
                </li>
            </ul>

            <h2 data-aos="fade-up">3. Данные, которые мы обрабатываем</h2>
            <p data-aos="fade-up">Оператор может обрабатывать следующие категории данных:</p>
            <ul>
                <li data-aos="fade-up">
                    <strong>Предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Имя и фамилия;</li>
                        <li>Адрес электронной почты (Email);</li>
                        <li>Номера телефонов (валидация по стандартам Германии).</li>
                    </ul>
                </li>
                <li data-aos="fade-up">
                    <strong>Данные, собираемые автоматически:</strong>
                    <ul>
                        <li>
                            Сбор обезличенных данных о посетителях (в т.ч. файлов «cookie») с помощью 
                            сервисов интернет-статистики (Google Аналитика). Это включает IP-адрес, 
                            тип устройства и параметры взаимодействия с интерфейсом.
                        </li>
                    </ul>
                </li>
            </ul>

            <h2 data-aos="fade-up">4. Цели обработки персональных данных</h2>
            <ul>
                <li data-aos="fade-up">Идентификация Пользователя для предоставления доступа к инновационным программам обучения.</li>
                <li data-aos="fade-up">Установление обратной связи, включая направление уведомлений и экспертных консультаций.</li>
                <li data-aos="fade-up">Заключение и исполнение договоров на консалтинговые услуги в Европе.</li>
                <li data-aos="fade-up">
                    Информирование через Email. Вы всегда можете отказаться от рассылок, написав на 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a> 
                    с пометкой «Отказ от уведомлений».
                </li>
            </ul>

            <h2 data-aos="fade-up">5. Правовые основания</h2>
            <p data-aos="fade-up">
                Оператор обрабатывает данные только при наличии добровольного согласия Пользователя, 
                выраженного через заполнение форм обратной связи на сайте <strong><?= $domainTitle ?></strong>, 
                а также при условии, что использование файлов «cookie» разрешено в настройках вашего браузера.
            </p>

            <h2 data-aos="fade-up">6. Порядок хранения и безопасности</h2>
            <ul>
                <li data-aos="fade-up">
                    Оператор применяет современные технические меры для защиты данных от неправомерного доступа 
                    в соответствии с нормами <strong>GDPR</strong>.
                </li>
                <li data-aos="fade-up">Персональные данные Пользователя никогда не передаются третьим лицам без законных оснований.</li>
                <li data-aos="fade-up">
                    Пользователь может в любой момент отозвать свое согласие, направив 
                    запрос на email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2 data-aos="fade-up">7. Заключительные положения</h2>
            <p data-aos="fade-up">
                Актуальная версия Политики <strong><?= $domainTitle ?></strong> находится в свободном 
                доступе на сайте <strong><?= $fullDomain ?></strong>. По любым вопросам обработки данных 
                вы можете обратиться в наш офис в Берлине по адресу: Friedrichstraße 176, 10117 Berlin.
            </p>
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