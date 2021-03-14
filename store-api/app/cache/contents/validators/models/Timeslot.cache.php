<?php
return array("id"=>array(array("type"=>"id","constraints"=>array("autoinc"=>true))),"slotDate"=>array(array("type"=>"type","constraints"=>array("ref"=>"dateTime","notNull"=>true))),"full"=>array(array("type"=>"isBool","constraints"=>array("notNull"=>true))),"expired"=>array(array("type"=>"isBool","constraints"=>array("notNull"=>true))));
