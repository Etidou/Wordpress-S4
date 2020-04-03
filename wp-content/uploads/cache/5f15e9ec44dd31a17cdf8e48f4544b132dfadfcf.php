<?php
/**
 * Template Name: Index
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

<!-- 
<nav class="nav-primary">
<?php if(has_nav_menu('primary_navigation')): ?>
<?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

<?php endif; ?>
</nav> -->




  <div class="wrapper">

    <main data-barba="container" data-barba-namespace="home">



    <div class="left">
      <h1> red </h1>
      <a href="/second" class="cta"> Page 2 </a>
    </div>
    <img src="<?= App\asset_path('images/first.png'); ?>">

    <?php var_dump($args); ?>

  </main>
</div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>