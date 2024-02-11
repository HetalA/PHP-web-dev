<?php
  class Animal{
    protected $name;
    protected $hunt = false;
    public function doesHunting(){
      if($this->hunt){
        echo "Yes, it hunts".PHP_EOL;
      }
      else{
        echo "No, it does not hunt".PHP_EOL;
      }
    }
  }

  class Dog extends Animal{
    public function __construct($name, $hunt){
      $this->hunt = $hunt;
      $this->name = $name;
    }
    public function makeSound(){
      echo "bhaw bhaw".PHP_EOL;
    }
  }

  class Tiger extends Animal {
    public function __construct($name, $hunt){
      $this->hunt = $hunt;
      $this->name = $name;
    }
    public function makeSound(){
      echo "Grrrr! Grrrr!".PHP_EOL;
    }
  }

  $dog = new Dog("Golden Retriever", false);
  $dog->makeSound();

  $tiger = new Tiger("Bengal Tiger", true);
  $tiger->makeSound();