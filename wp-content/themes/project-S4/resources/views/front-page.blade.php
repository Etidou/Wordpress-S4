<?php
/**
 * Template Name: Index
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

<!-- 
<nav class="nav-primary">
@if (has_nav_menu('primary_navigation'))
{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
@endif
</nav> -->





    <main data-barba="container" data-barba-namespace="home">



    <div class="left">
      <h1> red </h1>
      <a href="/second" class="cta"> Page 2 </a>
    </div>
    <img src="@asset('images/first.png')" class="product" >

    {!!$nom_rea!!}
    @debug

  </main>






@endsection
