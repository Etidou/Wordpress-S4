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
			{!!$nom_rea!!}
			{!!$nom_rea!!}
			{!!$nom_rea!!}
		</div></marquee>
	</div>
<div class="wrapper_rea">
	<div class="skills_rea">


		<p class="description"> Caracteristiques du projet </p>


		<div class="skills">
			<ul>
				{!!$competences_1!!}
				{!!$competences_2!!}
				{!!$competences_3!!}
				{!!$competences_4!!}
				{!!$competences_5!!}
				{!!$competences_6!!}
			</ul>
		</div>

		<div class="link-realisation-container">

			@if(isset(Single::previousLink()->ID))

			<a href="{{get_permalink(Single::previousLink()->ID)}}" class="previous">
				<div class="link-realisation-overlay"></div>
				<span>Projet précédent</span>
				<span>{{ Single::previousLink()->post_title }}</span>
			</a>
			@endif

			@if(isset(Single::nextLink()->ID))
			<a href="{{get_permalink(Single::nextLink()->ID)}}" class="next">
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



		<div class="title">
			<p class="description_project"> Présentation du projet </p>
				{!!$description!!}
		</div>


	</div> 

<div class="flex_button">
	<div class="bottom-realisation_web">
		<a class="link-home_web" href="{!!$lien_rea!!}" target="_blank">
			<div class="overlay-bottom-realisation_web"></div> 
			<span></span>
			{!!$voir_le!!}
		</a>
	</div>

	<div class="bottom-realisation">
		<a class="link-home" href="{{get_permalink( get_page_by_path( 'realisation' ))}}">
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
