<?php
namespace models;
/**
 * @table('user')
*/
class User{
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
	 * @column("name"=>"email","nullable"=>false,"dbType"=>"varchar(100)")
	 * @validator("email","constraints"=>array("notNull"=>true))
	 * @validator("length","constraints"=>array("max"=>100))
	**/
	private $email;

	/**
	 * @column("name"=>"password","nullable"=>false,"dbType"=>"varchar(100)")
	 * @validator("length","constraints"=>array("max"=>100,"notNull"=>true))
	**/
	private $password;

	/**
	 * @oneToMany("mappedBy"=>"user","className"=>"models\\Basket")
	**/
	private $baskets;

	/**
	 * @oneToMany("mappedBy"=>"user","className"=>"models\\Order")
	**/
	private $orders;

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

	 public function getEmail(){
		return $this->email;
	}

	 public function setEmail($email){
		$this->email=$email;
	}

	 public function getPassword(){
		return $this->password;
	}

	 public function setPassword($password){
		$this->password=$password;
	}

	 public function getBaskets(){
		return $this->baskets;
	}

	 public function setBaskets($baskets){
		$this->baskets=$baskets;
	}

	 public function getOrders(){
		return $this->orders;
	}

	 public function setOrders($orders){
		$this->orders=$orders;
	}

	 public function __toString(){
		return ($this->email??'no value').'';
	}

}