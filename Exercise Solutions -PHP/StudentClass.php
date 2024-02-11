<?php
  class StudentClass{
    public $id;
    public $name;
    public $class;

    public function getName(){
      return $this->name;
    }
    public function setName($name){
      $this->name = $name;
    }
    public function getClass(){
      return $this->class;
    }
    public function setClass($class){
      $this->class = $class;
    }
    public function printDetails(){
      echo "".$this->class."--".$this->name."";
    }
  }

  $student = new StudentClass();
  $student->setName("Hetal");
  $student->setClass("IX");
  $student->printDetails(); 
