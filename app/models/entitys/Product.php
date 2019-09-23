<?php

class Product
{
  private $id;
  private $name;
  private $virtualCurrentPrice;
  private $virtualCurrentQuantify;

  public function __construct($id, $name = null, $virtualCurrentPrice = null, $virtualCurrentQuantify = null)
  {
    $this->id = $id;
    $this->name = $name;
    $this->virtualCurrentPrice = $virtualCurrentPrice;
    $this->virtualCurrentQuantify = $virtualCurrentQuantify;
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

  public function getQuantify(){
    return $this->virtualCurrentQuantify;
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

  public function setQuatify($virtualCurrentQuantify){
    $this->virtualCurrentQuantify = $virtualCurrentQuantify;
  }
}
