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

	<div class="title">



		<marquee behavior="scroll" direction="left" scrollamount="20">	<div class="line">
			<?php echo $nom_rea; ?>

			<?php echo $nom_rea; ?>

			<?php echo $nom_rea; ?>

			<?php echo $nom_rea; ?>

			<?php echo $nom_rea; ?>

			<?php echo $nom_rea; ?>

			<?php echo $nom_rea; ?>

		</div>  </marquee>

		<div class="line">
			<?php echo $title_rea; ?>

		</div>


		<marquee behavior="scroll" direction="right" scrollamount="20"><div class="line">
			<?php echo $nom_rea; ?>

			<?php echo $nom_rea; ?>

			<?php echo $nom_rea; ?>

			<?php echo $nom_rea; ?>

			<?php echo $nom_rea; ?>

			<?php echo $nom_rea; ?>

			<?php echo $nom_rea; ?>

		</div></marquee>
	</div>

	<div class="skills_rea">


		<p class="description"> Caracteristiques du projet </p>


		<div class="skills">
			<ul>
				<li class="skills_list">ES6</li>
				<li class="skills_list">Laravel</li>
				<li class="skills_list">API REST</li>
				<li class="skills_list">SCSS</li>
			</ul>
		</div>

		<div class="link-realisation-container">

			<?php if(isset(Single::previousLink()->ID)): ?>

			<a href="<?php echo e(get_permalink(Single::previousLink()->ID)); ?>">
				<div class="link-realisation-overlay"></div>
				<span>Projet précédent</span>
				<span><?php echo e(Single::previousLink()->post_title); ?></span>
			</a>
			<?php endif; ?>

			<?php if(isset(Single::nextLink()->ID)): ?>
			<a href="<?php echo e(get_permalink(Single::nextLink()->ID)); ?>">
				<div class="link-realisation-overlay"></div>
				<span>Projet suivant</span>
				<span><?php echo e(Single::nextLink()->post_title); ?></span>
			</a>
			<?php endif; ?>
		</div>

	</div>

	<div class="flex_rea">
		<div class="image_container">
			<img class="superpositionfirst" src="<?php echo $image_rea; ?>"  id="one">
			<img class="superpositionsecond" src="<?php echo $image_rea_2; ?>" id="second">
		</div>

		<p class="description_project"> Présentation du projet </p>



	</div>


</main>
