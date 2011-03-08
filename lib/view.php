<?php

  class View {
    private $layoutFilename;
    private $templateFilename;
    
    private $viewDirectory;
    private $templatesDirectory;
    private $layoutsDirectory;
    
    public function __construct(Config $config){

      $this->viewDirectory = $config->get('root_dir') . '/' . $config->get('view_dir');
      $this->templatesDirectory = $this->viewDirectory . '/' . '/pages';
      $this->layoutsDirectory = $this->viewDirectory . '/' . '/layouts';
    }
    
    public function getlayoutFilename() {
      return $this->layoutFilename;
    }
    
    public function setlayoutFilename($newlayoutFilename) {
      return $this->layoutFilename = $newlayoutFilename;
    }
    
    public function renderLayout() {
     include $this->layoutsDirectory . '/' . $this->layoutFilename;
    }
        
    public function gettemplateFilename() {
      return $this->$templateFilename;
    }  
    
    public function settemplateFilename($newtemplateFilename) {
      return $this->templateFilename = $newtemplateFilename;
    }
    
    public function renderTemplate() {
      include $this->templatesDirectory . '/' . $this->templateFilename;
     }
    
  }