<?php

  class BlahClass {
    private $blahPrivateProperty;
    private $anotherPrivateProperty;
    
    public function getblahPrivateProperty() {
      return $this->blahPrivateProperty;
    }
    
    pulic function setblahPrivateProperty($newBlahPrivateProperty) {
      return $this->blahPrivateProperty = $newBlahPrivateProperty;
    }
    
    public function getanotherPrivateProperty() {
      return $this->$anotherPrivateProperty;
    }  
    
    public function setanotherPrivateProperty($newAnotherPrivateProperty) {
      return $this->anotherPrivateProperty = $newAnotherPrivateProperty;
    }
  }