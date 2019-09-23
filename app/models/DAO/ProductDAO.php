<?php

require_once PATH_APP . "/models/DAO/DAO.php";
require_once PATH_APP . "/models/entitys/Product.php";

class ProductDAO extends DAO
{
  public function insert($ProductObj)
  {
    $result = false;
    try {
      $name = $ProductObj->getName();

      $sql = "INSERT INTO tb_product(name) VALUES ('$name')";
      $req = $this->PDO->prepare($sql);
      $req->execute();
      
      $result = $this->PDO->lastInsertId();
      
    } catch (Exception $error) {
      echo $error->getMessage();
    }

    return $result;
  }

  public function update($ProductObj)
  {
    $result = null;
    try {
      $sql = "UPDATE tb_product SET name = $ProductObj->getName() WHERE product.id = 3";
      $req = $this->PDO->prepare($sql);
      $req->execute();
      $result = $req->fetchAll();
    } catch (Exception $error) {
      echo $error->getMessage();
    }

    return $result;
  }

  public function delete($id)
  {
    $result = null;
    try {
      $sql = "DELETE FROM product WHERE product.id = $id";
      $req = $this->PDO->prepare($sql);
      $req->execute();
      $result = $req->fetchAll();
    } catch (Exception $error) {
      echo $error->getMessage();
    }

    return $result;
  }

  public function query($id)
  {
    $product = null;
    try {
      $sql = "SELECT * FROM tb_product WHERE tb_product.id = $id";
      $req = $this->PDO->prepare($sql);
      $req->execute();
      $result = $req->fetch();
      
      if (!empty($result)) {
        $price = $this->getCurrentPrice($result['id']);
        $quantify = $this->getCurrentQuantify($result['id']);
        $product = (new Product($result['id'], $result['name'], $price, $quantify));
      }
    } catch (Exception $error) {
      echo $error->getMessage();
    }

    return $product;
  }

  public function queryAll()
  {
    $products = null;
    try {
      $sql = "SELECT * FROM tb_product";
      $req = $this->PDO->prepare($sql);
      $req->execute();
      $result = $req->fetchAll();

      if (!empty($result)) {
        $products = array();
        foreach ($result as $product) {
          $price = $this->getCurrentPrice($product['id']);
          $quantify = $this->getCurrentQuantify($product['id']);
          array_push($products, new Product($product['id'], $product['name'], $price, $quantify));
        }
      }
    } catch (Exception $error) {
      echo $error->getMessage();
    }

    return $products;
  }

  public function getCurrentPrice($tb_product_id)
  {
    $price = null;
    try {
      $sql = "SELECT price_sale FROM tb_price_product WHERE tb_price_product.tb_product_id = $tb_product_id AND tb_price_product.status = 1";
      $req = $this->PDO->prepare($sql);
      $req->execute();
      $price = $req->fetch()["price_sale"];
    } catch (Exception $error) {
      echo $error->getMessage();
    }

    return $price;
  }

  public function getCurrentQuantify($tb_product_id)
  {
    $quantify = null;
    try {
      $sql = "SELECT quantity FROM tb_price_product WHERE tb_price_product.tb_product_id = $tb_product_id AND tb_price_product.status = 1";
      $req = $this->PDO->prepare($sql);
      $req->execute();
      $quantify = $req->fetch()["quantity"];
      // var_dump($req->fetch()["quantity"]);
    } catch (Exception $error) {
      echo $error->getMessage();
    }

    return $quantify;
  }
}
