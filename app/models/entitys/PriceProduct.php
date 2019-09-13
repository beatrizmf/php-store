<?php

class PriceProduct
{
  private $id;
  private $productId;
  private $pricePurchase;
  private $priceSale;
  private $quantity;
  private $status;

  public function __construct($id, $productId=null, $pricePurchase=null, $priceSale=null, $quantity=null, $status = 1)
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
    return $this->productId;
  }

  public function getPricePurchase()
  {
    return $this->pricePurchase;
  }

  public function getPriceSale()
  {
    return $this->priceSale;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setProductId($productId)
  {
    $this->productId = $productId;
  }

  public function setPricePurchase($pricePurchase)
  {
    $this->pricePurchase = $pricePurchase;
  }

  public function setPriceSale($priceSale)
  {
    $this->id = $priceSale;
  }

  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }
}
