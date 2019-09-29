<?php

require_once PATH_APP . "/models/DAO/DAO.php";
require_once PATH_APP . "/models/entitys/Sale.php";

class SaleDAO extends DAO
{
  public function insert($SaleObj)
  {
    try {
      $sql = "INSERT INTO tb_sale (tb_sale.tb_status_sale_id, tb_sale.tb_user_id) VALUES (1, :userId)";
      $req = $this->PDO->prepare($sql);
      $req->bindValue(":userId", $SaleObj->getUserId());
      $req->execute();

      $result = $this->PDO->lastInsertId();

      if ($result) {
        return $result;
      }
    } catch (Exception $error) {
      echo $error->getMessage();
    }

    return null;
  }
  public function itemsByUser($userId)
  {
    $sql = "SELECT * FROM tb_sale WHERE tb_sale.tb_user_id = :userId";
    $req = $this->PDO->prepare($sql);
    $req->bindValue(":userId", $userId);
    $req->execute();
    $sales = $req->fetchAll();

    if ($sales) {
      $items = array();
      foreach ($sales as $sale) {
        $sql = "SELECT * FROM tb_item_sale WHERE tb_item_sale.tb_sale_id = :saleId";
        $req = $this->PDO->prepare($sql);
        $req->bindValue(":saleId", $sale["id"]);
        $req->execute();
        array_push($items, $req->fetch());
      }

      return $items;
    }
    return false;
  }

  public function update($SaleObj)
  { }

  public function delete($id)
  { }

  public function query($id)
  { }

  public function queryAll()
  { }
}
