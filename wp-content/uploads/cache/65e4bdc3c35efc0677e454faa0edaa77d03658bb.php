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
			<p class="add_style"><?php echo $nom_rea; ?></p>
			<p class="add_style"><?php echo $nom_rea; ?></p>
			<p class="add_style"><?php echo $nom_rea; ?></p>
			<p class="add_style"><?php echo $nom_rea; ?></p>
			<p class="add_style"><?php echo $nom_rea; ?></p>
			<p class="add_style"><?php echo $nom_rea; ?></p>
			<p class="add_style"><?php echo $nom_rea; ?></p>
		</div>  </marquee>

		<div class="line">
			<?php echo $title_rea; ?>

		</div>


		<marquee behavior="scroll" direction="right" scrollamount="20"><div class="line">
			<p class="add_style"><?php echo $nom_rea; ?></p>
			<p class="add_style"><?php echo $nom_rea; ?></p>
			<p class="add_style"><?php echo $nom_rea; ?></p>
			<p class="add_style"><?php echo $nom_rea; ?></p>
			<p class="add_style"><?php echo $nom_rea; ?></p>
			<p class="add_style"><?php echo $nom_rea; ?></p>
			<p class="add_style"><?php echo $nom_rea; ?></p>
		</div></marquee>
	</div>




<div class="image_container">
<img class="superpositionfirst" src="<?php echo $image_rea; ?>"  id="one">


<!-- <?php (new \Sober\Controller\Blade\Debugger(get_defined_vars())); ?> -->

<img class="superpositionsecond" src="<?php echo $image_rea_2; ?>" id="second">

</div>


</main>
