import Route from '@ember/routing/route';
import {datas, promos} from 'tds/data/datas';
import {Services} from 'tds/classes/services';
import {action, set} from '@ember/object';


export default class Ex2Route extends Route {
  model(){
    return new Services(datas, promos);
  }

  @action toggleActive(service) {
    if (service.active == true) {
      service.active = false;
    } else {
      service.actice == true;
    }
  }

  @action valider(){
    // eslint-disable-next-line no-unused-vars
    let model = this.modelFor(this.routeName);
    this.transitionTo('/ex2/promo');
  }
}
