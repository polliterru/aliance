<?php function the_header() { ?>
  <header>
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="./about.php" class="mobile-menu-link">О компании</a>
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
          <a href="./about.php" class="header-nav-link">О компании</a>
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
      <button class="navbar-button button js-open-modal" data-modal-class="modal-cta">
        <svg class="button-icon">
          <use href="./img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
  </header>
<?php } ?>