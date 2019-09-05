<?php

class Connection
{
  private static $configConnection;
  private $connection;

  private function __construct($host, $name, $username, $password)
  {
    try {
      $this->connection = new PDO("mysql:host=$host;dbname=$name;charset=utf8", $username, $password);
    } catch (Exception $error) {
      echo $error->getMessage();
    }
  }

  public static function getInstance($host, $name, $username, $password)
  {
    if (!isset(self::$configConnection)) {
      self::$configConnection = new Connection($host, $name, $username, $password);
    }
    return self::$configConnection;
  }

  public function getConnection()
  {
    return $this->connection;
  }
}
