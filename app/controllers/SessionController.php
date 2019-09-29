<?php

require_once PATH_APP . "/controllers/CoreController.php";

class SessionController extends CoreController
{
  public function signIn()
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
      $this->loadViewSignIn();
    }
  }

  public function signUp()
  {
    if ($this->logged()) {
      header("Location:" . BASE_URL);
    } else {
      if (!empty($_POST["name"])  && !empty($_POST["username"]) && !empty($_POST["password"])) {
        $this->loadDAO("UserDAO");
        $userObj = new User(null, 1, $_POST["name"], $_POST["username"], $_POST["password"]);
        $result = (new UserDAO)->insert($userObj);

        if($result){
          $_SESSION["message"] = "successfully created user";
          header("Location:" . BASE_URL . "/sign-in");
        } else {
          $_SESSION["message"] = "something went wrong";
          header("Location:" . BASE_URL . "/sign-up");
        }
      }
      $this->loadViewSignUp();
    }
  }

  public function signOut()
  {
    $this->logoutUser();
    header("Location:" . BASE_URL . "/sign-in");
  }
}
