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
            <h1 data-aos="fade-up">Политика использования файлов cookie</h1>

            <p data-aos="fade-up" data-aos-delay="100">
                Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                взаимодействия с нашей образовательной средой, обеспечить стабильную работу 
                инновационных инструментов и анализировать активность пользователей, мы используем файлы cookie. 
                Настоящая политика объясняет, как мы применяем эти технологии в рамках нашей цифровой инфраструктуры.
            </p>

            <h2 data-aos="fade-up">Что такое файлы cookie?</h2>
            <p data-aos="fade-up">
                Файл cookie — это небольшой фрагмент данных, который сохраняется на вашем устройстве, когда вы посещаете 
                <strong><?= $fullDomain ?></strong>. Это позволяет платформе "помнить" ваши предпочтения 
                (язык, настройки региона Германия, прогресс в обучении) в течение определенного времени, 
                делая ваш путь по сайту максимально простым и удобным.
            </p>

            <h2 data-aos="fade-up">Какие типы файлов cookie мы используем?</h2>
            <p data-aos="fade-up">
                Мы классифицируем файлы cookie на сайте <strong><?= $domainTitle ?></strong> по следующим категориям:
            </p>
            <ul>
                <li data-aos="fade-up">
                    <strong>Строго необходимые:</strong> Критически важны для функционирования платформы и доступа к защищенным разделам.
                </li>
                <li data-aos="fade-up">
                    <strong>Аналитические:</strong> Помогают нам оценивать перспективы проекта, собирая анонимную информацию о популярности различных ИТ-программ.
                </li>
                <li data-aos="fade-up">
                    <strong>Функциональные:</strong> Позволяют персонализировать ваш опыт, например, запоминая ваши настройки в AI-инструментах.
                </li>
                <li data-aos="fade-up">
                    <strong>Маркетинговые:</strong> Используются для предоставления релевантных предложений, актуальных для жителей ЕС.
                </li>
            </ul>

            <h2 data-aos="fade-up">Зачем мы используем файлы cookie?</h2>
            <p data-aos="fade-up">Основные цели на <strong><?= $domainTitle ?></strong>:</p>
            <ul>
                <li data-aos="fade-up">Обеспечение безопасности и защиты данных по стандартам Германии.</li>
                <li data-aos="fade-up">Оптимизация работы сложных визуализаций (Anime.js, Lucide).</li>
                <li data-aos="fade-up">Анализ методологий обучения для повышения их эффективности.</li>
                <li data-aos="fade-up">Предоставление экспертной поддержки в реальном времени.</li>
            </ul>

            <h2 data-aos="fade-up">Ваш выбор и управление</h2>
            <p data-aos="fade-up">
                Вы имеете полный контроль над данными. Настройки браузера позволяют блокировать или удалять cookie. 
                Однако помните, что без строго необходимых файлов некоторые интерактивные функции платформы могут работать некорректно.
            </p>

            <h2 data-aos="fade-up">Сервисы третьих сторон</h2>
            <p data-aos="fade-up">
                Для визуализации инноваций и анализа трафика мы можем использовать инструменты Google Analytics или 
                библиотеки визуализации. Мы рекомендуем ознакомиться с их политиками конфиденциальности для полной прозрачности.
            </p>

            <h2 data-aos="fade-up">Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли вопросы касательно использования файлов cookie на платформе <strong><?= $domainTitle ?></strong>, 
                пожалуйста, свяжитесь с нашим офисом в Берлине:
                <br><br>
                <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                <strong>Телефон:</strong> <a href="tel:+493081215194">+49 30 8121 5194</a><br>
                <strong>Адрес:</strong> Friedrichstraße 176, 10117 Berlin, Germany
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