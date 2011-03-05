<?php
    class Config {
      private $data=array();
      
      public function __construct($configFilename) {
        $this->data = parse_ini_file($configFilename); 
      }
  
      public function get($key) {
        return $this->data[$key];
      }
      
      public function set($key, $value) {
        $this->data[$key] = $value;
        return $this;
      }

}