import barba from '@barba/core';

export default function (routes) {
// define a global hook
barba.hooks.leave((data) => {
  // this hook will be called for each transitions
});

barba.init({
  transitions: [{

    name: 'svg-circle',
      leave(data) { 

        // retrieve the current page url
        const from = data.current.url;
         routes.loadEvents();
      },
      enter({ next }) {
        // retrieve the next page url (short syntax)
        const to = next.url;
      },

    // // basic style
    // leave(data) {
    //   // create your stunning leave animation here
    // },

    // // async/await style
    // async leave(data) {
    //   await asyncAnimation(data.current.container);
    // },

    // // `this.async()` style
    // leave(data) {
    //   const done = this.async();

    //   callbackAnimation(data.current.container, {
    //     onComplete: () => {
    //       done();
    //     },
    //   });
    // },

    // // using a promise, returned with arrow function
    // leave: (data) => asyncAnimation(data.current.container),

    // // es6 syntax: `{ current } = data.current`
    // leave: ({ current }) => asyncAnimation(current.container),

    // // using a promise
    // leave: (data) => {
    //   return new Promise(resolve => {
    //     callbackAnimation(data.current.container, {
    //       onComplete: () => {
    //         resolve();
    //       },
    //     });
    //   });
    // }
  }]
});


}

  
