<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')  

<body @php body_class() @endphp data-barba="wrapper">
@php do_action('get_header') @endphp  
@include('partials.header')


  <div class="preload-overlay">
    <ul class="transition">

      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      
    </ul>
    <div class="container">
      <!-- <img src="@asset('images/logo.svg')" alt=""> -->
      <div>
        <span class="text">Etienne Pharabot,&nbsp</span><span id="feature" class="text"></span><span class="text">&nbsp développeur Full Stack</span></p>
      </div>
    </div>
  </div>

  <div id="cursor">
      <div></div>
    </div>
<div class="anim-overlay"></div>

    
<div class="wrapper">

        @yield('content')
</div>
  @php do_action('get_footer') @endphp
  @php wp_footer() @endphp
</body>
</html>
