<?php

class DataBase
{
  // specify your own database credentials
  private $DB_HOST = "localhost";
  private $DB_USER = "root";
  private $DB_PASS = "";

  public $DB_NAME = "php_mvc_ejemplo_3";
  public $DB_TABLE_PROUDCTS = "products";
  public $db;

  public function __construct()
  {
      $this->db = null;
      try{
          $this->db = new PDO("mysql:host=" . $this->DB_HOST . ";dbname=" . $this->DB_NAME, $this->DB_USER, $this->DB_PASS);
          $this->db->exec("set names utf8");
      } catch (PDOException $exception) {
          echo "Connection error: " . $exception->getMessage();
      }
      return $this->db;
  }
}

 ?>
