<?php
namespace models;
/**
 * @table('orderdetail')
*/
class Orderdetail{
	/**
	 * @id
	 * @column("name"=>"idOrder","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idOrder;

	/**
	 * @id
	 * @column("name"=>"idProduct","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idProduct;

	/**
	 * @column("name"=>"quantity","nullable"=>false,"dbType"=>"decimal(6,2)")
	 * @validator("notNull")
	**/
	private $quantity;

	/**
	 * @column("name"=>"prepared","nullable"=>false,"dbType"=>"tinyint(1)")
	 * @validator("isBool","constraints"=>array("notNull"=>true))
	**/
	private $prepared;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Order","name"=>"idOrder","nullable"=>false)
	**/
	private $order;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Product","name"=>"idProduct","nullable"=>false)
	**/
	private $product;

	 public function getIdOrder(){
		return $this->idOrder;
	}

	 public function setIdOrder($idOrder){
		$this->idOrder=$idOrder;
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

	 public function getPrepared(){
		return $this->prepared;
	}

	 public function setPrepared($prepared){
		$this->prepared=$prepared;
	}

	 public function getOrder(){
		return $this->order;
	}

	 public function setOrder($order){
		$this->order=$order;
	}

	 public function getProduct(){
		return $this->product;
	}

	 public function setProduct($product){
		$this->product=$product;
	}

	 public function __toString(){
		return ($this->prepared??'no value').'';
	}

}