import EmberRouter from '@ember/routing/router';
import config from 'tds/config/environment';

export default class Router extends EmberRouter {
  location = config.locationType;
  rootURL = config.rootURL;
}

Router.map(function () {
  this.route('board');
  this.route('logout');
  this.route('section', function () {
    this.route('add');
    this.route('addProduct');
    this.route('delete', { path: 'delete/:section_id' });
    this.route('edit', { path: 'edit/:section_id' });
  });
  this.route('products');
});
