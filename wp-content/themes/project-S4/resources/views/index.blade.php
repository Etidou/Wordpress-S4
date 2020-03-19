<?php
/**
 * Template Name: Index
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
     <img src="@asset('images/first.png')">
      <a href=""> Page 1 </a>
      <a href="second"> Page 2 </a>
      <a href="third"> Page 3 </a>
  </div>
<h1> red </h1>
  </main>

  <!-- put here content that will not change
  between your pages, like <footer> -->
</body>

@endsection
