import Route from '@ember/routing/route';
import { action } from '@ember/object';
import { inject as service } from '@ember/service';

export default class IndexRoute extends Route {
  @service userAuth;
  model() {
    return {};
  }

  @action
  login(name, password) {
    this.store
      .query('employee', {
        filter: {
          name: name,
        },
      })
      .then((users) => {
        if (users.length) {
          let user = users.firstObject;
          if (password == user.password) {
            this.userAuth.login(user);
            this.transitionTo('board');
          }
        }
      });
  }
}
