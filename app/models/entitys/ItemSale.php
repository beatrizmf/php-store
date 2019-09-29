<?php

class ItemSale
{
  private $id;
  private $saleId;
  private $priceProductId;
  private $quantity;

  public function __construct($id, $saleId = null, $priceProductId = null, $quantity = 1)
  {
    $this->id = $id;
    $this->saleId = $saleId;
    $this->priceProductId = $priceProductId;
    $this->quantity = $quantity;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getSaleId()
  {
    return $this->saleId;
  }

  public function getPriceProductId()
  {
    return $this->priceProductId;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setSaleId($saleId)
  {
    $this->saleId = $saleId;
  }

  public function setPriceProductId($priceProductId)
  {
    $this->priceProductId = $priceProductId;
  }

  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
}
