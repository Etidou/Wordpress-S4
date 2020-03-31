<?php
/**
 * Template Name: Index
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

<!-- 
<nav class="nav-primary">
@if (has_nav_menu('primary_navigation'))
{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
@endif
</nav> -->

<body>



      <div class="wrapper">
        <header>
        </header>
        <main data-barba="container" data-barba-namespace="home"><div class="cm-header-menu">

        <div class="menu-deco">
            <div class="menu-deco-line">
                <div class="menu-deco-point-isTopLeft"></div>
                <div class="menu-deco-point-isTop"></div>
                <div class="menu-deco-point-isTopRight"></div>
            </div>

            <div class="menu-deco-line">
                <div class="menu-deco-point-isMiddleLeft"></div>
                <div class="menu-deco-point-isMiddle"></div>
                <div class="menu-deco-point-isMiddleRight"></div>
            </div>

            <div class="menu-deco-line">
                <div class="menu-deco-point-isBottomLeft"></div>
                <div class="menu-deco-point-isBottom"></div>
                <div class="menu-deco-point-isBottomRight"></div>
            </div>
        </div>
    </div> 
          <div class="left">
            <h1> red </h1>
            <a href="second" class="cta"> Page 2 </a>
          </div>
          <img src="@asset('images/first.png')">

        </main>
      </div>



</body>



  @endsection
