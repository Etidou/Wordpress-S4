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
			{!!$nom_rea!!}
			{!!$nom_rea!!}
			{!!$nom_rea!!}
			{!!$nom_rea!!}
			{!!$nom_rea!!}
			{!!$nom_rea!!}
			{!!$nom_rea!!}
		</div>  </marquee>

		<div class="line">
			{!!$title_rea!!}
		</div>


		<marquee behavior="scroll" direction="right" scrollamount="20"><div class="line">
			{!!$nom_rea!!}
			{!!$nom_rea!!}
			{!!$nom_rea!!}
			{!!$nom_rea!!}
			{!!$nom_rea!!}
			{!!$nom_rea!!}
			{!!$nom_rea!!}
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

			@if(isset(Single::previousLink()->ID))

			<a href="{{get_permalink(Single::previousLink()->ID)}}">
				<div class="link-realisation-overlay"></div>
				<span>Projet précédent</span>
				<span>{{ Single::previousLink()->post_title }}</span>
			</a>
			@endif

			@if(isset(Single::nextLink()->ID))
			<a href="{{get_permalink(Single::nextLink()->ID)}}">
				<div class="link-realisation-overlay"></div>
				<span>Projet suivant</span>
				<span>{{ Single::nextLink()->post_title }}</span>
			</a>
			@endif
		</div>

	</div>

	<div class="flex_rea">
		<div class="image_container">
			<img class="superpositionfirst" src="{!!$image_rea!!}"  id="one">
			<img class="superpositionsecond" src="{!!$image_rea_2!!}" id="second">
		</div>

		<p class="description_project"> Présentation du projet </p>



	</div>


</main>
