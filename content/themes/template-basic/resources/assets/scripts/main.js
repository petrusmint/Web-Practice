// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';

// base package
import fontawesome from "@fortawesome/fontawesome";

// Facebook and Twitter icons
import faFacebookF from "@fortawesome/fontawesome-free-brands/faFacebookF";
import faGoodreadsG from "@fortawesome/fontawesome-free-brands/faGoodreadsG";
import faTwitter from "@fortawesome/fontawesome-free-brands/faTwitter";
import faCircle from "@fortawesome/fontawesome-free-solid/faCircle";
import faUser from "@fortawesome/fontawesome-free-solid/faUser";
import faCalendarAlt from "@fortawesome/fontawesome-free-solid/faCalendarAlt";
import faSearch from "@fortawesome/fontawesome-free-solid/faSearch";
import faHome from "@fortawesome/fontawesome-free-solid/faHome";
import faBook from "@fortawesome/fontawesome-free-solid/faBook";
import faFileAlt from "@fortawesome/fontawesome-free-regular/faFileAlt"; 
import faEnvelope from "@fortawesome/fontawesome-free-solid/faEnvelope";
import faShoppingCart from "@fortawesome/fontawesome-free-solid/faShoppingCart";
import faAngleDoubleDown from "@fortawesome/fontawesome-free-solid/faAngleDoubleDown";


// add the imported icons to the library
fontawesome.library.add(faFacebookF, faTwitter, faCircle, faGoodreadsG, faCalendarAlt, faSearch, faHome, faBook, faFileAlt, faUser, faEnvelope, faShoppingCart, faAngleDoubleDown);

 
/** Populate Router instance with DOM routes */
const routes = new Router({ 
  // All pages 
  common,
  
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
