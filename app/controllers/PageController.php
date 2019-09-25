<?php

require_once PATH_APP . "/controllers/CoreController.php";

class PageController extends CoreController
{
  public function index()
  {
    $this->loadView("v_home");
  }

  public function notFound()
  {
    $this->loadView("v_not_found");
  }
}
