// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

// base package
import fontawesome from "@fortawesome/fontawesome";
// Facebook and Twitter icons
import faFacebookF from "@fortawesome/fontawesome-free-brands/faFacebookF";
import faGoodreadsG from "@fortawesome/fontawesome-free-brands/faGoodreadsG";
import faTwitter from "@fortawesome/fontawesome-free-brands/faTwitter";
import faCircle from "@fortawesome/fontawesome-free-solid/faCircle";
import faUser from "@fortawesome/fontawesome-free-solid/faUser";
import faCalendarAlt from "@fortawesome/fontawesome-free-solid/faCalendarAlt";
import faCaretRight from "@fortawesome/fontawesome-free-solid/faCaretRight";
import faSearch from "@fortawesome/fontawesome-free-solid/faSearch";
import faHome from "@fortawesome/fontawesome-free-solid/faHome";
import faBook from "@fortawesome/fontawesome-free-solid/faBook";
import faComments from "@fortawesome/fontawesome-free-solid/faComments";
import faEnvelope from "@fortawesome/fontawesome-free-solid/faEnvelope";
import faCameraRetro from "@fortawesome/fontawesome-free-solid/faCameraRetro";
import faComment from '@fortawesome/fontawesome-free-regular/faComment';
import faFileAlt from '@fortawesome/fontawesome-free-regular/faFileAlt';
import faAngleDown from '@fortawesome/fontawesome-free-solid/faAngleDown';
import faAngleRight from '@fortawesome/fontawesome-free-solid/faAngleRight';
import faAngleLeft from '@fortawesome/fontawesome-free-solid/faAngleLeft';

// add the imported icons to the library
fontawesome.library.add(faFacebookF, faAngleDown, faTwitter, faCircle, faAngleLeft, faAngleRight, faGoodreadsG, faFileAlt, faCalendarAlt, faCaretRight, faSearch, faHome, faBook, faUser, faComments, faEnvelope, faCameraRetro, faComment);


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
