<?php
namespace models;
/**
 * @table('basketdetail')
*/
class Basketdetail{
	/**
	 * @id
	 * @column("name"=>"idBasket","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idBasket;

	/**
	 * @id
	 * @column("name"=>"idProduct","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idProduct;

	/**
	 * @column("name"=>"quantity","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("notNull")
	**/
	private $quantity;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Basket","name"=>"idBasket","nullable"=>false)
	**/
	private $basket;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Product","name"=>"idProduct","nullable"=>false)
	**/
	private $product;

	 public function getIdBasket(){
		return $this->idBasket;
	}

	 public function setIdBasket($idBasket){
		$this->idBasket=$idBasket;
	}

	 public function getIdProduct(){
		return $this->idProduct;
	}

	 public function setIdProduct($idProduct){
		$this->idProduct=$idProduct;
	}

	 public function getQuantity(){
		return $this->quantity;
	}

	 public function setQuantity($quantity){
		$this->quantity=$quantity;
	}

	 public function getBasket(){
		return $this->basket;
	}

	 public function setBasket($basket){
		$this->basket=$basket;
	}

	 public function getProduct(){
		return $this->product;
	}

	 public function setProduct($product){
		$this->product=$product;
	}

	 public function __toString(){
		return ($this->quantity??'no value').'';
	}

}