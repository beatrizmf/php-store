<?php

class Product
{
  private $id;
  private $name;
  private $virtualCurrentPrice;
  private $virtualCurrentQuantity;

  public function __construct($id, $name = null, $virtualCurrentPrice = null, $virtualCurrentQuantity = null)
  {
    $this->id = $id;
    $this->name = $name;
    $this->virtualCurrentPrice = $virtualCurrentPrice;
    $this->virtualCurrentQuantity = $virtualCurrentQuantity;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPrice()
  {
    return $this->virtualCurrentPrice;
  }

  public function getQuantity(){
    return $this->virtualCurrentQuantity;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setPrice($virtualCurrentPrice)
  {
    $this->virtualCurrentPrice = $virtualCurrentPrice;
  }

  public function setQuatity($virtualCurrentQuantity){
    $this->virtualCurrentQuantity = $virtualCurrentQuantity;
  }
}
