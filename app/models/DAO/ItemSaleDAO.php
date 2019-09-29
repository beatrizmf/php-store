<?php

require_once PATH_APP . "/models/DAO/DAO.php";
require_once PATH_APP . "/models/entitys/ItemSale.php";

class ItemSaleDAO extends DAO
{
  public function insert($ItemSaleObj)
  {
    try {
      $sql = "INSERT INTO tb_item_sale (tb_item_sale.tb_sale_id , tb_item_sale.tb_price_product_id, tb_item_sale.quantity) VALUES (:saleId, :priceProductId, :quantify)";
      $req = $this->PDO->prepare($sql);
      $req->bindValue(":saleId", $ItemSaleObj->getSaleId());
      $req->bindValue(":priceProductId", $ItemSaleObj->getPriceProductId());
      $req->bindValue(":quantify", $ItemSaleObj->getQuantity());
      $req->execute();

      $result = $this->PDO->lastInsertId();

      if ($result) {
        $sql = "UPDATE tb_price_product SET tb_price_product.quantity = tb_price_product.quantity-1 WHERE (tb_price_product.id = :priceProductId)";
        $req = $this->PDO->prepare($sql);
        $req->bindValue(":priceProductId", $ItemSaleObj->getPriceProductId());
        $req->execute();

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
