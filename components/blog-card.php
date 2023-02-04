<? function blog_card($params = array()) { ?>
  <?php if (func_num_args() > 0): ?>
    <!-- ./blog-article-page.php -->
    <a href="#!" class="blog-card">
      <img src="<?=$params['img']?>" alt="Карточка блог" class="blog-card-img">
      <h3 class="card-blog-title">
        <?=$params['title'] ?>
      </h3>
      <p class="card-blog-text">
        <?=$params['text'] ?>
      </p>
    </a>
  <?php endif; ?>
<? } ?>