<?php 
  require_once('./components/header-dark.php');
  require_once('./components/heading.php');
  require_once('./components/marks.php');
  require_once('./components/cta.php');
  require_once('./components/footer.php');
  require_once('./components/modal.php');
  require_once('./components/modal-success.php');
?>

<?php $title = 'Aliance - Собственные торговые марки'; ?>
<?php require_once('./head.php'); ?>

<body>

  <?php 
  the_header_dark(); 
  $headingParams = array(
    'title' => 'Собственные торговые марки',
    'show_image' => false,
    'show_bg' => false
  );
  heading($headingParams); 
  ?>
  <div class="product-page">
    <?php marks(); ?> 
  </div>
  <?
  cta(); 
  footer(); 
  modal(); 
  modal_success(); 
  ?>
  
  <?php require_once('./scripts.php'); ?>
</body>

</html>