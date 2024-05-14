<?php

interface Stock{
  public function buy($company, $amount);
  public function sell($amount);
}

class MyStock implements Stock{
  public function buy($company, $amount){
    echo "A request to buy $amount worth stocks of $company";
  }
  public function sell($amount){
    echo "Sold for $amount";
  }
}

$example = new MyStock();
$example->buy("BlRk",4500);
$example->sell(4500);