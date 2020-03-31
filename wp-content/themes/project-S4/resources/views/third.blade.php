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

  <main data-barba="container" data-barba-namespace="third">

  <div class="wrap">
      <img src="@asset('images/third.png')">
  </div>

  </main>

  <!-- put here content that will not change
  between your pages, like <footer> -->
</body>



@endsection
