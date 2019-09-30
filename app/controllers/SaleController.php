<?php

require_once PATH_APP . "/controllers/CoreController.php";

class SaleController extends CoreController
{
  public function index()
  {
    $this->loadDAO("SaleDAO");
    $sales = (new SaleDAO)->itemsByUser($_SESSION["userId"]);
    $this->addData("sales", $sales);
    $this->loadView("v_purchases");
  }
}