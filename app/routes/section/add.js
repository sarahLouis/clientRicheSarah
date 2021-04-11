import { action } from '@ember/object';
import Abstractroute from '../Abstractroute';

export default class SectionAddRoute extends Abstractroute {
  model() {
    return {};
  }

  @action
  goBack() {
    this.transitionTo('section');
  }
  @action
  addSection(section) {
    let secti = this.store.createRecord('section', section);
    secti.save();
    this.transitionTo('section');
  }
}
