<?php

  class View {
    private $layoutFilename;
    private $templateFilename;
    
    public function getlayoutFilename() {
      return $this->layoutFilename;
    }
    
    public function setlayoutFilename($newlayoutFilename) {
      return $this->layoutFilename = $newlayoutFilename;
    }
    
    public function renderLayout() {
      include $this->layoutFilename;
    }
    
    public function gettemplateFilename() {
      return $this->$templateFilename;
    }  
    
    public function settemplateFilename($newtemplateFilename) {
      return $this->templateFilename = $newtemplateFilename;
    }
    
    public function renderTemplate() {
      include $this->templateFilename;
    }
  }