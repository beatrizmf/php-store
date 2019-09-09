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

  public function getProductId()
  {
    return $this->id;
  }

  public function getPricePurchase()
  {
    return $this->id;
  }

  public function getPriceSale()
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

  public function setProductId($id)
  {
    $this->id = $id;
  }

  public function setPricePurchase($id)
  {
    $this->id = $id;
  }

  public function setPriceSale($id)
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
