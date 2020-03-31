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
<?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- 
<nav class="nav-primary">
<?php if(has_nav_menu('primary_navigation')): ?>
<?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

<?php endif; ?>
</nav> -->

<body>



      <div class="wrapper">
        <header>
        </header>
        <main data-barba="container" data-barba-namespace="home"><div class="cm-header-menu">

        <div class="menu-deco">
            <div class="menu-deco-line">
                <div class="menu-deco-point-isTopLeft"></div>
                <div class="menu-deco-point-isTop"></div>
                <div class="menu-deco-point-isTopRight"></div>
            </div>

            <div class="menu-deco-line">
                <div class="menu-deco-point-isMiddleLeft"></div>
                <div class="menu-deco-point-isMiddle"></div>
                <div class="menu-deco-point-isMiddleRight"></div>
            </div>

            <div class="menu-deco-line">
                <div class="menu-deco-point-isBottomLeft"></div>
                <div class="menu-deco-point-isBottom"></div>
                <div class="menu-deco-point-isBottomRight"></div>
            </div>
        </div>
    </div> 
          <div class="left">
            <h1> red </h1>
            <a href="second" class="cta"> Page 2 </a>
          </div>
          <img src="<?= App\asset_path('images/first.png'); ?>">

        </main>
      </div>



</body>



  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>