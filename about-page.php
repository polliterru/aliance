<?php 
  require_once('./components/header-dark.php');
  require_once('./components/heading.php');
  require_once('./components/experts.php');
  require_once('./components/promo_block.php');
  require_once('./components/founder.php');
  require_once('./components/research_center.php');
  require_once('./components/clients.php');
  require_once('./components/cta.php');
  require_once('./components/footer.php');
  require_once('./components/modal.php');
  require_once('./components/modal-success.php');
?>

<?php $title = 'Aliance - О компании'; ?>
<?php require_once('./head.php'); ?>

<body>
  <div class="about-page">
  <?php 
    $heading_params = array(
      'title' => 'О компании',
      'show_image' => false,
    );
    $promo_block = array(
      'mobileReverse' => true,
      'title' => 'Наше производство',
      'bulletList' => [
        ['car-clients' => 'Автомобильная химия'],
        ['home' => 'Бытовая химия'],
        ['dis' => 'Дезинфицирующие средства'],
        ['aerozol' => 'Пищевые аэрозоли'],
        ['cosmetic' => 'Косметическая продукция'],
        ['brush' => 'Краски аэрозольные'],
      ],
      'textList' => array(
        'Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.',
        'Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.',
      ),
      'imageOut' => false,
      'imagesUrl' => array(
        './img/production.webp',
        './img/production.jpg',
      ),
    );
    the_header_dark();
    heading($heading_params);
    experts(); 
    promo_block($promo_block);
    founder(); 
    research_center(); 
    clients(); 
    cta(); 
    footer(); 
    modal(); 
    modal_success(); 
  ?>
   </div>

  <?php require_once('./scripts.php'); ?>
</body>

</html>