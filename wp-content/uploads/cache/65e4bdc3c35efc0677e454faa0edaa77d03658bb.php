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



		<div class="title">
			<p class="description_project"> Présentation du projet </p>

			<p class="text">
				"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
			</p>
		</div>


	</div> 

<div class="flex_button">
	<div class="bottom-realisation">
		<a class="link-home" href="">
			<div class="overlay-bottom-realisation"></div>
			<span></span>
			<p>Voir le Site</p>
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


</main>
