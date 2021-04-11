import Route from '@ember/routing/route';
import { action } from '@ember/object';
import Abstractroute from '../Abstractroute';

export default class SectionAddProductRoute extends Abstractroute {
  @action
  goBack() {
    this.transitionTo('section');
  }
}
