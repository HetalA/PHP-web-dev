<?php
   class University
   {
    public $name;
    function __construct($name)
    {
      $this->name = $name;
    }
   }

   class Student extends University
   {
    public $studentName
    function __construct($name, University $university)
    {
      $this->studentName = $name;
      $this->universityName = $university->name;
    }
   }
