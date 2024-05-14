<?php

interface Phone{
  public function makeCall($phone);
  public function sendMessage($phone, $msg);
}

class IOS implements Phone{
  public function makeCall($phone){
    echo "Making call to $phone".PHP_EOL;
  }

  public function sendMessage($phone, $msg){
    echo "Sending $msg to $phone".PHP_EOL;
  }
}

$iPhone = new IOS();
$iPhone->makeCall(9999911111);
$iPhone->sendMessage(9999911111,"Learning Interface");