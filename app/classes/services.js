export default class Services {

  services = [];

  constructor(serv) {
    this.services = serv;
  }

  get countActive() {
    return this.services.filterBy('active', true).length;
  }

  get sumActive() {
    somme = 0;
    for (i=0, i<=this.services.length; i++) {
      if(this.services[i].filterBy('active', true)) {
        somme += this.services[i].price;
      }
  }
    return somme;
  }
}
