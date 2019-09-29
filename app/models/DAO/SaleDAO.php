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
  public function update($SaleObj)
  { }
  public function delete($id)
  { }
  public function query($id)
  { }
  public function queryAll()
  { }
}
