<?php 
  require_once('./components/header-dark.php');
  require_once('./components/heading.php');
  require_once('./components/blog-card.php');
  require_once('./components/cta.php');
  require_once('./components/footer.php');
  require_once('./components/modal.php');
  require_once('./components/modal-success.php');
?>

<?php $title = 'Aliance - Блог'; ?>
<?php require_once('./head.php'); ?>

<body>

  <?php 
  the_header_dark(); 
  $headingParams = array(
    'title' => 'Блог',
    'show_image' => false,
  );
  heading($headingParams); 

  $blog_card_list = [
    [
      'img' => './img/blog-lab.jpg', 
      'title' => 'Современная методология разработки одухотворила всех причастных', 
      'text' => 'Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...',
    ],
    [
      'img' => './img/blog.jpg', 
      'title' => 'Сложно сказать, почему жизнь прекрасна', 
      'text' => 'Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...',
    ],
    [
      'img' => './img/blog.jpg', 
      'title' => 'Сложно сказать, почему жизнь прекрасна', 
      'text' => 'Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...',
    ],
    [
      'img' => './img/blog-lab.jpg', 
      'title' => 'Современная методология разработки одухотворила всех причастных', 
      'text' => 'Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...',
    ],
    [
      'img' => './img/blog-lab.jpg', 
      'title' => 'Современная методология разработки одухотворила всех причастных', 
      'text' => 'Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...',
    ],
    [
      'img' => './img/blog.jpg', 
      'title' => 'Сложно сказать, почему жизнь прекрасна', 
      'text' => 'Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...',
    ],
    [
      'img' => './img/blog.jpg', 
      'title' => 'Сложно сказать, почему жизнь прекрасна', 
      'text' => 'Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...',
    ],
    [
      'img' => './img/blog-lab.jpg', 
      'title' => 'Современная методология разработки одухотворила всех причастных', 
      'text' => 'Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...',
    ],
    [
      'img' => './img/blog-lab.jpg', 
      'title' => 'Современная методология разработки одухотворила всех причастных', 
      'text' => 'Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...',
    ],
    [
      'img' => './img/blog.jpg', 
      'title' => 'Сложно сказать, почему жизнь прекрасна', 
      'text' => 'Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...',
    ],
  ];

  ?>
  <div class="blog-page">
    <section class="section blog-section">
      <div class="container">
        <div class="blog-page-wrapper">
          <?php 
            foreach ($blog_card_list as $blog_card_params) {
              blog_card($blog_card_params);
            }
            ?>
        </div>
        <div class="pagination">
          <ul class="pagination-list">
            <li><a class="pagination-link active" href="#!">1</a></li>
            <li><a class="pagination-link" href="#!">2</a></li>
            <li><a class="pagination-link" href="#!">3</a></li>
            <li><a class="pagination-link" href="#!">4</a></li>
            <li><a class="pagination-link" href="#!">5</a></li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  
  <?php
    cta(); 
    footer(); 
    modal(); 
    modal_success(); 
  ?>
  
  <?php require_once('./scripts.php'); ?>
</body>

</html>