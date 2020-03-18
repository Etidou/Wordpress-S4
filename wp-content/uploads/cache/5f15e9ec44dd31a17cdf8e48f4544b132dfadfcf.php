<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<body data-barba="wrapper">
  <!-- put here content that will not change
  between your pages, like <header> or <nav> -->

  <main data-barba="container" data-barba-namespace="home">

 <div class="wrap">
      <img src="cupacake.png"/>
      <a href="/"> Page 1 </a>
      <a href="/second"> Page 2 </a>
      <a href="/third"> Page 3 </a>
  </div>

  </main>

  <!-- put here content that will not change
  between your pages, like <footer> -->
</body>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>