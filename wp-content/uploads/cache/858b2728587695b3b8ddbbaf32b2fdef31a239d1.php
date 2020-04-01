<?php
/**
 * Template Name: Contact
 */
?>

<ul class="transition">

  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul>

<!--  -->

<?php $__env->startSection('content'); ?>

<!-- 
<nav class="nav-primary">
<?php if(has_nav_menu('primary_navigation')): ?>
<?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

<?php endif; ?>
</nav> -->

<body>

    <header>
      <?php
  get_header();
?>
    </header>

  <div class="wrapper">

    <main data-barba="container" data-barba-namespace="contact">



  </main>
</div>



</body>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>