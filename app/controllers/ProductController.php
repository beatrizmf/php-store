<?php

require_once PATH_APP . "/controllers/CoreController.php";

class ProductController extends CoreController
{

  public function create()
  {
    if (!empty($_POST)) {

      $this->loadDAO("ProductDAO");
      $this->loadDAO("PriceProductDAO");

      $ProductObj = new Product(null, $_POST["name"]);
      $result = (new ProductDAO)->insert($ProductObj);

      if ($result != false) {
        $PriceProductObj = new PriceProduct(null, $result, $_POST["price_purchase"], $_POST["price_sale"], $_POST["quantity"], 1);
        $result = (new PriceProductDAO)->insert($PriceProductObj);
      }

      $this->addData("message", $result);
      $this->loadView("v_new_product");
    } else {
      $this->loadView("v_new_product");
    }
  }

  public function listOne()
  {
    $this->loadDAO("ProductDAO");

    $id = explode("=", $_SERVER["REQUEST_URI"])[1];

    $product = (new ProductDAO())->query($id);

    if ($product) {
      $this->addData("product", $product);
      $this->loadView("v_product");
    } else {
      $this->loadView("v_not_found");
    }
  }

  public function listAll()
  {
    $this->loadDAO("ProductDAO");

    $products = (new ProductDAO())->queryAll();

    if (!empty($products)) {
      $this->addData("products", $products);
      $this->loadView("v_products");
    } else {
      $this->addData("message", "No products in store");
      $this->loadView("v_products");
    }
  }
}
