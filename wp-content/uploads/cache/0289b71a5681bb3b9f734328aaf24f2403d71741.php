<?php
/**
 * Template Name: third
 */
?>





<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>

<div id="barba-wrapper">
  <div class="barba-container">
      <img src="<?= App\asset_path('images/third.png'); ?>">
      <a href="index"> Page 1 </a>
      <a href="second"> Page 2 </a>
      <a href=""> Page 3 </a>
  </div>
</div>


  <!-- put here content that will not change
  between your pages, like <footer> -->
</body>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>