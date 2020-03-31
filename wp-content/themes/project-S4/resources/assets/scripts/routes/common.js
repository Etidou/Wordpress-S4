// import $ from 'jquery';
import gsap  from 'gsap';
import barba from '@barba/core';
import kursor from 'kursor';



export default {
  init() {
    // JavaScript to be fired on all pages

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
	tl.from('.left', {duration: 1.5, translateY: 50, opacity: 0})
	tl.to('img', {clipPath:'polygon(0 0, 100% 0, 100% 100%, 0 100%)'})

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
		},

		once(data) {
			contentAnimation();
			console.log(data);
		},
	}],
})
new kursor({
            type: 4,
            removeDefaultCursor: true,
            color:'#476582',
        })

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
