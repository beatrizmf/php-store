<?php

abstract class DAO
{
  protected $PDO;

  public function __construct()
  {
    require_once PATH_APP . "/config/database.php";
    $this->PDO = $connection;
  }
  public abstract function insert($object);
  public abstract function update($object);
  public abstract function delete($id);
  public abstract function query($id);
  public abstract function queryAll();
}
