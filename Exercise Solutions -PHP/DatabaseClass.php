<?php
  abstract class DatabaseClass {
    public $connection;
    public $connectionActive = false;

    abstract function setConnection($dbName);
    abstract function getConnection();
  }

  class DBConnection extends DatabaseClass {
    function setConnection($dbName)
    {
      $this->connectionActive = true;
      $this->connection = "Connection to ".$dbName." active".PHP_EOL;
    }
    function getConnection()
    {
      if(!$this->connectionActive) {
        return $this->connection;
      }
    }
  }

  $db = new DBConnection();
  $db->setConnection("Test");
  $db->getConnection();