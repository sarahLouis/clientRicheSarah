<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
  'JsonApiResponseFormatter' => 'Ubiquity\\controllers\\rest\\api\\jsonapi\\JsonApiResponseFormatter',
  'ResponseFormatter' => 'Ubiquity\\controllers\\rest\\ResponseFormatter',
),
  '#traitMethodOverrides' => array (
  'controllers\\MyRestController' => 
  array (
  ),
),
  'controllers\\MyRestController' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', "/rest","inherited"=>true,"automated"=>true),
    array('#name' => 'rest', '#type' => 'Ubiquity\\annotations\\rest\\RestAnnotation')
  ),
);

