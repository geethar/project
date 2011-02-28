<?php
class View {
    private $layoutFilename;
    private $templateFilename;

    /**
     * @var string $viewDirectory - absolute path for view directory
     */
    private $viewDirectory;

    /**
     * @var string $layoutsDirectory - absolute path for layout file 
     * directory
     */
    private $layoutsDirectory;

    /**
     * @var string $templatesDirecotry - absolute path for template file 
     * directory
     */
    private $templatesDirectory;

    /**
     * Constructor
     *
     * @param Config $config - config object for use in determining view 
     * directory
     */
    public function __construct(Config $config){
        $this->viewDirectory = $config->get('root_dir') . '/' . $config->get('view_dir');
        $this->layoutsDirectory = $this->viewDirectory . '/layouts';
        $this->templatesDirectory = $this->viewDirectory . '/pages';
    }

    public function getlayoutFilename() {
        return $this->layoutFilename;
    }

    public function setlayoutFilename($newlayoutFilename) {
        return $this->layoutFilename = $newlayoutFilename;
    }

    public function renderLayout() {
        include $this->layoutsDirectory . "/" . $this->layoutFilename;
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
