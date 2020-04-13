import {Expo, TweenMax, TimelineMax, Power4} from 'gsap';
export default class StickyMouse {
     constructor() {
          this.initElems();
          this.initEvents();
     }

     initElems() {
      this.$linksPost = $('.link-realisation-container a');
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

               $('h1.title_rea').hover(
               ()=> {
                    $('p.add_style').css('opacity','1');
                    $('body').css('background-color','black');
                    $('h1.title_rea').css('color','white');
                    $('li.skills_list').css('color','white');

               },
               ()=> {
                    $('p.add_style').css('opacity','0');
                    $('h1.title_rea').css('color','red');
                    $('body').css('background-color','#f8ecde');
                    $('li.skills_list').css('color','black');

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
}