<?php
namespace models;
/**
 * @table('order')
*/
class Order{
	/**
	 * @id
	 * @column("name"=>"id","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $id;

	/**
	 * @column("name"=>"dateCreation","nullable"=>false,"dbType"=>"timestamp")
	 * @validator("notNull")
	**/
	private $dateCreation;

	/**
	 * @column("name"=>"status","nullable"=>false,"dbType"=>"enum('created','prepared','delivered','')")
	 * @validator("notNull")
	**/
	private $status;

	/**
	 * @column("name"=>"amount","nullable"=>false,"dbType"=>"decimal(6,2)")
	 * @validator("notNull")
	**/
	private $amount;

	/**
	 * @column("name"=>"toPay","nullable"=>false,"dbType"=>"decimal(6,2)")
	 * @validator("notNull")
	**/
	private $toPay;

	/**
	 * @column("name"=>"itemsNumber","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("notNull")
	**/
	private $itemsNumber;

	/**
	 * @column("name"=>"missingNumber","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("notNull")
	**/
	private $missingNumber;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Employee","name"=>"idEmployee","nullable"=>false)
	**/
	private $employee;

	/**
	 * @oneToMany("mappedBy"=>"order","className"=>"models\\Orderdetail")
	**/
	private $orderdetails;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Timeslot","name"=>"idTimeslot","nullable"=>false)
	**/
	private $timeslot;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\User","name"=>"idUser","nullable"=>false)
	**/
	private $user;

	 public function getId(){
		return $this->id;
	}

	 public function setId($id){
		$this->id=$id;
	}

	 public function getDateCreation(){
		return $this->dateCreation;
	}

	 public function setDateCreation($dateCreation){
		$this->dateCreation=$dateCreation;
	}

	 public function getStatus(){
		return $this->status;
	}

	 public function setStatus($status){
		$this->status=$status;
	}

	 public function getAmount(){
		return $this->amount;
	}

	 public function setAmount($amount){
		$this->amount=$amount;
	}

	 public function getToPay(){
		return $this->toPay;
	}

	 public function setToPay($toPay){
		$this->toPay=$toPay;
	}

	 public function getItemsNumber(){
		return $this->itemsNumber;
	}

	 public function setItemsNumber($itemsNumber){
		$this->itemsNumber=$itemsNumber;
	}

	 public function getMissingNumber(){
		return $this->missingNumber;
	}

	 public function setMissingNumber($missingNumber){
		$this->missingNumber=$missingNumber;
	}

	 public function getEmployee(){
		return $this->employee;
	}

	 public function setEmployee($employee){
		$this->employee=$employee;
	}

	 public function getOrderdetails(){
		return $this->orderdetails;
	}

	 public function setOrderdetails($orderdetails){
		$this->orderdetails=$orderdetails;
	}

	 public function getTimeslot(){
		return $this->timeslot;
	}

	 public function setTimeslot($timeslot){
		$this->timeslot=$timeslot;
	}

	 public function getUser(){
		return $this->user;
	}

	 public function setUser($user){
		$this->user=$user;
	}

	 public function __toString(){
		return ($this->missingNumber??'no value').'';
	}

}