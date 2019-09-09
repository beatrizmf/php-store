<?php

require_once PATH_APP . "/controllers/CoreController.php";

class ProductController extends CoreController
{
  public function list()
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
      $this->loadView("v_not_found");
    }
  }
}
