<?php

require_once PATH_APP . "/models/DAO/DAO.php";
require_once PATH_APP . "/models/DAO/ProductDAO.php";
require_once PATH_APP . "/models/entitys/PriceProduct.php";
require_once PATH_APP . "/models/entitys/Product.php";

class PriceProductDAO extends DAO
{
  public function insert($object)
  {
    try {
      $sql = "";
      $req = $this->PDO->prepare($sql);
      $req->execute();
      $result = $req->fetchAll();
    } catch (Exception $error) {
      echo $error->getMessage();
    }
  }

  public function update($object)
  {
    try {
      $sql = "";
      $req = $this->PDO->prepare($sql);
      $req->execute();
      $result = $req->fetchAll();
    } catch (Exception $error) {
      echo $error->getMessage();
    }
  }

  public function delete($id)
  {
    try {
      $sql = "";
      $req = $this->PDO->prepare($sql);
      $req->execute();
      $result = $req->fetchAll();
    } catch (Exception $error) {
      echo $error->getMessage();
    }
  }

  public function query($id)
  {
    $priceProduct = null;
    try {
      $sql = "SELECT * FROM product WHERE price_product.id = :id";
      $req = $this->PDO->prepare($sql);
      $req->bindValue(":id", $id);
      $req->execute();
      $result = $req->fetch();

      if (!empty($result)) {
        $pDAO = new ProductDAO();
        $productId = $pDAO->query($result['product_id']);

        $priceProduct = new PriceProduct($result['id'], $productId, $result['price_purchase'], $result['price_sale'], $result['quantity'], $result['status']);
      }
    } catch (Exception $error) {
      echo $error->getMessage();
    }

    return $priceProduct;
  }

  public function queryAll()
  {
    $products = null;
    try {
      $sql = "";
      $req = $this->PDO->prepare($sql);
      $req->execute();
      $result = $req->fetchAll();

      $products = array();
      foreach ($result as $product) {
        array_push($products, new Product($product['id'], $product['name']));
      }
    } catch (Exception $error) {
      echo $error->getMessage();
    }

    return $products;
  }
}
