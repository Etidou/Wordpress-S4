<?php
/**
 * Template Name: Réalisations
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





  <div class="wrapper">

    <main data-barba="container" data-barba-namespace="realisations">

<nav class="menu">
  <div class="bleft">
      <div class="menu__item">
        <a class="menu__item-link">League</a>
        <img class="menu__item-img" src="@asset('images/1.jpg')" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>League</span>
            <span>League</span>
            <span>League</span>
            <span>League</span>
          </div>
        </div>
      </div>
      <div class="menu__item">
        <a class="menu__item-link">Wordpress</a>
        <img class="menu__item-img" src="@asset('images/2.jpg')" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>Wordpress</span>
            <span>Wordpress</span>
            <span>Wordpress</span>
            <span>Wordpress</span>
          </div>
        </div>
      </div>
      <div class="menu__item">
        <a class="menu__item-link">API Node</a>
        <img class="menu__item-img" src="@asset('images/3.jpg')" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>API Node</span>
            <span>API Node</span>
            <span>API Node</span>
            <span>API Node</span>
          </div>
        </div>
      </div>
      <div class="menu__item">
        <a class="menu__item-link">Karnish</a>
        <img class="menu__item-img" src="@asset('images/4.jpg')" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>Karnish</span>
            <span>Karnish</span>
            <span>Karnish</span>
            <span>Karnish</span>
          </div>
        </div>
      </div>
      <div class="menu__item">
        <a class="menu__item-link">Luciol</a>
        <img class="menu__item-img" src="@asset('images/5.jpg')" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>Luciol</span>
            <span>Luciol</span>
            <span>Luciol</span>
            <span>Luciol</span>
          </div>
        </div>
      </div>
       <div class="menu__item">
        <a class="menu__item-link">Laravel</a>
        <img class="menu__item-img" src="@asset('images/5.jpg')" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>Laravel</span>
            <span>Laravel</span>
            <span>Laravel</span>
            <span>Laravel</span>
          </div>
        </div>
      </div>

       <div class="menu__item">
        <a class="menu__item-link">L'essaim naturel</a>
        <img class="menu__item-img" src="@asset('images/5.jpg')" alt="Some image"/>
        <div class="marquee">
          <div class="marquee__inner" aria-hidden="true">
            <span>L'essaim naturel</span>
            <span>L'essaim naturel</span>
            <span>L'essaim naturel</span>
            <span>L'essaim naturel</span>
          </div>
        </div>
      </div>
    </div>
    </nav>

  </main>
</div>







@endsection