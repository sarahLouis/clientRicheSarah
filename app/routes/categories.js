import Route from '@ember/routing/route';
import { service } from '@ember/service';

export default class CategoriesRoute extends Route {
  @service serv;

  model() {
    return this.store.findAll('category');
  }

  afterModel(model) {
    this.store.findAll('contact');
    if(model.length > 0 && false){
      this.transitionTo('categories.contacts', model.get('firstObject'));
    }
  }
}
