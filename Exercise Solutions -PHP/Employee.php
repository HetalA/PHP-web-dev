<?php
  class Employee{
    public $id;
    public $name;
    public $email;
    public $hourlyRate = 15;

    function getSalary($totalDays) : int{
      $salary = $this->hourlyRate * $totalDays;
      return $salary;
    }
  }

  $emp1 = new Employee();
  $emp1->name = "XYZ";
  $emp1->email = "abc@abc.com";
  $emp1->id = 0;
  $salary = $emp1->getSalary(30);

  echo $salary;