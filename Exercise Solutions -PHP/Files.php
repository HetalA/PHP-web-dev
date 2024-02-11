<?php
  class Files{
    public function displayContent($filename){
      if(!file_exists($filename)){
        echo "$filename doess not exist".PHP_EOL;
        return false;
      }
      echo file_get_contents($filename);
    }

    public function getContent($filename){
      if(!file_exists($filename)){
        echo "File does not exist".PHP_EOL;
        return "";
      }
      $content = file_get_contents($filename);
      return $content;
    }
  }

  $fileobj = new Files();
  $fileobj->displayContent("Test.txt");
  echo "Here is the content : ".$fileobj->getContent("Test.txt").PHP_EOL;