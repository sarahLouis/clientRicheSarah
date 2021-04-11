import Abstractroute from "./Abstractroute";
import { action } from '@ember/object';
export default class SectionRoute extends Abstractroute {
  model() {
  }

  @action
  addSection(){
    this.transitionTo('section.add');
  }

  @action
  addProduit(){
    this.transitionTo('section.addProduct');
  }
  @action DeleteSection(section) {
    this.deleteProducts(section.products).then(() => {
      section.destroyRecord();
    });
  }
}
