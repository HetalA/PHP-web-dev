<?php
  class Car{
    private $id;
    private $brand;
    private $color;
    private $speed;

    public function __construct($id, $brand, $color, $speed){
      $this->id = $id;
      $this->brand = $brand;
      $this->color = $color;
      $this->speed = $speed;
    }

    public function getId(){
      return $this->id;
    }
    public function getBrand(){
      return $this->brand;
    }
    public function getColor(){
      return $this->color;
    }
    public function getSpeed(){
      return $this->speed;
    }

    public function setId($id){
      $this->id = $id;
    }
    public function setBrand($brand){
      $this->brand = $brand;
    }
    public function setColor($color){
      $this->color = $color;
    }
    public function setSpeed($speed){
      $this->speed = $speed;
    }
    public function increaseSpeed($speed){
      $this->speed += $speed;
    }
    public function decreaseSpeed($speed){
      $this->speed -= $speed;
    }
  }

  $mycar = new Car(1,"Skoda","black",60);
  $mycar->decreaseSpeed(30);
  echo $mycar->getSpeed().PHP_EOL;
  $mycar->increaseSpeed(40);
  echo $mycar->getSpeed().PHP_EOL;
