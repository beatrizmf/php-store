<?php

class User
{
  private $id;
  private $typeUser;
  private $name;
  private $username;
  private $password;

  public function __construct($id, $typeUser = 1, $name = null, $username = null, $password = null)
  {
    $this->id = $id;
    $this->typeUser = $typeUser;
    $this->name = $name;
    $this->username = $username;
    $this->password = $password;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getTypeUser()
  {
    return $this->typeUser;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setTypeId($typeUser)
  {
    $this->typeUser = $typeUser;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setUsername($username)
  {
    $this->username = $username;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }
}
