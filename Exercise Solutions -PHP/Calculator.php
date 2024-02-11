<?php
  class Calculator{
    public $a;
    public $b;
    public $result;
    public function getA(){
      return $this->a;
    }
    public function getB(){
      return $this->b;
    }
    public function getResult(){
      echo $this->result;
    }
    public function setA($a){
      $this->a = $a;
    }
    public function setB($b){
      $this->b = $b;
    }
    public function add(){
      $this->result = $this->a + $this->b;
    }

  }

  $obj = new Calculator();
  $obj->a = 80;
  $obj->b = 90;
  $obj->add();
  $obj->getResult();