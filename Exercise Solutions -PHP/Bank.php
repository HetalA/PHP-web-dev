<?php
  class Bank{
    public $accno;
    public $name;
    private $balance;
    public function __construct($balance){
      $this->balance = $balance;
    }
    function depositAmount($amount){
      $this->balance = $this->balance + $amount;
    }
    function getBalance(){
      echo $this->balance,PHP_EOL;
    }
    function deductAmount($amount){
      $this->balance = $this->balance - $amount;
    }
  }

  $bank = new Bank(500);
  $bank->accno = 1;
  $bank->name = "Hetal";

  $bank->getBalance();
  $bank->depositAmount(200);
  $bank->getBalance();
  $bank->deductAmount(300);
  $bank->getBalance();