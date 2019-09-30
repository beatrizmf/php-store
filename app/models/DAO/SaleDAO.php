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
    $sql = "SELECT  tb_product.name, tb_price_product.price_sale, tb_sale.date, tb_item_sale.quantity
    FROM tb_sale 
    INNER JOIN tb_item_sale ON tb_item_sale.tb_sale_id = tb_sale.id
    INNER JOIN tb_price_product ON tb_price_product.id = tb_item_sale.tb_price_product_id
    INNER JOIN tb_product ON tb_product.id = tb_price_product.tb_product_id
    WHERE tb_sale.tb_user_id = :userId";

    $req = $this->PDO->prepare($sql);
    $req->bindValue(":userId", $userId);
    $req->execute();
    $sales = $req->fetchAll();

    if ($sales) {
      return $sales;
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
