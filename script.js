/**
 * FOUR-MARCH-EIGHT — ИННОВАЦИОННАЯ ПЛАТФОРМА
 * Финальный скрипт управления интерфейсом
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. ИНИЦИАЛИЗАЦИЯ БИБЛИОТЕК ---
    
    // Иконки Lucide
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // AOS (Animate On Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            disable: 'mobile' // Опционально отключаем на слабых устройствах
        });
    }


    // --- 2. УПРАВЛЕНИЕ ХЕДЕРОМ ---

    const header = document.getElementById('header');
    
    const handleScroll = () => {
        if (window.scrollY > 50) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    };

    window.addEventListener('scroll', handleScroll);


    // --- 3. МОБИЛЬНОЕ МЕНЮ ---

    const burger = document.getElementById('burger');
    const nav = document.getElementById('nav');
    const navLinks = document.querySelectorAll('.nav__link');

    const toggleMenu = () => {
        nav.classList.toggle('nav--active');
        burger.classList.toggle('burger--active');
        // Блокируем скролл при открытом меню
        document.body.style.overflow = nav.classList.contains('nav--active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);

    // Закрытие при клике на ссылку
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            nav.classList.remove('nav--active');
            burger.classList.remove('burger--active');
            document.body.style.overflow = '';
        });
    });


    // --- 4. HERO VISUALIZATION (ANIME.JS) ---

    if (typeof anime !== 'undefined') {
        // Таймлайн сборки элементов
        const heroVisualTimeline = anime.timeline({
            easing: 'easeOutElastic(1, .8)',
            duration: 1200
        });

        heroVisualTimeline
            .add({
                targets: '.main-dot',
                scale: [0, 1],
                opacity: [0, 1],
                delay: 800,
                duration: 800
            })
            .add({
                targets: '.shape-1',
                rotate: '1turn',
                scale: [0, 1],
                opacity: [0, 1],
                offset: '-=600'
            })
            .add({
                targets: '.shape-2',
                translateY: [-100, 0],
                rotate: '-0.5turn',
                scale: [0, 1],
                opacity: [0, 0.7],
                offset: '-=800'
            })
            .add({
                targets: '.tech-line',
                scaleX: [0, 1],
                opacity: [0, 1],
                delay: anime.stagger(150),
                offset: '-=700'
            })
            .add({
                targets: '.shape-3',
                translateX: [50, 0],
                opacity: [0, 1],
                rotate: '30deg',
                offset: '-=500'
            });

        // Бесконечное "плавание" контейнера
        anime({
            targets: '.anime-container',
            translateX: [-15, 15],
            translateY: [-15, 15],
            duration: 5000,
            direction: 'alternate',
            loop: true,
            easing: 'easeInOutSine'
        });

        // Анимация появления логотипа в хедере
        anime({
            targets: '.logo__dot',
            scale: [0, 1.2, 1],
            rotate: '1turn',
            duration: 1500,
            easing: 'easeInOutElastic(1, .6)'
        });
    }


    // --- 5. ФОРМА КОНТАКТОВ И ВАЛИДАЦИЯ ---

    const contactForm = document.getElementById('mainForm');
    const phoneInput = document.getElementById('phoneInput');
    const captchaQuestion = document.getElementById('captchaQuestion');
    const captchaInput = document.getElementById('captchaAnswer');
    const successMsg = document.getElementById('successMsg');
    const submitBtn = document.getElementById('submitBtn');

    // Ограничение: только цифры в телефоне
    if (phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^0-9+]/g, '');
        });
    }

    // Математическая капча
    let correctAnswer = 0;
    const generateCaptcha = () => {
        const n1 = Math.floor(Math.random() * 10) + 2;
        const n2 = Math.floor(Math.random() * 10) + 1;
        correctAnswer = n1 + n2;
        if (captchaQuestion) {
            captchaQuestion.innerText = `${n1} + ${n2}`;
        }
    };
    generateCaptcha();

    // Обработка отправки
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Проверка капчи
            if (parseInt(captchaInput.value) !== correctAnswer) {
                captchaInput.style.borderColor = '#ff5f56';
                alert('Неверный ответ на защитный вопрос. Попробуйте снова.');
                generateCaptcha();
                captchaInput.value = '';
                return;
            }

            // Имитация AJAX отправки
            submitBtn.disabled = true;
            const originalBtnText = submitBtn.innerText;
            submitBtn.innerText = 'Обработка данных...';

            setTimeout(() => {
                // Скрываем форму, показываем успех
                contactForm.reset();
                submitBtn.style.display = 'none';
                successMsg.style.display = 'flex';

                // Плавное появление сообщения через Anime.js
                if (typeof anime !== 'undefined') {
                    anime({
                        targets: successMsg,
                        opacity: [0, 1],
                        translateY: [20, 0],
                        duration: 1000,
                        easing: 'easeOutExpo'
                    });
                }
            }, 1500);
        });
    }


    // --- 6. COOKIE POPUP ---

    const cookiePopup = document.getElementById('cookiePopup');
    const cookieAccept = document.getElementById('cookieAccept');

    if (cookiePopup && !localStorage.getItem('cookiesAccepted')) {
        // Показываем через 3 секунды после загрузки
        setTimeout(() => {
            cookiePopup.classList.add('cookie-popup--active');
        }, 3000);
    }

    if (cookieAccept) {
        cookieAccept.addEventListener('click', () => {
            localStorage.setItem('cookiesAccepted', 'true');
            cookiePopup.classList.remove('cookie-popup--active');
        });
    }


    // --- 7. ПЛАВНЫЙ СКРОЛЛ ДЛЯ ВСЕХ ССЫЛОК ---

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80, // Учитываем высоту хедера
                    behavior: 'smooth'
                });
            }
        });
    });

});