<?php
/**
 * Template Name: Realisations
 */
?>
@extends('layouts.app')

<ul class="transition">

	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
</ul>


@section('content')


	<main data-barba="container" data-barba-namespace="realisations">
		<nav class="menu_rea">
			<div class="bleft">
				@foreach($post_reas as $rea)


				<div class="menu__item">
					<a class="menu__item-link" href="{{get_permalink( $rea->ID)}}">{{ $rea->post_title}}</a>
				
					{!!get_the_post_thumbnail( $rea->ID,"large",array("class"=>"menu__item-img"))!!}


					<div class="marquee">
						<div class="marquee__inner" aria-hidden="true">
							<span>{{ $rea->post_title}}</span>
							<span>{{ $rea->post_title}}</span>
							<span>{{ $rea->post_title}}</span>
							<span>{{ $rea->post_title}}</span>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</nav>
	</main>

@endsection


