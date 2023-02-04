<?php 
  require_once('./components/header-dark.php');
  require_once('./components/heading.php');
  require_once('./components/contract_avtohim.php');
  require_once('./components/promo_block.php');
  require_once('./components/types_autochemistry.php');
  require_once('./components/research_center.php');
  require_once('./components/steps.php');
  require_once('./components/clients.php');
  require_once('./components/cta.php');
  require_once('./components/footer.php');
  require_once('./components/modal.php');
  require_once('./components/modal-success.php');
?>

<!DOCTYPE html>
<html lang="ru">

<?php $title = 'Aliance - Автомобильная химия'; ?>
<?php require_once('./head.php'); ?>

<body>

  <?php  
  $headingParams = array(
    'title' => 'Автомобильная химия',
    'show_image' => rtue,
  );
  $promo_block = array(
    'mobileReverse' => false,
    'title' => 'Изготовление автохимии',
    'bulletList' => [
      ['car-clients' => 'Полное описание товаров'],
      ['home' => 'Актуальные цены'],
      ['dis' => 'Полное описание товаров'],
      ['aerozol' => 'Актуальные цены'],
      ['cosmetic' => 'Лаки и краски'],
      ['brush' => 'Химические производства'],
      ['brush' => 'Лаки и краски'],
      ['brush' => 'Химические производства'],
    ],
    // 'brush' => 'Химические производства',
    'textList' => array(
      'Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.',
    ),
    'imageOut' => true,
    'imagesUrl' => array(
      './img/promo.webp',
      './img/promo.jpg',
    ),
  );
  the_header_dark(); 
  heading($headingParams); 
  contract_avtohim();
  promo_block($promo_block);
  types_autochemistry();
  research_center(); 
  steps(); 
  clients(); 
  cta(); 
  footer(); 
  modal(); 
  modal_success(); 
  ?>
  
  <?php require_once('./scripts.php'); ?>
</body>

</html>