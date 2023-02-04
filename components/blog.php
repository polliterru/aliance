<?php function blog() { ?>
  <section class="section blog">
    <div class="container">
      <div class="seporaiter"></div>
      <h2 class="section-title">Блог экспертов в области производства</h2> 
      <!-- Slider main container -->
      <div class="swiper blog-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <a href="#!" class="swiper-slide blog-card">
            <img src="./img/blog-lab.jpg" alt="Карточка блог" class="blog-card-img">
            <h3 class="card-blog-title">
              Современная методология разработки одухотворила всех причастных
            </h3>
            <p class="card-blog-text">
              Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены...
            </p>
          </a>
          <a href="#!" class="swiper-slide blog-card">
            <img src="./img/blog.jpg" alt="Карточка блог" class="blog-card-img">
            <h3 class="card-blog-title">
              Сложно сказать, почему жизнь прекрасна
            </h3>
            <p class="card-blog-text">
              Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы.
              Безусловно, высокотехнологичная...
            </p>
          </a>
          <a href="#!" class="swiper-slide blog-card">
            <img src="./img/blog.jpg" alt="Карточка блог" class="blog-card-img">
            <h3 class="card-blog-title">
              Сложно сказать, почему жизнь прекрасна
            </h3>
            <p class="card-blog-text">
              Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы.
              Безусловно, высокотехнологичная...
            </p>
          </a>
          <a href="#!" class="swiper-slide blog-card">
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
          <a href="#!" class="button-link">Весь блог</a>
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
<?php } ?>
