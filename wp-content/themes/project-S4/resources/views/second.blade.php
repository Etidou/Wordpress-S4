<?php
/**
 * Template Name: Second
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
@include('partials.page-header')




<!-- <body data-barba="wrapper"> -->
  <!-- put here content that will not change
    between your pages, like <header> or <nav> -->




      <div class="wrapper">
        <header>
        </header>
        <main data-barba="container" data-barba-namespace="second">
          <div class="left">
            <h1> blue </h1>
            <a href="index" class="cta"> Page 1 </a>
          </div>
          <img src="@asset('images/second.png')">
        </main>
      </div>






<!-- put here content that will not change
  between your pages, like <footer> -->
<!--     <script src="https://unpkg.com/@barba/core"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"> </script>
    <script src="index.js"> </script> -->

<!--   </body> -->

  @endsection
