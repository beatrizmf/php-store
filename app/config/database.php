<?php

require_once PATH_APP . "/models/DAO/Connection.php";

$connection = Connection::getInstance("localhost", "store", "root", "94492012");
$connection = $connection->getConnection();