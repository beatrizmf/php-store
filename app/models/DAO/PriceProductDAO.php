<?php

require_once PATH_APP . "/models/DAO/DAO.php";
require_once PATH_APP . "/models/entitys/Product.php";
require_once PATH_APP . "/models/DAO/ProductDAO.php";
require_once PATH_APP . "/models/entitys/PriceProduct.php";

class PriceProductDAO extends DAO
{
  public function insert($PriceProductObj)
  {
    $result = null;
    try {

      $productId = $PriceProductObj->getProductId();
      $pricePurchase = $PriceProductObj->getPricePurchase();
      $priceSale = $PriceProductObj->getPriceSale();
      $quantity = $PriceProductObj->getQuantity();
      $status = $PriceProductObj->getStatus();

      $sql = "UPDATE tb_price_product SET tb_price_product.status = 0 WHERE tb_price_product.tb_product_id = $productId AND tb_price_product.status = 1;";
      $req = $this->PDO->prepare($sql);
      $req->execute();

      $sql = "INSERT INTO tb_price_product(tb_product_id, price_purchase, price_sale, quantity, status) 
              VALUES ($productId, $pricePurchase, $priceSale, $quantity, $status)";
      $req = $this->PDO->prepare($sql);
      $req->execute();
      $result = $req->fetch();
      
    } catch (Exception $error) {
      echo $error->getMessage();
    }
    return $result;
  }

  public function update($PriceProductObj)
  { }

  public function delete($id)
  { }

  public function query($id)
  { }

  public function queryAll()
  { }
}
