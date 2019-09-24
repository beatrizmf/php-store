<?php

require_once PATH_APP . "/controllers/CoreController.php";

class PageController extends CoreController
{
  public function index()
  {
    if ($this->logged()) {
      $this->loadView("v_home");
    } else {
      header("Location:" . BASE_URL . '/login');
    }
  }

  public function notFound()
  {
    if ($this->logged()) {
      $this->loadView("v_not_found");
    } else {
      header("Location:" . BASE_URL . '/login');
    }
  }
}
