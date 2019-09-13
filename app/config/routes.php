<?php

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

$routes["about"] = array(
  "route" => "/about",
  "controller" => "PageController",
  "method" => "about"
);
