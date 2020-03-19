<?php
/**
 * Template Name: third
 */
?>



@extends('layouts.app')

@section('content')
  @include('partials.page-header')



<body data-barba="wrapper">
  <!-- put here content that will not change
  between your pages, like <header> or <nav> -->

  <main data-barba="container" data-barba-namespace="home">

  <div class="wrap">
      <img src="@asset('images/third.png')">
      <a href="index"> Page 1 </a>
      <a href="second"> Page 2 </a>
      <a href=""> Page 3 </a>
  </div>

  </main>

  <!-- put here content that will not change
  between your pages, like <footer> -->
</body>



@endsection
