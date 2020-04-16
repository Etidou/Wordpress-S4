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

@extends('layouts.app')




@section('content')

<!-- 
<nav class="nav-primary">
@if (has_nav_menu('primary_navigation'))
{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
@endif
</nav> -->




    <main data-barba="container" data-barba-namespace="contact">

<div class="title">

		<marquee behavior="scroll" direction="left" scrollamount="18">	<div class="line">
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
		</div>  </marquee>

		<div class="line">
		{!!$title_email!!} 
		</div>


		<marquee behavior="scroll" direction="right" scrollamount="18"><div class="line">
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
			{!!$email!!}
		</div></marquee>
	</div>

<div class="wrapper">

		<div class="call">
		<a class="phone" href="tel:+33783994094">{!!$phone!!}</a>
		</div>







</div>

  </main>
</div>







@endsection
