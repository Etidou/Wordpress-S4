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






<?php $__env->startSection('content'); ?>

<!-- 
<nav class="nav-primary">
<?php if(has_nav_menu('primary_navigation')): ?>
<?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

<?php endif; ?>
</nav> -->




    <main data-barba="container" data-barba-namespace="contact">

<div class="title">

		<marquee behavior="scroll" direction="left" scrollamount="45">	<div class="line">
			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

		</div>  </marquee>

		<div class="line">
		<?php echo $title_email; ?> 
		</div>


		<marquee behavior="scroll" direction="right" scrollamount="45"><div class="line">
			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

			<?php echo $email; ?>

		</div></marquee>
	</div>

<div class="wrapper">

		<div class="call">
		<a class="phone" href="tel:+33783994094"><?php echo $phone; ?></a>
		</div>







</div>

  </main>
</div>







<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>