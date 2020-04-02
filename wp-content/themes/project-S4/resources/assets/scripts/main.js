// import external dependencies
import $ from 'jquery';



// Import everything from autoload
import './autoload/**/*'



// import barba from './routes/common';


// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import realisations from './routes/realisations';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  realisations,

});

// Load Events
$(document).ready(() => routes.loadEvents());
//       { barba(routes);
//     }
// );
