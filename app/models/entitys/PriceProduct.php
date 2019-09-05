<?php

class PriceProduct
{
  private $id;
  private $productId;
  private $pricePurchase;
  private $priceSale;
  private $quantity;
  private $status;

  public function __construct($id, $productId, $pricePurchase, $priceSale, $quantity, $status = 1)
  {
    $this->id = $id;
    $this->productId = $productId;
    $this->pricePurchase = $pricePurchase;
    $this->priceSale = $priceSale;
    $this->quantity = $quantity;
    $this->status = $status;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getproductId()
  {
    return $this->id;
  }

  public function getpricePurchase()
  {
    return $this->id;
  }

  public function getpriceSale()
  {
    return $this->id;
  }

  public function getQuantity()
  {
    return $this->id;
  }

  public function getStatus()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setproductId($id)
  {
    $this->id = $id;
  }

  public function setpricePurchase($id)
  {
    $this->id = $id;
  }

  public function setpriceSale($id)
  {
    $this->id = $id;
  }

  public function setQuantity($id)
  {
    $this->id = $id;
  }

  public function setStatus($id)
  {
    $this->id = $id;
  }
}
