import Model, { attr, hasMany } from '@ember-data/model';
export default class CetegoryModel extends Model{
  @attr('string') nom;
  @hasMany('contact') contact;
}
