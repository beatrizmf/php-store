<?php

require_once PATH_APP . "/controllers/CoreController.php";

class SessionController extends CoreController
{
  public function login()
  {
    if ($this->logged()) {
      header("Location:" . BASE_URL);
    } else {
      if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $this->loadDAO("UserDAO");
        $user = (new UserDAO)->auth($_POST["username"], $_POST["password"]);

        if (isset($user)) {
          $this->loginUser($user["id"]);
          $_SESSION["userId"] = $user["id"];
          $_SESSION["userName"] = $user["name"];
          header("Location:" . BASE_URL);
        } else {
          $_SESSION["message"] = "username or password incorrect";
        }
      }
      $this->loadViewLogin();
    }
  }

  public function logout()
  {
    $this->logoutUser();
    header("Location:" . BASE_URL . "/login");
  }
}
