<?php

$routes["login"] = array(
  "route" => "/login",
  "controller" => "SessionController",
  "method" => "login"
);

$routes[" logout"] = array(
  "route" => "/logout",
  "controller" => "SessionController",
  "method" => "logout"
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
