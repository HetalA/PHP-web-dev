<?php
  class FilesC{
    public $fileName;
    public $fileHandler;
    public $fileSize;
    public $fileFound;
    public $content;
    public function __construct($filename){
      $this->fileHandler = null;
      $this->fileFound = false;
      if(file_exists($filename)){
        if(is_file($filename)){
          $this->fileFound = true;
        }
      }
      if($this->fileFound){
        $this->fileHandler = fopen($filename,"r");
        $this->fileSize = filesize($filename);
      }
    }

    public function getContents() {
      if($this->fileFound){
        $content = fread($this->fileHandler, $this->fileSize);
        return $content;
      }
      else{
        return "No file found.";
      }
    }
    public function __destruct(){
      if($this->fileFound){
        fclose($this->fileHandler);
        echo "File closed from destructor";
      }
    }
  }

  $f = new FilesC("Test.txt");
  echo $f->getContents();
