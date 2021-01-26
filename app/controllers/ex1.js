import Controller from '@ember/controller';
import { tracked } from '@glimmer/tracking';
import { action } from '@ember/object';

export default class Ex1Controller extends Controller {
  @tracked content = 'valeur par defaut';
  @tracked info = '';
  MAX = 100;
  lala = '';

  get style(){
    if (this.size <= 50 && this.size > 20){
      return 'warning';
    }
    if (this.size <= 20) {
      return 'danger';
    }
    return 'info';
  }

  get size() {
    return this.MAX - this.content.length;
  }
  @action save() {
    this.lala = this.content;
  }
  @action clear(){
    this.content = '';
  }
  @action update(){
    this.info = 'Note modifiée';
  }

}
