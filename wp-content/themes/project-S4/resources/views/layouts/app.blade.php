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

<div class="line_loader">
   <marquee behavior="scroll" direction="right" loop="2"  scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>
<div class="line_loader">
    <marquee behavior="scroll" direction="left" loop="2"  scrollamount="150">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="line_loader">
   <marquee behavior="scroll" direction="right" loop="2"  scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>
<div class="line_loader">
    <marquee behavior="scroll" direction="left"  loop="2" scrollamount="125">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="line_loader">
   <marquee behavior="scroll" direction="right" loop="2"  scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>


<div class="column_loader_left">
    <marquee behavior="scroll" direction="left" loop="2"  scrollamount="150">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="column_loader_right">
   <marquee behavior="scroll" direction="right"  loop="2" scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>

<div class="line_loader">
    <marquee behavior="scroll" direction="left" loop="2"  scrollamount="125">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="line_loader">
   <marquee behavior="scroll" direction="right"  loop="2" scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>
    <div class="container">

      <!-- <img src="@asset('images/logo.svg')" alt=""> -->
      <div class="text_loader">


        <span class="text">Etienne Pharabot,&nbsp</span><span class="text">&nbsp développeur Full Stack</span></p>
      </div>            
      </div> 

<div class="line_loader">
   <marquee behavior="scroll" direction="left" loop="2"  scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>
<div class="line_loader">
    <marquee behavior="scroll" direction="right"  loop="2" scrollamount="150">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="line_loader">
   <marquee behavior="scroll" direction="left"  loop="2" scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>
<div class="line_loader">
    <marquee behavior="scroll" direction="right" loop="2"  scrollamount="125">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="line_loader">
   <marquee behavior="scroll" direction="left"  loop="2" scrollamount="100"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div> 

<div class="column_loader_left_second">
    <marquee behavior="scroll" direction="left"  loop="2" scrollamount="150">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="column_loader_right_second">
   <marquee behavior="scroll" direction="right" loop="2"  scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>  

<div class="line_loader">
    <marquee behavior="scroll" direction="left" loop="2"  scrollamount="125">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="line_loader">
   <marquee behavior="scroll" direction="right" loop="2"  scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>
</div>

  <div id="cursor">
      <div></div>
    </div>

    
<!-- <div class="wrapper"> -->
@include('partials.transition')  
        @yield('content')
<!-- </div> -->
  @php do_action('get_footer') @endphp
  @php wp_footer() @endphp
</body>
</html>
