<!doctype html>
<html <?php echo get_language_attributes(); ?>>
<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body <?php body_class() ?> data-barba="wrapper">
  <?php do_action('get_header') ?>
  <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div class="preload-overlay">
    <ul class="transition">

      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      
    </ul>
    <div class="container">
      <!-- <img src="<?= App\asset_path('images/logo.svg'); ?>" alt=""> -->
      <div>
        <span class="text">Etienne Pharabot,&nbsp</span><span id="feature" class="text"></span><span class="text">&nbsp développeur Full Stack</span></p>
      </div>
    </div>
  </div>
  <div class="wrap container" role="document">
    <div class="content">
      <main class="main">
        <?php echo $__env->yieldContent('content'); ?>
      </main>
      <?php if(App\display_sidebar()): ?>
      <aside class="sidebar">
        <?php echo $__env->make('partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </aside>
      <?php endif; ?>
    </div>
  </div>
  <?php do_action('get_footer') ?>
  <?php wp_footer() ?>
</body>
</html>
