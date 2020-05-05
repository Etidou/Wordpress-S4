<?php
/**
 * Template Name: Index
 */
?>




<?php $__env->startSection('content'); ?>

<!-- 
<nav class="nav-primary">
<?php if(has_nav_menu('primary_navigation')): ?>
<?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

<?php endif; ?>
</nav> -->





    <main data-barba="container" data-barba-namespace="home">
<div class="wrapper index">

<?php echo $title; ?>


<?php echo $presentation; ?>


<?php echo $anecdote; ?>


</div>
  </main>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>