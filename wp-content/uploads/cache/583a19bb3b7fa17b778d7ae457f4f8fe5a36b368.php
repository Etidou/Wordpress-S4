<?php
/**
 * Template Name: Réalisations
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

    <main data-barba="container" data-barba-namespace="realisations">

<nav class="menu">
      <div class="menu__item">
        <a class="menu__item-link">League</a>
        <img class="menu__item-img" src="<?= App\asset_path('images/1.jpg'); ?>" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>League</span>
            <span>League</span>
            <span>League</span>
            <span>League</span>
          </div>
        </div>
      </div>
      <div class="menu__item">
        <a class="menu__item-link">Wordpress</a>
        <img class="menu__item-img" src="<?= App\asset_path('images/2.jpg'); ?>" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>Wordpress</span>
            <span>Wordpress</span>
            <span>Wordpress</span>
            <span>Wordpress</span>
          </div>
        </div>
      </div>
      <div class="menu__item">
        <a class="menu__item-link">API Node</a>
        <img class="menu__item-img" src="<?= App\asset_path('images/3.jpg'); ?>" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>API Node</span>
            <span>API Node</span>
            <span>API Node</span>
            <span>API Node</span>
          </div>
        </div>
      </div>
      <div class="menu__item">
        <a class="menu__item-link">Karnish</a>
        <img class="menu__item-img" src="<?= App\asset_path('images/4.jpg'); ?>" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>Karnish</span>
            <span>Karnish</span>
            <span>Karnish</span>
            <span>Karnish</span>
          </div>
        </div>
      </div>
      <div class="menu__item">
        <a class="menu__item-link">Luciol</a>
        <img class="menu__item-img" src="<?= App\asset_path('images/5.jpg'); ?>" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>Luciol</span>
            <span>Luciol</span>
            <span>Luciol</span>
            <span>Luciol</span>
          </div>
        </div>
      </div>
    </nav>

  </main>
</div>







<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>