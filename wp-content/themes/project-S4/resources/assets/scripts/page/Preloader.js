import {TimelineMax, Power4, Expo} from 'gsap';
export default class Preloader{
    constructor() {
        this.initsEls();
        this.initEvents(); 
    }
    initsEls() {
        this.$preloadOverlay = $('.preload-overlay');
        this.$containerOverlay = $('.preload-overlay .container');
        this.$textContainerOverlay = $('.preload-overlay .container div.text_loader .text');
        this.$textdiv = $('div.text_loader');
        this.innerOverlay = $('.preload-overlay .overlay');
        this.$marquee= $('p.add_style_loader');
        this.$none= $('div.column_loader_left');

    }
    initEvents() { 
        this.preloadAnimation();
    }


    preloadAnimation() {
        $(window).on('load', ()=> {
            this.$containerOverlay.css({
                display: 'flex',
            })
            $('#feature').text('et')
            let tl = new TimelineMax();
            tl
            .staggerTo(this.$textContainerOverlay, 1, {
                y: '0%',
                stagger: 0.8,
                ease: Expo.easeOut,
            }, '+=0.1')

            .to(this.$textdiv, 0.5, {
                rotation:-3,
                ease: Expo.easeOut,
            }, '+=0.1')

            .to(this.$preloadOverlay, 0, {
             backgroundColor:'#f8ecde',
             y: '0%',
             ease: Power4.easeInOut,
         })

            .to(this.$textContainerOverlay, 0.25, {
                color:'#ffffff',
            })

            .to(this.$preloadOverlay, 0.25, {
             backgroundColor:'#000000',
             y: '0%',
             ease: Power4.easeInOut,
         })

            .to(this.$marquee, 0.5, {
                opacity:1,
            })

            .to(this.$preloadOverlay, 4.5, {
             backgroundColor:'#000000',
             y: '0%',
             ease: Power4.easeInOut,
         },'-=0.2')

            .to(this.$marquee, 0.05, {
                opacity:0,
            })


            .to(this.$marquee,0.05,{
                display:'none',
            })



            .to(this.$preloadOverlay, 1, {
                backgroundColor:'#f8ecde',
                y: '100%',
                ease: Power4.easeInOut,
            })

            .to(this.$marquee, 0.05, {
                opacity:0,
            })


            .to(this.$marquee,0.05,{
                display:'none',
            })

            
            .to(this.$none,0,{
                display:'none',
            })
            

            .to(this.$preloadOverlay, 0, {
                display:'none',
            })

            .from($('.item-keyword'), 1.5, {
                y: '-5%',
                opacity: 0,
                ease: Power4.easeInOut,
            })
        });
    }
}