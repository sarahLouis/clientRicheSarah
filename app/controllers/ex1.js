import Controller from '@ember/controller';
import { tracked } from '@glimmer/tracking';
import { action } from '@ember/object';

export default class Ex1Controller extends Controller {
  @tracked content = 'valeur par defaut';
  MAX = 100;

  get size() {
    return this.MAX - this.content.length;
  }
  @action save() {
    console.log('test save' + this.content);
  }
}
