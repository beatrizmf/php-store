<?php

require_once PATH_APP . "/models/DAO/DAO.php";
require_once PATH_APP . "/models/entitys/Product.php";

class ProductDAO extends DAO
{
  public function insert($object)
  {
    try {
      $sql = "INSERT INTO product(name) VALUES ($object->getName())";
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
      $sql = "UPDATE product SET name = $object->getName() WHERE product.id = 3";
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
      $sql = "DELETE FROM product WHERE product.id = $id";
      $req = $this->PDO->prepare($sql);
      $req->execute();
      $result = $req->fetchAll();
    } catch (Exception $error) {
      echo $error->getMessage();
    }
  }

  public function query($id)
  {
    $product = null;
    try {
      $sql = "SELECT * FROM product WHERE product.id = :id";
      $req = $this->PDO->prepare($sql);
      $req->bindValue(":id", $id);
      $req->execute();
      $product = $req->fetch();
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
