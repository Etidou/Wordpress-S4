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
<div class="wrapper">

{!!$title!!}

{!!$presentation!!}

{!!$anecdote!!}

</div>
  </main>






@endsection
