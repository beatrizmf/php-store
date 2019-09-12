<?php

require_once PATH_APP . "/controllers/CoreController.php";

class ProductController extends CoreController
{

  public function new()
  {
    if (!empty($_POST)) {
      $this->loadDAO("ProductDAO");
      $result = (new ProductDAO)->insert($_POST["name"]);

      // (new PriceProductDAO)->insert($tb_product_id, $_POST["price_purchase"], $_POST["price_sale"], $_POST["quantity"], 1);

      $this->addData("result", $result);
      $this->loadView("v_new_product");
    } else {
      $this->loadView("v_new_product");
    }
  }

  public function price()
  {
    $this->loadDAO("ProductDAO");
    $products = (new ProductDAO())->queryAll();
    $this->addData("products", $products);
    
    if (!empty($_POST)) {
      $this->loadDAO("PriceProductDAO");
      $result = (new PriceProductDAO())->insert($_POST["tb_product_id"], $_POST["price_purchase"], $_POST["price_sale"], $_POST["quantity"], 1);
      // echo "?";
      $this->addData("result", $result);
      $this->loadView("v_price_product");
    } else {
      $this->loadView("v_price_product");
    }
  }


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
