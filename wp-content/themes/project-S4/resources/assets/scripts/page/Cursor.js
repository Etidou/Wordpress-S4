import {Expo, TweenMax, TimelineMax, Power4} from 'gsap';
export default class StickyMouse {
 constructor() {
  this.initElems();
  this.initEvents();
}

initElems() {
  this.$linksPost = $('.link-realisation-container a');
  this.$buttonHome = $('.bottom-realisation .link-home');
  this.$buttonHomeText = $('.bottom-realisation .link-home p');
  this.$overlayButtonHome = $('.bottom-realisation .link-home .overlay-bottom-realisation');


  this.$buttonHomeWeb = $('.bottom-realisation_web .link-home_web');
  this.$buttonHomeTextWeb = $('.bottom-realisation_web .link-home_web p.web');
  this.$overlayButtonHomeWeb = $('.bottom-realisation_web .link-home_web .overlay-bottom-realisation_web');
  
  
  this.$cursor = $('#cursor');
  this.mousePosition = {};
  this.cursorPosition = {
    x: void 0,
    y: void 0,
    dx: void 0,
    dy: void 0,
  };
  this.request;
  this.smoothVelocity = 0.15;
}

initEvents() {
  this.animateCursor();
  this.linkCursorInteraction();
  this.animButtonLinkPrevNext();
  this.animButtonHomeRea();
  this.animButtonHomeWebsite();
}

animateCursor() {
  $(document).on('mousemove', (e)=> {
    this.mousePosition.x = e.clientX || e.pageX;
    this.mousePosition.y = e.clientY || e.pageY;
  });
  const animation = () => {
   this.request = requestAnimationFrame(animation)
   if(!this.cursorPosition.x || !this.cursorPosition.y){
    this.cursorPosition.x = this.mousePosition.x;
    this.cursorPosition.y = this.mousePosition.y;
  }
  else{
    this.cursorPosition.dx = (this.mousePosition.x - this.cursorPosition.x) * this.smoothVelocity;
    this.cursorPosition.dy = (this.mousePosition.y - this.cursorPosition.y) * this.smoothVelocity;
    
    if(Math.abs(this.cursorPosition.dx) + Math.abs(this.cursorPosition.dy) < 0.1){
     this.cursorPosition.x = this.mousePosition.x;
     this.cursorPosition.y = this.mousePosition.y;
   }
   else{
     this.cursorPosition.x += this.cursorPosition.dx;
     this.cursorPosition.y += this.cursorPosition.dy;
   }
 }
 this.$cursor.css({
   'top': this.cursorPosition.y + 'px',
   'left': this.cursorPosition.x + 'px',
 });
}
requestAnimationFrame(animation);
}

linkCursorInteraction() {
  $('.menu').hover(
   ()=> {
    TweenMax.to(this.$cursor, 0.5, {
     scale: 1.5,
     ease: Expo.easeOut,
   })
    this.$cursor.css('opacity','1');
                    // this.$cursor.css('display','block');
    this.$cursor.css('background-color','black');
    this.$cursor.css('color','white');
    this.$cursor.text('Menu');

    },
    ()=> {
    TweenMax.to(this.$cursor, 0.5, {
    scale: 1,
    ease: Expo.easeOut,
    })
    this.$cursor.css('opacity','0');
    // this.$cursor.css('display','none');
    this.$cursor.text('');
    }
    )

    $('span.mmi').hover(
   ()=> {
    TweenMax.to(this.$cursor, 0.5, {
     scale: 1.5,
     ease: Expo.easeOut,
   })
    this.$cursor.css('opacity','1');
                    // this.$cursor.css('display','block');
    this.$cursor.css('background-color','black');
    this.$cursor.css('color','white');
    this.$cursor.text('MMI');

    },
    ()=> {
    TweenMax.to(this.$cursor, 0.5, {
    scale: 1,
    ease: Expo.easeOut,
    })
    this.$cursor.css('opacity','0');
    // this.$cursor.css('display','none');
    this.$cursor.text('');
    }
    )


    $('span.iut').hover(
   ()=> {
    TweenMax.to(this.$cursor, 0.5, {
     scale: 1.5,
     ease: Expo.easeOut,
   })
    this.$cursor.css('opacity','1');
                    // this.$cursor.css('display','block');
    this.$cursor.css('background-color','black');
    this.$cursor.css('color','white');
    this.$cursor.text('IUT');

    },
    ()=> {
    TweenMax.to(this.$cursor, 0.5, {
    scale: 1,
    ease: Expo.easeOut,
    })
    this.$cursor.css('opacity','0');
    // this.$cursor.css('display','none');
    this.$cursor.text('');
    }
    )

    $('h1.title_contact').hover(
   ()=> {
    TweenMax.to(this.$cursor, 0.5, {
     scale: 1.5,
     ease: Expo.easeOut,
   })
    this.$cursor.css('opacity','1');
                    // this.$cursor.css('display','block');
    this.$cursor.css('background-color','white');
    this.$cursor.css('color','black');
    this.$cursor.text('Mail');

    },
    ()=> {
    TweenMax.to(this.$cursor, 0.5, {
    scale: 1,
    ease: Expo.easeOut,
    })
    this.$cursor.css('opacity','0');
    // this.$cursor.css('display','none');
    this.$cursor.text('');
    }
    )

       $('a.phone').hover(
   ()=> {
    TweenMax.to(this.$cursor, 0.5, {
     scale: 1.5,
     ease: Expo.easeOut,
   })
    this.$cursor.css('opacity','1');
                    // this.$cursor.css('display','block');
    this.$cursor.css('background-color','white');
    this.$cursor.css('color','black');
    this.$cursor.text('Telephone');

    },
    ()=> {
    TweenMax.to(this.$cursor, 0.5, {
    scale: 1,
    ease: Expo.easeOut,
    })
    this.$cursor.css('opacity','0');
    // this.$cursor.css('display','none');
    this.$cursor.text('');
    }
    )

  $('h1.title_rea').hover(
   ()=> {
    $('p.add_style').css('opacity','1');
    $('body').css('background-color','black');
    $('html').css('background-color','black');
    $('h1.title_rea').css('color','white');
    $('li.skills_list').css('color','white');
    $('a').css('color','white');
    $('#one').css('opacity','0');
    $('#second').css('opacity','1');
    $('p.text').css('color','white');


  },
  ()=> {
    $('a').css('color','black');
    $('p.add_style').css('opacity','0');
    $('h1.title_rea').css('color','red');
    $('body').css('background-color','#f8ecde');
    $('html').css('background-color','#f8ecde');
    $('li.skills_list').css('color','black');
    $('#one').css('opacity','1');
    $('#second').css('opacity','0');
    $('p.text').css('color','black');

  }
  )


    $('a.phone').hover(
   ()=> {
    $('body').css('background-color','black');
    $('html').css('background-color','black');
    $('a.phone').css('color','white');
     $('h1.title_contact').css('color','white');
  },
  ()=> {
    $('body').css('background-color','#f8ecde');
    $('html').css('background-color','#f8ecde');
    $('a.phone').css('color','black');
    $('h1.title_contact').css('color','red');


  }
  )



  $('h1.title_contact').hover(
   ()=> {
    $('p.add_style').css('opacity','1');
    $('body').css('background-color','black');
    $('html').css('background-color','black');
    $('h1.title_contact').css('color','white');
    $('a.phone').css('color','white');
  },
  ()=> {
    $('p.add_style').css('opacity','0');
    $('h1.title_contact').css('color','red');
    $('body').css('background-color','#f8ecde');
    $('html').css('background-color','#f8ecde');
    $('a.phone').css('color','black');
  }
  )



  $('.superpositionfirst').hover(
   ()=> {
    $('#one').css('opacity','0');
    $('#second').css('opacity','1');

    console.log('one,hover');


  },
  ()=> {
    $('#one').css('opacity','1');
    $('#second').css('opacity','0');

  }
  )





}


animButtonLinkPrevNext() {
  let tl1 = new TimelineMax();
  let tl2 = new TimelineMax();
  this.$linksPost.hover(
    function () {
      tl1
      .to($(this).find('span'), 0.7, {
        y: '-100%',
        ease: Power4.easeInOut,

      })
    },
    function () {

      tl2
      .to($(this).find('span'), 1, {
        y: '0%',
        ease: Power4.easeInOut,
      })
    }
    )


}

animButtonHomeRea() {
  this.$buttonHome.hover(
    ()=> {
      let tl = new TimelineMax();
      tl
      .to(this.$buttonHomeLine, 1, {
        width: '80%',
        opacity: '0',
        ease: Power4.easeInOut,
      })
      .to(this.$overlayButtonHome, 0.8, {
        top:'0%',
        left: '0%',
        ease: Power4.easeInOut,
      }, '-=0.9')
      .to(this.$buttonHomeText, 0.8, {
        color: 'white',
        ease: Power4.easeInOut,
      }, '-=0.8')
    },
    ()=> {
      let tl = new TimelineMax();
      tl
      .to(this.$overlayButtonHome, 0.8, {
        top:'-100%',
                    // left: '0%',
                    ease: Power4.easeInOut,
                  })
      .to(this.$buttonHomeText, 0.8, {
        color: 'red',
        ease: Power4.easeInOut,
      }, '-=0.8')
    }
    )
}


animButtonHomeWebsite() {
  this.$buttonHomeWeb.hover(
    ()=> {
      let tl = new TimelineMax();
      tl
      .to(this.$buttonHomeLine, 1, {
        width: '80%',
        opacity: '0',
        ease: Power4.easeInOut,
      })
      .to(this.$overlayButtonHomeWeb, 0.8, {
        top:'0%',
        left: '0%',
        ease: Power4.easeInOut,
      }, '-=0.9')
      .to(this.$buttonHomeTextWeb, 0.8, {
        color: 'white',
        ease: Power4.easeInOut,
      }, '-=0.8')
    },
    ()=> {
      let tl = new TimelineMax();
      tl
      .to(this.$overlayButtonHomeWeb, 0.8, {
        top:'-100%',
                    // left: '0%',
                    ease: Power4.easeInOut,
                  })
      .to(this.$buttonHomeTextWeb, 0.8, {
        color: 'red',
        ease: Power4.easeInOut,
      }, '-=0.8')
    }
    )
}
}