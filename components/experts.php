<?php function experts() { ?>
  <section class="section experts">
      <div class="container">
        <div class="experts-content">
          <picture class="experts-img">
            <source type="image/webp" srcset="img/experts.webp">
            <source type="image/jpg" srcset="img/experts.jpg">
            <img src="./img/experts.jpg" alt="Картинка-логотип">
          </picture>
          <div class="experts-wrapper">
            <div class="seporaiter"></div>
            <h1 class="section-title experts-title">
              мы - эксперты в области производства химии
            </h1>
            <p class="experts-text">
              Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует 
              необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры 
              проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют
              собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно.
              Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
            </p>
          </div>
        </div>
        <div class="swiper swiper-features swiper-experts-wrapper">
            <!-- Обертка слайдера -->
            <ul class="swiper-wrapper main-features">
              <!-- Слайды -->
              <li class="swiper-slide main-features-item experts-features-item">
                <svg class="main-features-icon">
                  <use href="../img/sprite.svg#clock"></use>
                </svg>
                <p class="main-features-text experts-features-text">Непрерывная работа c 2017 года</p>
              </li>
              <li class="swiper-slide main-features-item">
                <svg class="main-features-icon">
                  <use href="../img/sprite.svg#file"></use>
                </svg>
                <p class="main-features-text experts-features-text">Вся продукция сертифицирована</p>
              </li>
              <li class="swiper-slide main-features-item">
                <svg class="main-features-icon">
                  <use href="../img/sprite.svg#man"></use>
                </svg>
                <p class="main-features-text experts-features-text">Контроль качества на всех этапах</p>
              </li>
              <li class="swiper-slide main-features-item">
                <svg class="main-features-icon">
                  <use href="../img/sprite.svg#car"></use>
                </svg>
                <p class="main-features-text experts-features-text">Возможны поставки по всей России
              </li>
              <li class="swiper-slide main-features-item">
                <svg class="main-features-icon">
                  <use href="../img/sprite.svg#counter"></use>
                </svg>
                <p class="main-features-text experts-features-text">Оперативное производство</p>
              </li>
            </ul>
            <!-- Кнопки навигации вперед\назад -->
            <div class="slider-buttons slider-buttons-hidden features-slider-buttons">
              <div class="slider-features-button-prev slider-button-prev slider-button-prev-experts slider-button-prev-outline">
                <svg class="arrow-slider arrow-slider-experts">
                  <use href="../img/sprite.svg#arrow-prev"></use>
                </svg>
              </div>
              <div class="slider-features-button-next slider-button-next slider-button-next-experts slider-button-next-outline">
                <svg class="arrow-slider arrow-slider-experts">
                  <use href="../img/sprite.svg#arrow-next"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
  </section>
<?php } ?>