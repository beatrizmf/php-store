<?php

require_once PATH_APP . "/controllers/CoreController.php";

class CartController extends CoreController
{
  public function index()
  {
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
    }
    $this->loadView("v_cart");
  }

  public function addProduct()
  {
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

    $_SESSION["message"] = "product added to cart";
    header("Location:" . BASE_URL . '/products');
  }

  public function removeProduct(){
    $id = explode("=", $_SERVER["REQUEST_URI"])[1];

    if (!empty($_SESSION["cart"])) {
      $index = array_search($id, $_SESSION["cart"]);
      if(isset($index)){
        unset($_SESSION["cart"][$index]);
      }

    } else {
      $_SESSION["message"] = "item does not exist in cart";
    }

    $_SESSION["message"] = "product removed";
    header("Location:" . BASE_URL . '/cart');
  }

  public function close()
  {
    if (!empty($_SESSION["cart"])) {
      $this->loadDAO("ProductDAO");
      $this->loadDAO("SaleDAO");
      $this->loadDAO("ItemSaleDAO");

      $SaleOjb = new Sale(null, 1, $_SESSION["userId"]);
      $saleId = (new SaleDAO)->insert($SaleOjb);

      foreach($_SESSION["cart"] as $productId){
        $priceProductId = (new ProductDAO)->getIdPriceProduct($productId);
        $SaleItemObj = new ItemSale(null, $saleId, $priceProductId);
        $result = (new ItemSaleDAO)->insert($SaleItemObj);
      }

      if(isset($result)){
        unset($_SESSION["cart"]);
        $_SESSION["message"] = "successful purchase";
      } else {
        $_SESSION["message"] = "something went wrong";
      }

    } else {
      $_SESSION["message"] = "empty card";
    }

    header("Location:" . BASE_URL . '/cart');
  }
}
