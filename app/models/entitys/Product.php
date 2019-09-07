<?php

class Product
{
  private $id;
  private $name;
  private $virtualCurrentlPrice;

  public function __construct($id, $name = null, $virtualCurrentlPrice = null)
  {
    $this->id = $id;
    $this->name = $name;
    $this->virtualCurrentlPrice = $virtualCurrentlPrice;
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
    return $this->virtualCurrentlPrice;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setPrice($virtualCurrentlPrice)
  {
    $this->virtualCurrentlPrice = $virtualCurrentlPrice;
  }
}
