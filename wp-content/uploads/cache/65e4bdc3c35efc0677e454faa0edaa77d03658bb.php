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

			<?php echo $nom_rea; ?>

			<?php echo $nom_rea; ?>

			<?php echo $nom_rea; ?>

		</div></marquee>
	</div>
<div class="wrapper_rea">
	<div class="skills_rea">


		<p class="description"> Caracteristiques du projet </p>


		<div class="skills">
			<ul>
				<?php echo $competences_1; ?>

				<?php echo $competences_2; ?>

				<?php echo $competences_3; ?>

				<?php echo $competences_4; ?>

				<?php echo $competences_5; ?>

				<?php echo $competences_6; ?>

			</ul>
		</div>

		<div class="link-realisation-container">

			<?php if(isset(Single::previousLink()->ID)): ?>

			<a href="<?php echo e(get_permalink(Single::previousLink()->ID)); ?>" class="previous">
				<div class="link-realisation-overlay"></div>
				<span>Projet précédent</span>
				<span><?php echo e(Single::previousLink()->post_title); ?></span>
			</a>
			<?php endif; ?>

			<?php if(isset(Single::nextLink()->ID)): ?>
			<a href="<?php echo e(get_permalink(Single::nextLink()->ID)); ?>" class="next">
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



		<div class="title">
			<p class="description_project"> Présentation du projet </p>
				<?php echo $description; ?>

		</div>


	</div> 

<div class="flex_button">
	<div class="bottom-realisation_web">
		<a class="link-home_web" href="<?php echo $lien_rea; ?>" target="_blank">
			<div class="overlay-bottom-realisation_web"></div> 
			<span></span>
			<?php echo $voir_le; ?>

		</a>
	</div>

	<div class="bottom-realisation">
		<a class="link-home" href="<?php echo e(get_permalink( get_page_by_path( 'realisation' ))); ?>">
			<div class="overlay-bottom-realisation"></div>
			<span></span>
			<p>Toutes mes réalisations</p>
		</a>
	</div>
</div>
 
<div class="footer">
</div>
</div>

</main>
