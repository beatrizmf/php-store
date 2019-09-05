<?php

class CoreController
{

  private $dataView = array();

  protected function loadModel($model)
  {
    // DAO alredy require Product Model
    require_once PATH_APP . "/models/DAO/" . $model . "DAO.php";
  }

  protected function addData($data, $value)
  {
    $this->dataView[$data] = $value;
  }

  protected function loadView($view)
  {
    $this->addData("view", $view);
    $data = $this->dataView;
    require_once PATH_APP . "/views/v_base.php";
  }
}
