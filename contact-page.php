<?php 
  require_once('./components/header-dark.php');
  require_once('./components/heading.php');
  require_once('./components/cta.php');
  require_once('./components/footer.php');
  require_once('./components/modal.php');
  require_once('./components/modal-success.php');
?>

<?php $title = 'Aliance - Контакты'; ?>
<?php require_once('./head.php'); ?>

<body>

  <?php 
    the_header_dark(); 
    $headingParams = array(
      'title' => 'Контакты',
      'show_image' => false,
    );
    heading($headingParams);
  ?>

  <section class="section contacts">
    <div class="container">

      <div class="footer-top">
        <a href="tel:+78006861014" class="footer-phone">+7 (800) 686-10-14</a>
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

      <div class="map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aedf5da8b25cd6413458fcda0366b1805d037b3642a5d1d40d26f273e5368545f&amp;source=constructor"></iframe>
      </div>

    </div>
  </section>

  <?php 
    cta(); 
    footer(); 
    modal(); 
    modal_success(); 
  ?>
  
  <?php require_once('./scripts.php'); ?>
</body>

</html>