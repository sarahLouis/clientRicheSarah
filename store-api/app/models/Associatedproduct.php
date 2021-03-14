<?php
namespace models;
/**
 * @table('associatedproduct')
*/
class Associatedproduct{
	/**
	 * @id
	 * @column("name"=>"idProduct","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idProduct;

	/**
	 * @id
	 * @column("name"=>"idAssoProduct","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idAssoProduct;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Product","name"=>"idAssoProduct","nullable"=>false)
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Product","name"=>"idProduct","nullable"=>false)
	**/
	private $product;

	 public function getIdProduct(){
		return $this->idProduct;
	}

	 public function setIdProduct($idProduct){
		$this->idProduct=$idProduct;
	}

	 public function getIdAssoProduct(){
		return $this->idAssoProduct;
	}

	 public function setIdAssoProduct($idAssoProduct){
		$this->idAssoProduct=$idAssoProduct;
	}

	 public function getProduct(){
		return $this->product;
	}

	 public function setProduct($product){
		$this->product=$product;
	}

	 public function __toString(){
		return $this->idProduct.'';
	}

}