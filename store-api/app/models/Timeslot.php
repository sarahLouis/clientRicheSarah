<?php
namespace models;
/**
 * @table('timeslot')
*/
class Timeslot{
	/**
	 * @id
	 * @column("name"=>"id","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $id;

	/**
	 * @column("name"=>"slotDate","nullable"=>false,"dbType"=>"datetime")
	 * @validator("type","dateTime","constraints"=>array("notNull"=>true))
	**/
	private $slotDate;

	/**
	 * @column("name"=>"full","nullable"=>false,"dbType"=>"tinyint(1)")
	 * @validator("isBool","constraints"=>array("notNull"=>true))
	**/
	private $full;

	/**
	 * @column("name"=>"expired","nullable"=>false,"dbType"=>"tinyint(1)")
	 * @validator("isBool","constraints"=>array("notNull"=>true))
	**/
	private $expired;

	/**
	 * @oneToMany("mappedBy"=>"timeslot","className"=>"models\\Order")
	**/
	private $orders;

	 public function getId(){
		return $this->id;
	}

	 public function setId($id){
		$this->id=$id;
	}

	 public function getSlotDate(){
		return $this->slotDate;
	}

	 public function setSlotDate($slotDate){
		$this->slotDate=$slotDate;
	}

	 public function getFull(){
		return $this->full;
	}

	 public function setFull($full){
		$this->full=$full;
	}

	 public function getExpired(){
		return $this->expired;
	}

	 public function setExpired($expired){
		$this->expired=$expired;
	}

	 public function getOrders(){
		return $this->orders;
	}

	 public function setOrders($orders){
		$this->orders=$orders;
	}

	 public function __toString(){
		return ($this->expired??'no value').'';
	}

}