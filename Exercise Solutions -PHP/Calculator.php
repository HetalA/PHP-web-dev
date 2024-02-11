<?php
  class Calculator{
    public $a;
    public $b;
    public $result;
    public function __construct($a, $b){
      $this->a = $a;
      $this->b = $b;
    }

    public function getResult(){
      return $this->result;
    }
   
    public function add(){
      $this->result = $this->a + $this->b;
      echo $this->result . "(after addition)" . PHP_EOL;
      return $this;
    }
    public function multiply(){
      $this->result = $this->a * $this->b;
      echo $this->result . "(after multiplication)" . PHP_EOL;
      return $this;
    }
    public function __destruct(){
      echo $this->result." -- from destructor";
    }
  }

  $obj = new Calculator(80,90);
  $res = $obj->add()->multiply()->getResult();
  echo $res;