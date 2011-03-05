<?php

  class View {
    private $layoutFilename;
    private $templateFilename;
    
    private $templatesDirectory;
    private $layoutsDirectory;
    
    public function __construct($config) {
      $this->templatesDirectory = $config->get('root_dir') . '/' . $config->get('view_dir') . '/' . '/pages';
      $this->layoutsDirectory = $config->get('root_dir') . '/' . $config->get('view_dir') . '/' . '/layouts';
    }
    
    public function getlayoutFilename() {
      return $this->layoutFilename;
    }
    
    public function setlayoutFilename($newlayoutFilename) {
      return $this->layoutFilename = $newlayoutFilename;
    }
    
//    public function renderLayout() {
//     include $this->layoutFilename;
//    }
    
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
    
//    public function renderTemplate() {
//      include $this->templateFilename;
//     }
    
    public function renderTemplate($params = array()) {
      extract($params);
      include $this->gettemplateFilename();
    }
  }