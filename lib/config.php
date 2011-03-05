<?php
    class Config {
      private $data=array();
      
      public __construct($configFilename){
        $this->data = parse_ini_file($configFilename); 
      }
  
      public function get($key) {
        return $this->data[$key];
      }

}