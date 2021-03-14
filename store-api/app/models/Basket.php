<?php
namespace models;
/**
 * @table('basket')
*/
class Basket{
	/**
	 * @id
	 * @column("name"=>"id","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $id;

	/**
	 * @column("name"=>"name","nullable"=>false,"dbType"=>"varchar(60)")
	 * @validator("length","constraints"=>array("max"=>60,"notNull"=>true))
	**/
	private $name;

	/**
	 * @column("name"=>"dateCreation","nullable"=>false,"dbType"=>"timestamp")
	 * @validator("notNull")
	**/
	private $dateCreation;

	/**
	 * @oneToMany("mappedBy"=>"basket","className"=>"models\\Basketdetail")
	**/
	private $basketdetails;

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

	 public function getName(){
		return $this->name;
	}

	 public function setName($name){
		$this->name=$name;
	}

	 public function getDateCreation(){
		return $this->dateCreation;
	}

	 public function setDateCreation($dateCreation){
		$this->dateCreation=$dateCreation;
	}

	 public function getBasketdetails(){
		return $this->basketdetails;
	}

	 public function setBasketdetails($basketdetails){
		$this->basketdetails=$basketdetails;
	}

	 public function getUser(){
		return $this->user;
	}

	 public function setUser($user){
		$this->user=$user;
	}

	 public function __toString(){
		return ($this->dateCreation??'no value').'';
	}

}