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
            <h1 data-aos="fade-up">Политика возврата средств</h1>
            
            <h2 data-aos="fade-up" data-aos-delay="100">Условия для оформления возврата</h2>
            <p data-aos="fade-up" data-aos-delay="150">
                Мы стремимся к тому, чтобы каждый пользователь платформы <strong><?= $domainTitle ?></strong> 
                получал максимальную ценность. Вы можете претендовать на возврат средств в следующих ситуациях:
            </p>
            <ul>
                <li data-aos="fade-up">
                    <strong>Несоответствие программы описанию:</strong> Если содержание экспертных материалов 
                    существенно отличается от программы, заявленной на <strong><?= $fullDomain ?></strong> на момент покупки.
                </li>
                <li data-aos="fade-up">
                    <strong>Технические неисправности:</strong> Критические проблемы на стороне нашей 
                    цифровой инфраструктуры, которые делают обучение невозможным и не были устранены в течение 48 часов.
                </li>
                <li data-aos="fade-up">
                    <strong>«Период охлаждения»:</strong> Согласно законодательству ЕС, вы можете 
                    отказаться от участия в течение 14 календарных дней с момента оплаты, если вы еще не приступили 
                    к изучению материалов.
                </li>
            </ul>

            <h2 data-aos="fade-up">Процедура запроса</h2>
            <p data-aos="fade-up">
                Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, пожалуйста, выполните следующие шаги:
            </p>
            <ol class="custom-list">
                <li data-aos="fade-up">Отправьте запрос на официальный email: <a href="mailto:support@<?= $fullDomain ?>" class="highlight">support@<?= $fullDomain ?></a>.</li>
                <li data-aos="fade-up">Укажите в теме: «Запрос на возврат средств — [Ваше Имя]».</li>
                <li data-aos="fade-up">Укажите email регистрации и название выбранной программы.</li>
                <li data-aos="fade-up">Подробно опишите причину запроса со ссылкой на пункты условий.</li>
                <li data-aos="fade-up">Наша служба поддержки в Берлине рассмотрит запрос в течение 3-х рабочих дней.</li>
            </ol>

            <h2 data-aos="fade-up">Сроки и способ выплаты</h2>
            <p data-aos="fade-up">
                После одобрения возврата средства будут переведены в течение 7–14 рабочих дней. 
                Выплата производится тем же способом, которым была совершена оплата. 
                Фактический срок зачисления зависит от регламента работы вашего банка в <strong>Германии</strong> или стране вашего пребывания.
            </p>

            <h2 data-aos="fade-up">Исключения и ограничения</h2>
            <p data-aos="fade-up">Возврат средств невозможен, если:</p>
            <ul>
                <li data-aos="fade-up">Запрос подан по истечении 14 дней с момента оплаты.</li>
                <li data-aos="fade-up">Пользователь изучил или скачал более 50% материалов программы.</li>
                <li data-aos="fade-up">Причиной являются технические неполадки на стороне пользователя (проблемы с интернет-соединением).</li>
                <li data-aos="fade-up">Были нарушены правила использования AI-инструментов платформы <strong><?= $domainTitle ?></strong>.</li>
            </ul>

            <h2 data-aos="fade-up">Изменения в политике</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> оставляет за собой право обновлять настоящую Политику. 
                Актуальная версия всегда доступна на этой странице <strong><?= $fullDomain ?></strong>.
            </p>

            <h2 data-aos="fade-up">Свяжитесь с нами</h2>
            <p data-aos="fade-up">
                По всем финансовым вопросам, пожалуйста, обращайтесь в нашу экспертную поддержку:
                <br><br>
                <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                <strong>Телефон:</strong> <a href="tel:+493081215194">+49 30 8121 5194</a><br>
                <strong>Адрес:</strong> Friedrichstraße 176, 10117 Berlin, Germany
            </p>

            <div class="pages-footer" data-aos="fade-in" data-aos-delay="400" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.6;">Последнее обновление: Март 2026</p>
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