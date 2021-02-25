import Route from '@ember/routing/route';
import { action } from '@ember/object';

export default class ContactsUpdateRoute extends Route {
  @action save(contact) {
    contact.save().then(() => {
      this.transistionTo('contact');
    });
  }

  renderTemplate() {
    this.render('contacts.add');
  }
}
