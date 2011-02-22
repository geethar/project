<?php

  class View {
    private $layoutFilename;
    private $templateFilename;
    
    public function getlayoutFilename() {
      return $this->layoutFilename;
    }
    
    pulic function setlayoutFilename($newlayoutFilename) {
      return $this->layoutFilename = $newlayoutFilename;
    }
    
    public function renderlayoutFilename() {
      include $this->layoutFilename;
    }
    
    public function gettemplateFilename() {
      return $this->$templateFilename;
    }  
    
    public function settemplateFilename($newtemplateFilename) {
      return $this->templateFilename = $newtemplateFilename;
    }
    
    public function rendertemplateFilename() {
      include $this->templateFilename;
    }
  }