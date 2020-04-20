<!doctype html>
<html <?php echo get_language_attributes(); ?>>
<?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  

<body <?php body_class() ?> data-barba="wrapper">
<?php do_action('get_header') ?>  
<?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  <div class="preload-overlay">
    <ul class="transition">

      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      
    </ul>

<div class="line_loader">
   <marquee behavior="scroll" direction="right" loop="3"  scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>
<div class="line_loader">
    <marquee behavior="scroll" direction="left" loop="3"  scrollamount="150">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="line_loader">
   <marquee behavior="scroll" direction="right" loop="3"  scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>
<div class="line_loader">
    <marquee behavior="scroll" direction="left"  loop="3" scrollamount="125">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="line_loader">
   <marquee behavior="scroll" direction="right" loop="3"  scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>


<div class="column_loader_left">
    <marquee behavior="scroll" direction="left" loop="3"  scrollamount="150">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="column_loader_right">
   <marquee behavior="scroll" direction="right"  loop="3" scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>

<div class="line_loader">
    <marquee behavior="scroll" direction="left" loop="3"  scrollamount="125">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="line_loader">
   <marquee behavior="scroll" direction="right"  loop="3" scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>
    <div class="container">

      <!-- <img src="<?= App\asset_path('images/logo.svg'); ?>" alt=""> -->
      <div class="text_loader">


        <span class="text">Etienne Pharabot,&nbsp</span><span class="text">&nbsp développeur Full Stack</span></p>
      </div>            
      </div> 

<div class="line_loader">
   <marquee behavior="scroll" direction="left" loop="3"  scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>
<div class="line_loader">
    <marquee behavior="scroll" direction="right"  loop="3" scrollamount="150">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="line_loader">
   <marquee behavior="scroll" direction="left"  loop="3" scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>
<div class="line_loader">
    <marquee behavior="scroll" direction="right" loop="3"  scrollamount="125">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="line_loader">
   <marquee behavior="scroll" direction="left"  loop="3" scrollamount="100"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div> 

<div class="column_loader_left_second">
    <marquee behavior="scroll" direction="left"  loop="3" scrollamount="150">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="column_loader_right_second">
   <marquee behavior="scroll" direction="right" loop="3"  scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>  

<div class="line_loader">
    <marquee behavior="scroll" direction="left" loop="3"  scrollamount="125">  
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
      </marquee>
</div>
<div class="line_loader">
   <marquee behavior="scroll" direction="right" loop="3"  scrollamount="150"> 
      <p class="add_style_loader">Etienne Pharabot développeur Full Stack Etienne Pharabot développeur Full Stack</p>
       </marquee>
</div>
</div>

  <div id="cursor">
      <div></div>
    </div>

    
<!-- <div class="wrapper"> -->

        <?php echo $__env->yieldContent('content'); ?>
<!-- </div> -->
  <?php do_action('get_footer') ?>
  <?php wp_footer() ?>
</body>
</html>
