<?php
/**
 * Template Name: Second
 */
?>


      <ul class="transition">

        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>



<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




<!-- <body data-barba="wrapper"> -->
  <!-- put here content that will not change
    between your pages, like <header> or <nav> -->




      <div class="wrapper">
        <header>
        </header>
        <main data-barba="container" data-barba-namespace="second">
          <div class="left">
            <h1> blue </h1>
            <a href="index" class="cta"> Page 1 </a>
          </div>
          <img src="<?= App\asset_path('images/second.png'); ?>">
        </main>
      </div>






<!-- put here content that will not change
  between your pages, like <footer> -->
<!--     <script src="https://unpkg.com/@barba/core"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"> </script>
    <script src="index.js"> </script> -->

<!--   </body> -->

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>