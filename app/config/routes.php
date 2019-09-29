<?php

$routes["sign-in"] = array(
  "route" => "/sign-in",
  "controller" => "SessionController",
  "method" => "signIn"
);

$routes["sign-up"] = array(
  "route" => "/sign-up",
  "controller" => "SessionController",
  "method" => "signUp"
);

$routes["sign-out"] = array(
  "route" => "/sign-out",
  "controller" => "SessionController",
  "method" => "signOut"
);

$routes[""] = array(
  "route" => "/",
  "controller" => "PageController",
  "method" => "index"
);

$routes["new-product"] = array(
  "route" => "/new-product",
  "controller" => "ProductController",
  "method" => "create"
);

$routes["product"] = array(
  "route" => "/product",
  "controller" => "ProductController",
  "method" => "listOne"
);

$routes["products"] = array(
  "route" => "/products",
  "controller" => "ProductController",
  "method" => "listAll"
);

$routes["purchases"] = array(
  "route" => "/purchases",
  "controller" => "SaleController",
  "method" => "index"
);

$routes["cart"] = array(
  "route" => "/cart",
  "controller" => "CartController",
  "method" => "index"
);

$routes["add-to-cart"] = array(
  "route" => "/add-to-cart",
  "controller" => "CartController",
  "method" => "addProduct"
);

$routes["remove-from-cart"] = array(
  "route" => "/remove-from-cart",
  "controller" => "CartController",
  "method" => "removeProduct"
);

$routes["close-cart"] = array(
  "route" => "/close-cart",
  "controller" => "CartController",
  "method" => "close"
);
