<?php

require_once PATH_APP . "/controllers/CoreController.php";

class SaleController extends CoreController
{
  public function index()
  {
    $this->loadDAO("SaleDAO");
    $items = (new SaleDAO)->itemsByUser($_SESSION["userId"]);
    $this->addData("items", $items);
    $this->loadView("v_purchases");
  }
}