<?php

require_once PATH_APP . "/controllers/CoreController.php";

class CartController extends CoreController
{
  public function index()
  {
    if ($this->logged()) {
      if (!empty($_SESSION["cart"])) {

        $this->loadDAO("ProductDAO");

        $products = array();
        $totalPrice = 0;

        foreach ($_SESSION["cart"] as $productId) {
          $product = (new ProductDAO())->query($productId);
          array_push($products, $product);
          $totalPrice = $totalPrice + $product->getPrice();
        }

        $this->addData("cart", $products);
        $this->addData("totalPrice", $totalPrice);

        $this->loadView("v_cart");
      }
    } else {
      header("Location:" . BASE_URL . '/login');
    }
  }

  public function addProduct()
  {
    if ($this->logged()) {

      $id = explode("=", $_SERVER["REQUEST_URI"])[1];

      if (!empty($_SESSION["cart"])) {
        if (in_array($id, $_SESSION["cart"])) {
          header("Location:" . BASE_URL . '/products');
          return;
        }
        array_push($_SESSION["cart"], $id);
      } else {
        $products = array();
        array_push($products, $id);
        $_SESSION["cart"] = $products;
      }

      header("Location:" . BASE_URL . '/products');
    } else {
      header("Location:" . BASE_URL . '/login');
    }
  }

  public function closeCart()
  {
    if ($this->logged()) {
      if (!empty($_SESSION["cart"])) {

        $this->loadDAO("ProductDAO");

        $products = array();

        foreach ($_SESSION["cart"] as $productId) {
          $product = (new ProductDAO())->query($productId);
          array_push($products, $product);
        }

        $this->addData("cart", $products);

        $this->loadView("v_cart");
      }
    } else {
      header("Location:" . BASE_URL . '/login');
    }
  }
}
