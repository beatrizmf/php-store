<?php

$routes[""] = array(
  "route" => "/",
  "controller" => "PageController",
  "method" => "index"
);

$routes["product"] = array(
  "route" => "/product",
  "controller" => "ProductController",
  "method" => "list"
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
