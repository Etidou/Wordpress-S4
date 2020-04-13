import $ from 'jquery';
import gsap  from 'gsap';
import barba from '@barba/core';
import Preloader from '../page/Preloader';
import Cursor from '../page/Cursor';



export default {
  init() {
    // JavaScript to be fired on all pages


$('.ep-menu-deco').click(function(){
    $('.ep-menu-deco').toggleClass('open');
    $('.ep-menu').toggleClass('open');
    $('.menu-wrapper').toggleClass('open');
    $('body').toggleClass('open');



var tlmenu = gsap.timeline();
    tlmenu.from('a.link-menu', { duration: 1, translateY: 50})
    tlmenu.to('a.link-menu', { duration: 1, translateY: 0})


    
});





$('a.menu__item-link_hover').click(function(){
    $('.ep-menu-deco').toggleClass('open');
    $('.ep-menu').toggleClass('open');
    $('body.open').removeClass('open');

	
});



    function pageTransition() { 

	var tl = gsap.timeline();	
	tl.to('ul.transition li', { duration: .5, scaleY: 1, transformOrigin: 'bottom left', stagger: .05})
	tl.to('ul.transition li', { duration: .5, scaleY: 0, transformOrigin: 'bottom left', stagger: .05,delay: .1})
}





function delay(n) {
	n = n || 2000;
	return new Promise(done => {
		setTimeout(() => {
			done();

		}, n);
	});
}


function contentAnimation() {

	var tl = gsap.timeline();

	tl.from('.bleft', {duration: 2.5, translateY: 50, opacity: 0, stagger: .05})

	// tl.from('.left', {duration: 1.5, translateY: 50, opacity: 0})
	// tl.to('img', {clipPath:'polygon(0 0, 100% 0, 100% 100%, 0 100%)'})
	
}


barba.init ({
	sync:true,

	transitions: [{
		leave(data) {
			const done=this.async();

			pageTransition();
			// await 
			delay(1500);
			done();

			console.log(data);

		},
		enter(data) {
			contentAnimation();
			console.log(data);
			new Cursor();
		},

		once(data) {
			contentAnimation();
			console.log(data);
		},
	}],
});






  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    new Preloader();
    new Cursor();
  },
};
