<?php 
  require_once('./components/footer.php');
  require_once('./components/cta.php');
  require_once('./components/blog.php');
  require_once('./components/clients.php');
  require_once('./components/founder.php');
  require_once('./components/marks.php');
  require_once('./components/production.php');
  require_once('./components/steps.php');
  require_once('./components/header.php');
  require_once('./components/modal.php');
  require_once('./components/modal-success.php');
?>

<?php $title = 'Aliance Production'; ?>
<?php require_once('./head.php'); ?>


  <body class="main-page">
    <?php the_header(); ?>
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
          <button class="button main-button js-open-modal" data-modal-class="modal-cta">Подробнее о компании</button>
        </div>
        <!-- Основной слайдер -->
        <div class="swiper swiper-features">
          <!-- Обертка слайдера -->
          <ul class="swiper-wrapper main-features">
            <!-- Слайды -->
            <li class="swiper-slide main-features-item">
              <svg class="main-features-icon">
                <use href="../img/sprite.svg#clock"></use>
              </svg>
              <p class="main-features-text">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide main-features-item">
              <svg class="main-features-icon">
                <use href="../img/sprite.svg#file"></use>
              </svg>
              <p class="main-features-text">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide main-features-item">
              <svg class="main-features-icon">
                <use href="../img/sprite.svg#man"></use>
              </svg>
              <p class="main-features-text">Контроль качества на всех этапах</p>
            </li>
            <li class="swiper-slide main-features-item">
              <svg class="main-features-icon">
                <use href="../img/sprite.svg#car"></use>
              </svg>
              <p class="main-features-text">Возможны поставки по всей России
            </li>
            <li class="swiper-slide main-features-item">
              <svg class="main-features-icon">
                <use href="../img/sprite.svg#counter"></use>
              </svg>
              <p class="main-features-text">Оперативное производство</p>
            </li>
          </ul>
          <!-- Кнопки навигации вперед\назад -->
          <div class="slider-buttons slider-buttons-hidden features-slider-buttons">
            <div class="slider-features-button-prev slider-button-prev slider-button-prev-outline">
              <svg class="arrow-slider">
                <use href="../img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-features-button-next slider-button-next slider-button-next-outline">
              <svg class="arrow-slider">
                <use href="../img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
        <!-- /.main-content -->
      </div>
    </section>

    <?php 
      steps();
      production();
      marks();
      founder();
      clients();
      blog();
      cta();
      footer();
      modal();
      modal_success();
    ?>

  <?php require_once('./scripts.php'); ?>
</body>
