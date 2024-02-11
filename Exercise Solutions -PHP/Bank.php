<?php
  class Bank{
    public $accno;
    public $name;
    public $balance;
    function depositAmount($amount){
      $this->balance = $this->balance + $amount;
    }
    function getBalance(){
      echo "Your balance : ".$this->balance.PHP_EOL;
    }
    function deductAmount($amount){
      $this->balance = $this->balance - $amount;
    }
  }

  $bank = new Bank();
  $bank->accno = 1;
  $bank->name = "Hetal";
  $bank->balance = 500;

  $bank->getBalance();
  $bank->depositAmount(200);
  $bank->getBalance();
  $bank->deductAmount(300);
  $bank->getBalance();