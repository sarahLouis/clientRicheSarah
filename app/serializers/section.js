import JSONSerializer from '@ember-data/serializer/json';
import { EmbeddedRecordsMixin } from '@ember-data/serializer/rest';

export default class SectionSerializer extends JSONSerializer.extends(
  EmbeddedRecordsMixin
) {
  attrs = {
    products: { embedded: 'always' },
  };
}
