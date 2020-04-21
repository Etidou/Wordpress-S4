<?php
/**
 * Template Name: Realisations
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


	<main data-barba="container" data-barba-namespace="realisations">
		<div class="wrapper">
	<div class="menu-margin">
		<nav class="menu_rea">
			<div class="bleft">
				<?php $__currentLoopData = $post_reas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


				<div class="menu__item">
					<a class="menu__item-link" href="<?php echo e(get_permalink( $rea->ID)); ?>"><?php echo e($rea->post_title); ?></a>
				
					<?php echo get_the_post_thumbnail( $rea->ID,"large",array("class"=>"menu__item-img")); ?>



					<div class="marquee">
						<div class="marquee__inner" aria-hidden="true">
							<span><?php echo e($rea->post_title); ?></span>
							<span><?php echo e($rea->post_title); ?></span>
							<span><?php echo e($rea->post_title); ?></span>
							<span><?php echo e($rea->post_title); ?></span>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php (new Illuminate\Support\Debug\Dumper)->dump($post_reas); ?>
			</div>
		</nav>
	</div>
	</div>
	</main>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>