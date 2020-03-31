<?php
/**
 * Template Name: third
 */
?>





<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<body data-barba="wrapper">
  <!-- put here content that will not change
  between your pages, like <header> or <nav> -->

  <main data-barba="container" data-barba-namespace="third">

  <div class="wrap">
      <img src="<?= App\asset_path('images/third.png'); ?>">
  </div>

  </main>

  <!-- put here content that will not change
  between your pages, like <footer> -->
</body>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>