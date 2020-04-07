<?php
/**
 * Template Name: Realisations-Single
 */
?>


<ul class="transition">

	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
</ul>


	<main data-barba="container" data-barba-namespace="single-realisations">
		<img src="<?php echo $image_rea; ?>">
	</main>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>