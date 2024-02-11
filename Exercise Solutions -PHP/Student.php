<?php
  class Student{
    public $id;
    public $name;
    public $marks;
    public function examResults($m1, $m2, $m3){
      if($m1<35 || $m2< 35 || $m3< 35){
        echo "You have failed the exam.";
      }
      elseif($m1>100 || $m2> 100|| $m3> 100){
        echo "Invalid mark input.";
      }
      else{
        echo "Congarts! You have passed.";
      }
    }
  }

  $student = new Student();
  $student->id = 1;
  $student->name = "Hetal";
  $student->marks = 370;

  $student->examResults(101,90,80);
  $student->examResults(10,50,60);
  $student->examResults(100,90,70);
