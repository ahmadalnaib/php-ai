<?php


class Db
{
  public $conn;

  function __construct()
  {
    $servername="localhost";
    $username="root";
    $password='';
    $dbname='phpbramj';

    $this->conn=new mysqli($servername,$username,$password,$dbname);

    if($this->conn->connect_error)
    {
      die('connection error'.$this->connect_error);
    }
  }
}