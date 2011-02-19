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
    
    public function renderblahPrivateProperty() {
      include $this->blahPrivateProperty;
    }
    
    public function getanotherPrivateProperty() {
      return $this->$anotherPrivateProperty;
    }  
    
    public function setanotherPrivateProperty($newAnotherPrivateProperty) {
      return $this->anotherPrivateProperty = $newAnotherPrivateProperty;
    }
    
    public function renderanotherPrivateProperty() {
      include $this->anotherPrivateProperty;
    }
  }