<?php

class Sale
{
  private $id;
  private $statusSaleId;
  private $userId;

  public function __construct($id, $statusSaleId = 1, $userId = null)
  {
    $this->id = $id;
    $this->statusSaleId = $statusSaleId;
    $this->userId = $userId;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getStatusSaleId()
  {
    return $this->statusSaleId;
  }

  public function getUserId()
  {
    return $this->userId;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setStatusSaleId($statusSaleId)
  {
    $this->statusSaleId = $statusSaleId;
  }

  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
}
