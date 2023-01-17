<?php 
  require_once('footer.php');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/swiper-bundle.min.css">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css?v=1">
  <title>Aliance Production</title>
</head>

<body class="main-page">
  <header>
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="./about.html" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
          <!-- mobile-submenu -->
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Собственные марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AP</a>
            </li>
          </ul>
          <!-- mobile-submenu -->
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="+7(499)686-10-14" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <div class="adress">
          <svg class="submenu-icon">
            <use href="./img/sprite.svg#mark"></use>
          </svg>
          <p class="mobile-info-text">г. Мосвка, Холодильный пер. 4к1с8</p>
        </div>
        <div class="email">
          <svg class="submenu-icon">
            <use href="./img/sprite.svg#mail"></use>
          </svg>
          <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">a.dragunov@tdaliance.ru</a>
        </div>
      </div>
      <!-- mobile-info -->
      <div class="mobile-social-link">
        <a href="#" class="social-link">
          <svg class="submenu-social-icon">
            <use href="./img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a href="#" class="mobile-social-link">
          <svg class="submenu-social-icon">
            <use href="./img/sprite.svg#inst"></use>
          </svg>
        </a>
      </div>
      <!-- /.mobile-social-link -->
    </div>
    <!-- /.mobile-menu -->
    <nav class="navbar">
      <button class="burger-button js-mobile-menu-toggle">
        <span class="burger-button-wrapper">
          <span class="burger-button-line"></span>
          <span class="burger-button-line"></span>
          <span class="burger-button-line"></span>
        </span>
      </button>
      <a href="/" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="./img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="./img/sprite.svg#logo-dark"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="./about.html" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="phone-icon">
          <use href="./img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
      </div>
      <button class="navbar-button button" data-toggle="modal">
        <svg class="button-icon">
          <use href="./img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
  </header>
  <section class="main main-image">
    <div class="container">
      <div class="main-content">
        <div class="seporaiter"></div>
        <h1 class="main-title">
          Комплексное обеспечение товарами и расходными материалами бизнеса
        </h1>
        <p class="main-text">
          Высокий уровень вовлечения представителей целевой аудитории является
          четким доказательством простого факта: высококачественный прототип
          будущего проекта напрямую зависит от анализа существующих паттернов
          поведения.
        </p>
        <button class="button main-button" data-toggle="modal">Подробнее о компании</button>
      </div>
      <!-- Основной слайдер -->
      <div class="swiper swiper-features">
        <!-- Обертка слайдера -->
        <ul class="swiper-wrapper main-features">
          <!-- Слайды -->
          <li class="swiper-slide main-features-item">
            <svg class="main-features-icon">
              <use href="./img/sprite.svg#clock"></use>
            </svg>
            <p class="main-features-text">Непрерывная работа c 2017 года</p>
          </li>
          <li class="swiper-slide main-features-item">
            <svg class="main-features-icon">
              <use href="./img/sprite.svg#file"></use>
            </svg>
            <p class="main-features-text">Вся продукция сертифицирована</p>
          </li>
          <li class="swiper-slide main-features-item">
            <svg class="main-features-icon">
              <use href="./img/sprite.svg#man"></use>
            </svg>
            <p class="main-features-text">Контроль качества на всех этапах</p>
          </li>
          <li class="swiper-slide main-features-item">
            <svg class="main-features-icon">
              <use href="./img/sprite.svg#car"></use>
            </svg>
            <p class="main-features-text">Возможны поставки по всей России
          </li>
          <li class="swiper-slide main-features-item">
            <svg class="main-features-icon">
              <use href="./img/sprite.svg#counter"></use>
            </svg>
            <p class="main-features-text">Оперативное производство</p>
          </li>
        </ul>
        <!-- Кнопки навигации вперед\назад -->
        <div class="slider-buttons slider-buttons-hidden features-slider-buttons">
          <div class="slider-features-button-prev slider-button-prev slider-button-prev-outline">
            <svg class="arrow-slider">
              <use href="./img/sprite.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="slider-features-button-next slider-button-next slider-button-next-outline">
            <svg class="arrow-slider">
              <use href="./img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
      </div>
      <!-- /.main-content -->
    </div>
  </section>
  <!-- /.main.main-image -->
  <section class="section section-light">
    <div class="container">
      <div class="steps-content">
        <div class="seporaiter"></div>
        <h2 class="section-title">схема работы</h2>
        <!-- Основной слайдер -->
        <div class="swiper swiper-step">
          <!-- Обертка слайдера -->
          <ul class="swiper-wrapper">
            <!-- Слайды -->
            <li class="steps-item swiper-slide">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">
                Безусловно, сплочённость команды профессионалов позволяет оценить
                значение форм воздействия.
              </p>
              <a href="#" class="button-link steps-link">Оставить заявку</a>
            </li>
            <li class="steps-item swiper-slide">
              <span class="steps-num">02</span>
              <h3 class="steps-title">Заключение <br> договора</h3>
              <p class="steps-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </li>
            <li class="steps-item swiper-slide">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые <br> элементы.
              </p>
            </li>
            <li class="steps-item swiper-slide">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">
                В частности, экономическая повестка сегодняшнего дня говорит о
                возможностях приоритизации <br> разума над эмоциями.
              </p>
            </li>
          </ul>
          <!-- Кнопки навигации вперед\назад -->
          <div class="slider-buttons slider-buttons-hidden ">
            <div class="slider-step-button-prev slider-button-prev">
              <svg class="arrow-slider">
                <use href="./img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-step-button-next slider-button-next">
              <svg class="arrow-slider">
                <use href="./img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
        <!-- steps-content  -->
      </div>
    </div>
    <!-- /.container -->
  </section>
  <!-- /.section.section-light -->
  <section class="section production">
    <div class="container">
      <div class="seporaiter"></div>
      <h2 class="section-title">Контрактное производство</h2>
      <div class="group-cards">
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Автомобильная химия</h3>
            <p class="card-text">
              Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.
            </p>
          </div>
          <img class="card-img" src="./img/avto-him.png" alt="Автомобильная химия">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Бытовая химия</h3>
            <p class="card-text">
              А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на
              независимые элементы.
            </p>
          </div>
          <img class="card-img" src="./img/bit-him.png" alt="Бытовая химия">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Дезинфицирующие средства</h3>
            <p class="card-text">
              Лишь интерактивные прототипы призваны к ответу.
            </p>
          </div>
          <img class="card-img" src="./img/dezinfect.png" alt="Дезинфекция">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Пищевые аэрозоли</h3>
            <p class="card-text">
              Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.
            </p>
          </div>
          <img class="card-img" src="./img/dezinfect.png" alt="Дезинфекция">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Косметическая продукция</h3>
            <p class="card-text">
              Лишь интерактивные прототипы призваны к ответу.
            </p>
          </div>
          <img class="card-img" src="./img/avto-him.png" alt="Автомобильная химия">
        </a>
        <a href="#" class="card">
          <div class="card-content">
            <h3 class="card-title">Краски аэрозольные</h3>
            <p class="card-text">
              А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
              разнесены на независимые элементы.
            </p>
          </div>
          <img class="card-img" src="./img/bit-him.png" alt="Бытовая химия">
        </a>
      </div>
      <!-- group-cards -->
    </div>
    <!-- container -->
  </section>
  <!-- section production -->
  <section class="section trade-marks">
    <div class="container">
      <div class="seporaiter"></div>
      <h2 class="section-title">собственные марки</h2>
      <div class="trademark-cards">
        <a class="trademark-card">
          <svg class="trademark-card-logo">
            <use href="./img/sprite.svg#agtech"></use>
          </svg>
          <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
          <p class="trademark-card-text">
            Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для
            поставленных обществом задач.
          </p>
        </a>
        <a class="trademark-card">
          <svg class="trademark-card-logo">
            <use href="./img/sprite.svg#ap"></use>
          </svg>
          <h3 class="trademark-card-title">Автохимия AP</h3>
          <p class="trademark-card-text">
            Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для
            поставленных обществом задач.
          </p>
        </a>
      </div>
      <!-- /.trade-marks-cards -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.trade-marks -->
  <section class="section founder">
    <div class="founder-photo-mobile">
      <img src="./img/founder.jpg" alt="фтот основателя" class="founder-photo-img">
    </div>
    <div class="container founder-container">
      <div class="founder-wrapper">
        <div class="founder-photo">
          <img src="./img/founder.jpg" alt="фтот основателя" class="founder-photo-img">
        </div>
        <div class="founder-content-wrapper">
          <div class="founder-content">
            <div class="seporaiter"></div>
            <h1 class="founder-title">
              Отношение к делу и к клиентам
            </h1>
            <p class="founder-text">
              Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что
              укрепление
              и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно,
              независимые государства, которые представляют собой яркий пример континентально-европейского типа
              политической
              культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной
              обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия.
            </p>
            <p class="founder-text">
              А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в
              равной
              степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в
              значительной степени обусловливает важность дальнейших направлений развития.
            </p>
            <a href="#" class="button-link founder-link">Подробнее о компании</a>
          </div>
        </div>
      </div>
    </div>
    <!-- container founder-container -->
  </section>
  <!-- ./section founder -->
  <section class="section clients">
    <div class="container">
      <div class="seporaiter"></div>
      <div class="clients-wrapper">
        <div class="clients-content">
          <h1 class="clients-title">
            Производим аэрозольную продукцию для разных сфер
          </h1>
          <ul class="clients-list">
            <li class="clients-list-item">
              <svg class="clients-icon">
                <use href="./img/sprite.svg#him"></use>
              </svg>
              Химические производства
            </li>
            <li class="clients-list-item">
              <svg class="clients-icon">
                <use href="./img/sprite.svg#car-clients"></use>
              </svg>
              Автомойки
            </li>
            <li class="clients-list-item">
              <svg class="clients-icon">
                <use href="./img/sprite.svg#eat"></use>
              </svg>
              Пищевая продукция
            </li>
            <li class="clients-list-item">
              <svg class="clients-icon">
                <use href="./img/sprite.svg#brush"></use>
              </svg>
              Лаки и краски
            </li>
            <li class="clients-list-item">
              <svg class="clients-icon">
                <use href="./img/sprite.svg#cosmetic"></use>
              </svg>
              Косметические средства
            </li>
            <li class="clients-list-item">
              <svg class="clients-icon">
                <use href="./img/sprite.svg#car-cosm"></use>
              </svg>
              Автомобильная косметика
            </li>
            <li class="clients-list-item">
              <svg class="clients-icon">
                <use href="./img/sprite.svg#shirt"></use>
              </svg>
              Косметика по уходу за одеждой
            </li>
            <li class="clients-list-item">
              <svg class="clients-icon">
                <use href="./img/sprite.svg#boots"></use>
              </svg>
              Косметика по уходу за обувью
            </li>
            <li class="clients-list-item">
              <svg class="clients-icon">
                <use href="./img/sprite.svg#bricks"></use>
              </svg>
              Строительные материалы
            </li>
            <li class="clients-list-item">
              <svg class="clients-icon">
                <use href="./img/sprite.svg#more"></use>
              </svg>
              И многих других
            </li>
          </ul>
        </div>
        <!-- /.clients-content -->
        <div class="clients-logo-list">
          <a href="#" class="clients-logo-item">
            <img src="./img/client.png" alt="client logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="./img/client.png" alt="client logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="./img/client.png" alt="client logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="./img/client.png" alt="client logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="./img/client.png" alt="client logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="./img/client.png" alt="client logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="./img/client.png" alt="client logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="./img/client.png" alt="client logo" class="clients-logo">
          </a>
          <a href="#" class="clients-logo-item">
            <img src="./img/client.png" alt="client logo" class="clients-logo">
          </a>
        </div>
        <!-- /.clients-logo-list -->
      </div>
      <!-- /.clients-wrapper -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.clients -->
  <section class="section blog">
    <div class="container">
      <div class="seporaiter"></div>
      <h2 class="section-title">Блог экспертов в области производства</h2>
      <!-- Slider main container -->
      <div class="swiper blog-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <a href="#" class="swiper-slide blog-card">
            <img src="./img/blog-lab.jpg" alt="Карточка блог" class="blog-card-img">
            <h3 class="card-blog-title">
              Современная методология разработки одухотворила всех причастных
            </h3>
            <p class="card-blog-text">
              Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...
            </p>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img src="./img/blog.jpg" alt="Карточка блог" class="blog-card-img">
            <h3 class="card-blog-title">
              Сложно сказать, почему жизнь прекрасна
            </h3>
            <p class="card-blog-text">
              Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы.
              Безусловно, высокотехнологичная...
            </p>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img src="./img/blog.jpg" alt="Карточка блог" class="blog-card-img">
            <h3 class="card-blog-title">
              Сложно сказать, почему жизнь прекрасна
            </h3>
            <p class="card-blog-text">
              Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы.
              Безусловно, высокотехнологичная...
            </p>
          </a>
          <a href="#" class="swiper-slide blog-card">
            <img src="./img/blog.jpg" alt="Карточка блог" class="blog-card-img">
            <h3 class="card-blog-title">
              Сложно сказать, почему жизнь прекрасна
            </h3>
            <p class="card-blog-text">
              Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы.
              Безусловно, высокотехнологичная...
            </p>
          </a>
        </div>
        <!-- If we need navigation buttons -->
        <div class="blog-slider-footer">
          <a href="#" class="button-link">Весь блог</a>
          <div class="slider-buttons slider-buttons-visible">
            <div class="slider-blog-button-prev slider-button-prev">
              <svg class="arrow-slider">
                <use href="./img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-blog-button-next slider-button-next">
              <svg class="arrow-slider">
                <use href="./img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
        <!-- /.blog-slider-footer -->
      </div>
    </div>
    <!-- container -->
  </section>
  <!-- blog -->
  <section class="section cta bg-gray">
    <div class="container cta-container">
      <img src="./img/spray.png" alt="call to action" class="cta-img">
      <div class="cta-from-wrapper">
        <form action="#" class="cta-form">
          <h2 class="section-title cta-form-title">
            Хотите сотрудничать?
          </h2>
          <p class="cta-form-text">
            Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
            интересующие вопросы и поможем даже в самых сложных случаях!
          </p>
          <div class="input-group-wrapper">
            <div class="input-group">
              <input id="user-name" type="text" class="input">
              <label class="input-group-label" for="user-name">Имя</label>
            </div>
            <div class="input-group">
              <input id="user-phone" type="tel" class="input">
              <label class="input-group-label" for="user-phone">Номер телефона</label>
            </div>
          </div>
          <!-- /.input-group-wrapper -->
          <div class="cta-form-footer">
            <button type="submit" class="button cta-form-button">Оставить заявку</button>
            <div class="notify">
              <svg class="notify-icon">
                <use href="./img/sprite.svg#notify"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность
                информации!
              </p>
            </div>
          </div>
          <!-- /.cta-form-footer -->
        </form>
      </div>
      <!-- /.cta-from-wrapper -->
    </div>
  </section>
  <!-- /.section calltoaction -->
  <?php footer(); ?>
  <!-- /.footer -->
  <div class="modal">
    <div class="modal-dialog">
      <h2 class="modal-title">Есть вопросы?</h2>
      <button class="modal-close" data-toggle="modal">
        <svg class="modal-close-button">
          <use href="./img/sprite.svg#modal-close"></use>
        </svg>
      </button>
      <p class="modal-text">
        Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие
        вопросы и поможем даже в самых сложных случаях!
      </p>
      <form action="#" class="modal-form">
        <div class="input-group-wrapper modal-input-group-wrapper">
          <div class="input-group modal-input-group">
            <input id="modal-user-name" type="text" class="input modal-input">
            <label class="input-group-label bg-light-gray" for="modal-user-name">Имя</label>
          </div>
          <div class="input-group modal-input-group">
            <input id="modal-user-phone" type="tel" class="input modal-input">
            <label class="input-group-label bg-light-gray" for="modal-user-phone">Номер телефона</label>
          </div>
        </div>
        <!-- /.input-group-wrapper -->
        <div class="cta-form-footer modal-form-footer">
          <button type="submit" class="button cta-form-button modal-form-button">Оставить заявку</button>
          <div class="notify">
            <svg class="notify-icon">
              <use href="./img/sprite.svg#notify"></use>
            </svg>
            <p class="notify-text modal-form-footer-text">
              Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность
              информации!
            </p>
          </div>
        </div>
        <!-- /.cta-form-footer -->
      </form>
    </div>
    <!-- modal-dialog -->
  </div>
  <!-- /.modal -->
  <script src="./js/swiper-bundle.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>