import Route from '@ember/routing/route';
import { action } from '@ember/object';

export default class SectionRoute extends Route {
  model() {
    return this.store.query('section', {});
  }

  @action
  addProduct() {
    this.transitionTo('section.addProduct');
  }

  @action
  add() {
    this.transitionTo('section.add');
  }
}
