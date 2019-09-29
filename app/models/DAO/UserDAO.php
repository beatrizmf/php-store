<?php

require_once PATH_APP . "/models/DAO/DAO.php";
require_once PATH_APP . "/models/entitys/User.php";

class UserDAO extends DAO
{
  public function insert($UserObj)
  { }
  public function update($UserObj)
  { }
  public function delete($id)
  { }
  public function query($id)
  { }
  public function queryAll()
  { }

  public function auth($username, $password)
  {
    try {
      $sql = "SELECT tb_user.id, tb_user.name FROM tb_user WHERE tb_user.username = :username AND tb_user.password = :password";
      $req = $this->PDO->prepare($sql);
      $req->bindValue(":username", $username);
      $req->bindValue(":password", $password);
      $req->execute();
      $result = $req->fetch();
      if(!empty($result)) {
        return $result;
      }
    } catch (Exception $error) {
      echo $error->getMessage();
    }

    return null;
  }
}
