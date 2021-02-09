import { helper } from '@ember/component/helper';

export default helper(function arrayContainer(params/*, hash*/) {
  const [items, value, prop] = params;
  let id = prop || 'id';
  return items.filterBy(id, value).length > 0;
});
