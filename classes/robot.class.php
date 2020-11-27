<?php

class Robot {
  public $name;
  public $spec;
  public $image;
  public $questions;
  public $answers;



  function __construct($name,$spec,$image,$questions,$answers)
  {
    $this->name=$name;
    $this->spec=$spec;
    $this->image=$image;
    $this->questions=$questions;
    $this->answers=$answers;
  }

  function __toString()
  {
    $result="my name is {$this->name}";
    $result .="my spec is{$this->spec} <br>";
    $questionsString="";
    foreach($this->questions as $val){
      $questionsString .=$val. "<br>";
    }

    $result .= $questionsString;
   return $result;

  }
}