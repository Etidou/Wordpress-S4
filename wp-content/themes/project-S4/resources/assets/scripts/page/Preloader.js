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
        this.innerOverlay = $('.preload-overlay .overlay');
        this.$marquee= $('p.add_style_loader');

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
            .staggerTo(this.$textContainerOverlay, 2, {
                y: '0%',
                stagger: 0.8,
                rotation:-3,
                ease: Expo.easeOut,
            }, '+=0.1')

            .to(this.$preloadOverlay, 0, {
                 backgroundColor:'#f8ecde',
                y: '0%',
                 ease: Power4.easeInOut,
             })


            .to(this.$preloadOverlay, 1, {
                 backgroundColor:'#000000',
                y: '0%',
                 ease: Power4.easeInOut,
             })
            .to(this.$textContainerOverlay, 2, {
                color:'#ffffff',
            })

            .to(this.$marquee, 2, {
                opacity:1,
            })



            .to(this.$preloadOverlay, 100000, {
                 backgroundColor:'#000000',
                y: '0%',
                 ease: Power4.easeInOut,
             },'-=0.2')



            .to(this.$preloadOverlay, 4.5, {
                backgroundColor:'#f8ecde',
                y: '100%',
                 ease: Power4.easeInOut,
             },'-=1')









             .from($('.item-keyword'), 1.5, {
                y: '-5%',
                opacity: 0,
                 ease: Power4.easeInOut,
             })
        });
    }
}