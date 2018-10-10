import $ from 'jquery';
// Helpers
import { prefix } from './helpers/';

// Modules
// import nav from './modules/nav';

// Vendors
import androidStockBrowsers from './vendors/androidStockBrowsers';

// Helpers
// import smoothScroll from './helpers/smoothScroll';

$(() => {
  androidStockBrowsers();

  // Get page name using class
  const page = $('body').attr('class');

  if (page) {
    switch (page.split(' ')[0]) {
      case `${prefix}-p-home`: {
        console.info('hello home page');
      } break;
      default:
        console.warn('Not found style matches.');
        break;
    }
  } else {
    console.warn('Not found classes attached to html body tag.');
  }
});
