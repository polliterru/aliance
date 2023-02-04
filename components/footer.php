<?php function footer() { ?>
  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <a href="/" class="footer-logo">
          <svg class="footer-logo-svg">
            <use href="./img/sprite.svg#logo-dark"></use>
          </svg>
        </a>
        <a href="+7(800)686-10-14" class="footer-phone">+7 (800) 686-10-14</a>
        <div class="footer-social-links">
          <div class="footer-adress">
            <svg class="footer-icon">
              <use href="./img/sprite.svg#mark"></use>
            </svg>
            <p class="footer-info-text">г. Мосвка, Холодильный пер. 4к1с8</p>
          </div>
          <div class="footer-email">
            <svg class="footer-icon">
              <use href="./img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">a.dragunov@tdaliance.ru</a>
          </div>
        </div>
        <div class="footer-social-link">
          <a href="#!" class="social-link">
            <svg class="footer-icon">
              <use href="./img/sprite.svg#vk"></use>
            </svg>
          </a>
          <a href="#!" class="social-link">
            <svg class="footer-icon">
              <use href="./img/sprite.svg#inst"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <!-- footer-top container -->
    <div class="footer-seporaiter"></div>
    <div class="container">
      <div class="footer-bottom">
        <div class="footer-menu-wrapper-production">
          <h2 class="footer-menu-title">Контрактное производство</h2>
          <ul class="footer-menu-production-list footer-menu-column-2">
            <li class="footer-menu-production-item">
              <a href="./avtohim-page.php" class="footer-menu-link">Автомобильная химия</a>
            </li>
            <li class="footer-menu-production-item">
              <a href="#!" class="footer-menu-link">Бытовая химия</a>
            </li>
            <li class="footer-menu-production-item">
              <a href="#!" class="footer-menu-link">Дезинфицирующие средства</a>
            </li>
            <li class="footer-menu-production-item">
              <a href="#!" class="footer-menu-link">Пищевые аэрозоли</a>
            </li>
            <li class="footer-menu-production-item">
              <a href="#!" class="footer-menu-link">Косметическая продукция</a>
            </li>
            <li class="footer-menu-production-item">
              <a href="#!" class="footer-menu-link">Краски аэрозольные</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper-production -->
        <div class="footer-menu-wrapper-mark">
          <h2 class="footer-menu-title">Собственные марки</h2>
          <ul class="footer-menu-mark-list footer-menu-mark">
            <li class="footer-menu-mark-item">
              <a href="#!" class="footer-menu-link">Автохимия AG-Tech</a>
            </li>
            <li class="footer-menu-mark-item">
              <a href="#!" class="footer-menu-link">Автохимия AP</a>
            </li>
          </ul>
        </div>
        <!-- footer-menu-wrapper-mark -->
        <div class="footer-menu-wrapper-info">
          <ul class="footer-menu-info-list">
            <li class="footer-menu-info-item">
              <a href="./about-page.php" class="footer-menu-link footer-menu-link-bold">О компании</a>
            </li>
            <li class="footer-menu-info-item">
              <a href="./blog-page.php" class="footer-menu-link footer-menu-link-bold">Новости</a>
            </li>
            <li class="footer-menu-info-item">
              <a href="./contact-page.php" class="footer-menu-link footer-menu-link-bold">Контакты</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- footer-bottom -->
    </div>
    <!-- /.container -->
    <div class="footer-seporaiter"></div>
    <div class="container">
      <div class="footer-wrapper">
        <div class="footer-legal">
          <p class="copyriht">
            &#169; <?php echo date('d.m.Y')?> «Aliance Production». Все права защищены.
          </p>
          <a href="./politics-page.php" class="footer-policy">Политики конфиденциальности</a>
        </div>
        <!-- /.footer-legal -->
        <div class="footer-autor">
          <span class="made-in">Сделано в</span>
          <svg class="autor-logo">
            <use href="./img/sprite.svg#ruso"></use>
          </svg>
        </div>
        <!-- /.footer-autor -->
      </div>
      <!-- /.footer-wrapper -->
    </div>
  </footer>
<?php } ?>