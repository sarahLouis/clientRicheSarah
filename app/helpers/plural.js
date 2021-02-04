import { helper } from '@ember/component/helper';

// eslint-disable-next-line no-undef
switch (nb) {
  case 0:
    return 'Aucun service selectionné';
  case 1:
    // eslint-disable-next-line no-undef
    return nb + 'service selectionné';
  default:
    // eslint-disable-next-line no-undef
    return nb + 'service selectionné';
}

export default helper(plural);

