<?php
/**
 * Template Name: Index
 */
?>


@extends('layouts.app')

@section('content')
@include('partials.page-header')


<!-- <body data-barba="wrapper"> -->
  <!-- put here content that will not change
    between your pages, like <header> or <nav> -->


      <ul class="transition">

        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>

      <div class="wrapper">
        <header>
          <nav>
            <ul>
              <li> <a href=""> Page 1 </a></li>
              <li><a href="second"> Page 2 </a></li>
            </ul>
          </nav>
        </header>
        <main data-barba="container" data-barba-namespace="home">
          <div class="left">
            <h1> red </h1>
            <a href="second" class="cta"> Page 2 </a>
          </div>
          <img src="@asset('images/first.png')">

        </main>
      </div>






<!-- put here content that will not change
  between your pages, like <footer> -->

<!--     <script src="https://unpkg.com/@barba/core@2.9.7/dist/barba.umd.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"> </script>
    <script src="index.js"> </script> -->

<!--   </body> -->

  @endsection
