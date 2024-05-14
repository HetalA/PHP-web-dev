<?php
  trait FileOperations{
    function getFileSize($filename){
      return filesize($filename);
    }
  }

  class Posts{
    use FileOperations;
    function checkSize($filename)
    {
      return $this->getFileSize($filename);
    }
  }

  $post1 = new Posts();
  $var = $post1->checkSize("Test.txt");
  echo $var;