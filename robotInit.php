<?php
include_once './classes/robot.class.php';

$ahmed=new Robot('ahmed','php-laravel','faheem.png',array('what is noveLaravel',"node or laravel"),array('laravel admin','laravel'));


$zozo=new Robot('zozo','react-php','sportsman.png',array('what is express',"node or c#"),array('node frame work','c#'));


$bobo=new Robot('zozo','react-php','sportsman.png',array('what is express',"node or c#"),array('node frame work','c#'));

$bobo1=new Robot('zozo1','react-php','sportsman.png',array('what is express',"node or c#"),array('node frame work','c#'));


$robots=[$ahmed,$zozo,$bobo,$bobo1];

if(isset($_GET['robot']))
{
  $robot=$robots[$_GET['robot']];
} else{

  $robot=$robots[2];
}



?>