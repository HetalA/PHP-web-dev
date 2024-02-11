<?php
  $date1 = time();
  sleep(10);
  $date2 = time();
  $diff = ($date2 - $date1) / 60;
  echo $diff;

  //method2
  $start = date_create("2024-02-11 18:20:20");
  $end = date_create("2024-02-11 20:25:10");
  $diff = date_diff($end, $start);
  print_r($diff);