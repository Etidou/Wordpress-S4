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


<div class="wrapper">
@section('content')


  <div class="wrapper">

    <main data-barba="container" data-barba-namespace="home">



    <div class="left">
      <h1> red </h1>
      <a href="/second" class="cta"> Page 2 </a>
    </div>
    <img src="@asset('images/first.png')" class="product" data-anim-cursor="discover">

    <?php var_dump($args); ?>

  </main>
</div>






@endsection
</div>