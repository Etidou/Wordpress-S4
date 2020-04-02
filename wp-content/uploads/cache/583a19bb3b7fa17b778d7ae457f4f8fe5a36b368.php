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

    <main data-barba="container" data-barba-namespace="realisations">

<nav class="menu">
      <div class="menu__item">
        <a class="menu__item-link">Showreel</a>
        <img class="menu__item-img" src="img/1.jpg" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>Showreel</span>
            <span>Showreel</span>
            <span>Showreel</span>
            <span>Showreel</span>
          </div>
        </div>
      </div>
      <div class="menu__item">
        <a class="menu__item-link">Case Studies</a>
        <img class="menu__item-img" src="img/2.jpg" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>Case Studies</span>
            <span>Case Studies</span>
            <span>Case Studies</span>
            <span>Case Studies</span>
          </div>
        </div>
      </div>
      <div class="menu__item">
        <a class="menu__item-link">Experiments</a>
        <img class="menu__item-img" src="img/3.jpg" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>Experiments</span>
            <span>Experiments</span>
            <span>Experiments</span>
            <span>Experiments</span>
          </div>
        </div>
      </div>
      <div class="menu__item">
        <a class="menu__item-link">Our Crew</a>
        <img class="menu__item-img" src="img/4.jpg" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>The Crew</span>
            <span>The Crew</span>
            <span>The Crew</span>
            <span>The Crew</span>
          </div>
        </div>
      </div>
      <div class="menu__item">
        <a class="menu__item-link">Contact</a>
        <img class="menu__item-img" src="img/5.jpg" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>Contact</span>
            <span>Contact</span>
            <span>Contact</span>
            <span>Contact</span>
          </div>
        </div>
      </div>
    </nav>

  </main>
</div>



</body>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>