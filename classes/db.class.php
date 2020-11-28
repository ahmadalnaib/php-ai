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
    $this->conn->set_charset('utf8');

    if($this->conn->connect_error)
    {
      die('connection error'.$this->connect_error);
    }
  }


  function allRobots()
  {
    $stmt=$this->conn->prepare("SELECT * FROM robots");//تجهيز الامر
    $stmt->execute();// تنفيد الامر
    $result=$stmt->get_result();// استخراج النتائج
    
   while($row=$result->fetch_array(MYSQLI_ASSOC))
   {
     echo $row['name'];

   }
  }
}