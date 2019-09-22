<?php

abstract class DAO
{
  protected $PDO;

  public function __construct()
  {
    require_once PATH_APP . "/config/database.php";
    require_once PATH_APP . "/models/DAO/Connection.php";
    $connection = Connection::getInstance("localhost", "store", "root", "94492012");
    $connection = $connection->getConnection(); 

    $this->PDO = $connection;
  }
  public abstract function insert($object);
  public abstract function update($object);
  public abstract function delete($id);
  public abstract function query($id);
  public abstract function queryAll();
}
