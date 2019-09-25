<?php

require_once PATH_APP . "/controllers/CoreController.php";

class SessionController extends CoreController
{
  public function login()
  {
    if ($this->logged()) {
      header("Location:" . BASE_URL);
    } else {
      if (!empty($_POST['user']) && !empty($_POST['password'])) {
        if ($_POST['user'] == "admin" && $_POST['password'] == "admin") {
          $this->looginUser("admin");
          header("Location:" . BASE_URL);
        } else {
          $_SESSION['error'] = "username or password incorrect";
        }
      }
      $this->loadView("v_login");
    }
  }

  public function logout()
  {
    $this->logoutUser();
    header("Location:" . BASE_URL . '/login');
  }
}
