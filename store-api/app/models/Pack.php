<?php
namespace models;
/**
 * @table('pack')
*/
class Pack{
	/**
	 * @id
	 * @column("name"=>"idProduct","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idProduct;

	/**
	 * @id
	 * @column("name"=>"idPack","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idPack;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Product","name"=>"idProduct","nullable"=>false)
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Product","name"=>"idPack","nullable"=>false)
	**/
	private $product;

	 public function getIdProduct(){
		return $this->idProduct;
	}

	 public function setIdProduct($idProduct){
		$this->idProduct=$idProduct;
	}

	 public function getIdPack(){
		return $this->idPack;
	}

	 public function setIdPack($idPack){
		$this->idPack=$idPack;
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