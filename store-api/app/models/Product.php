<?php
namespace models;
/**
 * @table('product')
*/
class Product{
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
	 * @column("name"=>"comments","nullable"=>true,"dbType"=>"text")
	**/
	private $comments;

	/**
	 * @column("name"=>"image","nullable"=>true,"dbType"=>"text")
	**/
	private $image;

	/**
	 * @column("name"=>"price","nullable"=>false,"dbType"=>"decimal(6,2)")
	 * @validator("notNull")
	**/
	private $price;

	/**
	 * @column("name"=>"promotion","nullable"=>false,"dbType"=>"decimal(6,2)")
	 * @validator("notNull")
	**/
	private $promotion;

	/**
	 * @oneToMany("mappedBy"=>"product","className"=>"models\\Associatedproduct")
	 * @oneToMany("mappedBy"=>"product","className"=>"models\\Associatedproduct")
	**/
	private $associatedproducts;

	/**
	 * @oneToMany("mappedBy"=>"product","className"=>"models\\Basketdetail")
	**/
	private $basketdetails;

	/**
	 * @oneToMany("mappedBy"=>"product","className"=>"models\\Orderdetail")
	**/
	private $orderdetails;

	/**
	 * @oneToMany("mappedBy"=>"product","className"=>"models\\Pack")
	 * @oneToMany("mappedBy"=>"product","className"=>"models\\Pack")
	**/
	private $packs;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Section","name"=>"idSection","nullable"=>false)
	**/
	private $section;

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

	 public function getComments(){
		return $this->comments;
	}

	 public function setComments($comments){
		$this->comments=$comments;
	}

	 public function getImage(){
		return $this->image;
	}

	 public function setImage($image){
		$this->image=$image;
	}

	 public function getPrice(){
		return $this->price;
	}

	 public function setPrice($price){
		$this->price=$price;
	}

	 public function getPromotion(){
		return $this->promotion;
	}

	 public function setPromotion($promotion){
		$this->promotion=$promotion;
	}

	 public function getAssociatedproducts(){
		return $this->associatedproducts;
	}

	 public function setAssociatedproducts($associatedproducts){
		$this->associatedproducts=$associatedproducts;
	}

	 public function getBasketdetails(){
		return $this->basketdetails;
	}

	 public function setBasketdetails($basketdetails){
		$this->basketdetails=$basketdetails;
	}

	 public function getOrderdetails(){
		return $this->orderdetails;
	}

	 public function setOrderdetails($orderdetails){
		$this->orderdetails=$orderdetails;
	}

	 public function getPacks(){
		return $this->packs;
	}

	 public function setPacks($packs){
		$this->packs=$packs;
	}

	 public function getSection(){
		return $this->section;
	}

	 public function setSection($section){
		$this->section=$section;
	}

	 public function __toString(){
		return ($this->promotion??'no value').'';
	}

}