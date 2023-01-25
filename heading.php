<?php function heading($headingParams = array()) { ?>
  <?php if (func_num_args() > 0): ?>
    <section 
      class="page-heading <?= $headingParams['show_bg'] ? 'page-heading-bg' : ''  ?>"
    >
      <div class="container page-heading-container">
        <div class="page-heading-wrapper">
          <div class="seporaiter"></div>
          <h1 class="page-heading-title"><?= $headingParams['title'] ?></h1>
          <!-- /.page-heading-content -->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/" class="breadcrumb-link">
                Главная
              </a>
              <span>—</span>
            </li>
            <li class="breadcrumb-item active">
              <?= $headingParams['title'] ?>
            </li>
          </ul>
        </div>
        <?php if ($headingParams['show_image']): ?>
          <div class="page-heading-img">
            <img src="./img/avto-him-title.png" alt="баллоны">
          </div>
        <?php endif; ?>
      </div>
      <!-- container -->
    </section>
  <?php endif; ?>
<?php } ?>