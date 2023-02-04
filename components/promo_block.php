<?php function promo_block($params = array()) { ?>
  <?php if (func_num_args() > 0): ?>
    <section class="section promo-block <?=$params['sectionClass']?>">
      <div class="container promo-block-container">
        <div class="seporaiter"></div>
        <h1 class="section-title promo-block-title">
          <?=$params['title'] ?>
        </h1>
        <div class="promo-block-wrapper <?=$params['mobileReverse'] ? 'promo-block-wrapper-reverse' : ''?>">
          <div class="promo-block-content">
            <div class="promo-block-content-text">
              <?php foreach ($params['textList'] as $value) { ?>
                <p class="promo-block-text"><?= $value ?></p>
              <?php } ?>
            </div>
            <ul class="promo-block-list">
              <?php foreach ($params['bulletList'] as $item) { ?>
                <?php foreach ($item as $key=>$value) { ?>
                  <li class="promo-block-list-item">
                    <svg class="promo-block-icon">
                      <use href="../img/sprite.svg#<?=$key?>"></use>
                    </svg>
                    <?= $value ?>
                  </li>
                <?php } ?>
              <?php } ?>
            </ul>
          </div>
          <picture class="<?= $params['imageOut'] ? 'promo-block-photo-out' : 'promo-block-photo' ?>">
            <?php  $imagesUrlLength = count($params['imagesUrl']) ?>
            <?php for ($i = 1; $i <= $imagesUrlLength; $i++) { ?>
              <?php $image_url = $params['imagesUrl'][$i - 1] ?>
              <source type="image/webp" srcset="<?= $image_url ?>">
              <?php if ($i == $imagesUrlLength): ?>
                <img src="<?= $image_url ?>" alt="<?=$params['title'] ?>">
              <?php endif; ?>
            <?php } ?>
          </picture>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php } ?>