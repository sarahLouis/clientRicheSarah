<?php
return array("#tableName"=>"order","#primaryKeys"=>array("id"),"#manyToOne"=>array("employee","timeslot","user"),"#fieldNames"=>array("id"=>"id","dateCreation"=>"dateCreation","status"=>"status","amount"=>"amount","toPay"=>"toPay","itemsNumber"=>"itemsNumber","missingNumber"=>"missingNumber","employee"=>"idEmployee","orderdetails"=>"orderdetails","timeslot"=>"idTimeslot","user"=>"idUser"),"#fieldTypes"=>array("id"=>"int(11)","dateCreation"=>"timestamp","status"=>"enum('created','prepared','delivered','')","amount"=>"decimal(6,2)","toPay"=>"decimal(6,2)","itemsNumber"=>"int(11)","missingNumber"=>"int(11)","employee"=>false,"orderdetails"=>"mixed","timeslot"=>false,"user"=>false),"#nullable"=>array(),"#notSerializable"=>array("employee","orderdetails","timeslot","user"),"#transformers"=>array(),"#accessors"=>array("id"=>"setId","dateCreation"=>"setDateCreation","status"=>"setStatus","amount"=>"setAmount","toPay"=>"setToPay","itemsNumber"=>"setItemsNumber","missingNumber"=>"setMissingNumber","idEmployee"=>"setEmployee","orderdetails"=>"setOrderdetails","idTimeslot"=>"setTimeslot","idUser"=>"setUser"),"#oneToMany"=>array("orderdetails"=>array("mappedBy"=>"order","className"=>"models\\Orderdetail")),"#joinColumn"=>array("employee"=>array("className"=>"models\\Employee","name"=>"idEmployee","nullable"=>false),"timeslot"=>array("className"=>"models\\Timeslot","name"=>"idTimeslot","nullable"=>false),"user"=>array("className"=>"models\\User","name"=>"idUser","nullable"=>false)),"#invertedJoinColumn"=>array("idEmployee"=>array("member"=>"employee","className"=>"models\\Employee"),"idTimeslot"=>array("member"=>"timeslot","className"=>"models\\Timeslot"),"idUser"=>array("member"=>"user","className"=>"models\\User")));
