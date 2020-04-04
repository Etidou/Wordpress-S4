<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')  

@include('partials.header')
@php do_action('get_header') @endphp
<body @php body_class() @endphp data-barba="wrapper">
  

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
  <div class="wrap container" role="document">
    <div class="content">
      <main class="main">
        @yield('content')
      </main>
      @if (App\display_sidebar())
      <aside class="sidebar">
        @include('partials.sidebar')
      </aside>
      @endif
    </div>
  </div>
  @php do_action('get_footer') @endphp
  @php wp_footer() @endphp
</body>
</html>
