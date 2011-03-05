<?php

  class View {
    private $layoutFilename;
    private $templateFilename;
    
    public function __construct() {
    
    }
    
    public function getlayoutFilename() {
      return $this->layoutFilename;
    }
    
    public function setlayoutFilename($newlayoutFilename) {
      return $this->layoutFilename = $newlayoutFilename;
    }
    
    public function renderLayout($params = array()) {
      extract($params);
      include $this->getlayoutFilename();
    }
    
    public function gettemplateFilename() {
      return $this->$templateFilename;
    }  
    
    public function settemplateFilename($newtemplateFilename) {
      return $this->templateFilename = $newtemplateFilename;
    }
    
    public function renderTemplate($params = array()) {
      extract $params;
      include $this->gettemplateFilename();
    }
  }