<?php

class CoreController
{

  private $dataView = array();
  private $limitIdleness = 3600;

  public function __construct()
  {
    $this->checkIdleness();
  }

  protected function logged()
  {
    return isset($_SESSION['user']) ? true : false;
  }

  protected function loginUser($user)
  {
    session_regenerate_id();
    $_SESSION['user'] = serialize($user);
    $_SESSION['last-acess'] = time();
  }

  protected function logoutUser()
  {
    unset($_SESSION['user']);
    unset($_SESSION['last-acess']);
    session_destroy();
  }

  private function checkIdleness()
  {
    if (isset($_SESSION['last-acess'])) {
      $timeIdleness = time() - $_SESSION['last-acess'];

      if ($timeIdleness > $this->limitIdleness) {
        $this->logoutUser();
        $_SESSION["message"] = "session expired";
        header("Location:" . BASE_URL . '/sign-in');
      } else {
        $_SESSION['last-acess'] = time();
      }
    }
  }

  protected function loadDAO($DAO)
  {
    // Model alredy require
    require_once PATH_APP . "/models/DAO/" . $DAO . ".php";
  }

  protected function addData($data, $value)
  {
    $this->dataView[$data] = $value;
  }

  protected function loadViewSignIn(){
    require_once PATH_APP . "/views/v_sign_in.php";
    unset($_SESSION["message"]);
  }

  protected function loadViewSignUp(){
    require_once PATH_APP . "/views/v_sign_up.php";
    unset($_SESSION["message"]);
  }

  protected function loadView($view)
  {
    if ($this->logged()) {
      $this->addData("view", $view);
      $data = $this->dataView;
      require_once PATH_APP . "/views/v_base.php";
    } else {
      header("Location:" . BASE_URL . '/sign-in');
    }
    unset($_SESSION["message"]);
  }
}
